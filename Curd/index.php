<?php
include_once './includes/header.php';
include_once './config/database.php';

// Fetch all users
$sql = $conn->prepare("SELECT * FROM users");
$sql->execute();
$users = $sql->get_result();
?>

<div class="container mt-4">
    <h2 class="text-center">Users List</h2>
    <a href="./insert.php" class="btn btn-success mb-3">Add User</a>
    
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>DOB</th>
                    <th>Mobile</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $x) { ?>
                <tr>
                    <td><?= htmlspecialchars($x['id']) ?></td>
                    <td><?= htmlspecialchars($x['name']) ?></td>
                    <td><?= htmlspecialchars($x['email']) ?></td>
                    <td><?= htmlspecialchars($x['age']) ?></td>
                    <td><?= htmlspecialchars($x['dob']) ?></td>
                    <td><?= htmlspecialchars($x['mobile']) ?></td>
                    <td>
                        <a href="./update.php?id=<?= $x['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="./delete.php?id=<?= $x['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include './includes/footer.php'; ?>
