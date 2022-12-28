<?php
include("config.php");
$pid = $_GET['id'];
$sql = "DELETE FROM shopnow WHERE id = {$pid}";
$result = mysqli_query($con, $sql);
if ($result == true) {
    $msg = "<p class='alert alert-success'>Order Deleted</p>";
    header("Location:shopview.php?msg=$msg");
} else {
    $msg = "<p class='alert alert-warning'>order Not Deleted</p>";
    header("Location:shopview.php?msg=$msg");
}
mysqli_close($con);