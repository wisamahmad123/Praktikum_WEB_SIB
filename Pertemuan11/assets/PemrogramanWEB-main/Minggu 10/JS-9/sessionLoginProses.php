<?php
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connect, $sql);
    $cek = mysqli_num_rows($result);
    if ($cek > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        ?>
        Anda berhasil Login, silahkan menuju
        <a href="homeSession.php">Halaman Home</a> <!-- Menampilkan pesan login berhasil dan lanjue ke halaman HOME -->
        <?php
    } else { // Jika jumlah baris 0 (pengguna tidak ditemukan),
        ?>
        Gagal login, silahkan login lagi
        <a href="sessionLoginForm.html">Halaman Login</a>
        <?php
        echo mysqli_error($connect);  // Menampilkan pesan jika terjadi kesalahan MySQL .
    }
?>