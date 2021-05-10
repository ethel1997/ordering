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

	$result = mysqli_query($database, "SELECT * FROM bookform WHERE fname='$fname' ORDER BY status DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Application</title>
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
			<h3>My Booking</h3>
			<table border="1">
				<tr bgcolor="gray">
					<td style="color: black">First Name</td>
					<td style="color: black">Last Name</td>
					<td style="color: black">Middle Name</td>
					<td style="color: black">Address</td>
					<td style="color: black">Contact Number</td>
					<td style="color: black">Date of Booking</td>
					<td style="color: black">Time of Booking</td>
					<td style="color: black">Make-Up Artists Email</td>
					<td style="color: black">Status</td>
					<td style="color: black">Action</td>
				</tr>
				<?php
					while ($row = mysqli_fetch_array($result)) 
					{
						$timeob=$row['timeob'];
						echo "<tr>";
						echo "<tr bgcolor='white'>";
						echo "<td>".$row['fname']."</td>";
						echo "<td>".$row['lname']."</td>";
						echo "<td>".$row['mname']."</td>";
						echo "<td>".$row['address']."</td>";
						echo "<td>".$row['contactno']."</td>";
						echo "<td>".$row['dates']."</td>";
						echo "<td>".date("h:i a",strtotime("$timeob"))."</td>";
						echo "<td>".$row['MEmail']."</td>";
						echo "<td>".$row['status']."</td>";
						echo "<td><a href=\"cancelbooking.php?id=$row[id]\"onClick=\"return confirm('Are you sure you want to cancel?')\">Cancel</a></td>";
						echo "<td><a href=\"custdelete.php?id=$row[id]\"onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
						

					}
				?>
			</table>
		</center>
	</div>

</body>
</html>