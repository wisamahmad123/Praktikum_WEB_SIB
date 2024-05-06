<?php
    include "koneksi.php"; // Mengimpor file koneksi.php untuk melakukan koneksi ke database.

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row['LEVEL'] == 1) { // Memeriksa tingkat akses pengguna. Jika tingkat akses adalah 1 (admin),
        echo "Anda berhasil login. silahkan menuju"; ?>
        <a href="homeAdmin.html">Halaman HOME</a>
    <?php
    } else if ($row['LEVEL'] == 2) { // Jika tingkat akses adalah 2 (guest),
        echo "Anda berhasil login. silahkan menuju"; ?>
        <a href="homeGuest.html">Halaman HOME</a>
    <?php
    } else { // Jika tidak ada username dan password yang cocok,
        echo "Anda gagal login. silahkan "; ?>
        <a href="loginForm.html">Login Kembali</a>
    <?php
        echo mysqli_error($connect); // Menampilkan pesan jika terjadi kesalahan MySQL.
    }
?>