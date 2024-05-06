<!DOCTYPE html>
<html>
<head>
     <!--Membuat Title-->
    <title>Multiupload Document</title>
</head>
<body>
    <h2>Unggah Dokumen</h2>
    <!--Membuat tampilan form untuk mengunggah dokumen dengan metode POST-->
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <!--Membuat inputan memilihin file yang akan diunggah-->
        <input type="file" name="files[]" multiple="multipe" accept=".jpg, .jpeg, .png, .gif" />
        
        <!--Membuat tombol untuk mengirim form-->
        <input type="submit" value="Unggah" />
</body>
</html>