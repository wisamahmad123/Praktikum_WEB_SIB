$(document).ready(function() {
    // Membuat fungsi yang akan dijalankan ketika formulir dengan ID "upload-form" dikirimkan
    $('#upload-form').submit(function(e){
        e.preventDefault();

        // Membuat objek FormData untuk mengumpulkan data formulir
        var formData = new FormData(this);

        // Permintaan AJAX ke 'upload_ajax.php' menggunakan metode POST
        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false, // Menonaktifkan penyimpanan sementara
            contentType: false, // Menonaktifkan tipe konten default
            processData: false, // Menonaktifkan pemrosesan data default

            // Membuat fungsi yang akan dieksekusi jika permintaan berhasil
            success: function(response){
                $('#status').html(response); // Menetapkan respons dari server ke elemen dengan ID 'status'
            },

            // Membuat fungsi yang akan dieksekusi jika terjadi kesalahan
            error: function() {
                $('#status').html('Terjadi kesalahan saat mengunggah file.'); // Menampilkan pesan kesalahan
            }
        });
    });
});
