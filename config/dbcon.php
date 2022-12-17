<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "project";

//Creating database connection 
$con = mysqli_connect($host, $username, $password, $database);

//Checking database connection
if (!$con) {
    die('Connection Failed: ' . mysqli_connect_error());
} else {
    echo ("Connection Successfull");
}


?>