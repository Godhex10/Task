<?php
session_start(); // Start the session to store user information

// Include the database connection file
include './db.php'; // Make sure to include your MySQLi connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $username = isset($_POST['username']) ? $_POST['username'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;

    // Check if both fields are filled
    if (!$username || !$password) {
        echo "Please fill in all fields!";
        exit();
    }

    // Query the database to check if the user exists
    $query = "SELECT id, password FROM users WHERE username = ?";
    
    // Prepare and bind the statement
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        // Check if the user exists
        if ($stmt->num_rows > 0) {
            // Bind the result variables
            $stmt->bind_result($id, $stored_password);
            $stmt->fetch();

            // Compare the provided password with the stored password
            if ($password === $stored_password) {
                // Password matches, set session and redirect to main dashboard
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $username;
                header('Location: index.php'); // Redirect to the dashboard
                exit();
            } else {
                // Incorrect password
                echo "Incorrect password!";
            }
        } else {
            // User not found
            echo "User not found!";
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing the query!";
    }

    // Close the connection
    $conn->close();
}
?>
