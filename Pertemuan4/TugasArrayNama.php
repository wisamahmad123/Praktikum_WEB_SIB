<?php
$biodata = [
    'Data1' => [
        ['Nama', 'Robi Surasih'],
        ['Alamat', 'Kedungkandang'],
        ['No HP', '082315523324'],
        ['Jurusan', 'Jurusan Teknik Mesin'],
    ],
    'Data2' => [
        ['Nama', 'Jisoo Ruby'],
        ['Alamat', 'Lowokwaru'],
        ['No HP', '08444213422'],
        ['Jurusan', 'Jurusan Teknologi Informasi'],
    ],   
];

echo "<img src='img/img1.JPEG'width='200' >";
echo "<br>";
foreach ($biodata['Data1'] as $dataDiri) {
    echo "$dataDiri[0] = $dataDiri[1]";
    echo "<br>";
}
echo "<br>";

echo "<img src='img/img2.JPG' width='200' height='270'>";
echo "<br>";
foreach ($biodata['Data2'] as $dataDiri) {
    echo "$dataDiri[0] = $dataDiri[1]";
    echo "<br>";
}
?>