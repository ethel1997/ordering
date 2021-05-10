<?php

include('config.php');

if (isset($_GET['id'])) 
{
	$id = $_GET['id'];

	$sql = "DELETE FROM applymua WHERE id = '$id'";
	$res = mysqli_query($database, $sql);

	echo "<script>alert('Deleted'); window.location.href='adminviewapplyasmua.php';</script>";
}