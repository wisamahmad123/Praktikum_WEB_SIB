<?php
// Meimpor file koneksi.php
    include "koneksi.php";

    // Pengambilan data username dan password (method POST)
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //Query untuk mencocokkan data username dan password yang berada di database 
    $sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
    $result = mysqli_query($connect, $sql);

    // Untuk menghitung jumlah baris
    $cek = mysqli_num_rows($result);

    // Pemeriksaan baris hasil baris query
    if($cek > 0) {
        // Jika ada (lebih dari 0), mulai sesi dan menetapkan variabel sesi
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        ?>
        <!--Mencetak pesan jika berhasil login dan ada tautan yang mengarah ke homeSession.php-->
        Anda Berhasil Login, silahkan menuju
        <a href="homeSession.php">Halaman Home </a> <?php
    }else{
        ?>
        <!--Mencetak pesan jika gagal login dan ada tautan yang mengarah ke sessionLoginForm.html-->
        Gagal login, silahkan login lagi 
        <a href="sessionLoginForm.html"> Halaman Login </a> <?php
        echo mysqli_error($connect);
    }
?>