<!DOCTYPE html>
<!--Praktikum 3 Upload File dengan PHP dan Jquery-->
<html>
<head>
    <title>Unggah File Dokumen</title>
</head>
<body>
    <div class="upload-form-container">
        <h2>Unggah File Dokumen</h2>
        <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
                <input type="file" name="file[]" id="file" class="file-input" accept="image/" multiple>
                <input type="submit" name="submit" value="Unggah"> 
        </form>
        <div id="status"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="upload.js"></script>
</body>
</html>
