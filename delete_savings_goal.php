<?php
include 'db.php';
if (isset($_GET['id'])) {
  $goal_id = $_GET['id'];

  // Assuming you have already established the database connection $conn
  $sql = "DELETE FROM savings_tracker WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $goal_id);

  if ($stmt->execute()) {
    echo "Goal deleted successfully!";
    header("Location: app-finance.php"); // Redirect back to the main page after deletion
  } else {
    echo "Error deleting goal.";
  }
}
?>
