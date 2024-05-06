<?php
// Membuat variabel server untuk menampilkan output pada from.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nama = $_POST["nama"]; // Menampilkan nama pada variabel $nama dari formulir yang di submit.
$email = $_POST["email"];  // Menampilkan email pada variabel $email dari formulir yang di submit.

// Menampilkan pada output.
echo "Nama: " . $nama . "<br>";
echo "Email: " . $email;
}
?>