<?php 
	include "koneksi.php";
	mysqli_query($koneksi, "DELETE FROM barang WHERE id_barang='$_GET[id]'");
	echo"<script>alert('Data Berhasil Di Dihapus')
	window.location='barang.php';
	</script>";
 ?>