<?php
//menghubungkan koneksi 
include 'koneksi.php';

//mengaktifkan session php
session_start();

//tampung value
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

// proses register
    mysqli_query($koneksi,"insert into admin values('','$first_name','$last_name','$email','$password')");
    $_SESSION['status'] = "login";
    $_SESSION['last_name'] = $last_name;
    header("location:admin.php?pesan=register");
?>