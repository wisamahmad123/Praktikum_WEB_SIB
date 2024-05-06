<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Style Table</title>
            <!-- Membuat style tabel -->
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #f9f9f9;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    $Dosen = [
        // Membuat data array menggunakan variabel $Dosen
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan' ];

        // Menampilkan Hasil output pada tabel
    echo "<table>";
    echo "<tr><th>Nama</th><th>Domisili</th><th>Jenis Kelamin</th></tr>";
    echo "<tr><td>{$Dosen['nama']}
            </td><td>{$Dosen['domisili']}
            </td><td>{$Dosen['jenis_kelamin']}</td></tr>";
    echo "</table>";
    ?>
</body>
</html>
