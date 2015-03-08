<?php
/**
 * Created by PhpStorm.
 * User: Q
 * Date: 3/7/2015
 * Time: 10:28 PM
 */

require_once("ContactManager.php");

$manager = new ContactManager();
$contacts = $manager->getContacts();

header('content-type: application/json; charset=utf8;');
echo json_encode($contacts);






