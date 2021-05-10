<?php
	session_start();

	if (!isset($_SESSION['id'])) 
	{
		header('Location: index.php');
	}

	include('config.php');

	$id = $_SESSION['id'];
	$fname = $_SESSION['fname'];
	$email = $_SESSION['email'];

	$result = mysqli_query($database, "SELECT * FROM bookform WHERE Memail='$email' ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Booking</title>
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
				<tr bgcolor="gray">
					<td>First Name</td>
					<td>Last Name</td>
					<td>Middle Name</td>
					<td>Age</td>
					<td>Address</td>
					<td>Email</td>
					<td>Contact Number</td>
					<td>Date of Booking</td>
					<td>Time of Booking</td>
					<td>Status</td>
					<td>Action</td>
				</tr>

				<?php
				while ($res = mysqli_fetch_array($result)) 
				{
					$timeob=$res['timeob'];
					echo "<tr>";
					echo "<tr bgcolor='white'>";
					echo "<td>".$res['fname']."</td>";
					echo "<td>".$res['lname']."</td>";
					echo "<td>".$res['mname']."</td>";
					echo "<td>".$res['age']."</td>";
					echo "<td>".$res['address']."</td>";
					echo "<td>".$res['email']."</td>";
					echo "<td>".$res['contactno']."</td>";
					echo "<td>".$res['dates']."</td>";
					echo "<td>".date("h:i a",strtotime("$timeob"))."</td>";
					echo "<td>".$res['status']."</td>";
					echo "<td><a href=\"muaapprove.php?id=$res[id]\"onClick=\"return confirm('Are you sure you want to Approve?')\">Approve</a> | <a href=\"muadeny.php?id=$res[id]\"onClick=\"return confirm('Are you sure you want to deny?')\">Deny</a> | <a href=\"muadelete.php?id=$res[id]\"onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
				}
				?>

			</table>
		</center>
	</div>

</body>
</html>