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
?>




<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="dark" data-color-theme="Blue_Theme" data-layout="vertical">
<!-- Mirrored from bootstrapdemos.adminmart.com/modernize/dist/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2024 04:19:33 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" type="image/png" href="./assets/img/dash.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="./assets/css/styles.css" />
  <link rel="stylesheet" href="./assets/css/custom-style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="./assets/css/ben2.css">

  <title>Prince Dashboard</title>
</head>

<body>
  <!-- Preloader Section -->
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
      <?php include './includes/header.php'; ?>
      <!--  Header End -->

      <?php include './includes/left-side-bar.php'; ?>

      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8 d-flex align-items-stretch">
              <div class="card w-100 bg-primary-subtle overflow-hidden shadow-none">
                <div class="card-body position-relative">
                  <div class="row">
                    <div class="col-sm-7">
                      <div class="d-flex align-items-center mb-7">
                        <!-- <div class="rounded-circle overflow-hidden me-6">
                          <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-1.jpg" alt="modernize-img" width="40" height="40">
                        </div> -->
                        <h5 class="hero">Hello <?php echo htmlspecialchars($_SESSION['username']); ?></h5>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="border-end pe-4 border-muted border-opacity-10 task-perform">
                          <?php
                          // Include database connection file
                          include('db.php');

                          // Fetch total number of tasks
                          $query = "SELECT COUNT(*) AS task_count FROM tasks";
                          $result = mysqli_query($conn, $query);

                          // Initialize task count
                          $taskCount = 0;

                          if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $taskCount = $row['task_count'];
                          }
                          ?>
                          <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">
                            <?php echo $taskCount; ?>
                            <i class="fs-5 lh-base text-success"></i>
                          </h3>
                          <p class="mb-0">Tasks</p>
                        </div>
                        <div class="ps-4 task-perform">
                          <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">35%<i class="fs-5 lh-base text-success"></i>
                          </h3>
                          <p class="mb-0">Performance</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <div class="welcome-bg-img mb-n7 text-end">
                        <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/backgrounds/welcome-bg.svg" alt="modernize-img" class="img-fluid">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-2 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body p-4">
                  <?php
                  // Include database connection
                  include('db.php');
                  // Fetch total expenses
                  $query = "SELECT SUM(amount) AS total_expense FROM transactions WHERE type = 'expense'";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $totalExpense = $row['total_expense'] ?? 0; // Default to 0 if no expense records exist
                  ?>
                  <!-- Dynamically Display Total Expense -->
                  <h4 class="fw-semibold" style="font-size: 18px;">$<?php echo number_format($totalExpense, 2); ?></h4>
                  <p class="mb-2 fs-3 expense-income">Expense</p>
                  <div id="expense"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-2 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body p-4">
                  <?php
                  // Include database connection
                  include('db.php');

                  // Fetch total income
                  $query = "SELECT SUM(amount) AS total_income FROM transactions WHERE type = 'income'";
                  $result = mysqli_query($conn, $query);
                  $row = mysqli_fetch_assoc($result);
                  $totalIncome = $row['total_income'] ?? 0; // Default to 0 if no income records exist
                  ?>
                  <!-- Dynamically Display Total Income -->
                  <h4 class="fw-semibold" style="font-size: 18px;">$<?php echo number_format($totalIncome, 2); ?></h4>
                  <p class="mb-2 fs-3 expense-income">Income</p>
                  <div id="expense"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title fw-semibold">Revenue Updates</h4>
                  <p class="card-subtitle mb-4">Overview of Profit</p>
                  <div class="d-flex align-items-center">
                    <div class="me-4">
                      <span class="round-8 text-bg-primary rounded-circle me-2 d-inline-block"></span>
                      <span class="fs-2">Footware</span>
                    </div>
                    <div>
                      <span class="round-8 text-bg-secondary rounded-circle me-2 d-inline-block"></span>
                      <span class="fs-2">Fashionware</span>
                    </div>
                  </div>
                  <div id="revenue-chart" class="revenue-chart mx-n3"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title fw-semibold">Sales Overview</h4>
                  <p class="card-subtitle mb-2">Every Month</p>
                  <div id="sales-overview" class="mb-4"></div>
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                      <div class="bg-primary-subtle text-primary rounded-2 me-8 p-8 d-flex align-items-center justify-content-center">
                        <i class="ti ti-grid-dots fs-6"></i>
                      </div>
                      <div>
                        <h6 class="fw-semibold text-dark fs-4 mb-0">$23,450</h6>
                        <p class="fs-3 mb-0 fw-normal">Profit</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="bg-secondary-subtle text-secondary rounded-2 me-8 p-8 d-flex align-items-center justify-content-center">
                        <i class="ti ti-grid-dots fs-6"></i>
                      </div>
                      <div>
                        <h6 class="fw-semibold text-dark fs-4 mb-0">$23,450</h6>
                        <p class="fs-3 mb-0 fw-normal">Expance</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-sm-6 d-flex align-items-stretch">
                  <div class="card w-100">
                    <div class="card-body">
                      <?php
                      // Database connection
                      include('db.php');

                      // Fetch total savings amount from the savings_tracker table
                      $query = "SELECT SUM(amount) AS total_savings FROM savings_tracker";
                      $result = mysqli_query($conn, $query);

                      $totalSavings = 0;
                      if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        $totalSavings = $row['total_savings'] ?? 0; // Default to 0 if NULL
                      }
                      ?>
                      <div class="p-2 bg-primary-subtle rounded-2 d-inline-block mb-3">
                        <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-cart.svg" alt="modernize-img" class="img-fluid" width="24" height="24">
                      </div>
                      <div id="sales-two" class="mb-3 mx-n4"></div>
                      <h4 class="mb-1 fw-semibold d-flex align-content-center">
                        $<?php echo number_format($totalSavings, 2); ?> <!-- Display formatted total savings -->

                      </h4>
                      <p class="mb-0">Required Bills</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 d-flex align-items-stretch">
                  <div class="card w-100">
                    <div class="card-body">
                      <?php
                      // Database connection
                      include('db.php');

                      // Fetch the total income made in the current year
                      $currentYear = date('Y');
                      $query = "SELECT SUM(amount) AS total_yearly_income FROM transactions WHERE type = 'income' AND YEAR(date) = ?";
                      $stmt = mysqli_prepare($conn, $query);
                      mysqli_stmt_bind_param($stmt, 's', $currentYear);
                      mysqli_stmt_execute($stmt);
                      $result = mysqli_stmt_get_result($stmt);
                      $totalYearlyIncome = 0;

                      if ($row = mysqli_fetch_assoc($result)) {
                        $totalYearlyIncome = $row['total_yearly_income'] ?? 0; // Default to 0 if no data
                      }
                      ?>
                      <div class="p-2 bg-info-subtle rounded-2 d-inline-block mb-3">
                        <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-bar.svg" alt="modernize-img" class="img-fluid" width="24" height="24">
                      </div>
                      <div id="growth" class="mb-3"></div>
                      <h4 class="mb-1 fw-semibold d-flex align-content-center">
                        $<?php echo number_format($totalYearlyIncome, 2); ?>

                      </h4>
                      <p class="mb-0">Yearly Income</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card">
                <?php
                // Include database connection file
                include('db.php');

                // Get the current and previous month/year
                $currentMonth = date('m');
                $currentYear = date('Y');
                $previousMonth = $currentMonth - 1;
                $previousYear = $currentYear;

                // Adjust for January (previous month becomes December of the previous year)
                if ($previousMonth == 0) {
                  $previousMonth = 12;
                  $previousYear -= 1;
                }

                // Fetch total income for the current month
                $queryCurrent = "SELECT SUM(amount) AS total_income FROM transactions 
                 WHERE type = 'income' AND MONTH(date) = ? AND YEAR(date) = ?";
                $stmtCurrent = mysqli_prepare($conn, $queryCurrent);
                mysqli_stmt_bind_param($stmtCurrent, 'ii', $currentMonth, $currentYear);
                mysqli_stmt_execute($stmtCurrent);
                mysqli_stmt_bind_result($stmtCurrent, $currentIncome);
                mysqli_stmt_fetch($stmtCurrent);
                mysqli_stmt_close($stmtCurrent);

                // Fetch total income for the previous month
                $queryPrevious = "SELECT SUM(amount) AS total_income FROM transactions 
                  WHERE type = 'income' AND MONTH(date) = ? AND YEAR(date) = ?";
                $stmtPrevious = mysqli_prepare($conn, $queryPrevious);
                mysqli_stmt_bind_param($stmtPrevious, 'ii', $previousMonth, $previousYear);
                mysqli_stmt_execute($stmtPrevious);
                mysqli_stmt_bind_result($stmtPrevious, $previousIncome);
                mysqli_stmt_fetch($stmtPrevious);
                mysqli_stmt_close($stmtPrevious);

                // Default to 0 if no income data is available
                $currentIncome = $currentIncome ?? 0;
                $previousIncome = $previousIncome ?? 0;

                // Calculate percentage change
                $percentageChange = 0;
                if ($previousIncome > 0) {
                  $percentageChange = (($currentIncome - $previousIncome) / $previousIncome) * 100;
                }

                // Determine arrow direction and color
                $arrowDirection = $percentageChange >= 0 ? 'ti-arrow-up-left' : 'ti-arrow-down-right';
                $arrowColor = $percentageChange >= 0 ? 'bg-success-subtle text-success' : 'bg-danger-subtle text-danger';
                ?>
                <div class="card-body">
                  <div class="row align-items-start">
                    <div class="col-8">
                      <h4 class="card-title mb-9 fw-semibold">Monthly Earnings</h4>
                      <div class="d-flex align-items-center mb-3">
                        <!-- Display total income -->
                        <h4 class="fw-semibold mb-0 me-8">$<?php echo number_format($currentIncome, 2); ?></h4>
                        <div class="d-flex align-items-center">
                          <span class="me-2 rounded-circle <?php echo $arrowColor; ?> round-20 d-flex align-items-center justify-content-center">
                            <i class="ti <?php echo $arrowDirection; ?>"></i>
                          </span>
                          <!-- Display percentage change -->
                          <p class="text-dark me-1 fs-3 mb-0"><?php echo round(abs($percentageChange), 2); ?>%</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="d-flex justify-content-end">
                        <div class="p-2 bg-primary-subtle rounded-2 d-inline-block">
                          <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-master-card-2.svg" alt="modernize-img" class="img-fluid" width="24" height="24">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="monthly-earning"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title fw-semibold">Weekly Stats</h4>
                  <p class="card-subtitle mb-0">Average sales</p>
                  <div id="weekly-stats" class="mb-4 mt-7"></div>
                  <div class="position-relative">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <div class="d-flex">
                        <div class="p-6 bg-primary-subtle text-primary rounded-2 me-6 d-flex align-items-center justify-content-center">
                          <i class="ti ti-grid-dots fs-6"></i>
                        </div>
                        <div>
                          <h6 class="mb-1 fs-4 fw-semibold">Top Sales</h6>
                          <p class="fs-3 mb-0">Johnathan Doe</p>
                        </div>
                      </div>
                      <div class="bg-primary-subtle text-primary badge">
                        <p class="fs-3 fw-semibold mb-0">+68</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <div class="d-flex">
                        <div class="p-6 bg-success-subtle text-success rounded-2 me-6 d-flex align-items-center justify-content-center">
                          <i class="ti ti-grid-dots fs-6"></i>
                        </div>
                        <div>
                          <h6 class="mb-1 fs-4 fw-semibold">Best Seller</h6>
                          <p class="fs-3 mb-0">Footware</p>
                        </div>
                      </div>
                      <div class="bg-success-subtle text-success badge">
                        <p class="fs-3 fw-semibold mb-0">+68</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="d-flex">
                        <div class="p-6 bg-danger-subtle text-danger rounded-2 me-6 d-flex align-items-center justify-content-center">
                          <i class="ti ti-grid-dots fs-6"></i>
                        </div>
                        <div>
                          <h6 class="mb-1 fs-4 fw-semibold">Most Commented</h6>
                          <p class="fs-3 mb-0">Fashionware</p>
                        </div>
                      </div>
                      <div class="bg-danger-subtle text-danger badge">
                        <p class="fs-3 fw-semibold mb-0">+68</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div>
                    <h4 class="card-title fw-semibold">Yearly Sales</h4>
                    <p class="card-subtitle">Every month</p>
                    <div id="salary" class="mb-7 pb-8 mx-n4"></div>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="d-flex align-items-center">
                        <div class="bg-primary-subtle text-primary rounded-2 me-8 p-8 d-flex align-items-center justify-content-center">
                          <i class="ti ti-grid-dots fs-6"></i>
                        </div>
                        <div>
                          <p class="fs-3 mb-0 fw-normal">Total Sales</p>
                          <h6 class="fw-semibold text-dark fs-4 mb-0">$36,358</h6>
                        </div>
                      </div>
                      <div class="d-flex align-items-center">
                        <div class="bg-light-subtle text-muted rounded-2 me-8 p-8 d-flex align-items-center justify-content-center">
                          <i class="ti ti-grid-dots fs-6"></i>
                        </div>
                        <div>
                          <p class="fs-3 mb-0 fw-normal">Expenses</p>
                          <h6 class="fw-semibold text-dark fs-4 mb-0">$5,296</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title fw-semibold">Recent Transactions</h4>
                  <p class="card-subtitle mb-7">Your recent Transactions</p>
                  <div class="position-relative">
                    <?php
                    include('db.php'); // Database connection

                    // Fetch the most recent 5 transactions
                    $query = "SELECT * FROM transactions ORDER BY date DESC LIMIT 5";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                      while ($transaction = mysqli_fetch_assoc($result)) {
                        $type = $transaction['type'];
                        $amount = $transaction['amount'];
                        $description = $transaction['description'];
                        $date = date('jS F Y', strtotime($transaction['date'])); // Format date
                        $color = ($type == 'income') ? '#33cc33' : 'red';
                        $icon = ($type == 'income') ? 'icon-wallet.svg' : 'icon-wallet.svg'; // Adjust icons if necessary
                        $bgClass = ($type == 'income') ? 'bg-success-subtle' : 'bg-danger-subtle';
                    ?>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                          <div class="d-flex">
                            <div class="p-8 <?php echo $bgClass; ?> rounded-2 d-flex align-items-center justify-content-center me-6">
                              <img src="./assets/img/<?php echo $icon; ?>"
                                alt="transaction-icon" class="img-fluid" width="24" height="24">
                            </div>
                            <div>
                              <h6 class="mb-1 fs-4 fw-semibold"><?php echo htmlspecialchars($description); ?></h6>
                              <p class="fs-3 mb-0"><?php echo $date; ?></p>
                            </div>
                          </div>
                          <h6 class="mb-0 fw-semibold" style="color: <?php echo $color; ?>;">
                            <?php echo ($type == 'income' ? '+' : '-') . '$' . number_format($amount, 2); ?>
                          </h6>
                        </div>
                    <?php
                      }
                    } else {
                      echo "<p>No recent transactions found.</p>";
                    }
                    ?>
                  </div>
                  <button class="btn btn-outline-primary w-100">View all transactions</button>
                </div>
              </div>
            </div>

            <!-- <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="mb-4">
                    <h4 class="card-title fw-semibold">Recent Transactions</h4>
                    <p class="card-subtitle">How to Secure Recent Transactions</p>
                  </div>
                  <ul class="timeline-widget mb-0 position-relative mb-n5">
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time text-dark flex-shrink-0 text-end">09:30</div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                        <span class="timeline-badge-border d-block flex-shrink-0"></span>
                      </div>
                      <div class="timeline-desc fs-3 text-dark mt-n1">Payment received from John Doe of $385.90</div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time text-dark flex-shrink-0 text-end">10:00 am</div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge border-2 border border-info flex-shrink-0 my-8"></span>
                        <span class="timeline-badge-border d-block flex-shrink-0"></span>
                      </div>
                      <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a href="javascript:void(0)" class="text-primary d-block fw-normal ">#ML-3467</a>
                      </div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                        <span class="timeline-badge-border d-block flex-shrink-0"></span>
                      </div>
                      <div class="timeline-desc fs-3 text-dark mt-n1">Payment was made of $64.95 to Michael</div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                        <span class="timeline-badge-border d-block flex-shrink-0"></span>
                      </div>
                      <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a href="javascript:void(0)" class="text-primary d-block fw-normal ">#ML-3467</a>
                      </div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time text-dark flex-shrink-0 text-end">09:30 am</div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                        <span class="timeline-badge-border d-block flex-shrink-0"></span>
                      </div>
                      <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New arrival recorded <a href="javascript:void(0)" class="text-primary d-block fw-normal ">#ML-3467</a>
                      </div>
                    </li>
                    <li class="timeline-item d-flex position-relative overflow-hidden">
                      <div class="timeline-time text-dark flex-shrink-0 text-end">12:00 am</div>
                      <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                        <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                      </div>
                      <div class="timeline-desc fs-3 text-dark mt-n1">Payment Done</div>
                    </li>
                  </ul>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-md-12 col-lg-8 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-sm-flex d-block align-items-center justify-content-between mb-3">
                    <div class="mb-3 mb-sm-0">
                      <h4 class="card-title fw-semibold">Product Performances</h4>
                      <p class="card-subtitle">What Impacts Product Performance?</p>
                    </div>
                    <div>
                      <select class="form-select fw-semibold">
                        <option value="1">March 2024</option>
                        <option value="2">April 2024</option>
                        <option value="3">May 2024</option>
                        <option value="4">June 2024</option>
                      </select>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table align-middle text-nowrap mb-0">
                      <thead>
                        <tr class="text-muted fw-semibold">
                          <th scope="col" class="ps-0">Assigned</th>
                          <th scope="col">Progress</th>
                          <th scope="col">Priority</th>
                          <th scope="col">Budget</th>
                          <th scope="col">Chart</th>
                        </tr>
                      </thead>
                      <tbody class="border-top">
                        <tr>
                          <td class="ps-0">
                            <div class="d-flex align-items-center">
                              <div class="me-2 pe-1">
                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-1.jpg" class="rounded-2" width="48" height="48" alt="modernize-img" />
                              </div>
                              <div>
                                <h6 class="fw-semibold mb-1">Minecraf App</h6>
                                <p class="fs-2 mb-0 text-muted">Jason Roy</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0 fs-3 text-dark">73.2%</p>
                          </td>
                          <td>
                            <span class="badge fw-semibold py-1 w-85 bg-success-subtle text-success">Low</span>
                          </td>
                          <td>
                            <p class="fs-3 text-dark mb-0">$3.5k</p>
                          </td>
                          <td>
                            <div id="table-chart"></div>
                          </td>
                        </tr>
                        <tr>
                          <td class="ps-0">
                            <div class="d-flex align-items-center">
                              <div class="me-2 pe-1">
                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-2.jpg" class="rounded-2" width="48" height="48" alt="modernize-img" />
                              </div>
                              <div>
                                <h6 class="fw-semibold mb-1">Web App Project</h6>
                                <p class="fs-2 mb-0 text-muted">Mathew Flintoff</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0 fs-3 text-dark">56.8%</p>
                          </td>
                          <td>
                            <span class="badge fw-semibold py-1 w-85 bg-warning-subtle text-warning">Medium</span>
                          </td>
                          <td>
                            <p class="fs-3 text-dark mb-0">$3.5k</p>
                          </td>
                          <td>
                            <div id="table-chart-1"></div>
                          </td>
                        </tr>
                        <tr>
                          <td class="ps-0">
                            <div class="d-flex align-items-center">
                              <div class="me-2 pe-1">
                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-3.jpg" class="rounded-2" width="48" height="48" alt="modernize-img" />
                              </div>
                              <div>
                                <h6 class="fw-semibold mb-1">Modernize Dashboard</h6>
                                <p class="fs-2 mb-0 text-muted">Anil Kumar</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="mb-0 fs-3 text-dark">25%</p>
                          </td>
                          <td>
                            <span class="badge fw-semibold py-1 w-85 bg-info-subtle text-info">Very high</span>
                          </td>
                          <td>
                            <p class="fs-3 text-dark mb-0">$3.5k</p>
                          </td>
                          <td>
                            <div id="table-chart-2"></div>
                          </td>
                        </tr>
                        <tr>
                          <td class="ps-0 border-bottom-0">
                            <div class="d-flex align-items-center">
                              <div class="me-2 pe-1">
                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-4.jpg" class="rounded-2" width="48" height="48" alt="modernize-img" />
                              </div>
                              <div>
                                <h6 class="fw-semibold mb-1">Dashboard Co</h6>
                                <p class="fs-2 mb-0 text-muted">George Cruize</p>
                              </div>
                            </div>
                          </td>
                          <td class="border-bottom-0">
                            <p class="mb-0 fs-3 text-dark">96.3%</p>
                          </td>
                          <td class="border-bottom-0">
                            <span class="badge fw-semibold py-1 w-85 bg-danger-subtle text-danger">High</span>
                          </td>
                          <td class="border-bottom-0">
                            <p class="fs-3 text-dark mb-0">$3.5k</p>
                          </td>
                          <td class="border-bottom-0">
                            <div id="table-chart-3"></div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <script>
        function handleColorTheme(e) {
          document.documentElement.setAttribute("data-color-theme", e);
        }
      </script>
      <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="icon ti ti-settings fs-7"></i>
      </button>

      <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
          <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
            Settings
          </h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body h-n80" data-simplebar>
          <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="light-layout">
              <i class="icon ti ti-brightness-up fs-7 me-2"></i>Light
            </label>

            <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary rounded-2" for="dark-layout">
              <i class="icon ti ti-moon fs-7 me-2"></i>Dark
            </label>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="ltr-layout">
              <i class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR
            </label>

            <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="rtl-layout">
              <i class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL
            </label>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

          <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
            <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME">
              <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                <i class="ti ti-check text-white d-flex icon fs-5"></i>
              </div>
            </label>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <div>
              <input type="radio" class="btn-check" name="page-layout" id="vertical-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="vertical-layout">
                <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical
              </label>
            </div>
            <div>
              <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="horizontal-layout">
                <i class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal
              </label>
            </div>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="boxed-layout">
              <i class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed
            </label>

            <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="full-layout">
              <i class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full
            </label>
          </div>

          <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <a href="javascript:void(0)" class="fullsidebar">
              <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="full-sidebar">
                <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full
              </label>
            </a>
            <div>
              <input type="radio" class="btn-check " name="sidebar-type" id="mini-sidebar" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="mini-sidebar">
                <i class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse
              </label>
            </div>
          </div>

          <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

          <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="card-with-border">
              <i class="icon ti ti-border-outer fs-7 me-2"></i>Border
            </label>

            <input type="radio" class="btn-check" name="card-layout" id="card-without-border" autocomplete="off" />
            <label class="btn p-9 btn-outline-primary" for="card-without-border">
              <i class="icon ti ti-border-none fs-7 me-2"></i>Shadow
            </label>
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
              <i class="fa-solid fa-x fs-5 ms-3"></i>
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
    <div class="offcanvas offcanvas-end shopping-cart" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
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
    </div>
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

  <!-- solar icons -->
  <script src="../../../../cdn.jsdelivr.net/npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/dashboards/dashboard2.js"></script>
</body>


<!-- Mirrored from bootstrapdemos.adminmart.com/modernize/dist/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2024 04:19:34 GMT -->

</html>