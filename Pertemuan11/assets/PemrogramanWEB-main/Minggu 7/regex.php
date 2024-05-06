<?php
// Pencocokan huruf kecil menggunakan variabel $pattern.
$pattern = '/[a-z]/'; 
// 
$text = 'This is a sample text.';
// Perulangan if dengan preg_match dengan variabel $pattern dan $text sebagai parameter.
if(preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!.";
} else {
    echo "Tidak ada huruf kecil!.";
}

echo "<br>";
// Pencocokan satu atau lebih digit menggunakan variabel $pattern.
$pattern = '/[0-9]+/'; 
$text = 'There are 123 apples.';
// Perulangan if dengan preg_match dengan variabel $pattern dan $text sebagai parameter.
if(preg_match($pattern, $text, $matches)) {
    echo "Cocokan: " . $matches[0]; // Menampilkan  pesan jika cocokan berhasil dilakukan.
} else {
    echo "Tidak ada yang cocok!.";// Menampilkan  pesan jika cocokan tidak berhasil dilakukan.
}

echo "<br>";
$pattern = '/apple/';
$replacement = 'banana'; // Menggunakan variabel $replacement  untuk menyimpan teks yang ingin diganti.
$text = 'I like apple pie.';
$newText = preg_replace($pattern, $replacement, $text);
echo $newText; // Menampilkan output: I like banana pie.

echo "<br>";
// Mencocokkan "god", "good", "gooood", dll.
$pattern = '/go{1,3}d/'; // Menggunakan {n,m} untuk mencocokkan karakter 'o' sebanyak 1 hingga 3 kali, kemudian diikuti oleh karakter 'd'.
$text = 'god is good.';
if(preg_match($pattern, $text, $matches)) {
    echo "Cocokan: " . $matches[0]; // Menampilkan pesan jika cocokan berhasil dilakukan.
} else {
    echo "Tidak ada yang cocok!"; // Menampilkan pesan jika pencocokan tidak berhasil dilakukan.
}
?>