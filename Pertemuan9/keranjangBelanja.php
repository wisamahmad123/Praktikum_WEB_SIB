<html>

<head>
</head>

<body>
    <h2> Keranjang Belanja</h2>

    <?php
    // Pengambilan nilai dari cookies yang disimpan
    $beliNovel = $_COOKIE['beliNovel'];
    $beliBuku = $_COOKIE['beliBuku'];

    // Pencetakan jumlah novel dan buku yang ada di keranjangBelanja
    echo "Jumlah Novel : " . $beliNovel . "<br>";
    echo "Jumlah Buku : " . $beliBuku;
    ?>
</body>

</html>