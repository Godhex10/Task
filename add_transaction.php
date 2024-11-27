<?php
// Include the database connection
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch and sanitize inputs
    $type = $_POST['transactionType'] ?? null; // 'income' or 'expense'
    $amount = $_POST['amount'] ?? null;
    $description = $_POST['description'] ?? null;
    $date = $_POST['date'] ?? null;

    // Validation: Ensure all fields are filled
    if (!$type || !$amount || !$description || !$date) {
        echo json_encode(['error' => true, 'message' => 'All fields are required.']);
        exit();
    }

    // Validation: Ensure amount is a valid number
    if (!is_numeric($amount) || $amount <= 0) {
        echo json_encode(['error' => true, 'message' => 'Amount must be a positive number.']);
        exit();
    }

    try {
        // Insert the transaction into the database
        $stmt = $conn->prepare("INSERT INTO transactions (type, amount, description, date) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sdss", $type, $amount, $description, $date);

        if ($stmt->execute()) {
            echo json_encode(['error' => false, 'message' => 'Transaction added successfully.']);
        } else {
            echo json_encode(['error' => true, 'message' => 'Failed to add transaction.']);
        }

        $stmt->close();
    } catch (Exception $e) {
        // Handle any unexpected errors
        echo json_encode(['error' => true, 'message' => 'An error occurred: ' . $e->getMessage()]);
    }
}
?>
