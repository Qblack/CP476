<?php
/**
 * Created by PhpStorm.
 * User: Q
 * Date: 3/7/2015
 * Time: 11:38 PM
 */

require_once("ContactManager.php");

$manager = new ContactManager();
$contact = $manager->getContactByName($_GET["firstName"],$_GET["lastName"]);
header('content-type: application/json; charset=utf8;');
$json = json_encode($contact);
echo $json;

