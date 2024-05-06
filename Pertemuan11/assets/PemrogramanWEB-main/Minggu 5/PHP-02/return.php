<?php
//Membuat fungsi hitungUmur
function hitungUmur($thn_lahir, $thn_sekarang){
// Perhitungan umur
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
// Membuat fungsi perkenalan
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    // Memanggil fungsi lain
    echo "Saya berusia  ".hitungUmur(2004, 2024)." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

//Memanggil fungsi perkenalan
perkenalan("Dicky");
?>