<?php
include("config.php");
$id = $_GET['id'];
$sql = "DELETE FROM book WHERE id = {$id}";
$result = mysqli_query($con, $sql);
if ($result == true) {
    $msg = "<p class='alert alert-success'>Booking canceled</p>";
    header("Location:bookview.php?msg=$msg");
} else {
    $msg = "<p class='alert alert-warning'>Booking Not Canceled</p>";
    header("Location:bookview.php?msg=$msg");
}
mysqli_close($con);