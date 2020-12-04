<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Data</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="row">

	<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data Kategori
                        </div>
                        <div class="panel-body">
                            <?php 
                                $barang = mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang='$_GET[id]'");

                            ?>
                            <div class="row">
                                <div class="col-lg-12">
                                            <?php 
                                                while($data = mysqli_fetch_array($barang)) { 
                                            ?>
                                    <form action="" method="POST" role="form">
                                        <div class="form-group">
                                            <label>Kode Barang</label>
                                            <input type="hidden" name="id_barang" value="<?php echo $data['id_barang']; ?>">
                                            <input class="form-control" type="text" name="kode_barang" value="<?php echo $data['kode_barang'] ?>">
                                        </div>
                                        <div>
                                        <label>Nama Barang</label>
                                            <input class="form-control" type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>">
                                        </div>
                                        <div>
                                        <label>Nama Kategori</label>
                                            <select name="id_kategori" class="form-control">
                                            <?php
                                            $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                                              while ($m = mysqli_fetch_array($kategori)) {
                                              if ($pecah['id_kategori'] == $m['id_kategori']) {
                                                $selected = "selected";
                                              } else {
                                                $selected = "";
                                              }
                                            ?>
                                              <option value="<?php echo $m['id_kategori']; ?>" <?= $selected ?>><?php echo "$m[nama_kategori]"; ?></option>
                                            <?php
                                            }
                                            ?>
                                            </select>
                                        
                                        </div>
                                        <div>
                                        <label>Satuan</label>
                                            <input class="form-control" type="text" name="satuan" value="<?php echo $data['satuan']; ?>">
                                        </div>
                                        <div>
                                        <label>Harga Beli</label>
                                            <input class="form-control" type="text" name="harga_beli" value="<?php echo $data['harga_beli']; ?>">
                                        </div>
                                        <div>
                                        <label>Harga Jual</label>
                                            <input class="form-control" type="text" name="harga_jual" value="<?php echo $data['harga_jual']; ?>">
                                        </div>
                                        <div>
                                        <label>Tanggal</label>
                                            <input type="date" name="tanggal" value="<?php echo $data['tanggal'] ?>">
                                        </div>
                                        <div>
                                        <label>Stok</label>
                                            <input class="form-control" type="text" name="stok" value="<?php echo $data['stok']; ?>">
                                        </div>
                                        <div>
                                        <label>Deskripsi</label>
                                            <input class="form-control" type="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <img width="50px" src="../../images/<?php echo $data['foto']; ?>">
                                            <input class="form-control" type="file" name="foto">
                                        </div>
                                        <input type="submit" name="edit" class="btn btn-success" value="UPDATE">
                                        <input type="reset" name="batal" class="btn btn-success"value="BATAL">
                                    </form>

                                            <?php } ?>  
                                    <?php 
                                if(isset($_POST['edit'])){
                                    $query = mysqli_query($koneksi,"UPDATE barang 
                                        set kode_barang='$_POST[kode_barang]', 
                                        nama_barang='$_POST[nama_barang]', 
                                        id_kategori='$_POST[id_kategori]', 
                                        satuan='$_POST[satuan]', 
                                        harga_beli='$_POST[harga_beli]', 
                                        harga_jual='$_POST[harga_jual]', 
                                        tanggal='$_POST[tanggal]', 
                                        stok='$_POST[stok]' 
                                        WHERE id_barang='$_POST[id_barang]'");

                                    echo "<script>alert('Data Berhasil Di Edit')
                                            window.location='?page=data_barang';
                                            </script>";
                                }
                            ?>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                                
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