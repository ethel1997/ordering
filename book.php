<?php
	session_start();

	if (!isset($_SESSION['id'])) 
	{
		header('Location: homepage.php');
	}

	include('config.php');

	$id = $_SESSION['id'];

	$result = mysqli_query($database, "SELECT * FROM user WHERE id='$id'");
	while ($row = mysqli_fetch_array($result)) 
	{
		$fname = $row['fname'];
		$lname = $row['lname'];
		$mname = $row['mname'];
		$age = $row['age'];
		$address = $row['address'];
		$email = $row['email'];
		$contactno = $row['contactno'];
	}

	$mua = $_GET['mua'];
	$muadata = mysqli_query($database, "SELECT * FROM applymua WHERE id = '$mua'");
	while($muarow = mysqli_fetch_array($muadata)) {
		$MEmail = $muarow['email'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Book Form</title>
		<style>
body{
  background-image: url("mua6.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>
	<div class="container">
		<center>
			<br><br>
			<a href="customerhome.php">Home</a>&nbsp;&nbsp;<a href="logout.php">Logout</a><br><br><br><br><br>
			&nbsp;&nbsp;<a href="customerviewmua.php">View Make-Up Artists</a>
			&nbsp;&nbsp;<a href="cusbooking.php">View My Bookings</a>
			&nbsp;&nbsp;<a href="customereditprofile.php">Edit Profile</a>
			<h3>Add Booking</h3>
			<form action="addbooking.php" method="post">
				<table>
					<tr>
					<td><label style="color: blue">Make-Up Artist Email:&emsp;</label></td>
				    </tr>
					<tr>
						<td>Make-Up Artist Email:</td>
						<td><input type="text" name="MEmail" required="required" value="<?php echo $MEmail ?>"></td>
					</tr>
					<tr>
					 <td><label style="color: blue">Your Personal Information:</label><br></td>
					</tr>
					<tr>
						<td>First Name:</td>
						<td><input type="text" name="fname" value=<?php echo $fname; ?>></td>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td><input type="text" name="lname" value=<?php echo $lname; ?>></td>
					</tr>
						<tr>
						<td>Middle Name:</td>
						<td><input type="text" name="mname" value=<?php echo $mname; ?>></td>
					</tr>
					<tr>
						<td>Age:</td>
						<td><input type="text" name="age" value=<?php echo $age; ?>></td>
					</tr>
					<tr>
						<td>Address:</td>
						<td><input type="text" name="address" value=<?php echo $address; ?>></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text" name="email" value=<?php echo $email; ?>></td>
					</tr>
					<tr>
						<td>Contact:</td>
						<td><input type="number" name="contactno" value=<?php echo $contactno; ?>></td>
					</tr>
					<tr>
					<td><label style="color: blue">Fill In the Following:&emsp;</label></td>
				    </tr>
					<tr>
						<td>Booking Date:</td>
						<td><input type="date" name="dates" required="required"></td>
					</tr>
					<tr>
						<td>Booking Time:</td>
						<td><input type="time" name="timeob" required="required"></td>
					</tr>
				<tr>
				&nbsp;&nbsp;&nbsp;&nbsp;<td align="center" colspan="2"><input type="submit" name="submit" value="Add Booking"></td>
			   </tr>
			</form>
		</table>
		</center>
	</div>

</body>
</html>