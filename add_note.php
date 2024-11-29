<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Include database connection
    include 'db.php';

    $title = $_POST['title'];
    $content = $_POST['content'];
    $importance = $_POST['importance'];

    $stmt = $conn->prepare("INSERT INTO notes (title, content, importance) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $content, $importance);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }

    $stmt->close();
    $conn->close();
}
?>
