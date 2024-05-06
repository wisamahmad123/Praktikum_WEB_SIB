<?php
/* //Membuat variabel umur
$umur;
*/

// Membuat variabel $data
$data = array("nama" => "Jane", "usia" => 25);
// Jika umur di atas 25 maka output nya Anda sudah dewasa
if(isset($data["nama"])){
    echo "Anda sudah dewasa, ";
    echo "Nama: " . $data["nama"] . " " . $data["usia"]; // Menampilkan data nama dan usia
} else {
    // Jika umur di bawah 25 maka outputnya Variabel 'nama' tidak ditemukan dalam array.
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}
?>