<?php	 
echo $_SERVER['PHP_SELF']; // untuk menampilkan script 	PHP yang sedang di jalankan.
echo "<br>"; 
echo $_SERVER['SERVER_NAME']; // untuk menampilkan nama server tempat skrip sedang dijalankan.
echo "<br>"; 
echo $_SERVER['HTTP_HOST']; // untuk menampilkan nama host dari URL yang sedang diakses oleh user.
echo "<br>"; 
echo $_SERVER['HTTP_REFERER']; // untuk menampilkan URL dari halaman.
echo "<br>"; 
echo $_SERVER['HTTP_USER_AGENT']; // menampilkan informasi tentang web browser yang digunakan oleh user untuk mengakses halaman.
echo "<br>";
echo $_SERVER['SCRIPT_NAME']; // untuk menampilkan jalur skrip PHP yang sedang dijalankan.
?>