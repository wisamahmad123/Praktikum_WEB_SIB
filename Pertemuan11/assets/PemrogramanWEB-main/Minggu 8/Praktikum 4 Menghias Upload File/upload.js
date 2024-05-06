$(document).ready(function(){
    $('#file').change(function(){
        // Memeriksa apakah ada file yang dipilih
        if(this.files.length > 0){
            // Menampilkan tombol unggah 
            $('#upload-button').prop("disabled", false).css('opacity', 1);
        } else {
            // Menonaktifkan tombol unggah 
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    //  Membuat kode submit pada form unggah
    $('#upload-form').submit(function(e){
        e.preventDefault(); // Mencegah perilaku default dari submit form
        
        var formData = new FormData(this); // Membuat objek FormData dari data form
        
        // Mengirim data form menggunakan AJAX
        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response){
                // Menampilkan pada server di elemen dengan id "status"
                $('#status').html(response);
            },
            error: function(){
                // Menampilkan pesan kesalahan jika salah upload file
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });     
    });
});
