<?php
//ARRAY ASSOCIATIVE
//

$Mahasiswa = [
    ['nama' => 'ica', 'binatang' => '🐥', 'makanan' => '🍕'],
    ['nama' => 'ika', 'binatang' => '🐈','makanan' => '🍔'],
    ['nama' => 'nisa', 'binatang' => '🐇', 'makanan' =>'🍟'],
    ['nama' =>'yesi', 'binatang' => '🐭', 'makanan' => '🍳']
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>latihan3</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($Mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama: <?= $mhs['nama']; ?></li>
        <li>Makanan Favorit: <?= $mhs['makanan']; ?></li>
        <li>Hewan Favorit: <?= $mhs['binatang']; ?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>