<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Billing Warnet</title>
    <link rel="stylesheet" href="styleLogin.css">
    <style>
        body {
            background-color: rgb(76, 45, 177);
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>ARENA GAME CENTER</h2>
        <form id="LoginForm" action="prosesLogin.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" id="submitBtn">Login</button>
        </form>
        <div class="hasil">

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        (document).ready(function() {
            if (navigator.cookieEnabled) {
                alert('Cookies sudah diaktifkan!');
            }

            $('#LoginForm').submit(function(event) {
                event.preventDefault();
                var username = $('#username').val();
                var password = $('#password').val();

                // Mengirim data ke server menggunakan AJAX
                $.ajax({
                    type: 'POST',
                    url: 'prosesLogin.php',
                    data: {
                        username: username,
                        password: password
                    },
                    success: function(response) {
                        // Menampilkan pesan respons dari server
                        $(".hasil").html(response);
                        // pindah halaman
                        window.location.href = 'lamanUtama.php';
                    }
                });
            });
        });
    </script>
</body>

</html>