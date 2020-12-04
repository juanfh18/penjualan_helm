<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tabel Penjualan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <!-- btn-danger = warna merah
                            btn-warning = warna kuning
                            btn-primary = warna biru
                            btn-info = warna biru muda
                            btn-success= warna hijau -->
                            <a class="btn btn-danger" href="?page=tambah_penjualan">Tambah Data</a>
                        </div>
                            <?php
                                $penjualan = mysqli_query($koneksi,"SELECT * FROM penjualan a join member b on a.id_member=b.id_member join barang c on a.id_barang=c.id_barang");
                                $no=1;
                             ?>
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
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                $total_kes = 0;
                                   while ($data = mysqli_fetch_array($penjualan)) {
                                    $total_harga = $data['jumlah_jual'] * $data['harga_jual'];
                                    $total_kes += $total_harga;
                                ?>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $data['tanggal_jual']; ?></td>
                                        <td><?php echo $data['nama_member']; ?></td>
                                        <td><?php echo $data['kode_barang']; ?></td>
                                        <td><?php echo $data['nama_barang']; ?></td>
                                        <td><?php echo $data['jumlah_jual']; ?></td>
                                        <td>Rp. <?php echo number_format($data['harga_jual']); ?></td>
                                        <td>Rp. <?php echo number_format($total_harga); ?></td>
                                        <td> <a class="fa fa-trash fa-2x" href="?page=hapus_penjualan&id=<?php echo $data['id_penjualan'] ?>"></a></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                                <tr>
                                    <td colspan="7" align="center"><b>Total Penjualan</b></td>
                                    <td>Rp. <?php echo number_format($total_kes); ?></td>
                                </tr>
                                
                            </table>
                            <!-- /.table-responsive -->
                            <!-- <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div> -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>