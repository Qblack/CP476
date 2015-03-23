/**
 * Created by Q on 3/22/2015.
 */
import javax.crypto.BadPaddingException;
import javax.crypto.IllegalBlockSizeException;
import javax.crypto.NoSuchPaddingException;
import java.io.*;
import java.lang.Exception;import java.lang.String;import java.lang.System;import java.lang.Thread;
import java.net.ServerSocket;import java.net.Socket;
import java.security.InvalidKeyException;
import java.security.NoSuchAlgorithmException;
import java.sql.SQLException;

public class Server {

    private int m_count =0;
    private static DatabaseContext m_database;

    public Server()
    {
        try
        {
            ServerSocket serverSocket=new ServerSocket(Constants.PORT);
            System.out.println("server starts");
            while(true)
            {
                System.out.println("waiting for connection...");
                Socket socket=serverSocket.accept() ;
                m_count++;
                System.out.println("a new visitor,"+ m_count +" users in total");
                ServerThread serverThread=new ServerThread(socket);
                m_database = new DatabaseContext("blac2410","123root456!");
                serverThread.start();
            }
        }
        catch(Exception e)
        {
            System.err.println(e.getMessage());
        }
    }

    public static void main(String[] args) throws Exception {
        Server server=new Server();

    }
    public class ServerThread extends Thread
    {
        private Socket m_client;
        private BufferedReader m_in;
        private DataOutputStream m_out;

        public ServerThread(Socket s) throws Exception {
            m_client = s;
            m_in = new BufferedReader(new InputStreamReader(m_client.getInputStream()));
            m_out = new DataOutputStream(m_client.getOutputStream());
        }

        public void run() {
            String input;
            EncryptionManager encryptionManager = new EncryptionManager();
            try{
                while(true) {
                    byte[] encryptedData = new byte[256];
                    int read = m_client.getInputStream().read(encryptedData);
                    input = encryptionManager.decrypt(encryptedData,read);
                    String[] login = input.split(":");

                    boolean exist = m_database.validateUser(login[0], login[1]);
                    if(exist) {
                        m_out.write(encryptionManager.encrypt("1"));
                        break;
                    }else{
                        m_out.write(encryptionManager.encrypt("0"));
                        break;
                    }
                }
                m_client.close();
                m_database.destroy();
            } catch (IOException e) {
                e.printStackTrace();
            } catch (NoSuchAlgorithmException e) {
                e.printStackTrace();
            } catch (InvalidKeyException e) {
                e.printStackTrace();
            } catch (NoSuchPaddingException e) {
                e.printStackTrace();
            } catch (BadPaddingException e) {
                e.printStackTrace();
            } catch (IllegalBlockSizeException e) {
                e.printStackTrace();
            } catch (SQLException e) {
                e.printStackTrace();
            }

        }
    }
}
