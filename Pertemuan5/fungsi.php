<?php 
//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah ". hitungUmur(2004,2023) ." tahun";

echo "<br>";
echo "<hr>";

//membuat fungsi
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>"; 

    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2004,2023) ." tahun ";
    echo "Senang berkenalan dengan Anda<br/>"; 
}

//memanggil fungsi yang sudah dibuat
perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Wisam";
$ucapanSalam = "Selamat pagi";

//memanggil lagi tanpa parameter salam
perkenalan($saya);


?>

