<?php
include "conn.php";


$id = $_GET['id'];
echo $id;
$del_query = "DELETE FROM `jobapplication` WHERE id = '$id'";

$delet_data = mysqli_query($conn, $del_query);

if ($delet_data) {
    echo 'data deleted';
    header("Location: job_application.php");
} else {
    echo 'data not deleted';
}
