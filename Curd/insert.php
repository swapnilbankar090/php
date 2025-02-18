<?php
include_once './config/database.php';
include_once './includes/header.php';

$sql = "INSERT INTO users (name, email, age, dob, mobile) VALUES
        ('Rahulrou', 'rahul.sharma343@example.com', 25, '1996-05-14', '9876743210')";

$result = $conn->query($sql);

if ($result) {
    echo "Data inserted successfully!";
} else {
    echo "Error inserting data: " . $conn->error;
}
?>
