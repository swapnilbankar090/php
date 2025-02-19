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
        <form action="./insert.php" method="POST" onsubmit="return validateForm()">
            <div class="mb-3">
                <label>Name:</label>
                <input type="text" class="form-control" name="name" id="name" required pattern="^[A-Za-z\s]{3,30}$">
            </div>
            <div class="mb-3">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="mb-3">
                <label>Age:</label>
                <input type="number" class="form-control" name="age" id="age" required min="1" max="120">
            </div>
            <div class="mb-3">
                <label>DOB:</label>
                <input type="date" class="form-control" name="dob" id="dob" required>
            </div>
            <div class="mb-3">
                <label>Mobile No:</label>
                <input type="text" class="form-control" name="mobile" id="mobile" required pattern="^[6-9]\d{9}$">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<script>
function validateForm() {
    let name = document.getElementById("name").value;
    let mobile = document.getElementById("mobile").value;
    let namePattern = /^[A-Za-z\s]{3,30}$/;
    let mobilePattern = /^[6-9]\d{9}$/;

    if (!namePattern.test(name)) return alert("Invalid Name"), false;
    if (!mobilePattern.test(mobile)) return alert("Invalid Mobile Number"), false;

    return true;
}
</script>
