<?php 
    $tgl = date('d-Y-M');

    if (@$_POST['dari']!="" and $_POST['sampai']!="") {
        $squ = "where date(tanggal) between '$_POST[dari]' and '$_POST[sampai]'";
    }else{
        $squ = "ORDER BY a.id_barang";
    }
?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tabel Barang</h1>
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
                             <a class="btn btn-info" target="_blank" href="cetak_laporan_barang.php?dari=<?php echo $_POST['dari']; ?>&sampai=<?php echo $_POST['sampai']; ?>"><i class="fa fa-print"> Cetak Laporan</i></a>
                            <!-- btn-danger = warna merah
                            btn-warning = warna kuning
                            btn-primary = warna biru
                            btn-info = warna biru muda
                            btn-success= warna hijau -->
                        </div>
                            <?php
                                $barang = mysqli_query($koneksi,"SELECT * FROM barang");
                                $no=1;
                             ?>
                             </form>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Nama Kategori</th>
                                        <th>Satuan</th>
                                        <th>Harga Beli</th>
                                        <th>Harga Jual</th>
                                        <th>Tanggal</th>
                                        <th>Stok</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $sql = mysqli_query($koneksi,"SELECT * from barang a left join kategori b ON a.id_kategori=b.id_kategori $squ");
                                        $cek = mysqli_num_rows($sql);
                                        if ($cek < 1){
                                    ?>
                                    <tr>
                                        <td colspan="13" class="p-3">Data Tidak Ditemukan</td>
                                    </tr>
                                    <?php
                                }else{
                                    $no = 1;
                                    while ($data = mysqli_fetch_array($sql)) {
                                        $sup = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * from barang a left join kategori b ON a.id_kategori=b.id_kategori $squ"));
                                    
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $data['kode_barang']; ?></td>
                                        <td><?php echo $data['nama_barang']; ?></td>
                                        <td><?php echo $data['id_kategori']; ?></td>
                                        <td><?php echo $data['satuan']; ?></td>
                                        <td><?php echo $data['harga_beli']; ?></td>
                                        <td><?php echo $data['harga_jual']; ?></td>
                                        <td><?php echo $data['tanggal']; ?></td>
                                        <td><?php echo $data['stok']; ?></td>
                                    </tr>
                                </tbody>
                                <?php 
                                        }
                                    } 
                                    ?>
                            </table>
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>