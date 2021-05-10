<?php

	session_start();

	if (isset($_POST['submit'])) 
	{
		include('config.php');

		$username = mysqli_real_escape_string($database, $_POST['username']);
		$password = mysqli_real_escape_string($database, $_POST['password']);

		$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
		$result = mysqli_query($database, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck < 1) 
		{
			echo "<script>alert('Not Found'); window.location.href='index.php';</script>";
			exit();
		}
		else
		{
			if ($row = mysqli_fetch_array($result)) 
			{
				if ($row['type'] == 'customer') 
				{
					
					if ($password != $row['password']) 
					{
						echo "<script>alert('Wrong Password'); window.location.href='index.php';</script>";
						exit();
					}
					elseif ($password == $row['password']) 
					{
						$_SESSION['id'] = $row['id'];
						$_SESSION['password'] = $row['password'];
						$_SESSION['fname'] = $row['fname'];
						$_SESSION['lname'] = $row['lname'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['gender'] = $row['gender'];
						$_SESSION['type'] = $row['type'];
						echo "<script>alert('Welcome {$_SESSION['fname']}!'); window.location.href='customerhome.php';</script>";
						exit();
					}
				}
				elseif ($row['type'] == 'Mua') 
				{
					if ($password != $row['password']) 
					{
						echo "<script>alert('Wrong Password'); window.location.href='index.php';</script>";
						exit();
					}
					else
					{
						$_SESSION['id'] = $row['id'];
						$_SESSION['password'] = $row['password'];
						$_SESSION['fname'] = $row['fname'];
						$_SESSION['lname'] = $row['lname'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['gender'] = $row['gender'];
						$_SESSION['type'] = $row['type'];
						echo "<script>alert('Welcome {$_SESSION['fname']}!'); window.location.href='muahome.php';</script>";
						exit();
					}
				}
				else
				{
					if ($password != $row['password']) 
					{
						echo "<script>alert('Wrong password...');
						window.location.href='index.php';</script>";
					}
					else
					{
						$_SESSION['id'] = $row['id'];
						$_SESSION['password'] = $row['password'];
						$_SESSION['fname'] = $row['fname'];
						$_SESSION['lname'] = $row['lname'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['gender'] = $row['gender'];
						$_SESSION['type'] = $row['type'];
						echo "<script>alert('Welcome Admin'); window.location.href='adminhome.php';</script>";
					}
				}
			}
		}
	}

?>