<?php
include_once './config/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare statement
    $user = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $user->bind_param("i", $id);
    $user->execute();
    $result = $user->get_result();
    $user_data = $result->fetch_assoc();
}

if ($user_data) {
    // echo "User ID: " . htmlspecialchars($user_data['id']) . "<br>";
    // echo "Name: " . htmlspecialchars($user_data['name']) . "<br>";
    // echo "Email: " . htmlspecialchars($user_data['email']) . "<br>";
    // echo "Age: " . htmlspecialchars($user_data['age']) . "<br>";
    // echo "DOB: " . htmlspecialchars($user_data['dob']) . "<br>";
    // echo "Mobile: " . htmlspecialchars($user_data['mobile']) . "<br>";
} else {
    echo "User not found!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 500px;
            margin-top: 50px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-primary {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Update User</h2>
    <form action="./updtaeprocess.php" method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($user_data['id']) ?>">

        <div class="mb-3">
            <label>Name:</label>
            <input type="text" class="form-control" name="name" value="<?= htmlspecialchars($user_data['name']) ?>" required>
        </div>

        <div class="mb-3">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" value="<?= htmlspecialchars($user_data['email']) ?>" required>
        </div>

        <div class="mb-3">
            <label>Age:</label>
            <input type="number" class="form-control" name="age" value="<?= htmlspecialchars($user_data['age']) ?>" required>
        </div>

        <div class="mb-3">
            <label>DOB:</label>
            <input type="date" class="form-control" name="dob" value="<?= htmlspecialchars($user_data['dob']) ?>" required>
        </div>

        <div class="mb-3">
            <label>Mobile:</label>
            <input type="text" class="form-control" name="mobile" value="<?= htmlspecialchars($user_data['mobile']) ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

