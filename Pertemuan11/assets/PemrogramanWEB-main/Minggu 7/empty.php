<?php
$myArray = array(); // Array yang menyimpan nilai kosong
if (empty($myArray)){ // Pengecekan pada variabel $myArray.
    echo "Array tidak terdefinisi atau kosong."; // Menampilkan teks jika $myArray kosong
} else {
    echo "Array terdefinisi dan tidak kosong."; // Menampilkan teks jika $myArray terdefinisi dan tidak kosong.
}
echo "<hr>"; // Membuat garis pemisah
if (empty($nonExistentVar)){
    echo "Array tidak terdefinisi atau kosong."; //Menampilkan $nonExistentVar jika kosong.
} else {
    echo "Array terdefinisi dan tidak kosong."; //Menampilkan $nonExistentVar jika tidak kosong.
}
?>