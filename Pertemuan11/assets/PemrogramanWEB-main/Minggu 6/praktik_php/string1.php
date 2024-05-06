<?php
    $loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

    echo "<p>{$loremIpsum}</p>"; // Mencetak  isi variabel $loremIpsum ke dalam elemen <p></p>.
    echo "Panjang karakter: " . strlen($loremIpsum) . "<br>"; // Mengetahui panjang string
    echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>"; // Mengetahui jumlah kata di dalam string
    echo "<p>" . strtoupper($loremIpsum) . "</p>"; // Mengubah semua huruf menjadi Huruf Kapital
    echo "<p>" . strtolower($loremIpsum) . "</p>"; // Mengubah semua huruf menjadi huruf kecil (lowercase)
?>