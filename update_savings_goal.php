<?php
include 'db.php';
if (isset($_POST['id'])) {
  $goal_id = $_POST['id'];
  $goal_name = $_POST['goal'];
  $goal_amount = $_POST['amount'];
  $goal_due_date = $_POST['due_date'];

  // Update the goal in the database
  $sql = "UPDATE savings_tracker SET goal = ?, amount = ?, due_date = ? WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sdsi", $goal_name, $goal_amount, $goal_due_date, $goal_id);

  if ($stmt->execute()) {
    echo "Goal updated successfully!";
    header("Location: app-finance.php"); // Redirect back to the main page after updating
  } else {
    echo "Error updating goal.";
  }
}
?>
