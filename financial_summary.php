<?php
include 'db.php'; // Include your DB connection file

// Fetch total income
$incomeQuery = "SELECT SUM(amount) as total_income FROM transactions WHERE type = 'income'";
$resultIncome = $conn->query($incomeQuery);
$totalIncome = 0;
if ($resultIncome) {
    $rowIncome = $resultIncome->fetch_assoc();
    $totalIncome = $rowIncome['total_income'];
}

// Debug: Check if the total income is fetched correctly
echo "Total Income: " . $totalIncome . "<br>";

// Fetch total expenses
$expenseQuery = "SELECT SUM(amount) as total_expenses FROM transactions WHERE type = 'expense'";
$resultExpenses = $conn->query($expenseQuery);
$totalExpenses = 0;
if ($resultExpenses) {
    $rowExpenses = $resultExpenses->fetch_assoc();
    $totalExpenses = $rowExpenses['total_expenses'];
}

// Debug: Check if the total expenses are fetched correctly
echo "Total Expenses: " . $totalExpenses . "<br>";

// Calculate the balance
$balance = $totalIncome - $totalExpenses;

// Debug: Check if the balance is calculated correctly
echo "Balance: " . $balance . "<br>";

?>


