<html>
    <head>
    </head>
    <body>
        <?php
        // Memulai sesi
            session_start();

            //Pemeriksaan status login (sudah atau belum)
            if($_SESSION['status'] == 'login') {
                // jika sudah, mencetak pesan dibawah ini dan ada tautan yang mengarah ke sessionLogout.php
                echo "selamat datang " . $_SESSION['username'];
                ?>
                <br> <a href="sessionLogout.php"> Log Out</a>
            <?php
            }else{
                // jika belum, mencetak pesan dibawah ini dan ada tautan yang mengarah ke sessionLoginForm.html
                echo "anda belum login. silahkan "?>
                <a href="sessionLoginForm.html">Log In</a>
            <?php
            }       
        ?>
    </body>
</html>