<?php
session_start();

include('config.php');

$id = $_SESSION['id'];
$fname = $_SESSION['fname'];

if(isset($_POST['dis']))
{
	$dis = $_POST['dis'];
	$displayworks = "SELECT * from applymua where fname like '%$dis%' || lname like '%$dis%' ";
	$disworks = mysqli_query($database, $displayworks);
	$rows = mysqli_num_rows($disworks);

		if($rows == 0)
		{
			echo '<center><h3>record not found...</h3></center>';
			echo '<center><h4><a href="customerviewmua.php">refresh</h4></center>';
		}
}
else
{
	$displayworks = "SELECT * from applymua WHERE status = 'Approved' order by id desc";
	$disworks = mysqli_query($database, $displayworks);
}
?>
<html>
<head>
	<title>View Make-Up Artists</title>
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
		<br>
		<h3>Welcome <?php echo $fname ?></h3>
			<a href="customerhome.php">Home</a>&nbsp;&nbsp;<a href="logout.php">Logout</a><br><br><br><br><br>
			&nbsp;&nbsp;<a href="customerviewmua.php">View Make-Up Artists</a>
			&nbsp;&nbsp;<a href="cusbooking.php">View My Bookings</a>
			&nbsp;&nbsp;<a href="customereditprofile.php">Edit Profile</a>
		<h3>List of Make-Up Artists</h3><br>
	<form action="customerviewmua.php" method="post">
		<input type="text" name="dis" placeholder="Search"/>
		<input type="submit" name="display" value="Search"/>
	</form>
	<table border="1">
		<tr bgcolor="gray">
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Contact Number</th>
			<th>Price/Talent Fee</th>
			<th>Details</th><br><br>
		</tr>

		<?php
			while ($diswrk = mysqli_fetch_array($disworks))
			{
		?>
		<tr>
			<tr bgcolor='white'>
			<td><?php echo $diswrk['fname'];?></td>
			<td><?php echo $diswrk['lname'];?></td>
			<td><?php echo $diswrk['email'];?></td>
			<td><?php echo $diswrk['contactno'];?></td>
			<td><?php echo $diswrk['price'];?></td>
			<td><a href="muadetails.php?id=<?php echo $diswrk['id'] ?>">VIEW MORE</td>
		<?php } ?>
	</a></tr>
	</table><br><br><br>
	</center>
	</div>
	
	</div>
</body>
</html>