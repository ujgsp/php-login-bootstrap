<?php 

// buat session
session_start();

// panggil script config
include 'config.php';

// tangkap inputan hasil kiriman form dengan method POST
$username = $_POST['txtusername'];
$password = $_POST['txtpassword'];

// pengecekan ke database
// mysqli_query: fungsi yg ada di driver mysql untuk menjalankan perintah query
$SELECT = mysqli_query($connect, "SELECT * FROM user_login WHERE username='$username' AND password='$password' ");

// hitung semua data yg ada didalam table
$count_rows = mysqli_num_rows($SELECT);

// jika hasil count lebih dari 0, artinya data pada table ada minimal 1 bukan 0 jumlahnya
if($count_rows > 0)
{
    // buat session
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';

    // lalu arahkan ke file home.php
    header('location: home.php');
}
else{
    header('location: index.php?msg=error');
}