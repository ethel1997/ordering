<?php 
include('config.php');

if (isset($_POST['submit'])) 
{
	$fname = mysqli_real_escape_string($database, $_POST['fname']);
	$mname = mysqli_real_escape_string($database, $_POST['mname']);
	$lname = mysqli_real_escape_string($database, $_POST['lname']);
	$age = mysqli_real_escape_string($database, $_POST['age']);
	$address = mysqli_real_escape_string($database, $_POST['address']);
	$email = mysqli_real_escape_string($database, $_POST['email']);
	$contactno = mysqli_real_escape_string($database, $_POST['contactno']);
	$gender = mysqli_real_escape_string($database, $_POST['gender']);
	$username = mysqli_real_escape_string($database, $_POST['username']);
	$password = mysqli_real_escape_string($database, $_POST['password']);
	$price = mysqli_real_escape_string($database, $_POST['price']);
	$type = "Mua";

	$display = "INSERT INTO user(fname, mname, lname, age, address, email, contactno, gender,username, password,price,type) values('$fname', '$mname', '$lname', '$age', '$address', '$email', '$contactno', '$gender','$username', '$password','$price', '$type')";
	$dis = mysqli_query($database, $display);

	echo "<script>alert('Signup Successful..'); window.location.href='index.php'</script>";
}



 ?>