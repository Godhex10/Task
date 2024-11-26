<?php
// Database connection
require './includes/db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task_id = intval($_POST['task_id']);
    $task_name = mysqli_real_escape_string($conn, $_POST['task_name']);
    $task_desc = mysqli_real_escape_string($conn, $_POST['task_desc']);

    $sql = "UPDATE tasks SET task_name = '$task_name', task_description = '$task_desc', updated_at = NOW() WHERE id = $task_id";
    if ($conn->query($sql) === TRUE) {
        echo "Task updated successfully!";
    } else {
        echo "Error updating task: " . $conn->error;
    }
}
?>
