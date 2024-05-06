<?php
if (isset($_FILES['file'])) {
    $errors = array(); // Membuat array untuk menyimpan pesan error

    // Looping untuk setiap file yang diupload
    foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
        // Membuat informasi file yang diupload
        $file_name = $_FILES['file']['name'][$key];
        $file_size = $_FILES['file']['size'][$key];
        $file_tmp = $_FILES['file']['tmp_name'][$key];
        $file_type = $_FILES['file']['type'][$key];

        // Mendapatkan ekstensi file yang diupload dalam format lowercase
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $extensions = array("jpeg", "jpg", "png", "gif");

        // Membuat pengecekan apakah format file sudah sesuai atau belum 
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
        }

        // Membuat pengecekan ukuran file yang diupload.
        if ($file_size > 2097152){
            $errors[] = "Ukuran file terlalu besar. File maksimal berukuran 2MB";
        }

        // Jika tidak ada error, maka file dipindah ke folder tujuan 'uploads/'.
        if (empty($errors)) {
            $targetDirectory = "uploads/";
            $targetFile = $targetDirectory . $file_name;
            if (move_uploaded_file($file_tmp, $targetFile)) {
                echo "File " . $file_name . " berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file " . $file_name . ".<br>";
            }
        } else {
            echo implode(" ", $errors) . "<br>"; // Menampilkan jika eror
        }
    }
}
?>
