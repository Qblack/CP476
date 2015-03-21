<?php
/**
 * Created by PhpStorm.
 * User: Q
 * Date: 2/14/2015
 * Time: 6:15 PM
 * @param $ip
 */

function update_visitor($ip){
    $mysqli  = new mysqli("hopper.wlu.ca","blac2410","123root456!","blac2410") or die(print_r(error_get_last()));

    $mysqli->query("INSERT INTO index_visitors (ip, frequency) VALUES ('$ip','1') ON DUPLICATE KEY UPDATE frequency=frequency+1")
    or die($mysqli->error);

    $mysqli->close();
}

function get_visitors(){
    $mysqli  = new mysqli("hopper.wlu.ca","blac2410","123root456!","blac2410");
    $results = $mysqli->query("SELECT ip,frequency FROM index_visitors");
    $mysqli->close();
    return $results->fetch_all();
}



