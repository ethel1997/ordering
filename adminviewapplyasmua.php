<?php
	session_start();

	if (!isset($_SESSION['id'])) 
	{
		header('Location: index.php');
	}

	include('config.php');

	$id = $_SESSION['id'];
	$fname = $_SESSION['fname'];

	$result = mysqli_query($database, "SELECT * FROM applymua ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Appied MUA</title>
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
			<h3> Welcome <?php echo $fname ?></h3>
			<a href="adminhome.php">Home</a>&nbsp;&nbsp;<a href="logout.php">Logout</a><br><br><br><br><br>
		&nbsp;&nbsp;<a href="adminviewmuas.php">View List of Make-Up Artists</a>
		&nbsp;&nbsp;<a href="adminviewcustomers.php">View List of Customer</a>
		&nbsp;&nbsp;<a href="adminviewapplyasmua.php">View Applications</a><br><br><br>
			<h2>Make-Up Artists Apllication</h2>
			<table border="1">
				<tr bgcolor="gray">
					<td>First Name</td>
					<td>Last Name</td>
					<td>Middle Name</td>
					<td>Address</td>
					<td>Email Address</td>
					<td>Age</td>
					<td>Contact Number</td>
					<td>Gender</td>
					<td>Price</td>
					<td>Status</td>
					<td>Action</td>

				</tr>

				<?php
				while ($res = mysqli_fetch_array($result)) 
				{
					echo "<tr bgcolor='white'>";
					echo "<td bgcolor='white'>".$res['fname']."</td>";
					echo "<td>".$res['lname']."</td>";
					echo "<td>".$res['mname']."</td>";
					echo "<td>".$res['address']."</td>";
					echo "<td>".$res['email']."</td>";
					echo "<td>".$res['age']."</td>";
					echo "<td>".$res['contactno']."</td>";
					echo "<td>".$res['gender']."</td>";
					echo "<td>".$res['price']."</td>";
					echo "<td>".$res['status']."</td>";
					echo "<td><a href=\"adminapprove.php?id=$res[id]\"onClick=\"return confirm('Are you sure you want to Approve?')\">Approve</a> | <a href=\"admindeny.php?id=$res[id]\"onClick=\"return confirm('Are you sure you want to Deny?')\">Deny</a> | <a href=\"admindeletemua.php?id=$res[id]\"onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
				}
				?>

			</table>
		</center>
	</div>

</body>
</html>