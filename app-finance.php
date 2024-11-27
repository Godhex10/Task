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

      <div class="body-wrapper">
        <div class="container-fluid" style="margin-top: -40px;">
          <div class="row">
            <div class="col-12">
              <div class="d-flex align-items-center gap-4 mb-4">
                <div class="position-relative">
                  <div class="border border-2 border-primary rounded-circle">
                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-1.jpg" class="rounded-circle m-1" alt="user1" width="60" />
                  </div>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-primary"> 3
                    <span class="visually-hidden">unread messages</span>
                  </span>
                </div>
                <div>
                  <h3 class="fw-semibold"><?php echo htmlspecialchars($_SESSION['username']); ?></span></h3>
                  <!-- Button to open the modal -->
                  <!-- Trigger Button -->
                  <button class="btn btn-primary btn2" id="openModalButton">Add Transaction</button>
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
                </div>

              </div>

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

            </div>
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h5 class="card-title fw-semibold">Upcoming Activity</h5>
                  <p class="card-subtitle">Preparation for the Upcoming Activity</p>
                  <div class="mt-9 py-6 d-flex align-items-center">
                    <div class="flex-shrink-0 bg-primary-subtle text-primary rounded-circle round d-flex align-items-center justify-content-center">
                      <i class="ti ti-map-pin fs-6"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0 fw-semibold">Trip to Singapore</h6>
                      <span class="fs-3">working on</span>
                    </div>
                    <div class="ms-auto">
                      <span class="fs-2">12:00 AM</span>
                    </div>
                  </div>
                  <div class="py-6 d-flex align-items-center">
                    <div class="flex-shrink-0 bg-danger-subtle text-danger rounded-circle round d-flex align-items-center justify-content-center">
                      <i class="ti ti-bookmark fs-6"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0 fw-semibold">Archived Data</h6>
                      <span class="fs-3">working on</span>
                    </div>
                    <div class="ms-auto">
                      <span class="fs-2">3:52 PM</span>
                    </div>
                  </div>
                  <div class="py-6 d-flex align-items-center">
                    <div class="flex-shrink-0 bg-success-subtle text-success rounded-circle round d-flex align-items-center justify-content-center">
                      <i class="ti ti-microphone fs-6"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0 fw-semibold">Meeting with Client</h6>
                      <span class="fs-3">working on</span>
                    </div>
                    <div class="ms-auto">
                      <span class="fs-2">4:50 PM</span>
                    </div>
                  </div>
                  <div class="py-6 d-flex align-items-center">
                    <div class="flex-shrink-0 bg-warning-subtle text-warning rounded-circle round d-flex align-items-center justify-content-center">
                      <i class="ti ti-cast fs-6"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0 fw-semibold ">Screening Task Team</h6>
                      <span class="fs-3">working on</span>
                    </div>
                    <div class="ms-auto">
                      <span class="fs-2">5:10 PM</span>
                    </div>
                  </div>
                  <div class="pt-6 d-flex align-items-center">
                    <div class="flex-shrink-0 bg-info-subtle text-info rounded-circle round d-flex align-items-center justify-content-center">
                      <i class="ti ti-mail fs-6"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0 fw-semibold">Send envelope to John</h6>
                      <span class="fs-3">working on</span>
                    </div>
                    <div class="ms-auto">
                      <span class="fs-2">6:00 PM</span>
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
                        <span>
                          <span class="round-8 text-bg-primary rounded-circle d-inline-block"></span>
                        </span>
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
                <div id="activity-status"></div>
              </div>
            </div>
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex align-items-center mb-9">
                    <div>
                      <h4 class="card-title fw-semibold">Order Status</h4>
                      <p class="card-subtitle">How to Check Your Order Status Online</p>
                    </div>
                    <div class="ms-auto mt-4 mt-md-0">
                      <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link rounded active" data-bs-toggle="tab" href="#home" role="tab">
                            <span>Checkout</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link rounded" data-bs-toggle="tab" href="#profile" role="tab">
                            <span>Paid</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link rounded" data-bs-toggle="tab" href="#messages" role="tab">
                            <span>Packed</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- Tab panes -->
                  <div class="tab-content mt-3">
                    <div class="tab-pane active" id="home" role="tabpanel">
                      <div class="table-responsive">
                        <table class="table align-middle mb-0 text-nowrap">
                          <tbody>
                            <tr>
                              <td class="ps-0">
                                <div class="d-flex align-items-center gap-3">
                                  <div class="flex-shrink-0">
                                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-1.jpg" class="rounded" alt="p1" width="80" />
                                  </div>
                                  <div>
                                    <h6 class="mb-0 fw-semibold">Irpun Wicaksono</h6>
                                    <span class="fs-2">irpun@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td class="ps-0">
                                <span>React Js - Online Classes</span>
                              </td>
                              <td class="ps-0">
                                <h6 class="mb-0">$50.00</h6>
                              </td>
                              <td class="text-end ps-0">
                                <span class="badge bg-warning-subtle text-warning rounded-pill">
                                  <span class="round-8 text-bg-warning rounded-circle d-inline-block me-1"></span>progress
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td class="ps-0">
                                <div class="d-flex align-items-center gap-3">
                                  <div class="flex-shrink-0">
                                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-2.jpg" class="rounded" alt="p2" width="80" />
                                  </div>
                                  <div>
                                    <h6 class="mb-0 fw-semibold">Oyhan Ruhiyan</h6>
                                    <span class="fs-2">oyhan@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td class="ps-0">
                                <span>Frontend Dev - Online Classes</span>
                              </td>
                              <td class="ps-0">
                                <h6 class="mb-0">$49.00</h6>
                              </td>
                              <td class="text-end ps-0">
                                <span class="badge bg-success-subtle text-success rounded-pill">
                                  <span class="round-8 text-bg-success rounded-circle d-inline-block me-1"></span>delivered
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td class="ps-0">
                                <div class="d-flex align-items-center gap-3">
                                  <div class="flex-shrink-0">
                                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-3.jpg" class="rounded" alt="p3" width="80" />
                                  </div>
                                  <div>
                                    <h6 class="mb-0 fw-semibold">Dayat Santoso</h6>
                                    <span class="fs-2">dayat@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td class="ps-0">
                                <span>UX Research - Power Courses</span>
                              </td>
                              <td class="ps-0">
                                <h6 class="mb-0">$79.00</h6>
                              </td>
                              <td class="text-end ps-0">
                                <span class="badge bg-danger-subtle text-danger rounded-pill">
                                  <span class="round-8 text-bg-danger rounded-circle d-inline-block me-1"></span>cancel
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td class="ps-0">
                                <div class="d-flex align-items-center gap-3">
                                  <div class="flex-shrink-0">
                                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-4.jpg" class="rounded" alt="p4" width="80" />
                                  </div>
                                  <div>
                                    <h6 class="mb-0 fw-semibold">Irpun Wicaksono</h6>
                                    <span class="fs-2">irpun@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td class="ps-0">
                                <span>React Js - Online Classes</span>
                              </td>
                              <td class="ps-0">
                                <h6 class="mb-0">$50.00</h6>
                              </td>
                              <td class="text-end ps-0">
                                <span class="badge bg-success-subtle text-success rounded-pill">
                                  <span class="round-8 text-bg-success rounded-circle d-inline-block me-1"></span>delivered
                                </span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel">
                      <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0 text-nowrap">
                          <tbody>
                            <tr>
                              <td class="ps-0">
                                <div class="d-flex align-items-center gap-3">
                                  <div class="flex-shrink-0">
                                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-2.jpg" class="rounded" alt="p2" width="80" />
                                  </div>
                                  <div>
                                    <h6 class="mb-0 fw-semibold">Oyhan Ruhiyan</h6>
                                    <span class="fs-2">oyhan@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td class="ps-0">
                                <span>Frontend Dev - Online Classes</span>
                              </td>
                              <td class="ps-0">
                                <h6 class="mb-0">$49.00</h6>
                              </td>
                              <td class="text-end ps-0">
                                <span class="badge bg-success-subtle text-success rounded-pill">
                                  <span class="round-8 text-bg-success rounded-circle d-inline-block me-1"></span>delivered
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td class="ps-0">
                                <div class="d-flex align-items-center gap-3">
                                  <div class="flex-shrink-0">
                                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-1.jpg" class="rounded" alt="p1" width="80" />
                                  </div>
                                  <div>
                                    <h6 class="mb-0 fw-semibold">Irpun Wicaksono</h6>
                                    <span class="fs-2">irpun@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td class="ps-0">
                                <span>React Js - Online Classes</span>
                              </td>
                              <td class="ps-0">
                                <h6 class="mb-0">$50.00</h6>
                              </td>
                              <td class="text-end ps-0">
                                <span class="badge bg-warning-subtle text-warning rounded-pill">
                                  <span class="round-8 text-bg-warning rounded-circle d-inline-block me-1"></span>progress
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td class="ps-0">
                                <div class="d-flex align-items-center gap-3">
                                  <div class="flex-shrink-0">
                                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-3.jpg" class="rounded" alt="p3" width="80" />
                                  </div>
                                  <div>
                                    <h6 class="mb-0 fw-semibold">Dayat Santoso</h6>
                                    <span class="fs-2">dayat@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td class="ps-0">
                                <span>UX Research - Power Courses</span>
                              </td>
                              <td class="ps-0">
                                <h6 class="mb-0">$79.00</h6>
                              </td>
                              <td class="text-end ps-0">
                                <span class="badge bg-danger-subtle text-danger rounded-pill">
                                  <span class="round-8 text-bg-danger rounded-circle d-inline-block me-1"></span>cancel
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td class="ps-0">
                                <div class="d-flex align-items-center gap-3">
                                  <div class="flex-shrink-0">
                                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-4.jpg" class="rounded" alt="p4" width="80" />
                                  </div>
                                  <div>
                                    <h6 class="mb-0 fw-semibold">Irpun Wicaksono</h6>
                                    <span class="fs-2">irpun@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td class="ps-0">
                                <span>React Js - Online Classes</span>
                              </td>
                              <td class="ps-0">
                                <h6 class="mb-0">$50.00</h6>
                              </td>
                              <td class="text-end ps-0">
                                <span class="badge bg-success-subtle text-success rounded-pill">
                                  <span class="round-8 text-bg-success rounded-circle d-inline-block me-1"></span>delivered
                                </span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel">
                      <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0 text-nowrap">
                          <tbody>
                            <tr>
                              <td class="ps-0">
                                <div class="d-flex align-items-center gap-3">
                                  <div class="flex-shrink-0">
                                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-4.jpg" class="rounded" alt="p4" width="80" />
                                  </div>
                                  <div>
                                    <h6 class="mb-0 fw-semibold">Irpun Wicaksono</h6>
                                    <span class="fs-2">irpun@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td class="ps-0">
                                <span>React Js - Online Classes</span>
                              </td>
                              <td class="ps-0">
                                <h6 class="mb-0">$50.00</h6>
                              </td>
                              <td class="text-end ps-0">
                                <a href="javascript:void(0)" class="badge bg-success-subtle text-success rounded-pill">
                                  <span class="round-8 text-bg-success rounded-circle d-inline-block me-1"></span>delivered
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td class="ps-0">
                                <div class="d-flex align-items-center gap-3">
                                  <div class="flex-shrink-0">
                                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-1.jpg" class="rounded" alt="p1" width="80" />
                                  </div>
                                  <div>
                                    <h6 class="mb-0 fw-semibold">Irpun Wicaksono</h6>
                                    <span class="fs-2">irpun@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td class="ps-0">
                                <span>React Js - Online Classes</span>
                              </td>
                              <td class="ps-0">
                                <h6 class="mb-0">$50.00</h6>
                              </td>
                              <td class="text-end ps-0">
                                <span class="badge bg-warning-subtle text-warning rounded-pill">
                                  <span class="round-8 text-bg-warning rounded-circle d-inline-block me-1"></span>progress
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td class="ps-0">
                                <div class="d-flex align-items-center gap-3">
                                  <div class="flex-shrink-0">
                                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-2.jpg" class="rounded" alt="p2" width="80" />
                                  </div>
                                  <div>
                                    <h6 class="mb-0 fw-semibold">Oyhan Ruhiyan</h6>
                                    <span class="fs-2">oyhan@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td class="ps-0">
                                <span>Frontend Dev - Online Classes</span>
                              </td>
                              <td class="ps-0">
                                <h6 class="mb-0">$49.00</h6>
                              </td>
                              <td class="text-end ps-0">
                                <span class="badge bg-success-subtle text-success rounded-pill">
                                  <span class="round-8 text-bg-success rounded-circle d-inline-block me-1"></span>delivered
                                </span>
                              </td>
                            </tr>
                            <tr>
                              <td class="ps-0">
                                <div class="d-flex align-items-center gap-3">
                                  <div class="flex-shrink-0">
                                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-3.jpg" class="rounded" alt="p3" width="80" />
                                  </div>
                                  <div>
                                    <h6 class="mb-0 fw-semibold">Dayat Santoso</h6>
                                    <span class="fs-2">dayat@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td class="ps-0">
                                <span>UX Research - Power Courses</span>
                              </td>
                              <td class="ps-0">
                                <h6 class="mb-0">$79.00</h6>
                              </td>
                              <td class="text-end ps-0">
                                <span class="badge bg-danger-subtle text-danger rounded-pill">
                                  <span class="round-8 text-bg-danger rounded-circle d-inline-block me-1"></span>cancel
                                </span>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 d-flex align-items-stretch">
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
            </div>
            <div class="col-lg-7 d-flex align-items-stretch">
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
            </div>
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
  <script src="./assets/js/budget-script.js"></script>

  <!-- solar icons -->
  <script src="../../../../cdn.jsdelivr.net/npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/dashboards/dashboard5.js"></script>
</body>


<!-- Mirrored from bootstrapdemos.adminmart.com/modernize/dist/dark/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2024 00:05:13 GMT -->

</html>