<?php
$host = "localhost";  // Database host (usually 'localhost' for local development)
$username = "root";   // Database username (default is 'root' for XAMPP)
$password = "";       // Database password (default is empty for XAMPP)
$dbname = "dashboard"; // The name of your database

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
