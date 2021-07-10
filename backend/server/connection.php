<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'mors';
//Create connection and select DB
$con =  mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if ($con->connect_error) {
    die("Unable to connect database: " . $con->connect_error);
}
mysqli_set_charset($con, "utf8");
