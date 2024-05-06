<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Member MDHP Gym</title>
    <link href="cetak.css" rel="stylesheet">
</head>
<body>
<div class="cooki">
<?php
    echo $_COOKIE['hasil'];

    echo "<br>";
    echo $_COOKIE['nama_pemilik'];
?>
</div>
    <div class="kartu-member">
        <h2>Kartu Member MDHP Gym</h2>
        <div class="gambar">
                <img src="img/logo.jpg"> <br>
            </div>
        <?php
        // Mengambil data dari formulir pendaftaran
        $buat_kartu = $_POST['var0'];
        $nama = $_POST['var1'];
        $id = $_POST['var2'];
        $alamat = $_POST['var6'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $status_pekerjaan = isset($_POST['var3']) ? $_POST['var3'] : "";
        $jenis_kelamin = isset($_POST['var4']) ? $_POST['var4'] : "";
        $pernah_gym = isset($_POST['var8']) ? $_POST['var8'] : "";
        $lama_member = $_POST['var7'];
        $tanggal_mulai = $_POST['tanggal_mulai'];
        $tanggal_akhir = $_POST['tanggal_akhir'];

        // Menampilkan data pada kartu member
        echo "<p>Tanggal Pembuatan Kartu Member: $buat_kartu</p><hr>"; 
        echo "<p>Nama: $nama</p><hr>";
        echo "<p>ID: $id</p><hr>";
        echo "<p>Alamat: $alamat</p><hr>";
        echo "<p>Tanggal Lahir: $tanggal_lahir</p><hr>";
        echo "<p>Status Pekerjaan: $status_pekerjaan</p><hr>";
        echo "<p>Jenis Kelamin: $jenis_kelamin</p><hr>";
        echo "<p>Status Gym: $pernah_gym</p><hr>";
        echo "<p>Lama Member: $lama_member</p><hr>";
        echo "<p>Tanggal Mulai Member: $tanggal_mulai</p><hr>";
        echo "<p>Tanggal Akhir Member: $tanggal_akhir</p><hr>";

        ?>
    </div>
    <div class="Logout">
        <input type="button" value="Keluar" onclick="location.href='login.html'">
    </div>

</body>
</html>
