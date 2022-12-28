<?php
include("config.php");
$pid = $_GET['id'];
$sql = "DELETE FROM packages WHERE pid = {$pid}";
$result = mysqli_query($con, $sql);
if ($result == true) {
	$msg = "<p class='alert alert-success'>Packages Deleted</p>";
	header("Location:packageview.php?msg=$msg");
} else {
	$msg = "<p class='alert alert-warning'>Packages Not Deleted</p>";
	header("Location:packageview.php?msg=$msg");
}
mysqli_close($con);