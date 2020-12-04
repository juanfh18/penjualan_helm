<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tabel Barang</h1>
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
                            <a class="btn btn-danger" href="?page=tambah_barang">Tambah Data</a>
                        </div>
                            <?php
                                $kategori = mysqli_query($koneksi,"SELECT * FROM barang");
                                $no=1;
                             ?>
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
                                        <th>Deskripsi</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                   while ($data = mysqli_fetch_array($kategori)) {
                                ?>
                                <tbody>
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
                                        <td><?php echo $data['deskripsi']; ?></td>
                                        <td><img width="50px" src="../../images/<?php echo $data['foto']; ?>"></td>
                                        <td><a class="fa fa-edit" href="?page=edit_barang&id=<?php echo $data['id_barang'] ?>"></a> <a class="fa fa-trash" href="?page=hapus_barang&id=<?php echo $data['id_barang'] ?>"></a></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
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