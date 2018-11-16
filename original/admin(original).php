<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body>
	<h2>Halaman Admin</h2>
	
	<br/>

	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
	if(isset($_GET['pesan']))
	{
		if($_GET['pesan'] == "delete_fail"){
			echo "You data is wrong for request deleting account !";
		}
		else if($_GET['pesan'] == "register"){
			echo "Congratulation ! Your account has been created !";
		}

	}
	?>
		<h4>Welcome, <?php if($_SESSION['status']=="login"){echo $_SESSION['last_name'];} ?>! You are loged in.</h4>


	<br/>
	<br/>

	<a href="logout.php">LOGOUT</a>

	<br>
	<br>

	<form action="delete.php" method="post">
		<table>
			<tr>
				<td>Delete Account</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
		</table>
		<input type="submit" value="Delete" name="delete">
	</form>
</body>
</html>