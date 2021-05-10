<?php
	session_start();

	if (!isset($_SESSION['id'])) 
	{
		header('Location: index.php');
	}

	include('config.php');

	$id = $_SESSION['id'];
	$fname = $_SESSION['fname'];

	$app = mysqli_query($database, "SELECT * FROM user WHERE id='$id'");
	while ($appRow = mysqli_fetch_array($app)) 
	{
		$contactno = $appRow['contactno'];
	}

	$result = mysqli_query($database, "SELECT * FROM applymua WHERE fname='$fname' ORDER BY status DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Application</title>
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
			<br><br>
			<table border="1">
				<tr>
					<td bgcolor="gray">First Name</td>
					<td bgcolor="gray">Last Name</td>
					<td bgcolor="gray">Email Address</td>
					<td bgcolor="gray">Contact Number</td>
					<td bgcolor="gray">Price</td>
					<td bgcolor="gray">Status</td>
					<td bgcolor="gray">Action</td>
				</tr>
				<?php
					while ($row = mysqli_fetch_array($result)) 
					{
						$id = $row['id'];
						$fname = $row['fname'];
						$lname = $row['lname'];
						$email = $row['email'];
						$contactno = $row['contactno'];
						$price = $row['price'];
						$status = $row['status'];


						echo "<tr>
						<tr bgcolor='white'>
								<td>".$fname."</td>
								<td>".$lname."</td>
								<td>".$email."</td>
								<td>".$contactno."</td>
								<td>".$price."</td>
								<td>".$status."</td>
								<td><a href=\"muacancel.php?id=$row[id]\">Cancel</a> | <a href=\"muadelete2.php?id=$row[id]\"onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>
							</tr>";

					}
				?>
			</table>
		</center>
	</div>

</body>
</html>