<?php
// Mengelola proses penambahan data anggota ke dalam database berdasarkan aksi yang diterima
include('koneksi.php');

$aksi = $_GET['aksi'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

if ($aksi == 'tambah') {
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    }
} else if ($aksi == 'ubah') {
    // Mengatur proses pengubahan data anggota berdasarkan ID dengan nilai-nilai baru
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        $query = "UPDATE anggota SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_telp='$no_telp' WHERE id = $id";
        if (mysqli_query($koneksi, $query)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Gagal menghapus data: " . mysqli_error($koneksi);
        }
    } else {
        echo "ID tidak valid.";
    }
} else if ($aksi == 'hapus') {
    // Mengatur proses penghapusan data anggota berdasarkan ID
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM anggota WHERE id = $id";

        if (mysqli_query($koneksi, $query)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Gagal menghapus data: " . mysqli_error($koneksi);
        }
    } else {
        echo "ID tidak valid.";
    }
} else {
    header("Location: index.php");
}
mysqli_close($koneksi);
?>

<!-- variabel $aksi yang didapat dari parameter GET untuk menentukan tindakan apa yang akan dilakukan, 
seperti menambah, mengubah, atau menghapus data anggota. 
Data yang diterima dari formHTML menggunakan metode POST kemudian disimpan dalam variabel 
seperti $nama, $jenis_kelamin, $alamat, dan $no_telp. Terakhir, koneksi ke database ditutup menggunakan mysqli_close().
-->