<html>
<body>

<!-- Form untuk mengirim data dengan metode POST ke skrip PHP yang sama -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Nama: <input type="text" name="fname"> <!-- Input field untuk nama -->
    <input type="submit">
</form>

<?php
// Membuat pengecekan apakah halaman ini diakses dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname']; // Mengambil nilai yang dikirim melalui metode POST
    // Memeriksa apakah input nama kosong
    if (empty($name)) {
        echo "Nama kosong";
    } else {
        echo $name; // Menampilkan nama yang dimasukkan menggunakan $name
    }
}
?>
</body>
</html>
