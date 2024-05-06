<?php
// Kode ini mengelola data yang dikirimkan melalui metode POST dari formulir HTML.
// Jika metode permintaan adalah POST, maka kode akan dieksekusi.
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Mengambil nilai buah yang dipilih dari data POST dan menyimpannya dalam variabel $selectedBuah.
    $selectedBuah = $_POST['buah'];
    
    // Memeriksa apakah data 'warna' telah dikirimkan melalui metode POST.
    // Jika iya, maka nilai warna dipisahkan dan disimpan dalam variabel $selectedWarna.
    // Jika tidak, variabel $selectedWarna diinisialisasi sebagai array kosong.
    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = [];
    }
    
    // Mengambil nilai jenis kelamin yang dipilih dari data POST dan menyimpannya dalam variabel $selectedJenisKelamin.
    $selectedJenisKelamin = $_POST['jenis_kelamin'];
    
    // Menampilkan hasil pilihan buah, warna, dan jenis kelamin.
    echo "Anda memilih buah: " . $selectedBuah . "<br>";
    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda: " . implode(", ", $selectedWarna) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorit. <br>";
    }
    echo "Jenis kelamin Anda: " . $selectedJenisKelamin;
}
?>

