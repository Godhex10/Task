<?php
require './includes/db.php';

// Fetch tasks by status
$sql = "SELECT * FROM tasks ORDER BY FIELD(status, 'Todo', 'In Progress', 'Pending', 'Done')";
$stmt = $pdo->query($sql);
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode(['error' => false, 'tasks' => $tasks]);
?>
