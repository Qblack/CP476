/**
 * Created by Q on 3/22/2015.
 */
import java.io.*;
import java.lang.Exception;import java.lang.String;import java.lang.System;
import java.net.Socket;
import java.util.Arrays;
import java.util.Scanner;
public class Client {

    public static void main(String[] args) {
        try
        {
            EncryptionManager encryptionManager = new EncryptionManager();

            Socket clientSocket=new Socket(Constants.IP, Constants.PORT);  //you can put the last four digits of your student ID as port number
            String login = args[0]+":"+args[1];
            byte[] encryptedLogin = encryptionManager.encrypt(login);
            DataOutputStream outputStream = new DataOutputStream(clientSocket.getOutputStream());
            outputStream.write(encryptedLogin);
            BufferedReader socketIn = new BufferedReader(new InputStreamReader(clientSocket.getInputStream()));
            String input = null;
            while(true)
            {
                byte[] encryptedData = new byte[256];
                int read = clientSocket.getInputStream().read(encryptedData);
                input = encryptionManager.decrypt(encryptedData,read);
                if(input.equals("1") || input.equals("0")){
                    System.out.println(input);
                    break;
                }
            }
            socketIn.close();
            outputStream.close();
            clientSocket.close();
        }
        catch(Exception e)
        {
            System.err.println(e.getMessage());
        }
    }
}