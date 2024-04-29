<?php
// Koneksi ke database
$connect = mysqli_connect("localhost", "root", "", "prakwebdb");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}
