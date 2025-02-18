<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_app";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*
echo "connection success";

echo "<br>";

$result = $conn-> query("show tables")-> fetch_all();
print_r($result);
*/
?>
