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

<div class="card">
    <div class="card-body">
        <div class="row pb-4">
            <div class="col-lg-4">
                <h5 class="card-title fw-semibold">Financial Summary</h5>
                <p>Total Revenue</p>
                <h2 class="mt-2 fw-bold">$<?php echo number_format($totalIncome, 2); ?></h2>
            </div>
        </div>
        <div class="border-top">
            <div class="row gx-0">
                <div class="col-md-4 border-end">
                    <div class="p-4">
                        <p class="fs-4 text-primary mb-0">Income</p>
                        <h3 class="mt-2 mb-0">$<?php echo number_format($totalIncome, 2); ?></h3>
                    </div>
                </div>
                <div class="col-md-4 border-end">
                    <div class="p-4">
                        <p class="fs-4 text-danger mb-0">Expense</p>
                        <h3 class="mt-2 mb-0">$<?php echo number_format($totalExpenses, 2); ?></h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4">
                        <p class="fs-4 text-info mb-0">Balance</p>
                        <h3 class="mt-2 mb-0">$<?php echo number_format($balance, 2); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
