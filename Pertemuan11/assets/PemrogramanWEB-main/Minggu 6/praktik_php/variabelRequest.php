<html>
<body>
<!-- Bagian untuk mengirim data dengan metode POST ke skrip PHP yang sama -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
    Name: <input type="text" name="fname"> <!-- Memasukkan field untuk memasukkan nama -->
    <input type="submit"> 
</form>
<?php
// Membuat untuk memproses data yang dikirim melalui form
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    // Mengumpulkan nilai dari input field
    $name = $_REQUEST['fname'];
    // Memeriksa apakah input nama kosong
    if (empty($name)) {
        echo "Name is empty"; 
    } else {
        echo $name;
}
}
?>
</body>
</html>