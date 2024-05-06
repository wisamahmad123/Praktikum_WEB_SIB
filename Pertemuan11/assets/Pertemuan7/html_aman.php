<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
</head>
<body>
<?php
// Inisialisasi variabel
$inputErr = "";
$input = "";
$email = "";

// Cek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi input (contoh: pastikan input tidak kosong)
    if (empty($_POST["input"])) {
        $inputErr = "Input harus diisi!";
    } else {
        $input = test_input($_POST["input"]);
    }
    
    // Validasi email
    if (!empty($_POST["email"])) {
        $email = test_input($_POST["email"]);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email valid: " . $email . "!";
        } else {
            echo "Email tidak valid!";
        }
    }
}

// Fungsi untuk membersihkan input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!-- Form HTML -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="input">Input:</label>
    <input type="text" name="input" id="input" value="<?php echo $input; ?>">
    <br>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" value="<?php echo $email; ?>">
    <br>
    <span class="error"><?php echo $inputErr; ?></span><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
