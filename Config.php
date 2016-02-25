<?php

$db = array();
$hostname = "localhost";
$username = "Admin";
$password = "admin";
$database = "database";
/*
$con = mysqli_connect($hostname, $username, $password);
$createQ = "CREATE USER '{$username}'@'{$hostname}' IDENTIFIED BY '{$password}'";

//insert intro() VALUES()
if(!$con){

    die('Connection Failed'.mysqli_error());

}

mysqli_select_db($con, $database);
*/


// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);


?>