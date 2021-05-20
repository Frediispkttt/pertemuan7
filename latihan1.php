<?php
/* 
    Fredi Supangkat
    203040076
    github.com/Frediispkttt/pw2021_203040076
    Pertemuan 7( 20 May 2021 )
    Materi Minggu ini mempelajari mengenai GET & POST
*/
?>

<?php 
// Superglobals 
// Variable global milik php
// Termasuk array associative
// $_GET 
// bisa di tambahkan melalui URL
// jika lebih dari 1 variable tambah &
// var_dump($_GET);
$mahasiswa = [
    [
        "nama" => "Fredi Supangkat", 
        "nrp" => "203040076",
        "email" => "fredisupangkat@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "Fredi.jpg.jpeg"
    ],
    [
        "nama" => "Linggih kusumah dilagga", 
        "nrp" => "203040174",
        "email" => "galihk250@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "linggih.jpg"
    ]
];
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER .....
// $_ENV
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
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?=$mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>