<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_unset();  // Unset session variables
    session_destroy();  // Destroy the session
    header('Location: login.php'); // Redirect to login page
    exit();
} else {
    // Redirect to login page if accessed directly
    header('Location: login.php');
    exit();
}
?>
