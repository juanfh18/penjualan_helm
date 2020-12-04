<?php
	include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data Barang</title>
</head>
<body>
	<?php 
		$barang = mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang='$_GET[id]'");

	 ?>
			<center>
					<form action="" method="POST">
					<table border="0" cellpadding="3">
					<tr>
						<td colspan="3"><center>Input Data Barang</center></td>
					</tr>
					<?php 
						while($data = mysqli_fetch_array($barang)) { 
					?>
				<tr>
					<td>Kode Barang</td>
					<td>:</td>
					<td>
						<input type="hidden" name="id_barang" value="<?php echo $data['id_barang']; ?>">
						<input width="" type="text" name="kode_barang" value="<?php echo $data['kode_barang'] ?>"></td>
				</tr>
				<tr>
					<td>Nama Barang</td>
					<td>:</td>
					<td><input width="" type="text" name="nama_barang" value="<?php echo $data['nama_barang'] ?>"></td>
				</tr>
				<tr>
					<td>Nama Kategori</td>
					<td>:</td>
					<td>
						<select name="id_kategori">
				          <?php
				            $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
				              while ($m = mysqli_fetch_array($kategori)) {
				              if ($pecah['id_kategori'] == $m['id_kategori']) {
				                $selected = "selected";
				              } else {
				                $selected = "";
				              }
				            ?>
				              <option value="<?php echo $m['id_kategori']; ?>" <?= $selected ?>><?php echo "$m[nama_kategori]"; ?></option>
				            <?php
				            }
				            ?>
				        </select>
					</td>
					<br></br>
				</tr>
				<tr>
					<td>Satuan</td>
					<td>:</td>
					<td><input type="text" name="satuan" value="<?php echo $data['satuan'] ?>"></td>
				</tr>
				<tr>
					<td>Harga Beli</td>
					<td>:</td>
					<td><input type="text" name="harga_beli" value="<?php echo $data['harga_beli'] ?>"></td>
				</tr>
				<tr>
					<td>Harga Jual</td>
					<td>:</td>
					<td><input type="text" name="harga_jual" value="<?php echo $data['harga_jual'] ?>"></td>
				</tr>
				<tr>
					<td>Tanggal</td>
					<td>:</td>
					<td><input type="date" name="tanggal" value="<?php echo $data['tanggal'] ?>"></td>
				</tr>
				<tr>
					<td>Stok</td>
					<td>:</td>
					<td><input type="text" name="stok" value="<?php echo $data['stok'] ?>"></td>
				</tr>
				<?php } ?>
				</table>
				<input type="submit" name="edit" value="UPDATE">
				</form>
		</center>
		<?php 
			if(isset($_POST['edit'])){
				$query = mysqli_query($koneksi,"UPDATE barang set kode_barang='$_POST[kode_barang]', nama_barang='$_POST[nama_barang]', id_kategori='$_POST[id_kategori]', satuan='$_POST[satuan]',	harga_beli='$_POST[harga_beli]', harga_jual='$_POST[harga_jual]', tanggal='$_POST[tanggal]', stok='$_POST[stok]' WHERE id_barang='$_POST[id_barang]'");
				echo "<script>alert('Data Berhasil Di Edit')
						window.location='barang.php';
						</script>";
			}
		?>
</body>
</html>