<!DOCTYPE html>
<html>

<head>
    <title>Form Input dengan Validasi tambahan</title>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>
        <input type="submit" value="Submit">
    </form>
<div id="hasil">
    <!-- Hasil akan ditampilkan di sini -->
</div>
    <script>
         $("#myForm").submit(function(e) {
            $(document).ready(function() {
                e.preventDefault(); // Mencegah pengiriman form secara default
                // Mengumpulkan data form
                var formData = $("#myForm").serialize();
                // Kirim data ke server PHP
                $.ajax({
                    url: "proses_validasi.php", // Ganti dengan nama file PHP yang sesuai
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        // Tampilkan hasil dari server di div "hasil"
                        $("#hasil").html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>