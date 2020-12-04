<?php
	include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data Kategori</title>
</head>
<body>
	<?php 
		$kategori = mysqli_query($koneksi,"SELECT * FROM kategori WHERE id_kategori='$_GET[id]'");

	 ?>
		<center><h3>Input Data Kategori</h3>
			<form action="" method="POST">
				<table>
					<TR>
						<?php
							while ($data = mysqli_fetch_array($kategori)) { 
						 ?>
					</TR>
					<tr>
						<td><label>Nama Kategori</label></td>
						<td> :</td>
						<td>
							<input type="hidden" name="id_kategori" value="<?php echo $data['id_kategori']; ?>">
							<input type="text" name="nama_kategori" value="<?php echo $data['nama_kategori']; ?>"></td></tr>
					<tr>
						<td><label>Keterangan</label></td>
						<td> :</td>
						<td><textarea name="keterangan"><?php echo $data['keterangan']; ?></textarea></td></tr>
					<?php } ?>
					<tr>
						<td colspan="3"><center><input type="submit" name="edit" value="UPDATE"></center></td></tr>
				</table>
				</form>
		</center>
		<?php
			if (isset($_POST['edit'])) {
			 	$query = mysqli_query($koneksi,"UPDATE kategori set nama_kategori='$_POST[nama_kategori]', keterangan='$_POST[keterangan]' WHERE id_kategori='$_POST[id_kategori]'");
			 	echo "<script>alert('Data Berhasil Diedit')
			 	window.location='kategori.php';
			 	</script>";

			 } 
		?>
</body>
</html>