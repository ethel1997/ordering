<?php
	session_start();

	if (!isset($_SESSION['id'])) 
	{
		header('Location: index.php');
	}

	include('config.php');

	$id = $_SESSION['id'];

	$result = mysqli_query($database, "SELECT * FROM user WHERE id='$id'");
	while ($row = mysqli_fetch_array($result)) 
	{
		$fname = $row['fname'];
		$mname = $row['mname'];
		$lname = $row['lname'];
		$age = $row['age'];
		$address = $row['address'];
		$email = $row['email'];
		$gender = $row['gender'];
		$contactno = $row['contactno'];
		$price = $row['price'];
		$username = $row['username'];
		$password = $row['password'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Apply</title>
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
		<a href="muahome.php">Home</a>&nbsp;&nbsp;<a href="logout.php">Logout</a><br><br><br><br><br>
			&nbsp;&nbsp;<a href="applyasmua.php">Apply As Make-Up Artist</a>
			&nbsp;&nbsp;<a href="viewapplyasmua.php">View Application</a>
			&nbsp;&nbsp;<a href="muaviewbooking.php">View Bookings</a>
			&nbsp;&nbsp;<a href="muaedtiprofile.php">Edit Profile</a>
		<br>
		<form action="addingasmua.php" method="post" enctype="multipart/form-data">
			<br>
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
						<td>Address:</td>
						<td><input type="text" name="address" value=<?php echo $address; ?>></td>
					</tr>
					<tr>
						<td>Email Address:</td>
						<td><input type="text" name="email" value=<?php echo $email; ?>></td>
					</tr>
					<tr>
						<td>Gender:</td>
						<td><input type="text" name="gender" value=<?php echo $gender; ?>></td>
					</tr>
					<tr>
						<td>Contact Number:</td>
						<td><input type="text" name="contactno" value=<?php echo $contactno; ?>></td>
					</tr>
					<tr>
						<td>Price:</td>
						<td><input type="number" name="price" value=<?php echo $price; ?>></td>
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
						<td align="center" colspan="2"><br><input type="submit" name="submit" value="Submit"></td>
					</tr>
				</table>
			</div>
		</form>
		</center>
	</div>

</body>
</html>