<!DOCTYPE html>
<html>
<head>
    <title>Unggah File Dokumen</title>
</head>
<body>
    <div class="upload-form-container">
        <h2>Unggah File Dokumen</h2>
        <link rel="stylesheet" href="upload.css">
        <!-- Membuat form untuk mengunggah file -->
        <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <div class="file-input-container">
                <input type="file" name="file[]" id="file" class="file-input" accept="image/" multiple>
                <label for="file" class="file-label">Pilih file</label>
            </div>
            <!-- Tombol unggah file -->
            <button type="submit" name="submit" class="upload-button" id="upload-button" disabled>Unggah</button>
        </form>
        <div id="status" class="upload-status"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="upload.js"></script>
</body>
</html>
