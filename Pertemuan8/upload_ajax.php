<?php
// praktikum 3 
/*if (isset($_FILES['files'])) {
    $errors = array();
    // penambahan foreach dan array key untuk soal 3.2
    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $extensions_allowed = array("jpg", "jpeg", "png", "gif");

        if (!in_array($file_ext, $extensions_allowed)) {
            $errors[] = "Ekstensi file yang diizinkan adalah PNG, JPG, JPEG, atau GIF. <br>";
        }

        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB <br>';
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            echo "File $file_name berhasil diunggah.<br>";

        }
    }

}*/

//Praktikum 4
if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $extensions = array("txt", "pdf", "doc", "docx");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Ekstensi file yang diizinkan adalah TXT, PDF, DOC, dan DOCX.";
    }

    if ($file_size > 2097152) {
        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
    }

    if (empty($errors)) {
        move_uploaded_file($file_tmp, "uploads/" . $file_name);
        echo "File berhasil diunggah.";
    } else {
        echo implode("", $errors);
    }
}
