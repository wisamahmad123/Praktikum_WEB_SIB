<?php
include('koneksi.php');

// Query untuk membuat tabel user
$query = "CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50),
)";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    echo "Tabel user berhasil dibuat.";
} else {
    echo "Error creating table: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>