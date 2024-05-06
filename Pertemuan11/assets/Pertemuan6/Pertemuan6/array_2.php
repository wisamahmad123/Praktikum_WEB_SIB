<!DOCTYPE html>
<html>
    <!-- <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        <?php
            $Dosen=[
                'nama'=>'Elok Nur Hamdana',
                'domisili'=>'Malang',
                'jenis_kelamin'=> 'Perempuan'
            ];
            echo "Nama : {$Dosen ['nama'] }<br>";
            echo "Domisili :{$Dosen ['domisili']}<br>";
            echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']}<br>";

        ?>
    </body> -->


<!-- //MODIFIKASI NO 2// -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                padding: 15px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Atribut</th>
                <th>Data</th>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo $Dosen ['nama'] ?></td>
            </tr>
            <tr>
                <td>Domisili</td>
                <td><?php echo $Dosen ['domisili'] ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $Dosen ['jenis_kelamin'] ?></td>
            </tr>
        </table>
    </body>
</html>