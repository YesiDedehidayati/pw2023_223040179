<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$psn = query("SELECT * FROM memesan WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index1.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index1.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data pesanan</title>
</head>
<body>
	<h1>Ubah data pesanan</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $psn["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $psn["gambar"]; ?>">
		<ul>
			<li>
				<label for="pesanan">Pesanan : </label>
				<input type="text" name="pesanan" id="pesanan" required value="<?= $psn["pesanan"]; ?>">
			</li>
			<li>
				<label for="jumlah">Jumlah : </label>
				<input type="text" name="jumlah" id="jumlah" value="<?= $psn["jumlah"]; ?>">
			</li>
			<li>
				<label for="harga">Harga :</label>
				<input type="text" name="harga" id="harga" value="<?= $psn["harga"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<img src="img/<?= $psn['gambar']; ?>" width="40"> <br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>