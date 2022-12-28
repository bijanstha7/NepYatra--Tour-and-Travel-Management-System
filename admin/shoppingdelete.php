<?php
include("config.php");
$id = $_GET['id'];
$sql = "DELETE FROM shopnow WHERE id = {$id}";
$result = mysqli_query($con, $sql);
if ($result == true) {
    $msg = "<p class='alert alert-success'>Order canceled</p>";
    header("Location:shopingview.php?msg=$msg");
} else {
    $msg = "<p class='alert alert-warning'>Order Not Canceled</p>";
    header("Location:shopingview.php?msg=$msg");
}
mysqli_close($con);