<?php
	session_start();

	if (!isset($_SESSION['id'])) 
	{
		header('Location: index.php');
	}

	include('config.php');

	$id = $_SESSION['id'];

	$result = mysqli_query($database, "SELECT * FROM user WHERE id = '$id'");
	while ($row = mysqli_fetch_array($result)) 
	{
		$fname = $row['fname'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>mua home</title>
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
				<br><br><br><br><br>
			<h1>Welcome To Glam System!!</h1>
		</center>
	</div>

</body>
</html>