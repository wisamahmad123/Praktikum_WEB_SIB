<?php
// Mebuat lokasi penyimpanan file yang diunggah
$targetDirectory = "documents/";

// Pengecekan apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    // Membuat perulangan for untuk melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . $fileName;
        
        // Membuat pemindahan untuk file yang sudah diunggah ke direktori penyimpanan
        if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
            echo "File $fileName berhasil diunggah.<br>"; // Tampilan jika berhasil mengunggah file beserta nama file.
        } else {
            echo "Gagal mengunggah file $fileName.<br>"; // Tampilan jika gagal mengunggah file beserta nama file.
        }
    }
} else {
    echo "Tidak ada file yang diunggah."; // Tampilan jika tidak ada file yang diunggah.
}
?>
