<?php

//Tugas Membuat 2 tampilan foto nama, alamat, no hp, jurusan menggunakan array multidimensi.
$Biodata = [
    'nama' => [
        'Mochammad Dicky Hanun Prasetyo' => 'foto1.jpg',
    ],
    'data' => [
        'Alamat' => 'Bantur, Malang',
        'Nomor HP' => '082264******',
        'Jurusan' => 'Teknologi Informasi',
    ],
];
// Menampilkan data biodata pertama
    foreach ($Biodata['nama'] as $key => $value) {
        echo "Nama: $key <br>"; // Menampilkan nama dengan format 'Nama: [Nama]'
        echo "<img src='$value' width='150' height='150'> <br>"; // Menampilkan foto dengan ukuran tersebut
    }
    foreach ($Biodata['data'] as $key => $value) {
        echo "$key: $value <br>"; // Menampilkan informasi data alamat, nomor HP, dan jurusan.
    }

        echo "<br>";

    $Biodata = [
        'nama' => [
            'Dicky Prasetyo' => 'foto2.jpg', 
        ],
        'data' => [
            'Alamat' => 'Malang',
            'Nomor HP' => '085706******',
            'Jurusan' => 'Teknologi Informasi',
        ],
    ];

// Menampilkan data biodata kedua
    foreach ($Biodata['nama'] as $key => $value) {
        echo "Nama: $key <br>"; // Menampilkan nama dengan format 'Nama: [Nama]'
        echo "<img src='$value' width='150' height='150'> <br>"; // Menampilkan foto dengan ukuran tersebut
    }
    foreach ($Biodata['data'] as $key => $value) {
        echo "$key: $value <br>"; // Menampilkan informasi data alamat, nomor HP, dan jurusan.
    }
?>