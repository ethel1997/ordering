<?php

if (isset($_POST['submit'])) 
{
	include('config.php');

	$id = mysqli_real_escape_string($database, $_POST['userid']);
	$fname = mysqli_real_escape_string($database, $_POST['fname']);
	$mname = mysqli_real_escape_string($database, $_POST['mname']);
	$lname = mysqli_real_escape_string($database, $_POST['lname']);
	$age = mysqli_real_escape_string($database, $_POST['age']);
	$address = mysqli_real_escape_string($database, $_POST['address']);
	$email = mysqli_real_escape_string($database, $_POST['email']);
	$contactno = mysqli_real_escape_string($database, $_POST['contactno']);
	$username = mysqli_real_escape_string($database, $_POST['username']);
	$password = mysqli_real_escape_string($database, $_POST['password']);

	$sql = "UPDATE user SET fname='$fname', mname='$mname', lname='$lname', age='$age', address='$address', email='$email', contactno='$contactno',username='$username',password='$password' WHERE id='$id'";
	mysqli_query($database, $sql);

	echo "<script>alert('Profile Updated'); window.location.href='muaedtiprofile.php'</script>";
}

?>