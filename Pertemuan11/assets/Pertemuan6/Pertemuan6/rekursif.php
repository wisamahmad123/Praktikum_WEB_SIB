<?php

// NOMOR 9
// function tampilkanHaloDunia(){
//     echo "Halo dunia!<br/>";
//     tampilkanHaloDunia();
// }
// tampilkanHaloDunia();

// NOMOR 10
for ($i=1; $i <=25;$i++){
    echo "Perulangan ke-{$i}<br>";
}

function tampilkanAngka (int $jumlah, int $indeks=1){
    echo "Perulangan ke-{$indeks}<br>";

    if ($indeks<$jumlah) {
        tampilkanAngka($jumlah, $indeks+1);
    }
}
tampilkanAngka(20);
 ?>