<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
    echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil. <br>";
// Variabel angka 1 dan 2 dijumlahkan dengan variabel hasil yang menampung nilai dari penjumlahan angka1 dan angka2.
// Menampilkan hasil penjumlahan.

$benar = true;
$salah = false;
    echo "Variabel benar: $benar, Variabel salah: $salah <br>";
//Mendefinisikan konstanta untuk nilai tetap
    define("Nama_Situs", "WebsiteKu.com");
    define("Tahun_Pendirian", 2023);

    echo "Selamat datang di " . Nama_Situs . ", Situs yang didirikan pada tahun " . Tahun_Pendirian . ".";
// Mengakses Konstanta dengan menggunakan Nama_Konstanta.
?>