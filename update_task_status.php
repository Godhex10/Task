<?php
// Assuming you already have the database connection $conn
// Database connection
require './includes/db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task_id = $_POST['task_id'];
    $new_status = $_POST['new_status'];

    // Sanitize inputs
    $task_id = intval($task_id);
    $new_status = mysqli_real_escape_string($conn, $new_status);

    // Update the task's status in the database
    $sql = "UPDATE tasks SET status = '$new_status' WHERE id = $task_id";
    if ($conn->query($sql) === TRUE) {
        echo "Task status updated successfully!";
    } else {
        echo "Error updating task: " . $conn->error;
    }
}
?>
