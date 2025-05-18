<?php

$servername = "localhost";
//Username
$username   = "cs332t25";
//Password
$password   = "YrK9gtiS";
$dbname     = "academic_records";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
