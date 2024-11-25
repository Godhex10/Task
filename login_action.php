<?php
session_start(); // Start the session to store user information

include './includes/db.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Use null-safe operator to handle missing keys
    $username = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null;

    if (!$username || !$password) {
        echo "Please fill in all fields!";
        exit();
    }

    // Query the database to check if the user exists
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // User exists, fetch the data
        $stmt->bind_result($id, $stored_password);
        $stmt->fetch();

        // Compare plain text passwords
        if ($password === $stored_password) {
            // Password matches, set session and redirect to main dashboard
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            header('Location: index.php'); // Redirect to main dashboard page
            exit();
        } else {
            // Incorrect password
            echo "Incorrect password!";
        }
    } else {
        // User does not exist
        echo "User not found!";
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>
