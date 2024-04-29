<?php
include('koneksi.php');
// Data yang akan dimasukkan
$username = "admin";
$password = "123";
$tanggal_lahir = "1990-05-15";
$alamat = "Jl. Contoh No. 123";

// Query untuk memasukkan data ke dalam tabel user
$queryInsertData = "INSERT INTO user (usernam, password) 
          VALUES ('$nama', '$email', '$password', '$tanggal_lahir', '$alamat')";

// Eksekusi query penambahan data
if (mysqli_query($koneksi, $queryInsertData)) {
    echo "Data berhasil dimasukkan ke dalam tabel user.";
} else {
    echo "Error: " . $queryInsertData . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>