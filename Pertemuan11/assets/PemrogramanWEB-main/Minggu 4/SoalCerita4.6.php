<?php
// Daftar nilai dari 10 siswa
$nilai_siswa = array(85, 92, 78, 64, 90, 75, 88, 79, 70, 96);

// Mengurutkan nilai dari rendah ke tinggi
sort($nilai_siswa);

// Mengabaikan dua nilai terendah dan dua nilai tertinggi
$nilai_siswa = array_slice($nilai_siswa, 2, -2);

// Menghitung total nilai
$total_nilai = array_sum($nilai_siswa);

// Menghitung nilai rata-rata
$rata_rata = $total_nilai / count($nilai_siswa);

// Output hasil
echo "Total Nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $total_nilai,\n";
echo "Nilai Rata-rata adalah: $rata_rata";
?>
