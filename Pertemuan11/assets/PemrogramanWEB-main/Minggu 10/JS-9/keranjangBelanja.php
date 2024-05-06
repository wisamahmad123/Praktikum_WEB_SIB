<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Keranjang Belanja</h2>

    <?php
    $beliNovel=$_COOKIE['beliNovel']; // Menyimpan nilai cookie 'beliNovel' ke variabel $beliNovel
    $beliBuku=$_COOKIE['beliBuku']; // Menyimpan nilai cookie 'beliBuku' ke variabel $beliBuku

    echo "Jumlah Novel: " . $beliNovel . "<br>"; // Menampilkan jumlah novel yang telah dibeli dari nilai variabel $beliNovel
    echo "Jumlah Buku: " . $beliBuku; // Menampilkan jumlah buku yang telah dibeli dari nilai variabel $beliBuku
    ?>
</body>
</html>