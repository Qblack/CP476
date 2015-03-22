<?php
/**
 * Created by PhpStorm.
 * User: Q
 * Date: 3/22/2015
 * Time: 2:52 PM
 */


const ACCESS_LOGIN_HTML = "login.html";

$email = "test";

if(isset($_COOKIE['email']) && isset($_COOKIE['password'])){
    $validated = check_cookie();
    if($validated){
        $email = $_COOKIE['email'];
    }
}else{
    $validated = validate_login($_POST['email'],$_POST['password']);
    if($validated){
        $email = $_POST['email'];
    }
}

if(!$validated){
    header("Location:".ACCESS_LOGIN_HTML."?loginfailed=true");
    die();
}else{

    $mysqli  = new mysqli("hopper.wlu.ca","blac2410","123root456!","blac2410");
    $results = $mysqli->query("SELECT firstname, lastname, email, id FROM contact WHERE email like '$email'");
    $user = $results->fetch_row();
    $first_name = $user[0];
    $last_name = $user[1];
    $email = $user[2];
    $id = $user[3];
}




function check_cookie(){
    $email = $_COOKIE["email"];
    $hash = $_COOKIE["password"];
    $mysqli  = new mysqli("hopper.wlu.ca","blac2410","123root456!","blac2410");
    $results = $mysqli->query("SELECT * FROM contact WHERE email like '$email' AND password like '$hash'");
    echo $mysqli->error;
    $mysqli->close();
    if($results->num_rows>=1){
        return true;
    }else{
        return false;
    }

}

function validate_login($email, $password){
    $hash = sha1($password);
    $mysqli  = new mysqli("hopper.wlu.ca","blac2410","123root456!","blac2410");
    $results = $mysqli->query("SELECT * FROM contact WHERE email like '$email' AND password like '$hash'");

    $mysqli->close();
    if($results->num_rows>=1){
        setcookie('email', $email,time()+20*60) or die("Cookie could not be set");
        setcookie('password', $hash,time()+20*60) or die("Cookie could not be set");
        return true;
    }else{
        return false;
    }
}