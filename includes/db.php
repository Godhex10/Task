<?php
// db.php

$host = 'localhost';  // Or your database host
$dbname = 'dashboard';  // Your database name
$username = 'root';  // Your database username
$password = '';  // Your database password

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle any connection error
    echo "Connection failed: " . $e->getMessage();
}
?>
