<?php
//Pemeriksaan value cookie apakah ada?
    if(isset($_POST["beliNovel"]) && isset($_POST["beliBuku"])) {
        setcookie("beliNovel", $_POST["beliNovel"]);
        setcookie("beliBuku", $_POST["beliBuku"]);
        header("location:keranjangBelanja.php");
    }
?>