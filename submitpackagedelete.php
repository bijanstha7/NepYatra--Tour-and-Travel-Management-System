<?php
include("config.php");
$pid = $_GET['id'];
$sql = "DELETE FROM book WHERE id = {$pid}";
$result = mysqli_query($con, $sql);
if ($result == true) {
	$msg = "<p class='alert alert-success'>Booking Deleted</p>";
	header("Location:feature.php?msg=$msg");
} else {
	$msg = "<p class='alert alert-warning'>Booking Not Deleted</p>";
	header("Location:feature.php?msg=$msg");
}
mysqli_close($con);