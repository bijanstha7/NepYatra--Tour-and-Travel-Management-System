<?php
include("config.php");
$aid = $_GET['id'];


$sql = "SELECT * FROM about where id='$aid'";
$result = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($result))
	{
	  $img=$row["image"];
	}
@unlink('upload/'.$img);




$msg="";
$sql = "DELETE FROM about WHERE id = {$aid}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>About Deleted</p>";
	header("Location:aboutview.php?msg=$msg");
}
else
{
	$msg="<p class='alert alert-warning'>About not Deleted</p>";
		header("Location:aboutview.php?msg=$msg");
}

mysqli_close($con);