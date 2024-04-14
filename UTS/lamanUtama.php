<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleUtama.css">
    <title>Billing</title>
    <style>
        body {
            background-color: rgb(76, 45, 177);
        }

        .container2 {
            position: relative;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #ccc;
            background-image: url('img/brgarenatsp.png');
            background-size: 90px 90px;
            background-position: right top;
            background-repeat: no-repeat;
            font-family: Arial, Helvetica, sans-serif;
            font-size: medium;
        }

        @media print {
            body * {
                visibility: hidden;
            }

            .container2, .container2 * {
                visibility: visible;
            }

            /* Atur posisi kontainer pencetakan */
            .container2 {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>
</head>

<body>
    <div class="banner">
        <img src="img/bannerArena.jpg">
    </div>
    <button onclick="goBack()">Kembali</button>
    <div class="container">
        <h2>Tambah Billing</h2>
        <form action="lamanUtama.php" method="post">
            <div>
                <label for="username">Username :</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="pad">
                <label for="billing">Billing :</label>
                <select id="billing" name="billing" required>
                    <optgroup label="Pilih Durasi Billing">
                        <option value="1 Jam">1 Jam (Rp 5.000)</option>
                        <option value="3 Jam">3 Jam (Rp 14.000)</option>
                        <option value="5 Jam">5 Jam (Rp 20.000)</option>
                        <option value="10 Jam">10 Jam (Rp 40.000)</option>
                    </optgroup>
                </select>

                <br>
                <div class="pad">
                    <label for="date">Tanggal :</label>
                    <input type="text" id="tanggal" name="tanggal" value="<?php date_default_timezone_set('Asia/Jakarta');
                                                                            $local_date = date('Y-m-d');
                                                                            echo $local_date;
                                                                            ?>" readonly>
                </div>
                <div class="pad">
                    <button type="submit" id="submitBtn">Bayar</button>
                </div>
        </form>
    </div>
    <div class="container2 nota">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $billing = $_POST['billing'];
            $tanggal = $_POST['tanggal'];

            function generateRandomString($length = 10)
            {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
            }

            echo "<h2>Nota Pembayaran</h2>";
            echo "<p><span>Kode Transaksi:</span> " . generateRandomString() . "</p>";
            echo "<p><span>Username:</span> " . $username . "</p>";
            echo "<p><span>Tambah Billing:</span> " . $billing . "</p>";
            echo "<p><span>Tanggal:</span> " . $tanggal . "</p>";

            if ($billing == "1 Jam") {
                echo "<p class='total'>Total Bayar: Rp 5.000</p>";
            } elseif ($billing == "3 Jam") {
                echo "<p class='total'>Total Bayar: Rp 14.000</p>";
            } elseif ($billing == "5 Jam") {
                echo "<p class='total'>Total Bayar: Rp 20.000</p>";
            } else {
                echo "<p class='total'>Total Bayar: Rp 40.000</p>";
            }
        }
        ?>
        <button onclick="window.print()">Cetak Bukti Pembayaran</button>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>