<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Array Terindeks</h2>
        <?php 
        $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

        // echo $Listdosen[2] . "<br>";
        // echo $Listdosen[0] . "<br>";
        // echo $Listdosen[1] . "<br>";

        // MODIFIKASI SOAL 1
        for($i = 0; $i < count($Listdosen); $i++){
            echo $Listdosen[$i] . "<br>";
        }
?>
    </body>
</html>