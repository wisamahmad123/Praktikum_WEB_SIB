<!DOCTYPE html>
<html>
<head>    
<!-- Membuat tampilan title -->
<title>Form Input PHP</title>
</head>
<body>
    <!-- Membuat tampilan judul -->
    <h2>Form Input PHP</h2>
<!-- Membuat proses inputan-->
<form method="POST" action= "html_aman.php"; 
        <label for='input'>Nama: </label>
        <input type='text' name='input' id= 'input' required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</form>
</body>
</html>

<?php
// Cek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa key 'input' apakah ada di array $_POST sebelum mengaksesnya. 
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    echo 'Input:'.$input;
    echo "<br>";
    $email = $_POST['email'];

    // Memeriksa apakah input adalah email yang valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email: " .$email;
    } else {
        echo "Invalid email";
    }
}
?>
