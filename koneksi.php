<?php 
$base_url = "https://localhost/Program%20Retooling/penjualan%20helm/";
date_default_timezone_set('Asia/Jakarta');
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "penjualan_juan";

	$koneksi = mysqli_connect($server,$user,$pass,$db)
		or die (mysqli_connect_error());
?>