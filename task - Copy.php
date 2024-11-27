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
  <link rel="shortcut icon" type="image/png" href="<link rel="shortcut icon" type="image/png" href="./assets/img/dash.png" />" />

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
            <button id="add-list" class="btn btn-primary">Add List</button>
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
                              <form action="javascript:void(0);">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="task-title mb-4 d-flex">
                                      <input id="kanban-title" type="text" placeholder="Task" class="form-control" name="task">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="task-badge d-flex">
                                      <textarea id="kanban-text" placeholder="Task Text" class="form-control" name="taskText"></textarea>
                                    </div>
                                  </div>
                                </div>
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
                    <button data-btn-action="addTask" class="btn add-tsk btn-primary">Add Task</button>
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
                        <h6 class="item-head mb-0 fs-4 fw-semibold" data-item-title="Todo">Todo</h6>
                        <div class="hstack gap-2">
                          <div class="add-kanban-title">
                            <a class="addTask d-flex align-items-center justify-content-center gap-1 lh-sm" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add Task">
                              <i class="fa-solid fa-plus" style="color: #fff;"></i>
                            </a>
                          </div>
                          <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <i class="fa-solid fa-ellipsis" style="color: #fff;"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                              <a class="dropdown-item list-edit" href="javascript:void(0);">Edit</a>
                              <a class="dropdown-item list-delete" href="javascript:void(0);">Delete</a>
                              <a class="dropdown-item list-clear-all" href="javascript:void(0);">Clear All</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="connect-sorting-content" data-sortable="true">
                        <div data-draggable="true" class="card img-task">
                          <div class="card-body">
                            <div class="task-header">
                              <div>
                                <h4 data-item-title="This is first task">
                                  This is first task</h4>
                              </div>
                              <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <i class="fa-solid fa-ellipsis" style="color: #fff;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                  <a class="dropdown-item kanban-item-edit cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-pencil fs-5"></i>Edit
                                  </a>
                                  <a class="dropdown-item kanban-item-delete cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-trash fs-5"></i>Delete
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="task-content p-0">
                              <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/backgrounds/kanban-img-1.jpg" class="img-fluid" alt="scrumboard">
                            </div>
                            <div class="task-body">
                              <div class="task-bottom">
                                <div class="tb-section-1">
                                  <span class="hstack gap-2 fs-2" data-item-date="24 July">
                                    <i class="ti ti-calendar fs-5"></i> 24 July
                                  </span>
                                </div>
                                <div class="tb-section-2">
                                  <span class="badge text-bg-success fs-1">Design</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div data-draggable="true" class="card img-task">
                          <div class="card-body">
                            <div class="task-header">
                              <div>
                                <h4 data-item-title="Lets do some task on pd">
                                  Lets do some task on pd</h4>
                              </div>
                              <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <i class="fa-solid fa-ellipsis" style="color: #fff;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                  <a class="dropdown-item kanban-item-edit cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-pencil fs-5"></i>Edit
                                  </a>
                                  <a class="dropdown-item kanban-item-delete cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-trash fs-5"></i>Delete
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="task-content">
                              <p class="mb-0" data-item-text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, o eiusmod tempor incid.">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, o eiusmod tempor incid.
                              </p>
                            </div>
                            <div class="task-body">
                              <div class="task-bottom">
                                <div class="tb-section-1">
                                  <span class="hstack gap-2 fs-2" data-item-date="24 July">
                                    <i class="ti ti-calendar fs-5"></i> 24 July
                                  </span>
                                </div>
                                <div class="tb-section-2">
                                  <span class="badge text-bg-warning fs-1">Development</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div data-draggable="true" class="card img-task">
                          <div class="card-body">
                            <div class="task-header">
                              <div>
                                <h4 data-item-title="Do some projects on React Native with Flutter">
                                  Do some projects on React Native with Flutter</h4>
                              </div>
                              <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <i class="fa-solid fa-ellipsis" style="color: #fff;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                  <a class="dropdown-item kanban-item-edit cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-pencil fs-5"></i>Edit
                                  </a>
                                  <a class="dropdown-item kanban-item-delete cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-trash fs-5"></i>Delete
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="task-body">
                              <div class="task-bottom">
                                <div class="tb-section-1">
                                  <span class="hstack gap-2 fs-2" data-item-date="24 July">
                                    <i class="ti ti-calendar fs-5"></i> 24 July
                                  </span>
                                </div>
                                <div class="tb-section-2">
                                  <span class="badge text-bg-primary fs-1">Mobile</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-item="item-inprogress" class="task-list-container" data-action="sorting">
                    <div class="connect-sorting connect-sorting-inprogress">
                      <div class="task-container-header">
                        <h6 class="item-head mb-0 fs-4 fw-semibold" data-item-title="In Progress">In Progress</h6>
                        <div class="hstack gap-2">
                          <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <i class="fa-solid fa-ellipsis" style="color: #fff;"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                              <a class="dropdown-item list-edit" href="javascript:void(0);">Edit</a>
                              <a class="dropdown-item list-delete" href="javascript:void(0);">Delete</a>
                              <a class="dropdown-item list-clear-all" href="javascript:void(0);">Clear All</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="connect-sorting-content" data-sortable="true">
                        <div data-draggable="true" class="card">
                          <div class="card-body">
                            <div class="task-header">
                              <div>
                                <h4 data-item-title="Design navigation changes">
                                  Design navigation changes</h4>
                              </div>
                              <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <i class="fa-solid fa-ellipsis" style="color: #fff;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                  <a class="dropdown-item kanban-item-edit cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-pencil fs-5"></i>Edit
                                  </a>
                                  <a class="dropdown-item kanban-item-delete cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-trash fs-5"></i>Delete
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="task-body">
                              <div class="task-bottom">
                                <div class="tb-section-1">
                                  <span class="hstack gap-2 fs-2" data-item-date="24 July">
                                    <i class="ti ti-calendar fs-5"></i> 24 July
                                  </span>
                                </div>
                                <div class="tb-section-2">
                                  <span class="badge text-bg-primary fs-1">Mobile</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div data-draggable="true" class="card img-task">
                          <div class="card-body">
                            <div class="task-header">
                              <div>
                                <h4 data-item-title="Battle with fire">
                                  Battle with fire</h4>
                              </div>
                              <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <i class="fa-solid fa-ellipsis" style="color: #fff;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                  <a class="dropdown-item kanban-item-edit cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-pencil fs-5"></i>Edit
                                  </a>
                                  <a class="dropdown-item kanban-item-delete cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-trash fs-5"></i>Delete
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="task-content p-0">
                              <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/backgrounds/kanban-img-2.jpg" class="img-fluid" alt="scrumboard">
                            </div>
                            <div class="task-body">
                              <div class="task-bottom">
                                <div class="tb-section-1">
                                  <span class="hstack gap-2 fs-2" data-item-date="24 July">
                                    <i class="ti ti-calendar fs-5"></i> 24 July
                                  </span>
                                </div>
                                <div class="tb-section-2">
                                  <span class="badge text-bg-success fs-1">Design</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div data-draggable="true" class="card">
                          <div class="card-body">
                            <div class="task-header">
                              <div>
                                <h4 data-item-title="First design concept">
                                  First design concept</h4>
                              </div>
                              <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <i class="fa-solid fa-ellipsis" style="color: #fff;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                  <a class="dropdown-item kanban-item-edit cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-pencil fs-5"></i>Edit
                                  </a>
                                  <a class="dropdown-item kanban-item-delete cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-trash fs-5"></i>Delete
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="task-body">
                              <div class="task-bottom">
                                <div class="tb-section-1">
                                  <span class="hstack gap-2 fs-2" data-item-date="24 July">
                                    <i class="ti ti-calendar fs-5"></i> 24 July
                                  </span>
                                </div>
                                <div class="tb-section-2">
                                  <span class="badge text-bg-primary fs-1">Mobile</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-item="item-pending" class="task-list-container" data-action="sorting">
                    <div class="connect-sorting connect-sorting-pending">
                      <div class="task-container-header">
                        <h6 class="item-head mb-0 fs-4 fw-semibold" data-item-title="Pending">Pending</h6>
                        <div class="hstack gap-2">
                          <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <i class="fa-solid fa-ellipsis" style="color: #fff;"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                              <a class="dropdown-item list-edit" href="javascript:void(0);">Edit</a>
                              <a class="dropdown-item list-delete" href="javascript:void(0);">Delete</a>
                              <a class="dropdown-item list-clear-all" href="javascript:void(0);">Clear All</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="connect-sorting-content" data-sortable="true">
                        <div data-draggable="true" class="card img-task">
                          <div class="card-body">
                            <div class="task-header">
                              <div>
                                <h4 data-item-title="Persona development">
                                  Persona development</h4>
                              </div>
                              <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <i class="fa-solid fa-ellipsis" style="color: #fff;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                  <a class="dropdown-item kanban-item-edit cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-pencil fs-5"></i>Edit
                                  </a>
                                  <a class="dropdown-item kanban-item-delete cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-trash fs-5"></i>Delete
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="task-content">
                              <p class="mb-0" data-item-text="Create user personas based on the research data to represent different user groups and their characteristics, gols, and behaviors..">
                                Create user personas based on the research data to represent different user groups and
                                their
                                characteristics, gols, and behaviors..
                              </p>
                            </div>
                            <div class="task-body">
                              <div class="task-bottom">
                                <div class="tb-section-1">
                                  <span class="hstack gap-2 fs-2" data-item-date="24 July">
                                    <i class="ti ti-calendar fs-5"></i> 24 July
                                  </span>
                                </div>
                                <div class="tb-section-2">
                                  <span class="badge text-bg-warning fs-1">UX stage</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div data-draggable="true" class="card img-task">
                          <div class="card-body">
                            <div class="task-header">
                              <div>
                                <h4 data-item-title="Redesign overview">
                                  Redesign overview</h4>
                              </div>
                              <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <i class="fa-solid fa-ellipsis" style="color: #fff;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                  <a class="dropdown-item kanban-item-edit cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-pencil fs-5"></i>Edit
                                  </a>
                                  <a class="dropdown-item kanban-item-delete cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-trash fs-5"></i>Delete
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="task-content p-0">
                              <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/backgrounds/my-card.jpg" class="img-fluid" alt="scrumboard">
                            </div>
                            <div class="task-body">
                              <div class="task-bottom">
                                <div class="tb-section-1">
                                  <span class="hstack gap-2 fs-2" data-item-date="24 July">
                                    <i class="ti ti-calendar fs-5"></i> 24 July
                                  </span>
                                </div>
                                <div class="tb-section-2">
                                  <span class="badge text-bg-success fs-1">Design</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-item="item-pending" class="task-list-container" data-action="sorting">
                    <div class="connect-sorting connect-sorting-done">
                      <div class="task-container-header">
                        <h6 class="item-head mb-0 fs-4 fw-semibold" data-item-title="Done">Done</h6>
                        <div class="hstack gap-2">
                          <div class="dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <i class="fa-solid fa-ellipsis" style="color: #fff;"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                              <a class="dropdown-item list-edit" href="javascript:void(0);">Edit</a>
                              <a class="dropdown-item list-delete" href="javascript:void(0);">Delete</a>
                              <a class="dropdown-item list-clear-all" href="javascript:void(0);">Clear All</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="connect-sorting-content" data-sortable="true">
                        <div data-draggable="true" class="card img-task">
                          <div class="card-body">
                            <div class="task-header">
                              <div>
                                <h4 data-item-title="Usability testing">
                                  Usability testing</h4>
                              </div>
                              <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <i class="fa-solid fa-ellipsis" style="color: #fff;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                  <a class="dropdown-item kanban-item-edit cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-pencil fs-5"></i>Edit
                                  </a>
                                  <a class="dropdown-item kanban-item-delete cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-trash fs-5"></i>Delete
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="task-content p-0">
                              <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/backgrounds/profilebg.jpg" class="img-fluid" alt="scrumboard">
                            </div>
                            <div class="task-body">
                              <div class="task-bottom">
                                <div class="tb-section-1">
                                  <span class="hstack gap-2 fs-2" data-item-date="24 July">
                                    <i class="ti ti-calendar fs-5"></i> 24 July
                                  </span>
                                </div>
                                <div class="tb-section-2">
                                  <span class="badge text-bg-info fs-1">Research</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div data-draggable="true" class="card">
                          <div class="card-body">
                            <div class="task-header">
                              <div>
                                <h4 data-item-title="Introduce new navigation">
                                  Introduce new navigation</h4>
                              </div>
                              <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <i class="fa-solid fa-ellipsis" style="color: #fff;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                  <a class="dropdown-item kanban-item-edit cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-pencil fs-5"></i>Edit
                                  </a>
                                  <a class="dropdown-item kanban-item-delete cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-trash fs-5"></i>Delete
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="task-body">
                              <div class="task-bottom">
                                <div class="tb-section-1">
                                  <span class="hstack gap-2 fs-2" data-item-date="24 July">
                                    <i class="ti ti-calendar fs-5"></i> 24 July
                                  </span>
                                </div>
                                <div class="tb-section-2">
                                  <span class="badge text-bg-danger fs-1">Data science</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div data-draggable="true" class="card">
                          <div class="card-body">
                            <div class="task-header">
                              <div>
                                <h4 data-item-title="Branding visual identity">
                                  Branding visual identity</h4>
                              </div>
                              <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <i class="fa-solid fa-ellipsis" style="color: #fff;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                  <a class="dropdown-item kanban-item-edit cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-pencil fs-5"></i>Edit
                                  </a>
                                  <a class="dropdown-item kanban-item-delete cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-trash fs-5"></i>Delete
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="task-body">
                              <div class="task-bottom">
                                <div class="tb-section-1">
                                  <span class="hstack gap-2 fs-2" data-item-date="24 July">
                                    <i class="ti ti-calendar fs-5"></i> 24 July
                                  </span>
                                </div>
                                <div class="tb-section-2">
                                  <span class="badge text-bg-primary fs-1">Branding</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div data-draggable="true" class="card">
                          <div class="card-body">
                            <div class="task-header">
                              <div>
                                <h4 data-item-title="Competitor research">
                                  Competitor research</h4>
                              </div>
                              <div class="dropdown">
                                <a class="dropdown-toggle" href="javascript:void(0)" role="button" id="dropdownMenuLink-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <i class="fa-solid fa-ellipsis" style="color: #fff;"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink-1">
                                  <a class="dropdown-item kanban-item-edit cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-pencil fs-5"></i>Edit
                                  </a>
                                  <a class="dropdown-item kanban-item-delete cursor-pointer d-flex align-items-center gap-1" href="javascript:void(0);">
                                    <i class="ti ti-trash fs-5"></i>Delete
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="task-content">
                              <p class="mb-0" data-item-text="research competitors and identify weakness and strengths each of them. comparing their product features, quelity...">
                                research competitors and identify weakness and strengths each of them. comparing their
                                product features, quelity...
                              </p>
                            </div>
                            <div class="task-body">
                              <div class="task-bottom">
                                <div class="tb-section-1">
                                  <span class="hstack gap-2 fs-2" data-item-date="24 July">
                                    <i class="ti ti-calendar fs-5"></i> 24 July
                                  </span>
                                </div>
                                <div class="tb-section-2">
                                  <span class="badge text-bg-warning fs-1">UX stages</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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

  <!-- solar icons -->
  <script src="../../../../cdn.jsdelivr.net/npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/jquery-ui/dist/jquery-ui.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/apps/kanban.js"></script>
</body>


<!-- Mirrored from bootstrapdemos.adminmart.com/modernize/dist/dark/app-kanban.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2024 21:13:17 GMT -->
</html>