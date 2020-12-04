<?php
	include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data Kategori</title>
</head>
<body>
		<center><h3>Input Data Kategori</h3>
			<form action="" method="POST">
				<table>
					<tr>
						<td><label>Nama Kategori</label></td>
						<td> :</td>
						<td><input type="text" name="nama_kategori" placeholder="Nama Kategori"></td></tr>
					<tr>
						<td><label>Keterangan</label></td>
						<td> :</td>
						<td><textarea name="keterangan"></textarea></td></tr>
					<tr>
						<td colspan="3"><center><input type="submit" name="simpan" value="SIMPAN"></center></td></tr>
				</table>
				</form>
		</center>
		<?php
			if (isset($_POST['simpan'])) {
			 	$query = mysqli_query($koneksi,"INSERT INTO kategori set id_kategori='', nama_kategori='$_POST[nama_kategori]', keterangan='$_POST[keterangan]'");
			 	echo "<script>alert('Data Berhasil Disimpan')
			 	window.location='kategori.php';
			 	</script>";

			 } 
		?>
</body>
</html>