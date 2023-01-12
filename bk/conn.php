<?php
$user = 'root';
$pas = '';
$ser = 'localhost';
$database = 'job';

// Create connection
$conn = mysqli_connect($ser, $user, $pas, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
