<?php
// Database connection
include('./db.php'); // Adjust with your database connection file

$query = "SELECT * FROM notes"; // Change 'notes' to your actual table name
$result = mysqli_query($conn, $query);

$notes = [];

while ($row = mysqli_fetch_assoc($result)) {
    $notes[] = $row;
}

echo json_encode($notes); // Send data as JSON
?>
