import javax.crypto.BadPaddingException;
import javax.crypto.Cipher;
import javax.crypto.IllegalBlockSizeException;
import javax.crypto.NoSuchPaddingException;
import javax.crypto.spec.SecretKeySpec;
import java.security.InvalidKeyException;
import java.security.NoSuchAlgorithmException;
import java.util.Arrays;

/**
 * Created by Q on 3/23/2015.
 */
public class EncryptionManager {

    byte[] key = "aetmcpecklnhryeu".getBytes();

    public byte[] encrypt(String data) throws NoSuchPaddingException, NoSuchAlgorithmException, InvalidKeyException, BadPaddingException, IllegalBlockSizeException {
        byte[] dataBytes = data.getBytes();
        Cipher cipher = Cipher.getInstance("AES");
        SecretKeySpec keySpec = new SecretKeySpec(key,"AES");
        cipher.init(Cipher.ENCRYPT_MODE, keySpec);
        return cipher.doFinal(dataBytes);
    }

    public String decrypt(String data) throws NoSuchPaddingException, NoSuchAlgorithmException, InvalidKeyException, BadPaddingException, IllegalBlockSizeException {
        byte[] dataBytes = data.getBytes();
        Cipher cipher = Cipher.getInstance("AES");
        SecretKeySpec keySpec = new SecretKeySpec(key,"AES");
        cipher.init(Cipher.DECRYPT_MODE, keySpec);
        byte[] encryptedData = cipher.doFinal(dataBytes);
        return new String(encryptedData);
    }

    public String decrypt(byte[] data) throws NoSuchPaddingException, NoSuchAlgorithmException, BadPaddingException, IllegalBlockSizeException, InvalidKeyException {
        int count = 0;
        Boolean done = false;
        while(!done){
            if(data[count]==0){
                done = true;
            }else{
                count++;
            }
        }
        byte[] actualData = new byte[count];
        int index = 0;
        while(index<count){
            actualData[index] = data[index];
            index++;
        }
        Cipher cipher = Cipher.getInstance("AES");
        SecretKeySpec keySpec = new SecretKeySpec(key,"AES");
        cipher.init(Cipher.DECRYPT_MODE, keySpec);
        byte[] encryptedData = cipher.doFinal(actualData);
        return new String(encryptedData);
    }

    public String decrypt(byte[] data, int read) throws NoSuchPaddingException, NoSuchAlgorithmException, InvalidKeyException, BadPaddingException, IllegalBlockSizeException {
        byte[] actualData = new byte[read];
        int index = 0;
        while(index<read){
            actualData[index] = data[index];
            index++;
        }
        Cipher cipher = Cipher.getInstance("AES");
        SecretKeySpec keySpec = new SecretKeySpec(key,"AES");
        cipher.init(Cipher.DECRYPT_MODE, keySpec);
        byte[] encryptedData = cipher.doFinal(actualData);
        return new String(encryptedData);
    }
}
