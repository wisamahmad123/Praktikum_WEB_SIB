/*$(document).ready(function () {
    $('#upload-form').submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                $('#status').html(response);
            },
            error: function () {
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});*/

// praktikum 4
$(document).ready(function() {
    //fungsi untuk mengubah css untuk opacity suatu file
    $('#file').change(function(){ //Fungsi dijalankan ketika nilai elemn input file yang ber-ID file berubah
        if (this.files.length > 0) { // Memeriksa apakah ada file yang dipilih?
            $('#upload-button').prop('disabled', false).css('opacity', 1); // Jika ada
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5); // Jika tidak ada
        }
    });

    //fungsi upload form
    $('#upload-form').submit(function(e){
        e.preventDefault();

        var formData = new FormData(this);
    
        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            succes: function(response) {
                $('#status').html(response);
            },
            error: function(){
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});