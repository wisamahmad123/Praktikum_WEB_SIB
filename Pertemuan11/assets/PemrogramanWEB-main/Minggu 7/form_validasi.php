<!DOCTYPE html>
<html>
<head>
<title>Form Input dengan Validasi</title>
</head>
<body>
<h1>Form Input dengan Validasi</h1>
<form id="myForm" method="post" action="proses_validasi.php">
<label for="nama">Nama: </label>
<input type="text" id="nama" name="nama">
<br>
<label for="email">Email:</label>
<input type="text" id="email" name="email"> <br>
<input type="submit" value="Submit">
</form>
<script src="https://code.jquery.com/jquery-3.6.6.min.js"></script>
<script>
$(document).ready(function() {
    $("form").submit(function(event) {
        var nama = $("#nama").val();
        var email = $("#email").val();
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
        if (!valid) {
            return false; // Menghentikan pengiriman form jika validasi gagal
        }
    });
});
</script>
</body>
</html>
