<?php
// melakukan perulangan if

$nilaiNumerik = 92;

if($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik <80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br>";

// melakukan perulangan while

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";
echo "<br>";


//melakukan perulangan for

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";
echo "<br>";


// melakukan perulangan foreach

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";
echo "<br>";

// melakukan perulangan nested 

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (lulus) <br>";
}

echo "<br>";

// soal cerita menghitung total nilai

$nilaiSiswa2 = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;
$idx = 0;

foreach ($nilaiSiswa2 as $nilai2) {
    if ($nilai2 < 71) {
        continue;
    } elseif ($nilai2 > 90) {
        continue;
    }
    $idx++;
    $totalNilai += $nilai2; 
}    
$rataNilai = $totalNilai / $idx;
echo "Rata Nilai = $rataNilai";
echo "<br>";

// soal cerita diskon produk

$hargaBeli= 120000;
$diskon = 0.2;

if ($hargaBeli > 100000) {
    $hargaDiskon = $hargaBeli - ($hargaBeli * $diskon);
}
echo "Harga Diskon = $hargaDiskon";
echo "<br>";

// soal cerita pemain game menggunakan ternary

$totalSkor2 = 0;
$poin = 600;

$hadiah = $poin > 500 ? "YA" : "TIDAK";
echo "Total skor pemain adalah: $poin<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah";
?>