// delete_note.php
<?php
include('db.php'); // Adjust with your actual database connection file

if (isset($_GET['id'])) {
    $noteId = $_GET['id'];

    // Delete query
    $query = "DELETE FROM notes WHERE id = $noteId";
    
    if (mysqli_query($conn, $query)) {
        // Redirect back to the notes page after deletion
        header('Location: app-notes.php'); // Adjust with the actual page name
        exit();
    } else {
        echo "Error deleting note: " . mysqli_error($conn);
    }
}
?>
