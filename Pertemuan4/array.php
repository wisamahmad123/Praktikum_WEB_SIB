<?php

// mengisi nilai siswa dalam array 
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);
echo "<br>";


// array karyawan 

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan penglaman kerja lebih dari 5 tahun: " . implode(', ', 
$karyawanPengalamanLimaTahun);
echo "<br>";

// menampilkan array daftar nilai mahasiswa dalam masing masing mata kuliah

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
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
echo "<br>";

// tugas cerita 5.4

$daftarNilai2 = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
        ['David', 64],
        ['Eva', 90],
    ],
];

$nilaiTotal = 0;
$nilaiSementara = 0;
$idx = 0;

foreach($daftarNilai2['Matematika'] as $nilaiSementara) {
    $nilaiTotal += $nilaiSementara[1];
    $idx++;
}

$nilaiRata = $nilaiTotal / $idx;
echo "Nilai rata-rata matematika: $nilaiRata <br>";
echo "Siswa dengan nilai di atas rata-rata <br>";

foreach ($daftarNilai2['Matematika'] as $nilai2) {
    if ($nilai2[1] > $nilaiRata) {
        echo "Nama: {$nilai2[0]}, Nilai: {$nilai2[1]}, <br>";
    }
}
?>