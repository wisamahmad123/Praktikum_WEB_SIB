<?php
    $expiration_time = time() + (10 * 60); // 10 menit * 60 detik
    setcookie('hasil', 'Terima kasih telah daftar member di MDHP Gym', $expiration_time);
    setcookie('nama_pemilik', 'Mochammad Dicky Hanun Prasetyo', $expiration_time);
?>

<!DOCTYPE html>
<html>
<head>
    <link href="form.css" rel="stylesheet">
    <script src="jquery-3.7.1.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin MDHP Gym</title>
    <script>
        $(function(){
            $("#date_ex").datepicker();
        });
    </script>
</head>
<body>

<div class="container1">
    <header>Login Admin MDHP Gym</header>

    <main>
        <div class="logo">
            <img src="img/logo.jpg"> <br>       
        </div>
        <p>MDHP Gym atau kepanjangan dari Mochammad Dicky Hanun Prasetyo (Gym) yang berlokasi di JL. Soekarno Hatta (Depan Kampus Politeknik Negeri Malang) adalah tempat fitnes area yang berdiri sejak 2017 dan merupakan tempat fitnes yang berdiri sendiri tidak membuka cabang, 
        tempat gym sangat cocok untuk olahraga dan menjaga kesehatan, di MDHP Gym juga menyediakan alat yang lengkap dan terbaru sehingga pada saat latihan bisa nyaman dan fokus. Di fitnes area juga menyediakan berbagai suplemen untuk kebutuhan gym dan 
        juga menyediakan berbagai jenis minuman kopi, jus buah, dan masih banyak lagi. Olahraga itu penting karena menjaga kesehatan itu sulit dan kesehatan itu mahal.
    </p>
    </main>

    <form method="POST" action="cetak.php">
        <h2>Form Pendaftaran Member Baru MDHP GYM</h2>
        <b>Tanggal Pembuatan Kartu Member:</b> 
        <input name="var0" type="text" size="30"  id="date_ex" placeholder="Masukkan tanggal pembuatan kartu"><br> 
        <i class='bx bxs-user-plus'></i> 
        <input type="text" name="var1" size="30" placeholder="Masukkan nama lengkap"><br><br> 
        <i class='bx bxs-user-plus'></i>
        <input type="text" name="var2" size="30" placeholder="Masukkan id baru"><br><br> 
        
        <i class='bx bxs-location-plus'></i> <b>Alamat asal: </b><br> 
        <select name="var6" size="1"> 
            <option value="Malang" checked>Malang</option> 
            <option value="Batu">Batu</option> 
            <option value="Singosari">Singosari</option> 
            <option value="Kabupaten Malang">Kabupaten Malang</option> 
            <option value="Luar Malang">Luar Malang</option> 
        </select><br><br> 

        <b for="tanggal_lahir">Tanggal Lahir:</b>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir"><br><br>
        
        <i class='bx bx-world'></i> <b>Status Pekerjaan: </b><br> 
        <input type="checkbox" name="var3" value="Pelajar/Mahasiswa">Pelajar/Mahasiswa<br> 
        <input type="checkbox" name="var3" value="Bekerja">Bekerja<br><br>  
        
        <i class='bx bx-male-female'></i> <b>Jenis Kelamin:<br>  
        <input type="radio" name="var4" value="Laki-laki">Laki-laki<br> 
        <input type="radio" name="var4" value="Perempuan">Perempuan<br><br> 
        
        <i class='bx bx-dumbbell' ></i> <b>Apakah sebelumnya pernah gym:</b><br> 
        <input type="radio" name="var8" value="Pernah Gym"> Pernah<br> 
        <input type="radio" name="var8" value="Belum Pernah Gym"> Belum Pernah<br><br>
        
        <b>Lama member: </b><br> 
        <select name="var7" size="1"> 
            <option value="1 Bulan" sel>1 Bulan</option> 
            <option value="3 Bulan">3 Bulan</option> 
            <option value="5 Bulan">5 Bulan</option> 
            <option value="7 Bulan">7 Bulan</option> 
            <option value="9 Bulan">9 Bulan</option> 
            <option value="12 Bulan">12 Bulan</option>  
        </select><br><br>

        <b for="tanggal_mulai">Tanggal Mulai Member:</b>
        <input type="date" id="tanggal_mulai" name="tanggal_mulai"><br><br>
        
        <b for="tanggal_akhir">Tanggal Akhir Member:</b>
        <input type="date" id="tanggal_akhir" name="tanggal_akhir"><br><br>
        
        <div class="tombol2">
        <i class='bx bxs-eraser' ></i> <input type="reset" name="var6" value="Bersihkan Inputan"> 
        </div>

        <div class="tombol">
        <i class='bx bxs-data'></i> <input type="submit" name="var5" value="Cetak Kartu Member">
        </div>

        <div class="Logout">
        <input type="button" value="Keluar" onclick="location.href='login.html'">
    </div>
    </form> 
    
    
    
</div>

</body>
</html>