<?php
	include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data Member</title>
</head>
<body>
	<?php 
		$member = mysqli_query($koneksi,"SELECT * FROM member WHERE id_member='$_GET[id]'");
	 ?>
	 <center><h3>Input Data Member</h3>
			<form action="" method="POST">
				<table>
					<?php 
						while($data = mysqli_fetch_array($member)) { 
					?>
					<tr>
						<td>Nama Member</td>
						<td>:</td>
						<td>
							<input type="hidden" name="id_member" value="<?php echo $data['id_member']; ?>">
							<input type="text" name="nama_member" value="<?php echo $data['nama_member'] ?>"></td>
					</tr>
					<tr>
						<td>No HP</td>
						<td>:</td>
						<td><input type="text" name="nohp" value="<?php echo $data['nohp'] ?>"></td>
					</tr>
					<tr>
						<td><label>Alamat</label></td>
						<td> :</td>
						<td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>
							<select name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>">
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
					        </select>
						</td>
					</tr>
					<tr>
						<td>Status</td>
						<td>:</td>
						<td>
							<select name="status" value="<?php echo $data['status'] ?>">
					          <option value="Aktif">Aktif</option>
								<option value="Tidak Aktif">Tidak Aktif</option>
							</select>
						</td>
					</tr>
					<?php } ?>
				</table>
				<input type="submit" name="edit" value="UPDATE">
				</form>
		</center>
		<?php 
			if(isset($_POST['edit'])){
				$query = mysqli_query($koneksi,"UPDATE member set nama_member='$_POST[nama_member]', nohp='$_POST[nohp]', alamat='$_POST[alamat]',	email='$_POST[email]', jenis_kelamin='$_POST[jenis_kelamin]', status='$_POST[status]' WHERE id_member='$_POST[id_member]'");
				echo "<script>alert('Data Berhasil Di Edit')
						window.location='member.php';
						</script>";
			}
		?>
</body>
</html>