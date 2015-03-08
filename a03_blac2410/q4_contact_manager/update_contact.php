<?php
/**
 * Created by PhpStorm.
 * User: Q
 * Date: 3/8/2015
 * Time: 1:16 PM
 */


require_once("ContactManager.php");

$id =$_POST["id"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$phoneNumber = $_POST["phoneNumber"];
$email = $_POST["email"];
$password = $_POST["password"];
$manager = new ContactManager();
echo $manager->updateContact($id,$firstName,$lastName,$phoneNumber,$email,$password);

