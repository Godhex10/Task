<?php
// Include the database connection file
require 'includes/db.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="dark" data-color-theme="Blue_Theme" data-layout="vertical">


<!-- Mirrored from bootstrapdemos.adminmart.com/modernize/dist/dark/app-kanban.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2024 21:13:16 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/logos/favicon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="./assets/css/styles.css" />
  <link rel="stylesheet" href="./assets/css/custom-style.css" />

  <title>Prince | Task</title>
</head>

<body class="link-sidebar">
  <!-- Preloader Section -->
  <!-- <div id="preloader">
    <div class='omnitrix'>
      <p class='effect'></p>
      <button class='ominip'><img class='pressione' src='./assets/img/ben.png'></button>
      <button class='ominib' id='btn'></button>
      <audio src='click.wav'>
    </div>
  </div> -->
  <div id="main-wrapper">
    <!-- Sidebar Start -->
    <?php include './includes/sidebar.php' ?>
    <!--  Sidebar End -->
    <div class="page-wrapper">
      <!--  Header Start -->

      <!--  Header End -->

      <aside class="left-sidebar with-horizontal">
        <!-- Sidebar scroll-->
        <div>
          <!-- Sidebar navigation-->
          <nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid" style="top: -60px; position: relative;">
            <ul id="sidebarnav">
              <!-- ============================= -->
              <!-- Home -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
              </li>
              <!-- =================== -->
              <!-- Dashboard -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span>
                    <i class="ti ti-home-2"></i>
                  </span>
                  <span class="hide-menu">Dashboard</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/index.html" class="sidebar-link">
                      <i class="ti ti-aperture"></i>
                      <span class="hide-menu">Modern</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/index.html" class="sidebar-link">
                      <i class="ti ti-shopping-cart"></i>
                      <span class="hide-menu">eCommerce</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/index3.html" class="sidebar-link">
                      <i class="ti ti-currency-dollar"></i>
                      <span class="hide-menu">NFT</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/index4.html" class="sidebar-link">
                      <i class="ti ti-cpu"></i>
                      <span class="hide-menu">Crypto</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/index5.html" class="sidebar-link">
                      <i class="ti ti-activity-heartbeat"></i>
                      <span class="hide-menu">General</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/index6.html" class="sidebar-link">
                      <i class="ti ti-playlist"></i>
                      <span class="hide-menu">Music</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Apps -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Apps</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link two-column has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span>
                    <i class="ti ti-archive"></i>
                  </span>
                  <span class="hide-menu">Apps</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/app-calendar.html" class="sidebar-link">
                      <i class="ti ti-calendar"></i>
                      <span class="hide-menu">Calendar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="app-kanban.html" class="sidebar-link">
                      <i class="ti ti-layout-kanban"></i>
                      <span class="hide-menu">Kanban</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/app-chat.html" class="sidebar-link">
                      <i class="ti ti-message-dots"></i>
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
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/app-contact.html" class="sidebar-link">
                      <i class="ti ti-phone"></i>
                      <span class="hide-menu">Contact Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/app-contact2.html" class="sidebar-link">
                      <i class="ti ti-list-details"></i>
                      <span class="hide-menu">Contact List</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/app-notes.html" class="sidebar-link">
                      <i class="ti ti-notes"></i>
                      <span class="hide-menu">Notes</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/app-invoice.html" class="sidebar-link">
                      <i class="ti ti-file-text"></i>
                      <span class="hide-menu">Invoice</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/page-user-profile.html" class="sidebar-link">
                      <i class="ti ti-user-circle"></i>
                      <span class="hide-menu">User Profile</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/blog-posts.html" class="sidebar-link">
                      <i class="ti ti-article"></i>
                      <span class="hide-menu">Posts</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/blog-detail.html" class="sidebar-link">
                      <i class="ti ti-details"></i>
                      <span class="hide-menu">Detail</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/eco-shop.html" class="sidebar-link">
                      <i class="ti ti-shopping-cart"></i>
                      <span class="hide-menu">Shop</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/eco-shop-detail.html" class="sidebar-link">
                      <i class="ti ti-basket"></i>
                      <span class="hide-menu">Shop Detail</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/eco-product-list.html" class="sidebar-link">
                      <i class="ti ti-list-check"></i>
                      <span class="hide-menu">List</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/eco-checkout.html" class="sidebar-link">
                      <i class="ti ti-brand-shopee"></i>
                      <span class="hide-menu">Checkout</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/eco-add-product.html">
                      <i class="ti ti-file-plus"></i>
                      <span class="hide-menu">Add Product</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/eco-edit-product.html">
                      <i class="ti ti-file-pencil"></i>
                      <span class="hide-menu">Edit Product</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- ============================= -->
              <!-- Frontend pages -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Frontend pages</span>
              </li>
              <!-- =================== -->
              <!-- pages -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <i class="ti ti-app-window"></i>
                  </span>
                  <span class="hide-menu">Frontend pages</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/frontend-landingpage.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Homepage</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/frontend-aboutpage.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">About Us</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/frontend-contactpage.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Contact Us</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/frontend-blogpage.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Blog</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/frontend-blogdetailpage.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Blog Details</span>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- ============================= -->
              <!-- PAGES -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">PAGES</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span>
                    <i class="ti ti-notebook"></i>
                  </span>
                  <span class="hide-menu">Pages</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/page-faq.html" class="sidebar-link">
                      <i class="ti ti-help"></i>
                      <span class="hide-menu">FAQ</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/page-account-settings.html" class="sidebar-link">
                      <i class="ti ti-user-circle"></i>
                      <span class="hide-menu">Account Setting</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/page-pricing.html" class="sidebar-link">
                      <i class="ti ti-currency-dollar"></i>
                      <span class="hide-menu">Pricing</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/widgets-cards.html" class="sidebar-link">
                      <i class="ti ti-cards"></i>
                      <span class="hide-menu">Card</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/widgets-banners.html" class="sidebar-link">
                      <i class="ti ti-ad"></i>
                      <span class="hide-menu">Banner</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/widgets-charts.html" class="sidebar-link">
                      <i class="ti ti-chart-bar"></i>
                      <span class="hide-menu">Charts</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/landingpage/index.html" class="sidebar-link">
                      <i class="ti ti-app-window"></i>
                      <span class="hide-menu">Landing Page</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- UI -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">UI</span>
              </li>
              <!-- =================== -->
              <!-- UI Elements -->
              <!-- =================== -->
              <li class="sidebar-item mega-dropdown">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <i class="ti ti-layout-grid"></i>
                  </span>
                  <span class="hide-menu">UI</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-accordian.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Accordian</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-badge.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Badge</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-buttons.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Buttons</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-dropdowns.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Dropdowns</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-modals.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Modals</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-tab.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Tab</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-tooltip-popover.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Tooltip & Popover</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-notification.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Alerts</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-progressbar.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Progressbar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-pagination.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Pagination</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-typography.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Typography</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-bootstrap-ui.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Bootstrap UI</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-breadcrumb.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Breadcrumb</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-offcanvas.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Offcanvas</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-lists.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Lists</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-grid.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Grid</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-carousel.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Carousel</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-scrollspy.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Scrollspy</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-spinner.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Spinner</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/ui-link.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Link</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Forms -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Forms</span>
              </li>
              <!-- =================== -->
              <!-- Forms -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link two-column has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <i class="ti ti-file-text"></i>
                  </span>
                  <span class="hide-menu">Forms</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <!-- form elements -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-inputs.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Forms Input</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-input-groups.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Input Groups</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-input-grid.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Input Grid</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-checkbox-radio.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Checkbox & Radios</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-bootstrap-switch.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Bootstrap Switch</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-select2.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Select2</span>
                    </a>
                  </li>
                  <!-- form inputs -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-basic.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Basic Form</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-vertical.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Vertical</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-horizontal.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Horizontal</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-actions.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Actions</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-row-separator.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Row Separator</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-bordered.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Bordered</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-detail.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Detail</span>
                    </a>
                  </li>
                  <!-- form wizard -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-wizard.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Wizard</span>
                    </a>
                  </li>
                  <!-- Quill Editor -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/form-editor-quill.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Quill Editor</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Tables -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Tables</span>
              </li>
              <!-- =================== -->
              <!-- Bootstrap Table -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <i class="ti ti-layout-sidebar"></i>
                  </span>
                  <span class="hide-menu">Tables</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/table-basic.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Basic Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/table-dark-basic.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Dark Basic Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/table-sizing.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Sizing Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/table-layout-coloured.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Coloured Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/table-datatable-basic.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Basic Initialisation</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/table-datatable-api.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">API</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/table-datatable-advanced.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Advanced Initialisation</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Charts -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Charts</span>
              </li>
              <!-- =================== -->
              <!-- Apex Chart -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <i class="ti ti-chart-pie"></i>
                  </span>
                  <span class="hide-menu">Charts</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/chart-apex-line.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Line Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/chart-apex-area.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Area Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/chart-apex-bar.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Bar Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/chart-apex-pie.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Pie Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/chart-apex-radial.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Radial Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/chart-apex-radar.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Radar Chart</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Icons -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Icons</span>
              </li>
              <!-- =================== -->
              <!-- Tabler Icon -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <i class="ti ti-archive"></i>
                  </span>
                  <span class="hide-menu">Icon</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/icon-tabler.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Tabler Icon</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/dark/icon-solar.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Solar Icon</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- multi level -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="rounded-3">
                    <iconify-icon icon="solar:airbuds-case-minimalistic-line-duotone" class="ti"></iconify-icon>
                  </span>
                  <span class="hide-menu">Multi DD</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.adminmart.com/modernize/dist/docs/index.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Documentation</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 1</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link has-arrow">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 2</span>
                    </a>
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.1</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.2</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.3</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 3</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>

      <div class="body-wrapper">
        <div class="container-fluid" style="top: -55px; position: relative;">
          <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8 text">Task</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none text-white" href="../index.php">Home</a>
                      </li>
                      <li class="breadcrumb-item text-white" aria-current="page">Task</li>
                    </ol>
                  </nav>
                </div>
                <div class="col-3">
                  <div class="text-center mb-n5">
                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/breadcrumb/ChatBc.png" alt="modernize-img" class="img-fluid mb-n4" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="action-btn layout-top-spacing mb-7 d-flex align-items-center justify-content-between flex-wrap gap-6">
            <h5 class="mb-0 fs-5">Your Current Task</h5>
            <!-- Button to open the Add Task form -->
            <button id="open-form-btn" class="btn btn-primary">Add New Task</button>
          </div>

          <!-- Modal for adding a task -->
          <div id="task-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Task</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form id="task-form">
                    <div class="mb-3">
                      <label for="task-name" class="form-label">Task Name</label>
                      <input type="text" class="form-control" id="task-name" placeholder="Enter task name">
                    </div>
                    <div class="mb-3">
                      <label for="task-description" class="form-label">Task Description</label>
                      <textarea class="form-control" id="task-description" rows="3" placeholder="Enter task description"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="task-status" class="form-label">Task Status</label>
                      <select class="form-select" id="task-status">
                        <option value="Todo">Todo</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Pending">Pending</option>
                        <option value="Done">Done</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Task</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="addItemModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="add-task-title modal-title" id="addTaskModalTitleLabel1">Add Task</h5>
                  <h5 class="edit-task-title modal-title" id="addTaskModalTitleLabel2">Edit Task</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  </button>
                </div>
                <div class="modal-body">
                  <div class="compose-box">
                    <div class="compose-content" id="addTaskModalTitle">
                      <div class="addTaskAccordion" id="add_task_accordion">
                        <div class="task-content task-text-progress">
                          <div id="collapseTwo" class="collapse show" data-parent="#add_task_accordion">
                            <div class="task-content-body">
                              <form id="taskForm" action="javascript:void(0);">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="task-title mb-4 d-flex">
                                      <input id="kanban-title" type="text" placeholder="Task" class="form-control" name="task_name" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="task-badge d-flex">
                                      <textarea id="kanban-text" placeholder="Task Text" class="form-control" name="description" required></textarea>
                                    </div>
                                  </div>
                                </div>
                                <button type="submit" id="submitTask" class="btn btn-primary mt-3">Add Task</button>
                              </form>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer justify-content-start">
                  <div class="d-flex gap-6">
                    <button data-btn-action="addTask" type="submit" id="submitTask" class="btn add-tsk btn-primary mt-3">Add Task</button>
                    <button data-btn-action="editTask" class="btn edit-tsk btn-success">Save</button>
                    <button class="btn bg-danger-subtle text-danger d-flex align-items-center gap-1" data-bs-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="addListModal" tabindex="-1" role="dialog" aria-labelledby="addListModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title add-list-title" id="addListModalTitleLabel1">Add List</h5>
                  <h5 class="modal-title edit-list-title" id="addListModalTitleLabel2">Edit List</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="compose-box">
                    <div class="compose-content" id="addListModalTitle">
                      <form action="javascript:void(0);">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="list-title d-flex align-items-center">
                              <input id="item-name" type="text" placeholder="List Name" class="form-control" name="task">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="modal-footer justify-content-start">
                  <div class="d-flex gap-6">
                    <button class="btn bg-danger-subtle text-danger d-flex align-items-center gap-1" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn add-list btn-primary">Add List</button>
                    <button class="btn edit-list btn-success">Save</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="deleteConformation" tabindex="-1" role="dialog" aria-labelledby="deleteConformationLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content" id="deleteConformationLabel">
                <div class="modal-header">
                  <div class="icon round-40 d-flex align-items-center justify-content-center bg-light-danger text-danger me-2 rounded-circle">
                    <i class="ti ti-trash fs-6"></i>
                  </div>
                  <h5 class="modal-title fw-semibold" id="exampleModalLabel">Delete the task?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  </button>
                </div>
                <div class="modal-body">
                  <p class="mb-0">If you delete the task it will be gone forever. Are you sure you want to
                    proceed?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-danger" data-remove="task">Delete</button>
                </div>
              </div>
            </div>
          </div>
          <div class="scrumboard" id="cancel-row">
            <div class="layout-spacing pb-3">
              <div data-simplebar>
                <div class="task-list-section">
                  <div data-item="item-todo" class="task-list-container" data-action="sorting">
                    <div class="connect-sorting connect-sorting-todo">
                      <div class="task-container-header">
                        <h6 class="item-head mb-0 fs-4 fw-semibold">Todo</h6>
                      </div>
                      <div class="connect-sorting-content" data-sortable="true"></div>
                    </div>
                  </div>

                  <div data-item="item-inprogress" class="task-list-container" data-action="sorting">
                    <div class="connect-sorting connect-sorting-inprogress">
                      <div class="task-container-header">
                        <h6 class="item-head mb-0 fs-4 fw-semibold">In Progress</h6>
                      </div>
                      <div class="connect-sorting-content" data-sortable="true"></div>
                    </div>
                  </div>

                  <div data-item="item-pending" class="task-list-container" data-action="sorting">
                    <div class="connect-sorting connect-sorting-pending">
                      <div class="task-container-header">
                        <h6 class="item-head mb-0 fs-4 fw-semibold">Pending</h6>
                      </div>
                      <div class="connect-sorting-content" data-sortable="true"></div>
                    </div>
                  </div>

                  <div data-item="item-done" class="task-list-container" data-action="sorting">
                    <div class="connect-sorting connect-sorting-done">
                      <div class="task-container-header">
                        <h6 class="item-head mb-0 fs-4 fw-semibold">Done</h6>
                      </div>
                      <div class="connect-sorting-content" data-sortable="true"></div>
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
  <script src="./assets/js/script2.js"></script>
  <script src="./assets/js/add_task.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>


  <!-- solar icons -->
  <script src="../../../../cdn.jsdelivr.net/npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/jquery-ui/dist/jquery-ui.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/apps/kanban.js"></script>





</body>


<!-- Mirrored from bootstrapdemos.adminmart.com/modernize/dist/dark/app-kanban.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2024 21:13:17 GMT -->

</html>