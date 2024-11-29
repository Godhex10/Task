<?php
include 'db.php'; // Include your DB connection file
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "DELETE FROM transactions WHERE id = $id";
    if ($conn->query($query)) {
        echo "Transaction deleted successfully.";
    } else {
        echo "Error deleting transaction: " . $conn->error;
    }
} else {
    echo "Invalid transaction ID.";
}
?>
