<?php

// Soal Nomor 5.1 array 1 dimensi.
    $nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

    $nilaiLulus = [];

    foreach ($nilaiSiswa as $nilai){
        if ($nilai >= 70){
            $nilaiLulus[] = $nilai;
        }
    }

    echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus );
    echo "<br>";
// Menggunakan array 1 dimensi yang menyimpan nilai.
// Kemudian menggunakan perulangan foreach untuk mencasi nilai siswa yang lebih dari 70
// Menampilkan daftar nilai yang diubah menjadi text dengan implode.

// Soal Nomor 5.2 array multidimensi
    $daftarKaryawan = [
        ['Alice', 7],
        ['Bob', 3],
        ['Charlie', 9],
        ['David', 5],
        ['Eva', 6],
    ];
    $karyawanPengalamanLimaTahun = [];

    foreach ($daftarKaryawan as $karyawan){
        if($karyawan[1] > 5){
            $karyawanPengalamanLimaTahun[] = $karyawan[0];
        }
    }
    echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);
    echo "<br>";
// Menggunakan arrat 2 dimensi untuk menyimpan data nama karyawan dan angka pengalaman kerjanya.
// Menggunakan logika perulangan foreach yang di dalamnya ada statment if,
// Variabel $daftarKaryawan di alias menjadi $karyawan, kemudian mencari nilai karyawan yang pengalaman kerja lebih dari 5 tahun.
// Menampilkan  nama-nama karyawan yang memiliki pengalaman kerja lebih dari lima tahun melalui implode.


// Soal Nomor 5.3 array multidimensi
 $daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai){
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
// Menggunakan array multidimensi untuk menyimpan  data nilai mahasiswai dalam setiap mata kuliah.
// Menggunakan variabel $mataKuliah untuk membedakan antara daftar nilai fisika dengan daftar nilai matematika dan daftar nilai Kimia.
// Dapat menampilkan daftar nilai mahasiswa yang terdapat dalam suatu mata kuliah.


// Soal Cerita Nomor 5.4
$Nilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90],
    ],
];

$nama = 'Matematika';
echo "Daftar nilai rata-rata di kelas $nama: <br>";
$total = 0;
foreach ($Nilai[$nama] as $data) {
    $total += $data[1];
}
$rata_rata = $total / count($Nilai[$nama]);
echo "Jadi nilai rata-rata di kelas adalah: {$rata_rata}%";

// Program menghitung rata-rata nilai matematika dari beberapa mahasiswa. 
// Logika iterasi dengan foreach digunakan untuk implementasi setiap nilai mahasiswa. 
// Total nilai diakumulasikan, dan rata-rata dihitung. 
// Hasil rata-rata ditampilkan dalam bentuk pesan.

?>