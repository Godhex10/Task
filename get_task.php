<?php
// Include the database connection
include('./includes/db.php');

// Check if task ID is provided
if (isset($_GET['id'])) {
    $taskId = $_GET['id'];

    // Prepare SQL to fetch task data by ID
    $sql = "SELECT * FROM tasks WHERE id = ?";
    $stmt = $pdo->prepare($sql);

    try {
        // Execute the query
        $stmt->execute([$taskId]);

        // Fetch task data
        $task = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if task exists
        if ($task) {
            echo json_encode([
                'success' => true,
                'task' => $task // Return task data
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Task not found'
            ]);
        }
    } catch (Exception $e) {
        // Handle any exceptions
        echo json_encode([
            'success' => false,
            'message' => 'Error: ' . $e->getMessage()
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Task ID not provided'
    ]);
}
?>
