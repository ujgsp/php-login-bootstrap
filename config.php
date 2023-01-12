<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "blog_contents";

$connect = mysqli_connect($host, $user, $pass, $db);

if(mysqli_connect_errno())
{
    echo "koneksi ke db gagal : ". mysqli_connect_error();
}
