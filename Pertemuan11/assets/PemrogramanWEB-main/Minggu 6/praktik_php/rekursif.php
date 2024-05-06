<?php
// Membuat fungsi
/* function tampilkanHaloDunia(){
    echo "Hallo Dunia! <br>";
    for ($i=1; $i <=25; $i++){
        echo "Perulangan ke-{$i} <br>";
    }
    tampilkanHaloDunia();
}
tampilkanHaloDunia(); */

// Membuat function dengan parameter
function tampilkanAngka(int $jumlah, int $indeks = 1){
    echo "Perulangan ke-{$indeks} <br>"; // Mencetak perulangan ke indeks

    //panggil diri sendiri selama $indeks <= $jumlah
    if($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}
// Memanggil function dan memberikan parameter 20.
tampilkanAngka(20);
?>
