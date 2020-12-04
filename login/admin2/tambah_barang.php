<?php
	include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data Barang</title>
</head>
<body>
		<center><h3>Input Data Barang</h3>
			<form action="" method="POST">
				<table>
					<tr>
						<td><label>Kode Barang</label></td>
						<td> :</td>
						<td><input type="text" name="kode_barang" placeholder="Kode Barang"></td></tr>
					<tr>
						<td><label>Nama Barang</label></td>
						<td> :</td>
						<td><input type="text" name="nama_barang" placeholder="Nama Barang"></td></tr>
						<tr>
						<td><label>Nama Kategori</label></td>
						<td> :</td>
						<td><select name="id_kategori">
							<?php
								$query = mysqli_query($koneksi,"select * from kategori");

								while ($data = mysqli_fetch_assoc($query)) {
									echo "<option value=\"$data[id_kategori]\">$data[nama_kategori]</option>";
								}
							?>
						</select></td></tr>
						<tr>
						<td><label>Satuan</label></td>
						<td> :</td>
						<td><input type="text" name="satuan" placeholder="Satuan"></td></tr>
						<tr>
						<td><label>Harga Beli</label></td>
						<td> :</td>
						<td><input type="text" name="harga_beli" placeholder="Harga Beli"></td></tr>
						<tr>
						<td><label>Harga Jual</label></td>
						<td> :</td>
						<td><input type="text" name="harga_jual" placeholder="Harga Jual"></td></tr>
						<tr>
						<td><label>Tanggal</label></td>
						<td> :</td>
						<td><input type="date" name="tanggal"></td></tr>
						<tr>
						<td><label>Stok</label></td>
						<td> :</td>
						<td><input type="text" name="stok" placeholder="Stok"></td></tr>

					<tr>
						<td colspan="3"><center><input type="submit" name="simpan" value="SIMPAN"></center></td></tr>
				</table>
				</form>
		</center>
		<?php
			if (isset($_POST['simpan'])) {
			 	$query = mysqli_query($koneksi,"INSERT INTO barang set id_barang='', kode_barang='$_POST[kode_barang]', nama_barang='$_POST[nama_barang]', id_kategori='$_POST[id_kategori]', satuan='$_POST[satuan]', harga_beli='$_POST[harga_beli]', harga_jual='$_POST[harga_jual]', tanggal='$_POST[tanggal]',stok='$_POST[stok]'");
			 	echo"<script>alert('Data Berhasil Di Simpan')
			 	window.location='barang.php';
			 	</script>";

			 } 
		?>
</body>
</html>