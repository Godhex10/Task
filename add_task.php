<?php
// Database connection
require './includes/db.php';

// Get the input data
$data = json_decode(file_get_contents('php://input'), true);

// Prepare SQL statement to insert the task
$stmt = $pdo->prepare("INSERT INTO tasks (task_name, description, status) VALUES (?, ?, ?)");
$stmt->execute([$data['task_name'], $data['description'], $data['status']]);

// Get the ID of the newly inserted task
$taskId = $pdo->lastInsertId();

// Fetch the task details to send back to the frontend
$stmt = $pdo->prepare("SELECT * FROM tasks WHERE id = ?");
$stmt->execute([$taskId]);
$task = $stmt->fetch(PDO::FETCH_ASSOC);

// Return the task data as JSON
echo json_encode([
    'error' => false,
    'message' => 'Task added successfully',
    'task' => $task
]);
?>
