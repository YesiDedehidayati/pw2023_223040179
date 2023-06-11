<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ){

    // cek apakah berhasil di tambahkan atau tidak
    if( tambah($_POST) > 0 ) {
            echo "
            <script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index1.php';
			</script>";
    } else {
        echo "
        <script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index1.php';
			</script>";
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah data pesanan</title>
</head>
<body>
    <h1>Tambah data pesanan</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <tabel for="pesanan">Pesanan : </label>
                <input type="text" name="pesanan" id="pesanan" required>
            </li>
            <li>
                <tabel for="jumlah">Jumlah : </label>
                <input type="text" name="jumlah" id="jumlah">
            </li>
            <li>
                <tabel for="harga">Harga : </label>
                <input type="text" name="harga" id="harga">
            </li>
            <li>
                <tabel for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>

        </ul>
    </form>
    
</body>
</html>