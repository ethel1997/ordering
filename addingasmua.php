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
	$gender = mysqli_real_escape_string($database, $_POST['gender']);
	$contactno = mysqli_real_escape_string($database, $_POST['contactno']);
	$price = mysqli_real_escape_string($database, $_POST['price']);
	$status = "Pending";

	$sql = "INSERT INTO applymua (fname, mname, lname, age, address, email, gender, contactno, price,status) VALUES ('$fname', '$mname', '$lname', '$age', '$address', '$email', '$gender', '$contactno', '$price','$status')";
	mysqli_query($database, $sql);

	echo "<script>alert('Submitted...'); window.location.href='applyasmua.php'</script>";
}

?>