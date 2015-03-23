/**
 * Created by Q on 3/22/2015.
 */
import java.lang.*;
import java.lang.Class;
import java.lang.ClassNotFoundException;
import java.lang.Exception;
import java.lang.String;
import java.lang.System;
import java.math.BigInteger;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.Arrays;
import java.util.Properties;

public class DatabaseContext {
    private Connection connection;
    public DatabaseContext(String username, String password) throws Exception{
        boolean isError = false;
        try {
            Class.forName("com.mysql.jdbc.Driver");
            String url = "jdbc:mysql://hopper.wlu.ca/" + username;
            Properties props = new Properties();
            props.setProperty("user", username);
            props.setProperty("password", password);
            connection = DriverManager.getConnection(url, props);
        } catch (ClassNotFoundException error) {
            System.out.println("WHYYYYY");
            isError = true;
            throw error;
        } catch (SQLException error) {
            java.lang.System.out.println(error.getMessage().replace("\n", ""));
            isError = true;
            throw error;
        }finally{
            if (isError&&connection != null){
                connection.close();
            }
        }
        System.out.println("EVERYTHING IS OK");
    }
    public Connection getConnection() throws Exception{
        return connection;
    }

    public void releaseConnection(Connection connection){
        if (connection != null){
            try {
                connection.close();
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
    }

    public void destroy(){
        if (connection != null){
            try {
                connection.close();
            } catch (SQLException e) {
                e.printStackTrace();
            }
        }
    }

    public static void createTable(DatabaseContext databaseContext) throws Exception{
        Connection connection = databaseContext.getConnection();
        PreparedStatement prepareStatement = null;
        try {
            prepareStatement = connection.prepareStatement("CREATE TABLE IF NOT EXISTS Account (eid VARCHAR(300) unique, account_password VARCHAR(300))");
            prepareStatement.executeUpdate();
            prepareStatement.close();
        }catch(Exception error){
            throw error;
        }
    }
    public static void addUser(DatabaseContext databaseContext, String username, String password) throws Exception {
        Connection connection = databaseContext.getConnection();
        PreparedStatement prepareStatement = null;
        try {
            prepareStatement = connection.prepareStatement("REPLACE INTO Account (eid, account_password) VALUES (?,?)");
            prepareStatement.setString(1, username);
            prepareStatement.setString(2, password);
            prepareStatement.executeUpdate();
            prepareStatement.close();
        }catch(Exception error){
            throw error;
        }
    }

    public boolean validateUser(String username, String password) throws SQLException, NoSuchAlgorithmException {
        MessageDigest m= MessageDigest.getInstance("SHA1");
        m.update(password.getBytes(), 0, password.length());
        BigInteger i = new BigInteger(1, m.digest());
        String passwordHash = String.format("%1$032X", i);
        passwordHash = passwordHash.toLowerCase();

        PreparedStatement statement =  this.connection.prepareStatement("SELECT * from contact WHERE email like ? AND password like ?;");
        statement.setString(1, username);
        statement.setString(2, passwordHash);
        ResultSet resultSet = statement.executeQuery();
        boolean hasResults = false;
        if(resultSet.next()){
            hasResults = true;
        }

        statement.close();
        return hasResults;

    }

    public static void main(String args[]) throws Exception{
        DatabaseContext context = null;
        try {
            context = new DatabaseContext("", "");
            createTable(context);
            String user = "blac2410";
            String pass = "123root456!";
            MessageDigest m= MessageDigest.getInstance("MD5");
            m.update(pass.getBytes(), 0, pass.length());
            BigInteger i = new BigInteger(1, m.digest());
            addUser(context, user, String.format("%1$032X", i));
        } catch (Exception e) {
            throw e;
        } finally{
            if (context != null){
                context.destroy();
            }
        }
    }
}
