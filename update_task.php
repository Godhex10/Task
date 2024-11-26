<?php
// Include database connection
include('./includes/db.php');

// Check if the request is POST and has the necessary data
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['taskId'], $_POST['taskName'], $_POST['taskDescription'])) {
    $taskId = $_POST['taskId'];
    $taskName = $_POST['taskName'];
    $taskDescription = $_POST['taskDescription'];

    // Validate inputs
    if (!empty($taskId) && !empty($taskName) && !empty($taskDescription)) {
        // Prepare SQL to update the task
        $sql = "UPDATE tasks SET task_name = ?, description = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);

        try {
            // Execute the update query
            $stmt->execute([$taskName, $taskDescription, $taskId]);

            // Check if the task was updated
            if ($stmt->rowCount() > 0) {
                // Success - return a success message
                echo json_encode(['success' => true, 'message' => 'Task updated successfully']);
            } else {
                // Error - if no rows were affected
                echo json_encode(['success' => false, 'message' => 'Task update failed']);
            }
        } catch (Exception $e) {
            // Handle any exceptions
            echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid input data']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
}
?>
