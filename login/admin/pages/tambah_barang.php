<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Data</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">

	<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tambah Data Barang
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="" method="POST" role="form" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Kode Barang</label>
                                            <input class="form-control" type="text" name="kode_barang">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <input class="form-control" type="text" name="nama_barang">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kategori</label>
                                            <select class="form-control" name="id_kategori">
                                                <?php
                                                    $query = mysqli_query($koneksi,"select * from kategori");

                                                    while ($data = mysqli_fetch_assoc($query)) {
                                                        echo "<option value=\"$data[id_kategori]\">$data[nama_kategori]</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Satuan</label>
                                            <input class="form-control" type="text" name="satuan">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Beli</label>
                                            <input class="form-control" type="text" name="harga_beli">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Jual</label>
                                            <input class="form-control" type="text" name="harga_jual">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control" type="date" name="tanggal">
                                        </div>
                                         <div class="form-group">
                                            <label>Stok</label>
                                            <input class="form-control" type="text" name="stok">
                                        </div>
                                        <div>
                                        <label>Foto</label>
                                            <input class="form-control" type="file" name="foto" value="<?php echo $data['foto']; ?>">
                                        </div> 
                                                                                
                                        <input type="submit" name="simpan" class="btn btn-success" value="SIMPAN">
                                        <input type="reset" name="batal" class="btn btn-success"value="BATAL">
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                            <?php
                                if (isset($_POST['simpan'])) {
                                    $nama_foto = $_FILES['foto']['name'];
                                    $lokasi_foto = $_FILES['foto']['tmp_name'];
                                    $tipe_foto = $_FILES['foto']['type'];

                                if($lokasi_foto==""){
                                    $query = mysqli_query($koneksi,"INSERT INTO barang set id_barang='', kode_barang='$_POST[kode_barang]', nama_barang='$_POST[nama_barang]', id_kategori='$_POST[id_kategori]', satuan='$_POST[satuan]', harga_beli='$_POST[harga_beli]', harga_jual='$_POST[harga_jual]', tanggal='$_POST[tanggal]', stok='$_POST[stok]' deskripsi='$_POST[deskripsi]'");
                                }else{
                                    move_uploaded_file($lokasi_foto, "../../images/$nama_foto");
                                    $query = mysqli_query($koneksi,"INSERT INTO barang set id_barang='', kode_barang='$_POST[kode_barang]', nama_barang='$_POST[nama_barang]', id_kategori='$_POST[id_kategori]', satuan='$_POST[satuan]', harga_beli='$_POST[harga_beli]', harga_jual='$_POST[harga_jual]', tanggal='$_POST[tanggal]', stok='$_POST[stok]' deskripsi='$_POST[deskripsi]', foto='$_POST[foto]'");
                                    $proses = mysqli_query($koneksi, $query) or die (mysqli_error());
                                }
                                    echo"<script>alert('Data Berhasil Di Simpan')
                                    window.location='?page=data_barang';
                                    </script>";

                                 } 
                            ?>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
        </div>

</div>