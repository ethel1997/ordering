<?php

include('config.php');

if (isset($_GET['id'])) 
{
	$id = $_GET['id'];

	$sql = "DELETE FROM bookform WHERE id = '$id'";
	$res = mysqli_query($database, $sql);

	echo "<script>alert('deleted'); window.location.href='muaviewbooking.php';</script>";
}