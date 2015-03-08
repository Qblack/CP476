<?php
/**
 * Created by PhpStorm.
 * User: Q
 * Date: 3/8/2015
 * Time: 1:05 AM
 */

require_once("ContactManager.php");


$manager = new ContactManager();
echo $manager->createContact($_POST["id"],$_POST["firstName"],$_POST["lastName"],$_POST["phoneNumber"],$_POST["email"],$_POST["password"]);

