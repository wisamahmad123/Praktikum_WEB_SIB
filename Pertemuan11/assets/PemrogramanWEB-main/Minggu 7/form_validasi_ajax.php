<!DOCTYPE html>
<html>
<head>
<title>Form Input dengan Validasi dan AJAX</title>
</head>
<body>
<h1>Form Input dengan Validasi dan AJAX</h1>
<form id="myForm" method="post" action="proses_validasi_ajax.php">
    <label for="nama">Nama: </label>
    <input type="text" id="nama" name="nama">
    <span id="nama-error" style="color: red;"></span><br>
    
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <span id="email-error" style="color: red;"></span><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <span id="password-error" style="color: red;"></span><br>
    
    <input type="submit" value="Submit">
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $("#myForm").submit(function(event) {
        event.preventDefault(); // Mencegah pengiriman form default
        
        var nama = $("#nama").val();
        var email = $("#email").val();
        var password = $("#password").val();
        
        // Melakukan validasi
        var valid = true;
        if (nama === "") {
            $("#nama-error").text("Nama harus diisi.");
            valid = false;
        } else {
            $("#nama-error").text("");
        }
        if (email === "") {
            $("#email-error").text("Email harus diisi.");
            valid = false;
        } else {
            $("#email-error").text("");
        }
        if (password === "" || password.length < 8) {
            $("#password-error").text("Password harus diisi minimal 8 karakter.");
            valid = false;
        } else {
            $("#password-error").text("");
        }
        
        // Jika validasi gagal, menghentikan pengiriman form
        if (!valid) {
            return false;
        }
        
        // Jika validasi berhasil, kirim data melalui AJAX
        $.ajax({
            type: "POST",
            url: "proses_validasi.php",
            data: $("#myForm").serialize(), // Mengambil data form
            success: function(response) {
                // Menampilkan jika pengiriman berhasil
                alert(response + " Pasword adalah: " + password);
            },
            error: function(xhr, status, error) {
                // Menampilkan jika pengiriman gagal
                alert("Terjadi kesalahan: " + error);
            }
        });
    });
});
</script>

</body>
</html>