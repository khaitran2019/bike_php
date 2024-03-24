<?php
// Database configuration
$dbHost = 'localhost';     // Database host
$dbUsername = 'root'; // Database username
$dbPassword = '123456'; // Database password
$dbName = 'bike_db';   // Database name

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to UTF-8
$conn->set_charset("utf8");
?>
