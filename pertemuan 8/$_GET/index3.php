<?php
// $mahasiswa = [
//     ["Rifqi Achmad", "92384942893", "TinyNight05@gmail.com", "Teknik Informatika"],
//     ["Farhan Doddy", "84989458240", "Terkipli2@gmail.com", "Teknik Pertanian"],
// ];

// Array  Associative
// Definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Siswa</h1>

    <?php foreach($mahasiswa as $mhs): ?>
        <ul>
            <li>
                <img src="<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>