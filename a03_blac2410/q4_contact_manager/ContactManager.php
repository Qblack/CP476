<?php
/**
 * Created by PhpStorm.
 * User: Q
 * Date: 3/7/2015
 * Time: 9:59 PM
 */
require_once("Contact.php");

class ContactManager {



    private $connection;

    function __construct(){
        $this->connection  = new mysqli("hopper.wlu.ca","blac2410","123root456!","blac2410") or die(print_r(error_get_last()));

    }
    function __destruct() {
        $this->connection->close();
    }

    function getContacts(){
        $query = "SELECT * FROM contact";
        $contacts = $this->connection->query($query)->fetch_all() or die(print_r(error_get_last()));
        $contactObjects = [];
        foreach($contacts as $contact){
            $contactObj = new Contact($contact[0],$contact[1],$contact[2],$contact[3],$contact[4],$contact[5]);
            array_push($contactObjects,$contactObj);
        }
        return $contactObjects;
    }

    function getContactByName($firstName,$lastName){
        $firstName = $this->connection->real_escape_string($firstName);
        $lastName = $this->connection->real_escape_string($lastName);
        $query = "SELECT * FROM contact WHERE firstname like '$firstName' and lastname like '$lastName'";
        $contact = $this->connection->query($query)->fetch_row() or die(print_r(error_get_last()));
        $result =null;
        if(!is_null($contact[0])){
            $result = new Contact($contact[0],$contact[1],$contact[2],$contact[3],$contact[4],$contact[5]);
        }
        return $result;
    }

    function getContactById($id){
        $id = $this->connection->real_escape_string($id);
        $query = "SELECT * FROM contact WHERE id like '$id'";
        $contact = $this->connection->query($query);
        return $contact;
    }

    function createContact($id, $firstName, $lastName, $phone, $email,$password){
        $id = $this->connection->real_escape_string($id);
        $existingContact = $this->getContactById($id);
        if(!isset($existingContact)) {
            $firstName = $this->connection->real_escape_string($firstName);
            $lastName = $this->connection->real_escape_string($lastName);
            $phone = $this->connection->real_escape_string($phone);
            $email = $this->connection->real_escape_string($email);
            $password = hash("sha256", $password);
            $query = "INSERT INTO contact (id, firstname, lastname,phonenumber,email,password) VALUES('$id', '$firstName', '$lastName', '$phone', '$email','$password')";
            $this->connection->query($query);
            return true;
        }else{
            return false;
        }
    }

    function updateContact($id, $firstName, $lastName, $phone, $email,$password){
        $id = $this->connection->real_escape_string($id);
        $existingContact = $this->getContactById($id);
        if(isset($existingContact)) {
            $firstName = $this->connection->real_escape_string($firstName);
            $lastName = $this->connection->real_escape_string($lastName);
            $phone = $this->connection->real_escape_string($phone);
            $email = $this->connection->real_escape_string($email);
            $password = hash("sha256", $password);
            $query = "UPDATE contact SET id='$id', firstname='$firstName', lastname='$lastName',phonenumber='$phone',email='$email',password='$password' WHERE id='$id'";
            $this->connection->query($query);
            return true;
        }else{
            return false;
        }
    }
}