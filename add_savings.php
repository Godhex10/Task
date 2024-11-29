<?php
// Include the database connection file
include('db.php'); // Make sure db.php contains your database connection setup

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $goal = $_POST['goal'];
    $amount = $_POST['amount'];
    $due_date = $_POST['due_date'];

    // Prepare the SQL query to insert data into the savings_tracker table
    $query = "INSERT INTO savings_tracker (goal, amount, due_date) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sds", $goal, $amount, $due_date); // "sds" stands for string, decimal, string

    // Execute the query
    if ($stmt->execute()) {
        echo "Savings goal added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();

    // Redirect or handle success/error
    header('Location: app-finance.php'); // Redirect back to the financial summary page
    exit();
}
?>
