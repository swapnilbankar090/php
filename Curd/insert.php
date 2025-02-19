<?php
include_once './includes/header.php';
include_once './config/database.php';
if(isset($_POST['name'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];

    $sql = "INSERT INTO users (name, email, age, dob, mobile) 
    VALUES ('$name', '$email', '$age', '$dob', '$mobile')";
        $result = $conn->query($sql);

        if ($result) {
            echo "<script>alert('Data inserted successfully!'); window.location.href='insert.php';</script>";
         } else {
             echo "<script>alert('Error inserting data: " . $conn->error . "'); window.location.href='insert.php';</script>";
            }
    }

?>

<div class="container mt-4">
    <h2 class="text-center">Add New User</h2>
    <div class="card p-4">
        <form action="./insert.php" method="POST">
            <div class="mb-3">
                <label>Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label>Age:</label>
                <input type="number" class="form-control" name="age" required>
            </div>
            <div class="mb-3">
                <label>DOB:</label>
                <input type="date" class="form-control" name="dob" required>
            </div>
            <div class="mb-3">
                <label>Mobile No:</label>
                <input type="text" class="form-control" name="mobile" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>