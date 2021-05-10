<?php
session_start();

include('config.php');

$id = $_SESSION['id'];
$fname = $_SESSION['fname'];
$result = mysqli_query($database, "SELECT * FROM applymua WHERE status = 'Approved' ORDER BY id DESC");

?>

<html>
<head>
	<title>List of Make-Up Artists</title>
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
			<h3>List of Make-Up Artists</h3>
			
		<table border="1" width="80%">
			<tr bgcolor="gray">
				<td>First Name</td>
				<td>Last Name</td>
				<td>Middle Name</td>
				<td>Age</td>
				<td>Address</td>
				<td>Email Address</td>
				<td>Contact</td>
				<td>Gender</td>
				<td>Action</td>
			</tr>

			<?php
			while ($res = mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<tr bgcolor='white'>";
				echo "<td>".$res['fname']."</td>";
				echo "<td>".$res['lname']."</td>";
				echo "<td>".$res['mname']."</td>";
				echo "<td>".$res['age']."</td>";
				echo "<td>".$res['address']."</td>";
				echo "<td>".$res['email']."</td>";
				echo "<td>".$res['contactno']."</td>";
				echo "<td>".$res['gender']."</td>";
				echo "<td><a href=\"admindeletemua.php?id=$res[id]\"onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			}

			?>
		</table>

		<br><br><br>


		</center>
	</div>

</body>
</html>