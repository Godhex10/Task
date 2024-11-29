<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start(); // Only start if a session isn't already active
}

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
  // Redirect to the login page if not logged in
  header('Location: login.php');
  exit();
}

include 'db.php'; // Include your DB connection file
// Fetch total income
$incomeQuery = "SELECT SUM(amount) as total_income FROM transactions WHERE type = 'income'";
$resultIncome = $conn->query($incomeQuery);
$totalIncome = 0;
if ($resultIncome) {
  $rowIncome = $resultIncome->fetch_assoc();
  $totalIncome = $rowIncome['total_income'];
}

// Fetch total expenses
$expenseQuery = "SELECT SUM(amount) as total_expenses FROM transactions WHERE type = 'expense'";
$resultExpenses = $conn->query($expenseQuery);
$totalExpenses = 0;
if ($resultExpenses) {
  $rowExpenses = $resultExpenses->fetch_assoc();
  $totalExpenses = $rowExpenses['total_expenses'];
}

// Calculate the balance
$balance = $totalIncome - $totalExpenses;

// Fetch savings data
$sql = "SELECT * FROM savings_tracker ORDER BY due_date ASC";
$result = $conn->query($sql);

// Check if the query was successful
if (!$result) {
  die("Error executing query: " . $conn->error);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="dark" data-color-theme="Blue_Theme" data-layout="vertical">


<!-- Mirrored from bootstrapdemos.adminmart.com/modernize/dist/dark/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2024 00:05:12 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="./assets/img/dash.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="./assets/css/styles.css" />
  <link rel="stylesheet" href="./assets/css/budget-style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="./assets/css/ben2.css">

  <title>Prince | Finance</title>
</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class='omnitrix'>
      <p class='effect'></p>
      <button class='ominip'><img class='pressione' src='https://i.redd.it/x633m9eldqj51.png'></button>
      <button class='ominib' id='btn'></button>
      <audio src='click.wav'>
    </div>
  </div>
  <div id="main-wrapper">
    <!-- Sidebar Start -->
    <?php include './includes/sidebar.php'; ?>
    <!--  Sidebar End -->
    <div class="page-wrapper">
      <!--  Header Start -->
      <?php include './includes/header.php';?>
      <!--  Header End -->

      <?php include './includes/left-side-bar.php';?>
      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="d-flex align-items-center gap-4 mb-4">
                <div class="position-relative">
                  <div class="border border-2 border-primary rounded-circle">
                    <img src="./assets/img/ben.png" class="rounded-circle m-1" alt="user1" width="60" />
                  </div>
                </div>
                <div>
                  <h3 class="fw-semibold"><?php echo htmlspecialchars($_SESSION['username']); ?></span></h3>
                  <span>Cheers, and happy activities - <span id="currentDate"></span>
                  </span>
                </div>

              </div>

              <div class="card">
                <div class="card-body">
                  <!-- Button to open the modal -->
                  <!-- Trigger Button -->
                  <button class="btn btn-primary btn2" id="openModalButton" style="float: right; margin-top:30px; margin-right:10px;">Add Transaction</button>
                  <!-- Modal -->
                  <div class="modal" id="addTransactionModal" style="display: none; top: 5px;">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Add Transaction</h5>
                          <button type="button" class="close" id="closeModalButton">
                            <span>&times;</span>
                          </button>
                        </div>
                        <form id="addTransactionForm">
                          <div class="modal-body">
                            <div class="form-group">
                              <label for="transactionType">Type</label>
                              <select id="transactionType" name="transactionType" class="form-control" required>
                                <option value="income">Income</option>
                                <option value="expense">Expense</option>
                              </select>
                            </div>
                            <div class="form-group mt-3">
                              <label for="amount">Amount</label>
                              <input type="number" id="amount" name="amount" class="form-control" min="0" required>
                            </div>
                            <div class="form-group mt-3">
                              <label for="description">Description</label>
                              <textarea id="description" name="description" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="form-group mt-3">
                              <label for="date">Date</label>
                              <input type="date" id="date" name="date" class="form-control" required>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" id="closeModalButtonFooter">Close</button>
                            <button type="submit" class="btn btn-primary">Save Transaction</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
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
            </div>
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="card w-100">
                <!-- Add Savings Goal Button -->

                <!-- Popup Form Modal -->
                <div id="savingsModal" class="modal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2>Add Savings Goal</h2>
                        <span class="close-btn">&times;</span>
                      </div>
                      <div class="modal-body">
                        <form id="savingsForm" action="add_savings.php" method="POST">
                          <div class="form-group">
                            <label for="goal">Goal</label>
                            <input type="text" id="goal" name="goal" required class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="number" id="amount" name="amount" required class="form-control" step="0.01">
                          </div>
                          <div class="form-group">
                            <label for="due_date">Due Date</label>
                            <input type="date" id="due_date" name="due_date" required class="form-control">
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Save Goal</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <button id="addSavingsBtn" class="btn btn-primary" style="float: right; margin-top:8px">Add</button>
                  <h5 class="card-title fw-semibold">Upcoming Bills</h5>
                  <p class="card-subtitle">Track your upcoming Bills</p>

                  <?php
                  if ($result->num_rows > 0) {
                    // Output each row
                    while ($row = $result->fetch_assoc()) {
                      $goal = $row['goal'];
                      $amount = $row['amount'];
                      $due_date = date('F j, Y', strtotime($row['due_date'])); // Formatting the due date
                      $goal_id = $row['id']; // Store the goal's ID
                  ?>

                      <div class="py-6 d-flex align-items-center" style="margin-top: 10px;">
                        <div class="flex-shrink-0 bg-primary-subtle text-primary rounded-circle round d-flex align-items-center justify-content-center">
                          <i class="fa-solid fa-dollar-sign"></i>
                        </div>
                        <div class="ms-3">
                          <h6 class="mb-0 fw-semibold"><?php echo $goal; ?></h6>
                          <span class="fs-3">$<?php echo number_format($amount, 2); ?> | <?php echo $due_date; ?></span>
                          <span class="fs-2"></span>
                        </div>
                        <div class="ms-auto" style="padding-left: 10px;">
                          <!-- Edit and Delete Buttons -->
                          <button class="btn btn-warning btn2 btn-sm" style="margin-right: 7px;" data-bs-toggle="modal" data-bs-target="#editGoalModal" data-id="<?php echo $goal_id; ?>" data-goal="<?php echo $goal; ?>" data-amount="<?php echo $amount; ?>" data-due_date="<?php echo $row['due_date']; ?>"><i class="fa-solid fa-pen" style="color: #ffae1f;"></i></button>
                          <a href="delete_savings_goal.php?id=<?php echo $goal_id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this goal?');"><i class="fa-solid fa-trash" style="color: #fa896b;"></i></a>
                        </div>
                      </div>

                  <?php
                    }
                  } else {
                    echo "No savings goals found.";
                  }
                  ?>

                  <!-- Edit Goal Modal -->
                  <div class="modal fade" id="editGoalModal" tabindex="-1" aria-labelledby="editGoalModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="editGoalModalLabel">Edit Savings Goal</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <!-- Edit Goal Form -->
                          <form action="update_savings_goal.php" method="POST">
                            <input type="hidden" id="goal_id" name="id">
                            <div class="mb-3">
                              <label for="goal_name" class="form-label">Goal Name</label>
                              <input type="text" class="form-control" id="goal_name" name="goal" required>
                            </div>
                            <div class="mb-3">
                              <label for="goal_amount" class="form-label">Goal Amount</label>
                              <input type="number" class="form-control" id="goal_amount" name="amount" step="0.01" required>
                            </div>
                            <div class="mb-3">
                              <label for="goal_due_date" class="form-label">Due Date</label>
                              <input type="date" class="form-control" id="goal_due_date" name="due_date" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
            </div>
            <div class="col-lg-7 d-flex align-items-stretch">
              <div class="card w-100 bg-primary-subtle overflow-hidden">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div>
                      <h5 class="card-title fw-semibold">Sales Hourly</h5>
                      <div class="d-flex gap-2">
                        <span>Your data updates every 3 hours</span>
                      </div>
                    </div>
                    <div class="ms-auto d-flex align-items-stretch gap-2">
                      <a href="javascript:void(0)" class="btn btn-primary">
                        <i class="ti ti-download fs-6"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <canvas id="dashboardChart" width="400" height="200"></canvas>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex align-items-center mb-9">
                    <div>
                      <h4 class="card-title fw-semibold">Recent Transactions</h4>
                      <p class="card-subtitle">Your Recent Transactions</p>
                    </div>
                    <div class="ms-auto mt-4 mt-md-0">
                      <div class="d-flex align-items-center justify-content-between mb-3">
                        <form method="GET" action="" class="d-flex align-items-center justify-content-between mb-3" id="searchForm">
                          <input type="text" name="search" id="searchInput" class="form-control" placeholder="Search transactions..." value="<?php echo htmlspecialchars($_GET['search'] ?? ''); ?>">
                          <button type="submit" class="btn btn-primary ms-2">Search</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- Tab panes -->
                  <div class="tab-content mt-3">
                    <div class="tab-pane active" id="home" role="tabpanel">
                      <div class="table-responsive">
                        <table class="table align-middle mb-0 text-nowrap">
                          <!-- Edit Transaction Modal -->
                          <div id="editModal" class="modal" style="display:none;">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4>Edit Transaction</h4>
                                  <span class="close-btn" onclick="closeEditModal()" style="font-size: 25px; margin-top:10px; cursor:pointer;">&times;</span>
                                </div>
                                <form id="editTransactionForm">
                                  <div class="modal-body">
                                    <input type="hidden" id="editTransactionId" name="id">
                                    <div class="form-group">
                                      <label for="editDescription">Description:</label>
                                      <input type="text" id="editDescription" name="description" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="editAmount">Amount:</label>
                                      <input type="number" id="editAmount" name="amount" class="form-control" step="0.01" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="editDate">Date:</label>
                                      <input type="date" id="editDate" name="date" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="editType">Type:</label>
                                      <select id="editType" name="type" class="form-control" required>
                                        <option value="Income">Income</option>
                                        <option value="Expense">Expense</option>
                                      </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <tbody id="transactionsTable">
                            <?php
                            // Check if a search term has been provided
                            $search = isset($_GET['search']) ? $_GET['search'] : '';

                            // Modify the query based on the search input
                            $query = "SELECT * FROM transactions WHERE description LIKE ? ORDER BY date DESC LIMIT 5";
                            $stmt = $conn->prepare($query);
                            $searchTerm = '%' . $search . '%';  // Wildcard search
                            $stmt->bind_param('s', $searchTerm);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result && $result->num_rows > 0) {
                              while ($row = $result->fetch_assoc()) {
                                $id = $row['id']; // Assuming 'id' is the primary key in your table
                                $description = $row['description'];
                                $amount = number_format($row['amount'], 2);
                                $date = date('jS F Y', strtotime($row['date'])); // Format date
                                $type = ucfirst($row['type']); // Capitalize the first letter
                                $badgeClass = $type === 'Income' ? 'bg-success-subtle text-success' : 'bg-danger-subtle text-danger';
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
                                    <button class="btn btn-sm btn-warning" style="margin-right: 10px;"
                                      onclick="openEditModal({
                                        id: <?php echo $id; ?>,
                                        description: '<?php echo addslashes($description); ?>',
                                        amount: '<?php echo $amount; ?>',
                                        date: '<?php echo date('Y-m-d', strtotime($row['date'])); ?>',
                                        type: '<?php echo $type; ?>'
                                      })">
                                      <i class="fa-solid fa-pen"></i>
                                    </button>

                                    <button class="btn btn-sm btn-danger" onclick="deleteTransaction(<?php echo $id; ?>)"><i class="fa-solid fa-trash"></i></button>
                                  </td>
                                </tr>
                            <?php
                              }
                            } else {
                              echo "<tr><td colspan='5' class='text-center'>No transactions found.</td></tr>";
                            }
                            ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- <div class="col-lg-5 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title fw-semibold">Tasks</h4>
                  <p class="card-subtitle">The Power of Prioritizing Your Tasks</p>
                  <div class="mt-4 pb-3 border-bottom">
                    <div class="d-flex align-items-center">
                      <span class="bg-primary-subtle text-primary badge">Inprogress</span>
                      <span class="fs-3 ms-auto">8 March 2020</span>
                    </div>
                    <h6 class="mt-3">NFT Landing Page</h6>
                    <span class="fs-3 lh-sm">Designing an NFT-themed website with a creative concept so th...</span>
                    <div class="hstack gap-3 mt-3">
                      <a href="javascript:void(0)" class="fs-3 text-bodycolor d-flex align-items-center text-decoration-none">
                        <i class="ti ti-clipboard fs-6 text-primary me-2 d-flex"></i> 2 Tasks
                      </a>
                      <a href="javascript:void(0)" class="fs-3 text-bodycolor d-flex align-items-center text-decoration-none">
                        <i class="ti ti-message-dots fs-6 text-primary me-2 d-flex"></i> 13 Commets
                      </a>
                    </div>
                  </div>
                  <div class="py-3 border-bottom">
                    <div class="d-flex align-items-center">
                      <span class="bg-danger-subtle text-danger badge">Inpending</span>
                      <span class="fs-3 ms-auto">8 Jan 2024</span>
                    </div>
                    <h6 class="mt-3">Dashboard Finanace Management</h6>
                    <span class="fs-3 lh-sm">Designing an NFT-themed website with a creative concept so th...</span>
                    <div class="hstack gap-3 mt-3">
                      <a href="javascript:void(0)" class="fs-3 text-bodycolor d-flex align-items-center text-decoration-none">
                        <i class="ti ti-clipboard fs-6 text-primary me-2 d-flex"></i> 4 Tasks
                      </a>
                      <a href="javascript:void(0)" class="fs-3 text-bodycolor d-flex align-items-center text-decoration-none">
                        <i class="ti ti-message-dots fs-6 text-primary me-2 d-flex"></i> 50 Commets
                      </a>
                    </div>
                  </div>
                  <div class="pt-3">
                    <div class="d-flex align-items-center">
                      <span class="bg-success-subtle text-success badge">Completed</span>
                      <span class="fs-3 ms-auto">8 Feb 2024</span>
                    </div>
                    <h6 class="mt-3">Logo Branding</h6>
                    <span class="fs-3 lh-sm">Designing an NFT-themed website with a creative concept so th...</span>
                    <div class="hstack gap-3 mt-3">
                      <a href="javascript:void(0)" class="fs-3 text-bodycolor d-flex align-items-center text-decoration-none">
                        <i class="ti ti-clipboard fs-6 text-primary me-2 d-flex"></i> 1 Task
                      </a>
                      <a href="javascript:void(0)" class="fs-3 text-bodycolor d-flex align-items-center text-decoration-none">
                        <i class="ti ti-message-dots fs-6 text-primary me-2 d-flex"></i> 12 Commets
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-lg-7 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body border-bottom">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h5 class="card-title fw-semibold">Team Performance</h5>
                      <p class="card-subtitle">How to Measure Team Performance</p>
                    </div>
                    <div class="ms-auto mt-4 mt-md-0">
                      <div class="hstack">
                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="John Deo">
                          <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-2.jpg" class="rounded-circle border border-2 border-white" width="35" alt="u1" />
                        </a>
                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Smith" class="ms-n2">
                          <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-3.jpg" class="rounded-circle border border-2 border-white" width="35" alt="u2" />
                        </a>
                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Jonthan Leo" class="ms-n2">
                          <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-4.jpg" class="rounded-circle border border-2 border-white" width="35" alt="u3" />
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col-md-6">
                      <div class="hstack p-3 border rounded mb-3 mb-md-0">
                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="John Deo">
                          <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-2.jpg" class="rounded-circle border border-2 border-white" width="30" alt="u4" />
                        </a>
                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Smith" class="ms-n2">
                          <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-3.jpg" class="rounded-circle border border-2 border-white" width="30" alt="u2" />
                        </a>
                        <div class="ms-3">
                          <h6 class="mb-0 fs-3">Monster Dashboard</h6>
                          <span class="fs-2">46%</span>
                          <span class="fs-2 ms-4">Due in 3 days</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="hstack p-3 border rounded">
                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="John Deo">
                          <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-4.jpg" class="rounded-circle border border-2 border-white" width="30" alt="u3" />
                        </a>
                        <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark Smith" class="ms-n2">
                          <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-5.jpg" class="rounded-circle border border-2 border-white" width="30" alt="u4" />
                        </a>
                        <div class="ms-3">
                          <h6 class="mb-0 fs-3">Xtreme Dashboard</h6>
                          <span class="fs-2">87%</span>
                          <span class="fs-2 ms-4">Due in 7 days</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mt-4">
                    <div id="team-performance"></div>
                  </div>
                  <div class="text-center">
                    <span class="d-block">Your team performance is 5% better this week.</span>
                    <a href="javascript:void(0)" class="btn btn-primary mt-4">View Details</a>
                  </div>
                </div>
                <div class="p-3">
                  <div class="hstack gap-3 justify-content-center">
                    <div>
                      <span>
                        <span class="round-8 text-bg-primary rounded-circle d-inline-block me-2"></span>
                      </span>
                      <span class="fs-3 text-dark">Completed 124</span>
                    </div>
                    <div>
                      <span>
                        <span class="round-8 text-bg-danger rounded-circle d-inline-block me-2"></span>
                      </span>
                      <span class="fs-3 text-dark">Percentage 86%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      
    </div>

    <!--  Search Bar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content rounded-1">
          <div class="modal-header border-bottom">
            <input type="search" class="form-control fs-3" placeholder="Search here" id="search" />
            <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
              <i class="ti ti-x fs-5 ms-3"></i>
            </a>
          </div>
          <div class="modal-body message-body" data-simplebar="">
            <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
            <ul class="list mb-0 py-2">
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Modern</span>
                  <span class="text-muted d-block">/dashboards/dashboard1</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Dashboard</span>
                  <span class="text-muted d-block">/dashboards/dashboard2</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Contacts</span>
                  <span class="text-muted d-block">/apps/contacts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Posts</span>
                  <span class="text-muted d-block">/apps/blog/posts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Detail</span>
                  <span class="text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Shop</span>
                  <span class="text-muted d-block">/apps/ecommerce/shop</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Modern</span>
                  <span class="text-muted d-block">/dashboards/dashboard1</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Dashboard</span>
                  <span class="text-muted d-block">/dashboards/dashboard2</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Contacts</span>
                  <span class="text-muted d-block">/apps/contacts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Posts</span>
                  <span class="text-muted d-block">/apps/blog/posts</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Detail</span>
                  <span class="text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                </a>
              </li>
              <li class="p-1 mb-1 bg-hover-light-black">
                <a href="javascript:void(0)">
                  <span class="d-block">Shop</span>
                  <span class="text-muted d-block">/apps/ecommerce/shop</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--  Shopping Cart -->
    <!-- <div class="offcanvas offcanvas-end shopping-cart" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header justify-content-between py-4">
        <h5 class="offcanvas-title fs-5 fw-semibold" id="offcanvasRightLabel">
          Shopping Cart
        </h5>
        <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
      </div>
      <div class="offcanvas-body h-100 px-4 pt-0" data-simplebar>
        <ul class="mb-0">
          <li class="pb-7">
            <div class="d-flex align-items-center">
              <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-1.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="modernize-img" />
              <div>
                <h6 class="mb-1">Supreme toys cooker</h6>
                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                <div class="d-flex align-items-center justify-content-between mt-2">
                  <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                  <div class="input-group input-group-sm w-50">
                    <button class="btn border-0 round-20 minus p-0 bg-success-subtle text-success" type="button" id="add1">
                      -
                    </button>
                    <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0 text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add1" value="1" />
                    <button class="btn text-success bg-success-subtle p-0 round-20 border-0 add" type="button" id="addo2">
                      +
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="pb-7">
            <div class="d-flex align-items-center">
              <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-2.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="modernize-img" />
              <div>
                <h6 class="mb-1">Supreme toys cooker</h6>
                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                <div class="d-flex align-items-center justify-content-between mt-2">
                  <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                  <div class="input-group input-group-sm w-50">
                    <button class="btn border-0 round-20 minus p-0 bg-success-subtle text-success" type="button" id="add2">
                      -
                    </button>
                    <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0 text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add2" value="1" />
                    <button class="btn text-success bg-success-subtle p-0 round-20 border-0 add" type="button" id="addon34">
                      +
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="pb-7">
            <div class="d-flex align-items-center">
              <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-3.jpg" width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="modernize-img" />
              <div>
                <h6 class="mb-1">Supreme toys cooker</h6>
                <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                <div class="d-flex align-items-center justify-content-between mt-2">
                  <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                  <div class="input-group input-group-sm w-50">
                    <button class="btn border-0 round-20 minus p-0 bg-success-subtle text-success" type="button" id="add3">
                      -
                    </button>
                    <input type="text" class="form-control round-20 bg-transparent text-muted fs-2 border-0 text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add3" value="1" />
                    <button class="btn text-success bg-success-subtle p-0 round-20 border-0 add" type="button" id="addon3">
                      +
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <div class="align-bottom">
          <div class="d-flex align-items-center pb-7">
            <span class="text-dark fs-3">Sub Total</span>
            <div class="ms-auto">
              <span class="text-dark fw-semibold fs-3">$2530</span>
            </div>
          </div>
          <div class="d-flex align-items-center pb-7">
            <span class="text-dark fs-3">Total</span>
            <div class="ms-auto">
              <span class="text-dark fw-semibold fs-3">$6830</span>
            </div>
          </div>
          <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/eco-checkout.html" class="btn btn-outline-primary w-100">Go to shopping cart</a>
        </div>
      </div>
    </div> -->
  </div>
  <div class="dark-transparent sidebartoggler"></div>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/theme/app.dark.init.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/theme/theme.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/theme/app.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/theme/sidebarmenu.js"></script>
  <script src="./assets/js/script.js"></script>
  <script src="./assets/js/budget-script.js"></script>

  <script class="chat-data">
    document.addEventListener('DOMContentLoaded', function() {
      fetch('get_chart_data.php')
        .then(response => response.json())
        .then(data => {
          // Initialize the chart with the fetched data
          const ctx = document.getElementById('dashboardChart').getContext('2d');
          new Chart(ctx, {
            type: 'pie', // Change to 'bar' for a bar chart
            data: {
              labels: ['Income', 'Expenses', 'Balance'], // Labels for each data type
              datasets: [{
                label: 'Budget Overview',
                data: [data.income, data.expense, data.balance],
                backgroundColor: [
                  '#33cc33', // Green for income
                  '#e31010', // Red for expenses
                  'rgba(54, 162, 235, 0.6)' // Blue for balance
                ],
                borderColor: [
                  'rgba(75, 192, 192, 1)',
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
              }]
            },
            options: {
              responsive: true,
              plugins: {
                legend: {
                  position: 'top'
                },
                tooltip: {
                  callbacks: {
                    label: function(context) {
                      return `${context.label}: ${context.raw.toLocaleString()}`;
                    }
                  }
                }
              }
            }
          });
        })
        .catch(error => console.error('Error fetching chart data:', error));
    });
  </script>

  <script class="addtransaction">
    document.addEventListener("DOMContentLoaded", () => {
      const modal = document.getElementById("addTransactionModal");
      const openModalButton = document.getElementById("openModalButton");
      const closeModalButtons = [
        document.getElementById("closeModalButton"),
        document.getElementById("closeModalButtonFooter")
      ];

      // Open Modal
      openModalButton.addEventListener("click", () => {
        modal.style.display = "block";
      });

      // Close Modal
      closeModalButtons.forEach(button =>
        button.addEventListener("click", () => {
          modal.style.display = "none";
        })
      );

      // Form Submission
      const form = document.getElementById("addTransactionForm");
      form.addEventListener("submit", async (e) => {
        e.preventDefault();

        // Collect form data
        const formData = new FormData(form);

        try {
          const response = await fetch("add_transaction.php", {
            method: "POST",
            body: formData
          });

          const result = await response.json();

          if (!result.error) {
            alert(result.message); // Success message
            modal.style.display = "none"; // Close modal
            form.reset(); // Reset form fields
            location.reload();
          } else {
            alert(result.message); // Error message
          }
        } catch (error) {
          console.error("Error submitting the form:", error);
          alert("An error occurred while submitting the form.");
        }
      });
    });


    // Get the modal
    var modal = document.getElementById("savingsModal");

    // Get the button that opens the modal
    var btn = document.getElementById("addSavingsBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close-btn")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>


  <script class="edit-saving-goal">
    // Populate modal fields with goal data when Edit button is clicked
    $('#editGoalModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget); // Button that triggered the modal
      var goal_id = button.data('id');
      var goal_name = button.data('goal');
      var goal_amount = button.data('amount');
      var goal_due_date = button.data('due_date');

      var modal = $(this);
      modal.find('#goal_id').val(goal_id);
      modal.find('#goal_name').val(goal_name);
      modal.find('#goal_amount').val(goal_amount);
      modal.find('#goal_due_date').val(goal_due_date);
    });
  </script>



  <script class="edit-transaction">
    function openEditModal(transaction) {
      // Open the modal
      document.getElementById("editModal").style.display = "block";
      document.body.classList.add("modal-open");

      // Populate the modal fields
      document.getElementById("editTransactionId").value = transaction.id;
      document.getElementById("editDescription").value = transaction.description;
      document.getElementById("editAmount").value = transaction.amount;
      document.getElementById("editDate").value = transaction.date;
      document.getElementById("editType").value = transaction.type;
    }

    function closeEditModal() {
      document.getElementById("editModal").style.display = "none";
      document.body.classList.remove("modal-open");
    }

    // Handle form submission
    document.getElementById("editTransactionForm").addEventListener("submit", function(e) {
      e.preventDefault();

      // Collect form data
      const formData = new FormData(this);

      // Send data to the backend
      fetch("edit_transaction.php", {
          method: "POST",
          body: formData,
        })
        .then((response) => response.text())
        .then((data) => {
          alert(data); // Show success or error message
          location.reload(); // Reload the page to reflect changes
        })
        .catch((error) => console.error("Error updating transaction:", error));
    });

    function deleteTransaction(id) {
      if (confirm("Are you sure you want to delete this transaction?")) {
        // Send an AJAX request to delete the transaction
        fetch(`delete_transaction.php?id=${id}`, {
            method: 'GET'
          })
          .then(response => response.text())
          .then(data => {
            alert(data); // Show a message (e.g., "Transaction deleted")
            location.reload(); // Reload the page to reflect changes
          })
          .catch(error => console.error("Error deleting transaction:", error));
      }
    }
  </script>

  <script class="search">
    function filterTransactions() {
      const searchTerm = document.getElementById('searchTransactions').value.toLowerCase();
      const rows = document.querySelectorAll('table tbody tr');

      rows.forEach((row) => {
        const description = row.querySelector('h6').textContent.toLowerCase();
        const date = row.querySelector('.fs-2').textContent.toLowerCase();
        const type = row.querySelector('.badge').textContent.toLowerCase();

        if (description.includes(searchTerm) || date.includes(searchTerm) || type.includes(searchTerm)) {
          row.style.display = '';
        } else {
          row.style.display = 'none';
        }
      });
    }

    document.getElementById('searchButton').addEventListener('click', function() {
      var searchQuery = document.getElementById('searchInput').value.trim();

      // Check if the search term includes "expense" or "income" (case insensitive)
      var transactionType = '';
      if (searchQuery.toLowerCase().includes('expense')) {
        transactionType = 'expense';
      } else if (searchQuery.toLowerCase().includes('income')) {
        transactionType = 'income';
      }

      // Prepare form data with both search term and transaction type
      var formData = new FormData();
      formData.append('search', searchQuery);
      formData.append('transactionType', transactionType); // Add the detected type

      // Send the request via fetch (AJAX)
      fetch('search.php', {
          method: 'GET',
          headers: {
            'Accept': 'application/json',
          },
          body: new URLSearchParams(formData)
        })
        .then(response => response.text())
        .then(data => {
          document.getElementById('transactionsTable').innerHTML = data;
        })
        .catch(error => {
          console.error('Error:', error);
        });
    });

    document.getElementById('submitTransaction').addEventListener('click', function(event) {
      console.log('Button clicked'); // Log here to see if it’s triggered multiple times
      event.preventDefault();

      // Your transaction handling logic...
    });
    document.getElementById('submitTransaction').addEventListener('click', function(event) {
      event.preventDefault(); // Prevents the form from being submitted multiple times

      var formData = new FormData(document.getElementById('transactionForm'));

      fetch('add_transaction.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json()) // Assuming the server responds with JSON
        .then(data => {
          if (data.success) {
            alert('Transaction added successfully');
            // Clear form fields if needed
          } else {
            alert('Error adding transaction');
          }
        })
        .catch(error => {
          console.error('Error:', error);
        });
    });

    document.getElementById('submitTransaction').addEventListener('click', function(event) {
      event.preventDefault();

      var submitButton = this;
      submitButton.disabled = true; // Disable button to prevent further clicks

      var formData = new FormData(document.getElementById('transactionForm'));

      fetch('add_transaction.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            alert('Transaction added successfully');
          } else {
            alert('Error adding transaction');
          }
        })
        .catch(error => {
          console.error('Error:', error);
        })
        .finally(() => {
          submitButton.disabled = false; // Re-enable button
        });
    });
  </script>

<script class="get-todays-date">
    document.addEventListener('DOMContentLoaded', function() {
        // Get today's date
        const today = new Date();

        // Format the date (e.g., 'November 28, 2024')
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        const formattedDate = today.toLocaleDateString('en-US', options);

        // Display the date in the HTML element
        document.getElementById('currentDate').textContent = formattedDate;
    });
</script>


  <!-- solar icons -->
  <script src="../../../../cdn.jsdelivr.net/npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/dashboards/dashboard5.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>


<!-- Mirrored from bootstrapdemos.adminmart.com/modernize/dist/dark/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2024 00:05:13 GMT -->

</html>