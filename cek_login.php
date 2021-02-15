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
if($ketemu > 0){
        session_start(); //untuk memulai session
        //bikin variabel session 
        $_SESSION['namauser'] = $data['username'];
        $_SESSION['passuser'] = $data['password'];
        //mengarahkan ke halaman dashboar
        // header("location: dashboar.php");
        echo "<h1>Anda berhasil login</h1>";
} else {
        echo "<center>Username dan password tidak diketahui</center><br>";
        echo "<center><a href='index.php'>Silahkan login kembali</a></center>";
}

?>