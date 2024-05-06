<!DOCTYPE html>
<html>
<head>
    <!--Membuat title halaman-->
    <title>File Upload</title>
</head>
<body>
    <script>
        function previewImage(event){
            var file = event.target.files[0]; // Mendapatkan file yang diunggah
            var read = new FileReader();
            read.onload = function(e){
                var previewImage = document.getElementById("preview");
                previewImage.style.display = "block"; // Menampilkan gambar
                previewImage.src = e.target.result;

                // Menampilkan lebar dan tinggi gambar sesuai dengan ukuran yang ditentukan
                previewImage.style.width = "200px";
                previewImage.style.height = "auto";
            }
            read.readAsDataURL(file);
        }
    </script>
    <!--Memanggil file upload.php untuk menampilkan form input dan tombol submit-->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload" onchange="previewImage(event)">

        <!-- Menampilkan gambar -->
        <img id="preview" src="#" alt="preview" style="display: none;">
        <input type="submit" value="Upload File" name="submit">
    </form>
    
</body>
</html>
