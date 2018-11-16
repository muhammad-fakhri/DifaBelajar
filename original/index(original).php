<!DOCTYPE html>
<html>
<head>
	<title>DOIT-Daily Expense Management</title>
</head>
<body>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login failed! username or password is wrong!";
		}else if($_GET['pesan'] == "logout"){
			echo "You are successfully logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "You must login to access admin page";
		}
		else if ($_GET['pesan'] == "account_deleted") {
			echo "Your account has been deleted!";
		}
	}
	?>
	<br/>
	<br/>
	<ul>
		<li><a class="white-text active" href="#login">Login</a></li>
		<li><a class="white-text" href="#register">Register</a></li>
	</ul>
<!--Form Login-->
<div id="login">
		<form method="post" action="cek_login.php">
			<h2>WELCOME TO DOIT</h2>
			<h3>Your Personal Daily Expenses Management System</h3>
			<h3>Login to your account here</h3>
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input name="username" type="text" class="validate"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input name="password" type="password" class="validate"></td>
				</tr>
				<tr>
					<td><input type="submit" name="login" value="Login"></td>
				</tr>
			</table>
			<a href="">Forgotten password?</a>
		</form>
</div>
 <!--Form Register-->
 <div id="register">
		<form method="post" action="register.php">
			<h3>Register your account here</h3>
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input name="username" type="text" class="validate"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input name="email" type="text" class="validate"></td>
				</tr>
				<tr>
					<td>Confirm Email</td>
					<td>:</td>
					<td><input name="email_confirm" type="text" class="validate"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input name="password" type="password" class="validate"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td>:</td>
					<td><input name="password_confirm" type="password" class="validate"></td>
				</tr>
				<tr>
					<td><input type="submit" name="register" value="Register"></td>
				</tr>
			</table>
		</form>
 </div>
</body>
</html>