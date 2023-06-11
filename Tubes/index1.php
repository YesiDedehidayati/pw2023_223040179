<?php
//membuat funcition
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'functions.php';
$memesan = query("SELECT * FROM memesan");

// tombol cari ditekan
if( isset($_POST["cari"])) {
    $memesan = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>

<a href="logout.php">Logout</a>

<h1>memesan</h1>

<a href="tambah.php"> Tambah data pesanan</a>
<br><br>

<form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="memasukan keyword pencarian.." autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
</form>

<br>
<table border="1" cellpedding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Pesanan</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Gambar</th>
    </tr>

    <?php $i =1; ?>
    <?php foreach( $memesan as $row ): ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
        </td>
        <td><?=$row["pesanan"];?></td>
        <td><?=$row["jumlah"];?></td>
        <td><?=$row["harga"];?></td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
     

    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>


</table>
    
</body>
</html>