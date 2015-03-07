<?php
/**
 * Created by PhpStorm.
 * User: Q
 * Date: 3/6/2015
 * Time: 10:01 PM
 */
//error_reporting(E_ALL);
$loan = (float) $_GET["amount"];
$interest =(float)  $_GET["interest"];
$year =  (float) $_GET["years"];

$monthrate = $interest/12;

$mortgage = $loan*$monthrate / ( 1 - 1/pow(1+$monthrate,$year*12));
echo $mortgage;