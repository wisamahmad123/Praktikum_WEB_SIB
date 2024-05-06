<?php
// Soal nomor 1.3
// Memeriksa apakah formulir telah dikirimkan
if (isset($_POST["submit"])) { 
    $targetDirectory = "documents/"; // File akan di simpan pada folder documents
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    // Membuat ekstensi file menggunakan strtolower dan pathinfo
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    // Membuat array yang berisi jenis file dokumen yang diperbolehkan (jpeg, jpg, png, gif)
    $allowedExtensions = array("jpeg", "jpg", "png", "gif");
    $maxFileSize = 10 * 1024 * 1024; // Maksimum ukuran file 10 MB

    // Mengunggah file jika memenuhi kriteria
    if (in_array($documentFileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file"; // Menampilkan pesan jika gagal mengunggah
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan."; // Menampilkan pesan jika jenis dokumen atau ukuran file tidak sesuai
    }
}


// Soal nomor 1.4
/*if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/"; // Membuat direktori tujuan untuk menyimpan file.
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtentions = array("txt", "pdf", "doc", "docx");
    
    $maxFileSize = 10 * 1024 * 1024; 

    if (in_array($fileType, $allowedExtentions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file.";
        }
} else {
    echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
}
} */
?>