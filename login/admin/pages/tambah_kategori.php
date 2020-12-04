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
                            Tambah Data Kategori
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="" method="POST" role="form">
                                        <div class="form-group">
                                            <label>Nama Kategori</label>
                                            <input class="form-control" name="nama_kategori">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" name="keterangan"></textarea>
                                        </div>
                                        
                                        <input type="submit" name="simpan" class="btn btn-success" value="SIMPAN">
                                        <input type="reset" name="batal" class="btn btn-success"value="BATAL">
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                            <?php
								if (isset($_POST['simpan'])) {
								 	$query = mysqli_query($koneksi,"INSERT INTO kategori set id_kategori='', nama_kategori='$_POST[nama_kategori]', keterangan='$_POST[keterangan]'");
								 	echo "<script>alert('Data Berhasil Disimpan')
								 	window.location='?page=data_kategori';
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