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
	<title>admin home</title>
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
	<center>
	<div class="container">
		<h3>Welcome <?php echo $fname ?></h3>
		<a href="adminhome.php">Home</a>&nbsp;&nbsp;<a href="logout.php">Logout</a><br><br><br><br><br>
		&nbsp;&nbsp;<a href="adminviewmuas.php">View List of Make-Up Artists</a>
		&nbsp;&nbsp;<a href="adminviewcustomers.php">View List of Customer</a>
		&nbsp;&nbsp;<a href="adminviewapplyasmua.php">View Applications</a><br><br><br>
			<br><br><br><br><br>
			<h1>Welcome To Glam System!!</h1>
	</div>
</center>


</body>
</html>