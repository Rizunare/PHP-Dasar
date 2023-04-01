<?php

$mahasiswa = [
    [
    "nama" => "Rifqi Achmad", 
    "nrp" => "92384942893",
    "email" => "TinyNight05@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "hafidz.jpg"
    ],
    [
        "nama" => "Farhan Doddy", 
        "nrp" => "84989458240",
        "email" => "Terkipli2@gmail.com",
        "jurusan" => "Teknik Pertanian",
        "tugas" => [90,80,100],
        "gambar" => "azizi.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"]; ?> " alt=""></li>
            <li><?= $mhs["nama"]; ?></li>
            <li><?= $mhs["nrp"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>
