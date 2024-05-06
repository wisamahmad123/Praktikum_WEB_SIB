<?php
//Membuat menu
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [ 
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak" 
    ]
];

// Fungsi untuk menampilkan menu bertingkat
// Soal nomor 8
function tampilkanMenuBertingkat(array $menu) { 
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}"; // Menampilkan nama menu
        if (isset($item['subMenu']) && is_array($item['subMenu'])) { // Memeriksa apakah ada submenu dan merupakan array
            tampilkanMenuBertingkat($item['subMenu']); // Rekursif untuk menampilkan submenu
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu); // Memanggil fungsi untuk menampilkan menu
?>