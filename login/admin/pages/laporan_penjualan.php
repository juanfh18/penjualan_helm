<?php 
    $tgl = date('d-M-Y');
    if (@$_POST['dari']!="" and $_POST['sampai']!="") {
        $squ = "where date(tanggal_jual) between '$_POST[dari]' and '$_POST[sampai]'";
    }else{
        $squ = "ORDER BY a.id_penjualan";
    }
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tabel Penjualan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <label>Dari</label>
                            <input class="form-control" type="date" name="dari">
                        </div>
                        <div class="panel-heading">
                            <label>Sampai</label>
                            <input class="form-control" type="date" name="sampai">
                        </div>
                            <button type="submit" name="cari" class="btn btn-danger">Cari</button>
                             <a class="btn btn-info" target="_blank" href="cetak_laporan_penjualan.php?dari=<?php echo $_POST['dari']; ?>&sampai=<?php echo $_POST['sampai']; ?>"><i class="fa fa-print"> Cetak Laporan</i></a>
                            <?php
                                $penjualan = mysqli_query($koneksi,"SELECT * FROM penjualan a join member b on a.id_member=b.id_member join barang c on a.id_barang=c.id_barang");
                                $no=1;
                             ?>
                             </form>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                    $total_kes = 0;
                                    while ($data = mysqli_fetch_array($sql)) {
                                        $sup = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from penjualan a join member b on a.id_member=b.id_member join barang c on a.id_barang=c.id_barang $squ"));
                                        $total_harga = $data['jumlah_jual'] * $data['harga_jual'];
                                        $total_kes += $total_harga;
                                    
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
                                    <td>Rp. <?php echo number_format($total_kes); ?></td>
                                </tr>

                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>