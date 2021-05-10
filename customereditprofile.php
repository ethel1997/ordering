<?php
	session_start();

	if (!isset($_SESSION['id'])) 
	{
		header('Location: hompage.php');
	}

	include('config.php');

	$id = $_SESSION['id'];

	$result = mysqli_query($database, "SELECT * FROM user WHERE id = '$id'");
	while ($row = mysqli_fetch_array($result)) 
	{
		$userid = $row['id'];
		$fname = $row['fname'];
		$mname = $row['mname'];
		$lname = $row['lname'];
		$age = $row['age'];
		$gender = $row['gender'];
		$address = $row['address'];
		$email = $row['email'];
		$contactno = $row['contactno'];
		$username = $row['username'];
		$password = $row['password'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
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
		<h3>Welcome <?php echo $fname ?></h3>
		<a href="customerhome.php">Home</a>&nbsp;&nbsp;<a href="logout.php">Logout</a><br><br><br><br><br>
		    &nbsp;&nbsp;<a href="customerviewmua.php">View Make-Up Artists</a>
			&nbsp;&nbsp;<a href="cusbooking.php">View My Bookings</a>
			&nbsp;&nbsp;<a href="customereditprofile.php">Edit Profile</a>
		<h3>Edit Profile</h3><br>
		<form action="customeredit-profile.php" method="post" enctype="multipart/form-data">
			
				<table>
					<tr>
						<td>First Name:</td>
						<td><input type="text" name="fname" value=<?php echo $fname; ?>></td>
					</tr>
					<tr>
						<td>Middle Name:</td>
						<td><input type="text" name="mname" value=<?php echo $mname; ?>></td>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td><input type="text" name="lname" value=<?php echo $lname; ?>></td>
					</tr>
					<tr>
						<td>Age:</td>
						<td><input type="text" name="age" value=<?php echo $age; ?>></td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td><input type="text" name="gender" value=<?php echo $gender; ?>></td>
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
						<td>Username:</td>
						<td><input type="text" name="username" value=<?php echo $username; ?>></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="text" name="password" value=<?php echo $password; ?>></td>
					</tr>
					<tr>
						<input type="hidden" name="userid" value=<?php echo $userid; ?>>
						<td align="center" colspan="2"><br><input type="submit" name="submit" value="Submit"></td>
					</tr>
				</table>
			</div>
		</form>
	</center>
</body>
</html>