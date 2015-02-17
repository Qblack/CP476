<?php

/**
 * Created by PhpStorm.
 * User: Q
 * Date: 2/16/2015
 * Time: 5:40 PM
 */


const ACCESS_LOGIN_HTML = "../access_login.html";


if(isset($_COOKIE['email'])&& isset($_COOKIE['password'])){
    $validated = check_cookie();
}else{
    $validated = validate_login($_REQUEST['email'],$_REQUEST['password']);
}
if($validated){
    header("Location:"."../mydoc.html");
    die();
}else{
    header("Location:".ACCESS_LOGIN_HTML);
    die();
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
    $hash = md5($password);
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