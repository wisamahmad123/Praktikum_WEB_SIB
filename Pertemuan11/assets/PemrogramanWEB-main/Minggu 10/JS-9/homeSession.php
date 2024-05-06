<html>
    <body>
        <?php
            session_start();
            if ($_SESSION['status'] == 'login') { // Session untuk pengecekan status login
                echo "selamat datang " . $_SESSION['username'];
                ?>
                <br><a href="sessionLogout.php">Log Out</a> <!--Jika login berhasil maka lanjut ke file sessionLogout.php-->
                <?php
            } else {
                echo "anda belum login. silahkan" ?>
                <a href="sessionLoginForm.html">Log In</a> <!--Jika login gagal maka lanjut ke file sessionLoginForm.php-->
                <?php
            }
        ?>
    </body>
</html>