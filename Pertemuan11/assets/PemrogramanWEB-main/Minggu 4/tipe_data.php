<?php
// Soal Nomor 2 Tipe Data

// Inisialisasi variabel
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

// Menampilkan nilai variabel a, b, c, d, dan e
    echo "Variabel a: {$a} <br>";
    echo "Variabel b: {$b} <br>";
    echo "Variabel c: {$c} <br>";
    echo "Variabel d: {$d} <br>";
    echo "Variabel e: {$e} <br>";
    var_dump($e);

    echo "<br>";
// Variabel nilai Matematika, IPA, Bahasa Indonesia
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

    echo "Matematika: {$nilaiMatematika} <br>";
    echo "IPA: {$nilaiIPA} <br>";
    echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
    echo "Rata-rata: {$rataRata} <br>";

    var_dump($rataRata);

// Menampilkan nilai apakah siswa lulus dan sudah ujian
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;
    echo "<br>";

    var_dump($apakahSiswaLulus);
    echo "<br>";
    var_dump($apakahSiswaSudahUjian);

// Menggabungkan string untuk membentuk nama lengkap
$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';

    echo "<br>";
$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

    echo "Nama Depan: {$namaDepan} <br>";
    echo 'Nama Belakang: ' . $namaBelakang . '<br>';

    echo $namaLengkap;
    echo "<br>";

// Menampilkan elemen pertama yang ada dalam array listMahasiswa
$listMahasiswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
    echo $listMahasiswa[0];
?>