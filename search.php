<?php
// Include the database connection
include('db.php');

// Get the search query and transaction type (if any) from the GET request
$search = $_GET['search'] ?? '';  // Default to an empty string if not set
$transactionType = $_GET['transactionType'] ?? '';  // Will be empty if no specific type

// Initialize the SQL query
$query = "SELECT * FROM transactions WHERE description LIKE ? OR amount LIKE ?";

// If a specific transaction type is detected, add the condition for filtering by type
if ($transactionType === 'income' || $transactionType === 'expense') {
    $query .= " AND type = ?";
}

// Prepare the statement
$stmt = $conn->prepare($query);

// Add wildcards to the search term for LIKE query
$searchTerm = '%' . $search . '%';

// Bind parameters based on whether a transaction type is specified
if ($transactionType === 'income' || $transactionType === 'expense') {
    $stmt->bind_param("sss", $searchTerm, $searchTerm, $transactionType);
} else {
    $stmt->bind_param("ss", $searchTerm, $searchTerm);
}

// Execute the query
$stmt->execute();

// Get the results
$result = $stmt->get_result();

// Check if results were found
if ($result && $result->num_rows > 0) {
    // Loop through the results and display them
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $description = $row['description'];
        $amount = number_format($row['amount'], 2);
        $date = date('jS F Y', strtotime($row['date']));
        $type = ucfirst($row['type']);
        $badgeClass = ($type === 'Income') ? 'bg-success-subtle text-success' : 'bg-danger-subtle text-danger';
        ?>
        <tr>
            <td class="ps-0">
                <div class="d-flex align-items-center gap-3">
                    <div class="flex-shrink-0">
                        <img src="./assets/img/dollar2.svg" class="rounded" alt="icon" width="50" />
                    </div>
                    <div>
                        <h6 class="mb-0 fw-semibold"><?php echo $description; ?></h6>
                        <span class="fs-2"><?php echo $date; ?></span>
                    </div>
                </div>
            </td>
            <td class="ps-0">
                <span>$<?php echo $amount; ?></span>
            </td>
            <td class="ps-0">
                <h6 class="mb-0"><span class="badge <?php echo $badgeClass; ?> rounded-pill"><?php echo $type; ?></span></h6>
            </td>
            <td class="text-end ps-0">
                <button class="btn btn-sm btn-warning" style="margin-right: 10px;" onclick="openDetails(<?php echo $id; ?>)">View</button>
            </td>
        </tr>
        <?php
    }
} else {
    echo "<tr><td colspan='4'>No transactions found.</td></tr>";
}
?>
