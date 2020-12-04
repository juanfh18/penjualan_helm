<?php
    include "../koneksi.php";
    $tgl = date('d-M-Y');
    if ($_GET['dari']!="" and $_GET['sampai']!="") {
        $squ = "where date(tanggal_jual) between '$_GET[dari]' and '$_GET[sampai]'";
        $ket = "$_GET[dari] s/d $_GET[sampai]";
    }else{
        $squ = "ORDER BY a.id_penjualan";
    }
?> 
<body onload="javascript:print()">
<table align="center">
	<tr>
		<td><img src="../images/logo.jpg" width="150px"></td>
		<td>&nbsp;</td>
		<td>
			<h2 align="center" style="margin: 0px">PT. GAS ALAM PUTRA PERSADA</h2>
			<br>
			<h4 align="center" style="margin: 0px">Jl. Bypass KM 20 Padang Barat, Sumatera Barat</h4>
			<h3 align="center" style="margin: 0px">Laporan Data Member</h3>
		</td>
	</tr>
</table>
<br>
<?php
    $penjualan = mysqli_query($koneksi,"SELECT * FROM penjualan a join member b on a.id_member=b.id_member join barang c on a.id_barang=c.id_barang");
    $no=1;
?>
<table width="100%" border="1" align="center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Nama Member</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah Jual</th>
                                        <th>Harga Jual</th>
                                        <th>Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $sql = mysqli_query($koneksi,"SELECT * from penjualan a join member b on a.id_member=b.id_member join barang c on a.id_barang=c.id_barang $squ");
                                        $cek = mysqli_num_rows($sql);
                                        if ($cek < 1){
                                    ?>
                                    <tr>
                                        <td colspan="13" class="p-3">Data Tidak Ditemukan</td>
                                    </tr>
                                    <?php
                                }else{
                                    $no = 1;
                                    $total_jualan = 0;
                                    while ($data = mysqli_fetch_array($sql)) {
                                        $sup = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from penjualan a join member b on a.id_member=b.id_member join barang c on a.id_barang=c.id_barang $squ"));
                                        $total_harga = $data['jumlah_jual'] * $data['harga_jual'];
                                        $total_jualan += $total_harga;
                                    
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $data['tanggal_jual']; ?></td>
                                        <td><?php echo $data['nama_member']; ?></td>
                                        <td><?php echo $data['kode_barang']; ?></td>
                                        <td><?php echo $data['nama_barang']; ?></td>
                                        <td><?php echo $data['jumlah_jual']; ?></td>
                                        <td>Rp. <?php echo number_format($data['harga_jual']); ?></td>
                                        <td>Rp. <?php echo number_format($total_harga); ?></td>
                                    </tr>
                                </tbody>
                                <?php 
                            }
                            }
                            ?>
                                <tr>
                                    <td colspan="7" align="center"><b>Total Penjualan</b></td>
                                    <td>Rp. <?php echo number_format($total_jualan); ?></td>
                                </tr>
                            </table>
            <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
                <tr>
                    <td width="63%">
                        &nbsp;
                    </td>
                    <td width="37%">
                        <div align="center">
                            <?php
                                $tgl = date('d M Y');
                                echo "Padang, $tgl"; 
                            ?>
                            <br>
                            <br>
                            <br>
                            Pimpinan
                        </div>
                    </td>
                </tr>
            </table>
</body>