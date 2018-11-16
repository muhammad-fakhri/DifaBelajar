<?php
//menghubungkan koneksi 
include 'koneksi.php';

//mengaktifkan session php
session_start();

//tampung value
$username = $_POST['username'];
$email = $_POST['email'];
$konfirmasi_email = $_POST['email_confirm'];
$password = $_POST['password'];
$konfirmasi_password = $_POST['password_confirm'];

//menyamakan konfirmasi email dengan password
if($email != $konfirmasi_email) {
    header('location: index.php?Email yang anda masukkan tidak sama-failed');
}
else if($email != $konfirmasi_email) {
    header('location: index.php?Email yang anda masukkan tidak sama-failed');
}
else{
// proses register
    mysqli_query($koneksi,"insert into admin values('','$username','$email','$password')");
    header("location:index.php?pesan=register");
}
?>