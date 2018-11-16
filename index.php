<!DOCTYPE html>
<html>
<head>
	<title>DOIT-Daily Expense Management</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
		else if($_GET['pesan'] == "register"){
			echo "Register Berhasil";
		}
	}
	?>
	<br/>
	<br/>
<!--Form Login-->
<div class="container white z-depth-2">
	<ul class="tabs teal">
		<li class="tab col s3"><a class="white-text active" href="#login">login</a></li>
		<li class="tab col s3"><a class="white-text" href="#register">register</a></li>
	</ul>
	<div id="login" class="col s12">
		<form method="post" action="cek_login.php">
		<form class="col s12">
			<div class="form-container">
				<h3 class="teal-text">Hi selamat datang kembali di DOIT</h3>
				<div class="row">
					<div class="input-field col s12">
						<input name="username" type="text" class="validate">
						<label for="username">Username</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input name="password" type="password" class="validate">
						<label for="password">Password</label>
					</div>
				</div>
				<br>
				<center>
					<button class="btn waves-effect waves-light teal" type="submit" name="login" value="login">Login</button>
					<br>
					<br>
					<a href="">Forgotten password?</a>
				</center>
			</div>
		</form>
	</div>
 <!--Form Register-->
	<div id="register" class="col s12">
		<form method="post" action="register.php">
		<form class="col s12">
			<div class="form-container">
				<h3 class="teal-text">Welcome</h3>
				<div class="row">
					<div class="input-field col s6">
						<input name="username" type="text" class="validate">
						<label for="username">username</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input name="email" type="email" class="validate">
						<label for="email">Masukkan Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input name="email_confirm" type="email" class="validate">
						<label for="email-confirm">Konfirmasi Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input name="password" type="password" class="validate">
						<label for="password">Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input name="password_confirm" type="password" class="validate">
						<label for="password-confirm">Konfirmasi Password</label>
					</div>
				</div>
				<center>
					<input type="submit" value="Register">
				</center>
			</div>
		</form>
	</div>
</div>
</body>
</html>