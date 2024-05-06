<?php
include "koneksi.php";

$username=$_POST['username'];
$password=md5($_POST['password']);

$query="SELECT * FROM user WHERE username='$username' and password='$password'";
$result=mysqli_query($connect, $query);
$cek=mysqli_num_rows($result);

if($cek){ // Jika jumlah baris hasil query lebih dari 0 (pengguna ditemukan),
    echo "Anda berhasil login. silahkan menuju "; ?>
    <a href="homeAdmin.html">Halaman Home</a> <!-- Menampilkan pesan login berhasil dan bisa lanjut ke halaman Home Admin. -->
    <?php 
    }else{
        echo "Anda gagal login. silahkan "; ?>
        <a href="loginForm.html">Login Kembali</a>
    <?php
    echo mysqli_error($connect); // Menampilkan pesan jika terjadi kesalahan MySQL.
}
?>