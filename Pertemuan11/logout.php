<?php
// Memeriksa apakah sesi sudah dimulai, jika belum, mulai sesi
if(session_status() === PHP_SESSION_NONE)
    session_start();

// Menghancurkan semua data sesi yang ada
session_destroy();

// Mengarahkan pengguna kembali ke halaman utama (index.php)
header('location:index.php');
?>