<?php
// Database connection details
$host = 'localhost'; // Use your database host (e.g., localhost or an IP address)
$dbname = 'dashboard'; // Replace with your database name
$username = 'root'; // Replace with your database username
$password = ''; // Replace with your database password

// Create a MySQLi connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
