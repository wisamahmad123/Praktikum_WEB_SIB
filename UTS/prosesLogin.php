<?php
session_start();

$_SESSION['username'] = "wisam";
$_SESSION['password'] = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {
        header("location:lamanUtama.php");
        echo "Login berhasil. Selamat datang, " . $username . "!";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('Akun belum terdaftar')";
        echo "</script>";
    }
    setcookie("username", $username, time() + (86400 * 30), "/");

    
}
