<?php
session_start();

$admin1_username = "admin123";
$admin1_password = "admin123";

$admin2_username = "dicky123";
$admin2_password = "dicky123";

if(isset($_POST['admin']) && isset($_POST['input_password'])) {
    $input_admin = $_POST['admin'];
    $input_password = $_POST['input_password'];

    if(($input_admin == $admin1_username && $input_password == $admin1_password) || ($input_admin == $admin2_username && $input_password == $admin2_password)) {
        $_SESSION['admin'] = $input_admin;
        $_SESSION['input_password'] = $input_password;
    }
}
?>
