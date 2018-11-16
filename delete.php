<?php 
//Konek ke database
include 'koneksi.php';

//mengaktifkan session php
session_start();

//tampung value
$email = $_POST['email'];
$password = $_POST['password'];


//Ambil id
if(isset($_GET['id'])){
	$id = $_GET['id'];
}

if ($_POST['email'] && $_POST['password']) {
	mysqli_query($koneksi, "DELETE FROM admin WHERE email='$email' and password='$password'");
	header("location:index.php?pesan=account_deleted");
}
else{
	header("location:admin.php?pesan=delete_fail");	
}
?>