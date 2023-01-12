<?php
$ser = 'localhost';
$user = 'root';
$pas = '';
$database = 'mydb1';
$conn = mysqli_connect($ser, $user, $pas, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
