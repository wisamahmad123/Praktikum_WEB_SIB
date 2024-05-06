<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Melakukan validasi password minimal 8 karakter
    if (strlen($password) < 8) {
        echo "Password harus diisi minimal 8 karakter.";
    } else {
        echo "Data berhasil disimpan.";
    }
}
?>