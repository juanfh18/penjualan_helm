<?php
	include "../koneksi.php" 
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
    $kategori = mysqli_query($koneksi,"SELECT * FROM kategori");
    $no=1;
?>
<table width="100%" border="1" align="center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <?php
                                   while ($data = mysqli_fetch_array($kategori)) {
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $data['nama_kategori']; ?></td>
                                        <td><?php echo $data['keterangan']; ?></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                            </table>
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