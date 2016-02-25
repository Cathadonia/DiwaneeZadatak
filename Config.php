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
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE Users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
password VARCHAR(30)  NOT NULL
)";


if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

?>