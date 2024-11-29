<?php
include 'db.php';
// edit_transaction.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = intval($_POST['id']);
  $description = $_POST['description'];
  $amount = floatval($_POST['amount']);
  $date = $_POST['date'];
  $type = $_POST['type'];

  $query = "UPDATE transactions 
            SET description = ?, amount = ?, date = ?, type = ? 
            WHERE id = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("sdssi", $description, $amount, $date, $type, $id);

  if ($stmt->execute()) {
    echo "Transaction updated successfully.";
  } else {
    echo "Error updating transaction: " . $stmt->error;
  }

  $stmt->close();
}
?>