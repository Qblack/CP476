<?php
/**
 * Created by PhpStorm.
 * User: Q
 * Date: 3/7/2015
 * Time: 10:42 PM
 */

class Contact {
    public $id;
    public $firstName;
    public $lastName;
    public $phoneNumber;
    public $email;
    public $password;
    function __construct($id,$firstName,$lastName,$phoneNumber,$email,$password){
        $this->id=$id;
        $this->firstName=$firstName;
        $this->lastName = $lastName;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->password = $password;
    }

}