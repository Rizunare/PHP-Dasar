<?php
// $_GET
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
    <ul>
    
    <?php foreach ($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs ["nama"];?>&nrp= <?= $mhs ["nrp"];?>&email= <?= $mhs ["email"];?>&jurusan= <?= $mhs ["jurusan"];?>&gambar= <?= $mhs ["gambar"];?>"></a><?= $mhs ["nama"];?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>