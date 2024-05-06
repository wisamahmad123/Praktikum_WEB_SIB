<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
    // Membuat array  untuk menyimpan data menggunakan variabel $Listdosen
    $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
    echo $Listdosen[2] ."<br>";
    echo $Listdosen[0] ."<br>";
    echo $Listdosen[1] ."<br><br>";

    // Perulangan for untuk menampilkan array
    for ($i=0; $i < count($Listdosen); $i++) {
        echo  "$i. ". $Listdosen[$i]."<br>";    
    }
    ?>
</body>
</html>
