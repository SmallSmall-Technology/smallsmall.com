<?php

function connect_to_db(){
    // Create connection
    $conn = new mysqli('rss-new.cbhrg1lzyru7.eu-west-1.rds.amazonaws.com', 'rentsmallsmall_b', 'Buytolet!2021', 'rentsmallsmall_furnisure_buytolet_database');

    // Check connection 
    if ($conn->connect_error) {
        //die("Connection failed: " . $conn->connect_error);
        return 0;
        die();
    }
    return $conn;

}


?> 