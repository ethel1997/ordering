<?php 
session_start();

include ('config.php');

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$result = "SELECT * FROM applymua WHERE id = $id";
	$results = mysqli_query($database, $result) or die(mysqli_error($database));
	$res = mysqli_fetch_array($results);
}
?>

<html>
<head>
	<title>Make-Up Artist information</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="workinfo">
		<center><form>
			<h3 style="padding-top: 20px">WORKER DETAILS INFORMATION</h3>
			<a href="userhome.php">Home </a>&emsp;<a href="customerviewmua.php">Back</a>&emsp;<a href="logout.php">Logout</a><br>
			<table><br>
				<tr><td>First Name</td><td>:</td><td style="color: blue"><?php echo $res['fname'];?></td></tr>

				<tr><td>Middle Name</td><td>:</td><td style="color: blue"><?php echo $res['mname'];?></td></tr>

				<tr><td>Last Name</td><td>:</td><td style="color: blue"><?php echo $res['lname'];?></td></tr>

				<tr><td>Age</td><td>:</td><td style="color: blue"><?php echo $res['age'];?></td></tr>

				<tr><td>Address</td><td>:</td><td style="color: blue"><?php echo $res['address'];?></td></tr>

				<tr><td>Email</td><td>:</td><td style="color: blue"><?php echo $res['email'];?></td></tr>

				<tr><td>Gender</td><td>:</td><td style="color: blue"><?php echo $res['gender'];?></td></tr>

				<tr><td>Contact #</td><td>:</td><td style="color: blue"><?php echo $res['contactno'];?></td></tr>
				<tr><td>Price</td><td>:</td><td style="color: blue"><?php echo $res['price'];?></td></tr>

			</table>

			<a href="book.php">Book this Worker</a>

			</div>
			
		</form></center>
	</div>

</body>
</html>