<?php
	include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data Member</title>
</head>
<body>
		<center><h3>Input Data Member</h3>
			<form action="" method="POST">
				<table>
					<tr>
						<td><label>Nama Member</label></td>
						<td> :</td>
						<td><input type="text" name="nama_member" placeholder="Nama Member"></td>
					</tr>
					<tr>
						<td><label>No HP</label></td>
						<td> :</td>
						<td><input type="text" name="nohp" placeholder="No HP"></td>
					</tr>
					<tr>
						<td><label>Alamat</label></td>
						<td> :</td>
						<td><textarea name="alamat"></textarea></td>
					</tr>
					<tr>
						<td><label>Email</label></td>
						<td> :</td>
						<td><input type="text" name="email" placeholder="Email"></td>
					</tr>
					<tr>
						<td><label>Jenis Kelamin</label></td>
						<td>:</td>
						<td><select name="jenis_kelamin">
							<option value="Laki-Laki">Laki-Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select> 
					</td>
					</tr>
					<tr>
						<td><label>Status</label></td>
						<td>:</td>
						<td><select name="status">
							<option value="Aktif">Aktif</option>
							<option value="Tidak Aktif">Tidak Aktif</option>
						</select></td>
					</tr>
					<tr>
						<td colspan="3"><center><input type="submit" name="simpan" value="SIMPAN"></center></td>
					</tr>
				</table>
				</form>
		</center>
		<?php
			if (isset($_POST['simpan'])) {
			 	$query = mysqli_query($koneksi,"INSERT INTO member set id_member='', nama_member='$_POST[nama_member]', nohp='$_POST[nohp]', alamat='$_POST[alamat]', email='$_POST[email]', jenis_kelamin='$_POST[jenis_kelamin]', status='$_POST[status]'");
			 	echo"<script>alert('Data Berhasil Di Simpan')
			 	window.location='member.php';
			 	</script>";

			 } 
		?>
</body>
</html>