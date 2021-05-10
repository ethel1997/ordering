<?php

include('config.php');

if (isset($_POST['submit'])) 
{
	$fname = mysqli_real_escape_string($database, $_POST['fname']);
	$lname = mysqli_real_escape_string($database, $_POST['lname']);
	$mname = mysqli_real_escape_string($database, $_POST['mname']);
	$age = mysqli_real_escape_string($database, $_POST['age']);
	$address = mysqli_real_escape_string($database, $_POST['address']);
	$email = mysqli_real_escape_string($database, $_POST['email']);
	$contactno = mysqli_real_escape_string($database, $_POST['contactno']);
	$MEmail = mysqli_real_escape_string($database, $_POST['MEmail']);
	$dates = mysqli_real_escape_string($database, $_POST['dates']);
	$timeob = mysqli_real_escape_string($database, $_POST['timeob']);
	$status = "pending...";

	$checkstat = mysqli_query($database,"SELECT * FROM bookform where timeob = '$timeob' and dates = '$dates' and status='Approved' and MEmail='$MEmail'");
	$check = mysqli_num_rows($checkstat);

	$sql = "SELECT * FROM bookform";
	$result = mysqli_query($database,$sql);

	while ($row = mysqli_fetch_array($result))
	{
		$timeobs = $row['timeob'];
		$datess = $row['dates']; 
	}	
	if($check!=0)
	{
		echo "<script>alert('Already have an appointment...'); window.location.href='customerviewmua.php'</script>";
	}

else
{
	$sql = "INSERT INTO bookform(fname, lname,mname, age, address, email, contactno,MEmail, dates,timeob, status) VALUES ('$fname', '$lname','$mname', '$age', '$address', '$email', '$contactno','$MEmail', '$dates','$timeob', '$status')";
	mysqli_query($database, $sql);

	echo "<script>alert('Booking Added...'); window.location.href='customerhome.php'</script>";
}
}

?>