<!DOCTYPE html>
<html>
<head>
    <!-- Membuat tampilan title -->
<title>Form Input PHP</title>
</head>
<body>
    <!-- Membuat tampilan judul -->
    <h2>Form Input PHP</h2>
<?php
// Inisialisasi variabel
$namaErr = "";
$nama = "";
// Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Validasi nama (contoh: pastikan nama tidak kosong)
// Membuat server untuk menyimpan inputan user.
    if (empty($_POST["nama"])) {
        $namaErr = "Nama harus diisi!";
        } else {
        $nama = $_POST["nama"];
    echo "Data berhasil disimpan!";
}
}
?>

        <!-- Membuat proses inputan-->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>">
        <span class="error"><?php echo $namaErr; ?></span><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>