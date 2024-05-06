<?php
// Skor pemain
$skor_pemain1 = 700;
$skor_pemain2 = 400;

// Hadiah tambahan jika skor lebih dari 500
$hadiah_tambahan1 = ($skor_pemain1 > 500) ? "YA" : "TIDAK";
$hadiah_tambahan2 = ($skor_pemain2 > 500) ? "YA" : "TIDAK";

// Tampilan baris pertama
echo "Total skor pemain 1 adalah: $skor_pemain1\n <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah_tambahan1\n <br>";

// Tampilan baris kedua
echo "Total skor pemain 2 adalah: $skor_pemain2\n <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah_tambahan2\n";
?>
