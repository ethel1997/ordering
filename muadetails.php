<?php 
session_start();

include ('config.php');


	$id = $_GET['id'];
	$result = "SELECT * FROM applymua WHERE id = $id";
	$results = mysqli_query($database, $result) or die(mysqli_error($database));
	$res = mysqli_fetch_array($results);

?>

<html>
<head>
	<title>mua details information</title>
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
		<div>
		<center><form>
			<a href="customerhome.php">Home </a>&nbsp;&nbsp;<a href="logout.php">Logout</a>
			<br><br><br>
			&nbsp;&nbsp;<a href="customerviewmua.php">Back</a><br><br><br><br>
			&nbsp;&nbsp;<a href="customerviewmua.php">View Make-Up Artists</a>
			&nbsp;&nbsp;<a href="cusbooking.php">View My Bookings</a>
			&nbsp;&nbsp;<a href="customereditprofile.php">Edit Profile</a>
			<table><br><br>
				<tr><td>First Name</td><td>:</td><td><?php echo $res['fname'];?></td></tr>

				<tr><td>Middle Name</td><td>:</td><td><?php echo $res['mname'];?></td></tr>

				<tr><td>Last Name</td><td>:</td><td><?php echo $res['lname'];?></td></tr>

				<tr><td>Age</td><td>:</td><td><?php echo $res['age'];?></td></tr>

				<tr><td>Address</td><td>:</td><td><?php echo $res['address'];?></td></tr>

				<tr><td>Email</td><td>:</td><td><?php echo $res['email'];?></td></tr>

				<tr><td>Gender</td><td>:</td><td><?php echo $res['gender'];?></td></tr>

				<tr><td>Contact #</td><td>:</td><td><?php echo $res['contactno'];?></td></tr>
				<tr><td>Price</td><td>:</td><td><?php echo $res['price'];?></td></tr>

			</table>
			<br>
<a href="book.php?mua=<?php echo $id; ?>">Book</a>

			</div>
			
		</form></center>
	</div>

</body>
</html>