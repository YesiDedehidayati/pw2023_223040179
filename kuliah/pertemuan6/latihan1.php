<?php
$Mahasiswa = ['ica','ika','nisa','yesi'];
$binatang = ['🐥','🐈','🦉','🐭'];
$makanan = ['🍕','🍔','🍟','🍳'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($Mahasiswa as $i => $m) { ?>
    <ul>
        <li>Nama: <?= $m; ?></li>
        <li>Makanan Favorit: <?= $makanan[$i]; ?></li>
        <li>Hewan Favorit: <?= $binatang[$i]; ?></li>
    </ul>
<?php } ?>
</body>
</html>