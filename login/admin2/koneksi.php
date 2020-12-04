<?php 
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "penjualan_juan";

	$koneksi = mysqli_connect($server,$user,$pass,$db)
		or die (mysqli_connect_error());
?>