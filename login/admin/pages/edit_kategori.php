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
                                $kategori = mysqli_query($koneksi,"SELECT * FROM kategori WHERE id_kategori='$_GET[id]'");

                             ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="" method="POST" role="form">
                                        <div class="form-group">
                                            <?php
                                                while ($data = mysqli_fetch_array($kategori)) { 
                                            ?>
                                            <label>Nama Kategori</label>
                                            <input type="hidden" name="id_kategori" value="<?php echo $data['id_kategori']; ?>">
                                            <input class="form-control" type="text" name="nama_kategori" value="<?php echo $data['nama_kategori']; ?>">  

                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" name="keterangan"><?php echo $data['keterangan']; ?></textarea>
                                            <?php } ?>  
                                        </div>
                                        
                                        <input type="submit" name="edit" class="btn btn-success" value="UPDATE">
                                        <input type="reset" name="batal" class="btn btn-success"value="BATAL">
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                            <?php
                                if (isset($_POST['edit'])) {
                                    $query = mysqli_query($koneksi,"UPDATE kategori set nama_kategori='$_POST[nama_kategori]', keterangan='$_POST[keterangan]' WHERE id_kategori='$_POST[id_kategori]'");
                                    echo "<script>alert('Data Berhasil Diedit')
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