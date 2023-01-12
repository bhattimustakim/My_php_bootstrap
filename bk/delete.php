<?php
include "conn.php";


$id = $_GET['id'];
echo $id;
$del_query = "DELETE FROM `registration` WHERE id = '$id'";

$delet_data = mysqli_query($conn, $del_query);

if ($delet_data) {
    echo 'data deleted';
    header("Location: display.php");
} else {
    echo 'data not deleted';
}
