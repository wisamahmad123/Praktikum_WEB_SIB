<?php
// Koneksi ke database
$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "prakwebdb"
);

// Periksan koneksi
if (mysqli_connect_errno()){
    die("Koneksi database gagal: " . mysqli_connect_errno());
}
?>

<!--Menggunakan variabel $koneksi untuk mendapatkan koneksi ke database,
dan terdapat pengecekan eror  jika tidak berhasil -->