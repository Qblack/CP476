<?php
/**
 * Created by PhpStorm.
 * User: Q
 * Date: 3/23/2015
 * Time: 4:43 PM
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);
$email = $_POST["email"];
$password = $_POST["password"];
$result = shell_exec("java -jar ../Q3Client/out/artifacts/Q3Client.jar $email $password");

print ("Server returned: $result\n");
if($result == 1){
    print ("Username & password are correct.\n");
    setcookie('email', $email,time()+20*60,"/~blac2410/a04_blac2410/" ) or die("Cookie could not be set");

    setcookie('password', sha1($password),time()+20*60,"/~blac2410/a04_blac2410/") or die("Cookie could not be set");
    header("Location:../custom_page.php");

}else
    print ("Username & password are incorrect.\n");
