<?php
// Database connection
include 'db.php'; // Include your DB connection file

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Calculate totals
$incomeQuery = "SELECT SUM(amount) AS total_income FROM transactions WHERE type='income'";
$expenseQuery = "SELECT SUM(amount) AS total_expense FROM transactions WHERE type='expense'";

$incomeResult = $conn->query($incomeQuery);
$expenseResult = $conn->query($expenseQuery);

$total_income = $incomeResult->fetch_assoc()['total_income'] ?? 0;
$total_expense = $expenseResult->fetch_assoc()['total_expense'] ?? 0;
$balance = $total_income - $total_expense;

// Return data as JSON
echo json_encode([
    'income' => $total_income,
    'expense' => $total_expense,
    'balance' => $balance
]);

$conn->close();
?>
