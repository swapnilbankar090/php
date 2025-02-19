<?php
include_once './config/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Use prepared statements to prevent SQL Injection
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "<script>alert('User deleted successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error deleting user: " . $conn->error . "'); window.location.href='index.php';</script>";
    }
} else {
    echo "<script>alert('Invalid Request!'); window.location.href='index.php';</script>";
}
?>
