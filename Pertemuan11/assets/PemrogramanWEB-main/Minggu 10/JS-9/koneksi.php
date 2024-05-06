<?php
// Menyambungkan dengan database mysql
$namaHost = "localhost";
$username = "root";
$password = "";
$database = "prakwebdb";

try { //Pengecekan dengan paramater $namaHost, $username, $password, $database.
    $connect = mysqli_connect($namaHost, $username, $password, $database);
} catch (Exception $e) {
    echo $e->getMessage();
}
?>