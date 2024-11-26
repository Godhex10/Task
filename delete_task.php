<?php
// Include database connection
include('./includes/db.php');

// Check if ID is provided
if (isset($_GET['id'])) {
    $taskId = $_GET['id'];

    try {
        // Prepare the DELETE SQL query
        $sql = "DELETE FROM tasks WHERE id = ?";
        $stmt = $pdo->prepare($sql);

        // Execute the query
        if ($stmt->execute([$taskId])) {
            echo json_encode([
                'success' => true,
                'message' => 'Task deleted successfully.',
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Failed to delete task.',
            ]);
        }
    } catch (Exception $e) {
        echo json_encode([
            'success' => false,
            'message' => 'Error: ' . $e->getMessage(),
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Task ID not provided.',
    ]);
}
?>
