<?php
include './config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];

    $stmt = $conn->prepare("UPDATE users SET name = ?, email = ?, age = ?, dob = ?, mobile = ? WHERE id = ?");
    $stmt->bind_param("ssissi", $name, $email, $age, $dob, $mobile, $id);

    if ($stmt->execute()) {
        echo "<script>alert('User updated successfully!'); window.location.href='index.php';</script>";
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
}
?>
