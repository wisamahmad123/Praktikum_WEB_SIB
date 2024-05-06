<?php
$a = 10;
$b = 5;

//Soal Nomor 3.1
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;
// Variabel hasil operasi matematika antara $a dan $b.

echo "Hasil Penambahan: {$hasilTambah} <br>";
echo "Hasil Pengurangan: {$hasilKurang} <br>";
echo "Hasil Perkalian: {$hasilKali} <br>";
echo "Hasil Pembagian: {$hasilBagi} <br>";
echo "Hasil Sisa Bagi: {$sisaBagi} <br>";
echo "Hasil Pemangkatan: {$pangkat} <br>";
// Hasil penambahan, pengurangan, perkalian, pembagian, sisa bagi, dan pemangkatan disimpan.

echo "<br>";

//Soal Nomor 3.2
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
// Hasil perbandingan antara nilai $a dan $b.

    echo "Hasil Sama: {$hasilSama}"; var_dump($hasilSama);
    echo "<br>";
    echo "Hasil Tidak Sama: {$hasilTidakSama}"; var_dump($hasilTidakSama);
    echo "<br>";
    echo "Hasil Lebih Kecil: {$hasilLebihKecil}"; var_dump($hasilLebihKecil);
    echo "<br>";
    echo "Hasil Lebih Besar: {$hasilLebihBesar}"; var_dump($hasilLebihBesar);
    echo "<br>";
    echo "Hasil Lebih Kecil Sama: {$hasilLebihKecilSama}"; var_dump($hasilLebihKecilSama);
    echo "<br>";
    echo "Hasil Lebih Besar Sama: {$hasilLebihBesarSama}"; var_dump($hasilLebihBesarSama);
    echo "<br>";
// Hasil persamaan, ketidakpersamaan, lebih kecil, lebih besar, lebih kecil sama dengan, dan lebih besar sama dengan.


//Soal Nomor 3.3
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
// Hasil operasi logika antara nilai $a dan $b.
echo "<br>";

    echo "Hasil AND(dan): {$hasilAnd} <br>";
    echo "Hasil OR(atau): {$hasilOr} <br>";
    echo "Hasil NotA(negasi): {$hasilNotA} <br>";
    echo "Hasil NotB(negasi): {$hasilNotB} <br>";
// Hasil operasi AND, OR, dan negasi terhadap $a dan $b.

echo "<br>";

//Soal Nomor 3.4
$a += $b;
    echo "Hasil Penugasan Dengan Penjumlahan: {$a} <br>";
$a -= $b;
    echo "Hasil Penugasan Dengan Pengurangan: {$a} <br>";
$a *= $b;
    echo "Hasil Penugasan Dengan Perkalian: {$a} <br>";
$a /= $b;
    echo "Hasil Penugasan Dengan Pembagian: {$a} <br>";
$a %= $b;
    echo "Hasil Penugasan Dengan Sisa Bagi: {$a} <br><br>";
// Hasil operasi penugasan dengan operasi aritmetika terhadap $a dan $b.

//Soal Nomor 3.5
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
// Hasil perbandingan identitas (nilai dan tipe data) antara $a dan $b.

    echo "Hasil Identik(nilai dan tipe data sama): {$hasilIdentik} <br>";
    echo "Hasil Tidak Identik(nilai dan tipe data tidak sama): {$hasilTidakIdentik} <br>";


//Soal Nomor 3.6
$kursi = 45;
$kursiPelanggan = 28;
$kurangKursi = $kursi - $kursiPelanggan;
$perhitungan = ($kurangKursi / $kursi) * 100;
// Perhitungan persentase kursi yang masih kosong di restoran.
    echo "Soal 3.6 <br>";
    echo "Jadi persen kursi yang masih kosong di restoran adalah: {$perhitungan}%";
//Variabel $perhitungan menyimpan hasil perhitungan persentase kursi kosong.


?>