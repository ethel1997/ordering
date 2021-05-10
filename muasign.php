<!DOCTYPE html>
<html>
<head>
	<title>customer</title>
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
		<center>
		<h1>Sign-up</h1>
		<br><br>
		<div style="border: solid 2px; width: 25%; height: auto; margin: 0 auto; border-radius: 4px;">
			<form action="muaadding.php" method="post">
				<table>
					<h4>Fill In The Information</h4>
					<tr>
						<td>First Name: </td><td><input type="text" name="fname" required></td>
					</tr>
					<tr>
						<td>Last Name: </td><td><input type="text" name="lname" required></td>
					</tr>
					<tr>
						<td>Middle Name: </td><td><input type="text" name="mname" required></td>
					</tr>
					<tr>
						<td>Age: </td><td><input type="text" name="age" required></td>
					</tr>
					<tr>
						<td>Address: </td><td><input type="text" name="address" required></td>
					</tr>
					<tr>
						<td>Email Address: </td><td><input type="text" name="email" required></td>
					</tr>
					<tr>
						<td>Contact Number: </td><td><input type="text" name="contactno" required></td>
					</tr>
					<tr>
						<td>Gender: </td><td><input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female</td>
					</tr>
					<tr>
						<td>Username: </td><td><input type="text" name="username" required></td>
					</tr>
					<tr>
						<td>Password: </td><td><input type="password" name="password" required></td>
					</tr>
					<tr>
						<td>Price: </td><td><input type="number" name="price" required></td>
					</tr>
					<tr><td align="center" colspan="6"><input type="submit" name="submit" value="submit" style="font-family:Century Gothic,Arial" required="required"></td></tr>
				</table>
				<br>
				Already have an account? <a href="index.php">Login here!</a>
			</form>
		</div>
	</center>

</body>
</html>