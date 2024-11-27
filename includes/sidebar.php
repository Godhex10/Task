<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start(); // Only start if a session isn't already active
}
?>

<html>
<head>
    <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="<link rel="shortcut icon" type="image/png" href="./assets/img/dash.png" />" />

  <!-- Core Css -->
  <link rel="stylesheet" href="./assets/css/styles.css" />
  <link rel="stylesheet" href="./assets/css/custom-style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="./assets/css/ben2.css">

  <title>Prince Dashboard</title>
</head>

<aside class="left-sidebar with-vertical">
      <div><!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
        <div class="brand-logo d-flex align-items-center justify-content-between god-logo">
          <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/index.html" class="text-nowrap">
           <p>Godhex</p>
          </a>
          <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
            <i class="fa-solid fa-x"></i>
          </a>
        </div>

        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
          <ul id="sidebarnav">
            <!-- ---------------------------------- -->
            <!-- Home -->
            <!-- ---------------------------------- -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <!-- ---------------------------------- -->
            <!-- Dashboard -->
            <!-- ---------------------------------- -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="index.php" aria-expanded="false">
                <span>
                  <i class="ti"><img src="./assets/img/dash.png" width="23px" height="23px" alt="" srcset=""></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="task.php" aria-expanded="false">
                <span>
                  <i class="ti"><img src="./assets/img/dash.png" width="23px" height="23px" alt="" srcset=""></i>
                </span>
                <span class="hide-menu">Task</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./app-finance.php" aria-expanded="false">
                <span>
                  <i class="ti"><img src="./assets/img/dash.png" width="23px" height="23px" alt="" srcset=""></i>
                </span>
                <span class="hide-menu">Finacial Overview</span>
              </a>
            </li>
            <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/index5.html" aria-expanded="false">
                <span>
                  <i class="ti"><img src="./assets/img/dash.png" width="23px" height="23px" alt="" srcset=""></i>
                </span>
                <span class="hide-menu">Projects</span>
              </a>
            </li> -->
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/index6.html" aria-expanded="false">
                <span>
                  <i class="ti"><img src="./assets/img/dash.png" width="23px" height="23px" alt="" srcset=""></i>
                </span>
                <span class="hide-menu">Calendar</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./app-notes.html" aria-expanded="false">
                <span>
                  <i class="ti"><img src="./assets/img/dash.png" width="23px" height="23px" alt="" srcset=""></i>
                </span>
                <span class="hide-menu">Notes</span>
              </a>
            </li>
            <!-- ----------------------------------
             Frontend page -->
            <!-- ----------------------------------
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-layout-grid"></i>
                </span>
                <span class="hide-menu">Frontend page</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/frontend-landingpage.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Homepage</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/frontend-aboutpage.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">About Us</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/frontend-contactpage.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Contact Us</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/frontend-blogpage.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Blog</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/frontend-blogdetailpage.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Blog Details</span>
                  </a>
                </li>
              </ul>
            </li>-->

            <!-- ---------------------------------- -->
            <!-- Apps -->
            <!-- ---------------------------------- -->
            <!-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Apps</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/app-calendar.html" aria-expanded="false">
                <span>
                  <i class="ti ti-calendar"></i>
                </span>
                <span class="hide-menu">Calendar</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/app-kanban.html" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-kanban"></i>
                </span>
                <span class="hide-menu">Kanban</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/app-chat.html" aria-expanded="false">
                <span>
                  <i class="ti ti-message-dots"></i>
                </span>
                <span class="hide-menu">Chat</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/app-email.html" aria-expanded="false">
                <span>
                  <i class="ti ti-mail"></i>
                </span>
                <span class="hide-menu">Email</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/app-notes.html" aria-expanded="false">
                <span>
                  <i class="ti ti-notes"></i>
                </span>
                <span class="hide-menu">Notes</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/app-contact.html" aria-expanded="false">
                <span>
                  <i class="ti ti-phone"></i>
                </span>
                <span class="hide-menu">Contact Table</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/app-contact2.html" aria-expanded="false">
                <span>
                  <i class="ti ti-list-details"></i>
                </span>
                <span class="hide-menu">Contact List</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/app-invoice.html" aria-expanded="false">
                <span>
                  <i class="ti ti-file-text"></i>
                </span>
                <span class="hide-menu">Invoice</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/page-user-profile.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-circle"></i>
                </span>
                <span class="hide-menu">User Profile</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-chart-donut-3"></i>
                </span>
                <span class="hide-menu">Blog</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/blog-posts.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Posts</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/blog-detail.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Details</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-basket"></i>
                </span>
                <span class="hide-menu">Ecommerce</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/eco-shop.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Shop</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/eco-shop-detail.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Details</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/eco-product-list.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">List</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/eco-checkout.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Checkout</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/eco-add-product.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Add Product</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/eco-edit-product.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Edit Product</span>
                  </a>
                </li>
              </ul>
            </li> -->
            <!-- ---------------------------------- -->
            <!-- PAGES -->
            <!-- ---------------------------------- -->
            <!-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">PAGES</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/page-pricing.html" aria-expanded="false">
                <span>
                  <i class="ti ti-currency-dollar"></i>
                </span>
                <span class="hide-menu">Pricing</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/page-faq.html" aria-expanded="false">
                <span>
                  <i class="ti ti-help"></i>
                </span>
                <span class="hide-menu">FAQ</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/page-account-settings.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-circle"></i>
                </span>
                <span class="hide-menu">Account Setting</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/landingpage/index.html" aria-expanded="false">
                <span>
                  <i class="ti ti-app-window"></i>
                </span>
                <span class="hide-menu">Landing Page</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-layout"></i>
                </span>
                <span class="hide-menu">Widgets</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/widgets-cards.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Cards</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/widgets-banners.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Banner</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/widgets-charts.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Charts</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/widgets-feeds.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Feed Widgets</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/widgets-apps.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Apps Widgets</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/widgets-data.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Data Widgets</span>
                  </a>
                </li>
              </ul>
            </li> -->
            <!-- ---------------------------------- -->
            <!-- UI -->
            <!-- ---------------------------------- -->
            <!-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">UI</span>
            </li> -->
            <!-- ---------------------------------- -->
            <!-- UI Elements -->
            <!-- ---------------------------------- -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-layout-grid"></i>
                </span>
                <span class="hide-menu">UI Elements</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-accordian.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Accordian</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-badge.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Badge</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-buttons.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Buttons</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-dropdowns.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Dropdowns</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-modals.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Modals</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-tab.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Tab</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-tooltip-popover.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Tooltip & Popover</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-notification.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Alerts</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-progressbar.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Progressbar</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-pagination.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Pagination</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-typography.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Typography</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-bootstrap-ui.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Bootstrap UI</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-breadcrumb.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Breadcrumb</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-offcanvas.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Offcanvas</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-lists.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Lists</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-grid.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Grid</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-carousel.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Carousel</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-scrollspy.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Scrollspy</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-spinner.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Spinner</span>
                  </a>
                </li>
                <li class="sidebar-item mb-3">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-link.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Link</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- ---------------------------------- -->
            <!-- Cards -->
            <!-- ---------------------------------- -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Cards</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-cards.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Basic Cards</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-card-customs.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Custom Cards</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-card-weather.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Weather Cards</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-card-draggable.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Draggable Cards</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- ---------------------------------- -->
            <!-- Component -->
            <!-- ---------------------------------- -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-components"></i>
                </span>
                <span class="hide-menu">Component</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/component-sweetalert.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Sweet Alert</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/component-nestable.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Nestable</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/component-noui-slider.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Noui slider</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/component-rating.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Rating</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/component-toastr.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Toastr</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- ---------------------------------- -->
            <!-- Forms -->
            <!-- ---------------------------------- -->
            <!-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Forms</span>
            </li> -->
            <!-- ---------------------------------- -->
            <!-- Form Elements -->
            <!-- ---------------------------------- -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-file-text"></i>
                </span>
                <span class="hide-menu">Form Elements</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-inputs.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Forms Input</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-input-groups.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Input Groups</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-input-grid.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Input Grid</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-checkbox-radio.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Checkbox & Radios</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-bootstrap-switch.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Bootstrap Switch</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-select2.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Select2</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- ---------------------------------- -->
            <!-- Form Addons -->
            <!-- ---------------------------------- -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-qrcode"></i>
                </span>
                <span class="hide-menu">Form Addons</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-dropzone.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Dropzone</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-mask.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Form Mask</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-typeahead.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Form Typehead</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- ---------------------------------- -->
            <!-- Form Validation -->
            <!-- ---------------------------------- -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Form Validation</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-bootstrap-validation.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Bootstrap Validation</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-custom-validation.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Custom Validation</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- ---------------------------------- -->
            <!-- Form Pickers -->
            <!-- ---------------------------------- -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-file-pencil"></i>
                </span>
                <span class="hide-menu">Form Pickers</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-picker-colorpicker.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Colorpicker</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-picker-bootstrap-rangepicker.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Bootstrap Rangepicker</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-picker-bootstrap-datepicker.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Bootstrap Datepicker</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-picker-material-datepicker.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Material Datepicker</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- ---------------------------------- -->
            <!-- Form Editor -->
            <!-- ---------------------------------- -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-dna"></i>
                </span>
                <span class="hide-menu">Form Editor</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-editor-quill.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Quill Editor</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-editor-tinymce.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Tinymce Editor</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- ---------------------------------- -->
            <!-- Form Input -->
            <!-- ---------------------------------- -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-basic.html" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-archive"></i>
                </span>
                <span class="hide-menu">Basic Form</span>
              </a>
            </li> -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-vertical.html" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-box-align-left"></i>
                </span>
                <span class="hide-menu">Form Vertical</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-horizontal.html" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-box-align-bottom"></i>
                </span>
                <span class="hide-menu">Form Horizontal</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-actions.html" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-file-export"></i>
                </span>
                <span class="hide-menu">Form Actions</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-row-separator.html" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-separator-horizontal"></i>
                </span>
                <span class="hide-menu">Row Separator</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-bordered.html" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-border-outer"></i>
                </span>
                <span class="hide-menu">Form Bordered</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-detail.html" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Form Detail</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-striped-row.html" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-file-analytics"></i>
                </span>
                <span class="hide-menu">Striped Rows</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-floating-input.html" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-file-dots"></i>
                </span>
                <span class="hide-menu">Form Floating Input</span>
              </a>
            </li> -->
            <!-- ---------------------------------- -->
            <!-- Form Wizard -->
            <!-- ---------------------------------- -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-wizard.html" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-files"></i>
                </span>
                <span class="hide-menu">Form Wizard</span>
              </a>
            </li> -->
            <!-- ---------------------------------- -->
            <!-- Form Repeater -->
            <!-- ---------------------------------- -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-repeater.html" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-topology-star-3"></i>
                </span>
                <span class="hide-menu">Form Repeater</span>
              </a>
            </li> -->
            <!-- ---------------------------------- -->
            <!-- Tables -->
            <!-- ---------------------------------- -->
            <!-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Tables</span>
            </li> -->
            <!-- ---------------------------------- -->
            <!-- Bootstrap Table -->
            <!-- ---------------------------------- -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-layout-sidebar"></i>
                </span>
                <span class="hide-menu">Bootstrap Table</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/table-basic.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Basic Table</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/table-dark-basic.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Dark Basic Table</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/table-sizing.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Sizing Table</span>
                  </a>
                </li>
                <li class="sidebar-item mb-3">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/table-layout-coloured.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Coloured Table</span>
                  </a>
                </li>
              </ul>
            </li> -->
            <!-- ---------------------------------- -->
            <!-- Datatable -->
            <!-- ---------------------------------- -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-air-conditioning-disabled"></i>
                </span>
                <span class="hide-menu">Datatables</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/table-datatable-basic.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Basic Initialisation</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/table-datatable-api.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">API</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/table-datatable-advanced.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Advanced Initialisation</span>
                  </a>
                </li>
              </ul>
            </li> -->
            <!-- ---------------------------------- -->
            <!-- Table Jsgrid -->
            <!-- ---------------------------------- -->

            <!-- ---------------------------------- -->
            <!-- Charts -->
            <!-- ---------------------------------- -->
            <!-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Charts</span>
            </li> -->
            <!-- ---------------------------------- -->
            <!-- Apex Chart -->
            <!-- ---------------------------------- -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-chart-pie"></i>
                </span>
                <span class="hide-menu">Apex Charts</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/chart-apex-line.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Line Chart</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/chart-apex-area.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Area Chart</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/chart-apex-bar.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Bar Chart</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/chart-apex-pie.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Pie Chart</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/chart-apex-radial.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Radial Chart</span>
                  </a>
                </li>
                <li class="sidebar-item mb-3">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/chart-apex-radar.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Radar Chart</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- ---------------------------------- -->
            <!-- Sample Pages -->
            <!-- ---------------------------------- -->
            <!-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Sample Pages</span>
            </li> -->

            <!-- <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-file"></i>
                </span>
                <span class="hide-menu">Sample Pages</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/pages-animation.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Animation</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/pages-search-result.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Search Result</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/pages-gallery.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Gallery</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/pages-treeview.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Treeview</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/pages-block-ui.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Block-Ui</span>
                  </a>
                </li>
                <li class="sidebar-item mb-3">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/pages-session-timeout.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Session Timeout</span>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- ---------------------------------- -->
            <!-- Icons -->
            <!-- ---------------------------------- -->
            <!-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Icons</span>
            </li> -->
            <!-- ---------------------------------- -->
            <!-- Tabler Icon -->
            <!-- ---------------------------------- -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/icon-tabler.html" aria-expanded="false">
                <span class="rounded-3">
                  <i class="ti ti-archive"></i>
                </span>
                <span class="hide-menu">Tabler Icon</span>
              </a>
            </li> -->
            <!-- ---------------------------------- -->
            <!-- Solar Icon -->
            <!-- ---------------------------------- -->
            <!-- <li class="sidebar-item">
              <a class="sidebar-link sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/icon-solar.html" aria-expanded="false">
                <span class="rounded-3">
                  <i class="ti ti-mood-smile"></i>
                </span>
                <span class="hide-menu">Solar Icon</span>
              </a>
            </li> -->
            <!-- ---------------------------------- -->
            <!-- AUTH -->
            <!-- ---------------------------------- -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link" href="" aria-expanded="false">
                <span class="rounded-3">
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Error</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Login</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/authentication-login.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Side Login</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/authentication-login2.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Boxed Login</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/authentication-register.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Side Register</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/authentication-register2.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Boxed Register</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-rotate"></i>
                </span>
                <span class="hide-menu">Forgot Password</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/authentication-forgot-password.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Side Forgot Password</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/authentication-forgot-password2.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Boxed Forgot Password</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-zoom-code"></i>
                </span>
                <span class="hide-menu">Two Steps</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/authentication-two-steps.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Side Two Steps</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/authentication-two-steps2.html" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Boxed Two Steps</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/authentication-maintenance.html" aria-expanded="false">
                <span class="rounded-3">
                  <i class="ti ti-settings"></i>
                </span>
                <span class="hide-menu">Maintenance</span>
              </a>
            </li>
            <!-- ---------------------------------- -->
            <!-- DOCUMENTATION -->
            <!-- ---------------------------------- -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">DOCUMENTATION</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/docs/index.html" aria-expanded="false">
                <span class="rounded-3">
                  <i class="ti ti-file-text"></i>
                </span>
                <span class="hide-menu">Getting Started</span>
              </a>
            </li>
            <!-- ---------------------------------- -->
            <!-- OTHER -->
            <!-- ---------------------------------- -->
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">OTHER</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-box-multiple"></i>
                </span>
                <span class="hide-menu">Menu Level</span>
              </a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item">
                  <a href="javascript:void(0)" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Level 1</span>
                  </a>
                </li>
                <li class="sidebar-item">
                  <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                      <i class="ti ti-circle"></i>
                    </div>
                    <span class="hide-menu">Level 1.1</span>
                  </a>
                  <ul aria-expanded="false" class="collapse two-level">
                    <li class="sidebar-item">
                      <a href="javascript:void(0)" class="sidebar-link">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                          <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Level 2</span>
                      </a>
                    </li>
                    <li class="sidebar-item">
                      <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <div class="round-16 d-flex align-items-center justify-content-center">
                          <i class="ti ti-circle"></i>
                        </div>
                        <span class="hide-menu">Level 2.1</span>
                      </a>
                      <ul aria-expanded="false" class="collapse three-level">
                        <li class="sidebar-item">
                          <a href="javascript:void(0)" class="sidebar-link">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                              <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Level 3</span>
                          </a>
                        </li>
                        <li class="sidebar-item">
                          <a href="javascript:void(0)" class="sidebar-link">
                            <div class="round-16 d-flex align-items-center justify-content-center">
                              <i class="ti ti-circle"></i>
                            </div>
                            <span class="hide-menu">Level 3.1</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link link-disabled" href="#disabled" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-ban"></i>
                </span>
                <span class="hide-menu">Disabled</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="#sub" aria-expanded="false">
                <i class="ti ti-star"></i>
                <div class="hide-menu lh-base">
                  <span class="hide-menu d-block">SubCaption</span>
                  <span class="hide-menu d-block fs-2">This is the sutitle</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="#chip" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-award"></i>
                  </span>
                  <span class="hide-menu">Chip</span>
                </div>
                <div class="hide-menu">
                  <span class="badge rounded-circle bg-primary d-flex align-items-center justify-content-center rounded-pill fs-2">9</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="#outlined" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-mood-smile"></i>
                  </span>
                  <span class="hide-menu">Outlined</span>
                </div>
                <span class="hide-menu badge rounded-pill border border-primary text-primary fs-2 py-1 px-2">Outline</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="https://google.com/" aria-expanded="false">
                <span class="d-flex">
                  <i class="ti ti-star"></i>
                </span>
                <span class="hide-menu">External Link</span>
              </a>
            </li>
          </ul>
        </nav>

        <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
          <div class="hstack gap-3">
            <div class="john-img">
              <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="modernize-img" />
            </div>
            <div class="john-title">
              <h6 class="mb-0 fs-4 fw-semibold"><?php echo htmlspecialchars($_SESSION['username']); ?></h6>
              <span class="fs-2">Designer</span>
            </div>
            <form action="logout.php" method="POST">
              <button type="submit" class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                <i class="fa-solid fa-power-off"></i>
              </button>
            </form>
          </div>
        </div>

        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
      </div>
    </aside>

    </html>