<?php
//include file koneksi 
include "config/koneksi.php";

//deklarasi variabel pada form index php 
$username = $_POST['username'];
$password = $_POST['password'];

//cek query database
$cek = "SELECT * FROM users WHERE username = '$username' 
        AND password = '$password' AND blokir = 'N'";
$login = mysqli_query($conn, $cek);
$ketemu = mysqli_num_rows($login);
$data = mysqli_fetch_array($login);
//Apabila username dan password ditemukan (valid)
// if(){}

?>