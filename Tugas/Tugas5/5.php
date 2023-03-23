<?php
$Mahasiswa = [ 
    [
     "Nama" => "Yesi Dedehidayati",
     "NRP"  => "223040179",
     "Jurusan" => "Teknik Informatika"
    ],
    [
        "Nama" => "Samsul",
        "NRP" => "22304022",
        "Jurusan" => "Teknik Pangan"
    ],
    [
        "Nama" => "Dudung",
        "NRP" => "223040158",
        "Jurusan" => "Teknik Mesin"
    ],
    [
        "Nama" => "ica",
        "NRP" => "223040172",
        "Jurusan" => "Teknik Informatika"
    ],
    [
        "Nama" => "ika",
        "NRP" => "223040139",
        "Jurusan" => "Teknik Informatika"
    ],
    [
        "Nama" => "Nisa",
        "NRP" => "223040163",
        "Jurusan" => "Teknik Informatika"
    ],
    [
        "Nama" => "Ucup",
        "NRP" => "223040112",
        "Jurusan" => "Teknik Lingkungan"
    ],
    [
        "Nama" => "Sasa",
        "NRP" => "22304078",
        "Jurusan" => "Teknik Industri"
    ],
    [
        "Nama" => "Paimin",
        "NRP" => "223040159",
        "Jurusan" => "Teknik Informatika"
    ],
    [
        "Nama" => "Agus",
        "NRP" => "22304070",
        "Jurusan" => "Teknik Informatika"
    ]
   
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas5</title>
</head>
<body>
    <h1> Data Mahasiswa </h1>
    <?php foreach ($Mahasiswa as $Mhs):
    ?>
    <ul>
    <li> Nama : <?= $Mhs["Nama"];?></li>
    <li> NRP : <?= $Mhs["NRP"];?></li>
    <li> Jurusan : <?= $Mhs["Jurusan"];?></li>
</ul>
<?php endforeach; ?>
    

</body>
</html>