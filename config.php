<?php

$servername = "localhost";
//Username
$username   = "Username";
//Password
$password   = "Password";
$dbname     = "academic_records";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
