<?php
    session_start(); // Memulai session PHP.
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            echo "Favorite color is " .$_SESSION["favcolor"].".<br>"; // Menampilkan nilai variabel "favcolor" dari session.
            echo "Favorite animal is " .$_SESSION["favanimal"] . "."; // Menampilkan nilai variabel "favanimal" dari session.
        ?> 
    </body>
</html>