<?php
	
	session_start();

	if (!isset($_SESSION['fname'])) 
	{
		
	}
	else
	{
		if ($_SESSION['type'] == 'admin') 
		{
			header("Location: adminhome.php");
		}
		elseif ($_SESSION['type'] == 'customer') 
		{
			header("Location: customerhome.php");
		}
		elseif ($_SESSION['type'] == 'Mua') 
		{
			header("Location: muahome.php");
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>index</title>
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
		
				<br><br><br>
					<h1><i>Glam System</i></h1><br><br>
			<div style="border: solid 2px; width: 25%; height: auto; margin: 0 auto; border-radius: 4px;">
				<form action="login.php" method="post">
				<table style="text-align: center;"><br><br>
						
						<tr>
							<td>Username: </td>
							<td><input type="text" name="username" required="required"></td>
						</tr>
						<tr>
							<td>Password: </td>
							<td><input type="password" name="password" required="required"></td>
						</tr>
						<tr>
							<td align="center" colspan="2"><br><input type="submit" name="submit" value="Login"></td>
						</tr>
						</center>
					</table>
					<br><br>
			</div>
			<br>
					<a href="customersign.php" style="color: blue">Customer Sign-up Here!</a>
					<br><br>
					<a href="muasign.php" style="color: blue">Make-Up Artist Sign-up Here!</a>
				</form>
			
	</center>

</body>
</html>