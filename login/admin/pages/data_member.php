<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tabel Member</h1>
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
                            <a class="btn btn-danger" href="?page=tambah_member">Tambah Data</a>
                        </div>
                            <?php
                                $member = mysqli_query($koneksi,"SELECT * FROM member");
                                $no=1;
                             ?>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Nama Member</th>
                                        <th>No HP</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                   while ($data = mysqli_fetch_array($member)) {
                                ?>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no++ ?></td>
                                        <td><img width="100px" src="../images/<?php echo $data['foto']; ?>"></td>
                                        <td><?php echo $data['nama_member']; ?></td>
                                        <td><?php echo $data['nohp']; ?></td>
                                        <td><?php echo $data['alamat']; ?></td>
                                        <td><?php echo $data['email']; ?></td>
                                        <td><?php echo $data['jenis_kelamin']; ?></td>
                                        <td><?php echo $data['status']; ?></td>
                                        <td><a class="fa fa-edit fa-2x" href="?page=edit_member&id=<?php echo $data['id_member'] ?>"></a> <a class="fa fa-trash fa-2x" href="?page=hapus_member&id=<?php echo $data['id_member'] ?>"></a></td>
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