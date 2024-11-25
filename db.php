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

// Get tasks for each status
$statuses = ['todo', 'in_progress', 'pending', 'done'];
$tasks = [];

foreach ($statuses as $status) {
    $stmt = $pdo->prepare("SELECT * FROM tasks WHERE status = :status");
    $stmt->execute(['status' => $status]);
    $tasks[$status] = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
