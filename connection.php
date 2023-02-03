<?php

function Connect()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "Mine@DB14";
    $dbname = "UZD_CARS_DB";

    //Create Connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

    return $conn;
}
