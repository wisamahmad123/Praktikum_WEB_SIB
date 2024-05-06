<?php
// Harga produk
$harga_produk = 120000;

// Batas pembelian untuk mendapatkan diskon
$batas_diskon = 100000;

// Persentase diskon
$persentase_diskon = 20;

// Menghitung harga setelah diskon
if ($harga_produk > $batas_diskon) {
    $diskon = $harga_produk * ($persentase_diskon / 100);
    $harga_setelah_diskon = $harga_produk - $diskon;

    echo "Harga setelah mendapatkan diskon 20%: Rp " . number_format($harga_setelah_diskon, 0, ',', '.') . "\n";
} else {
    echo "Tidak ada diskon. Harga yang harus dibayar: Rp " . number_format($harga_produk, 0, ',', '.') . "\n";
}
?>