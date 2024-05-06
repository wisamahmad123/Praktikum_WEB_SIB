<?php
// Membuat variabel global x dan y
$x = 75;
$y = 25;

// Membuat fungsi penjumlahan
function addition() {
    // Mengakses variabel global x dan y menggunakan array $GLOBALS
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

// Memanggil fungsi penjumlahan
addition();

// Menampilkan hasil penjumlahan
echo $z;
?>