<?php
/**
 * Created by PhpStorm.
 * User: Q
 * Date: 2/14/2015
 * Time: 6:15 PM
 * @param $ip
 */

function update_visitor($ip){
    $mysqli  = new mysqli("hopper.wlu.ca","blac2410","123root456!","blac2410");

    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    $mysqli->query("INSERT INTO index_visitors (ip, frequency) VALUES ('$ip','1') ON DUPLICATE KEY UPDATE frequency=frequency+1");
    $mysqli->close();
}

function get_visitors(){
    $mysqli  = new mysqli("hopper.wlu.ca","blac2410","123root456!","blac2410");
    $results = $mysqli->query("SELECT ip,frequency FROM index_visitors");
    $mysqli->close();
    return $results->fetch_all();
}



