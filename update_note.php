<?php
include('db.php'); // Include the database connection file

if (isset($_POST['update'])) {
    // Get the data from the form
    $noteId = $_POST['note_id']; // Hidden input field for the note ID
    $noteTitle = $_POST['title'];
    $noteContent = $_POST['content'];
    $noteImportance = $_POST['importance'];

    // Update query
    $query = "UPDATE notes SET title = ?, content = ?, importance = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'sssi', $noteTitle, $noteContent, $noteImportance, $noteId);
        $execute = mysqli_stmt_execute($stmt);
        
        if ($execute) {
            // Optionally set a success message in session or query parameters
            header("Location: app-notes.php?update=success");
        } else {
            // Redirect with an error message
            header("Location: app-notes.php?update=error");
        }
        exit; // Ensure no further code executes
    } else {
        // Redirect with an error message for query preparation failure
        header("Location: app-notes.php?update=error");
        exit;
    }
}
?>
