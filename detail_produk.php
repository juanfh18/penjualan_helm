
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="inner-sec-shop pt-lg-4 pt-3">
					<?php 
                        $barang = mysqli_query($koneksi,"SELECT * from barang WHERE nama_barang='$_GET[id]'");
                        while($data = mysqli_fetch_array($barang)) { 
                    ?>
					<div class="row">
							<div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">
					
											<ul class="slides">
												<li data-thumb="<?= $base_url ?>/login/images/<?php echo $data['foto'] ?>">
													<div class="thumb-image"> <img src="<?= $base_url ?>/login/images/<?php echo $data['foto'] ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
									<h3><?php echo $data['nama_barang']; ?></h3>
									<p><span class="item_price">Rp. <?php echo $data['harga_jual']; ?></span>
									</p>
									<div class="color-quality">
										<div class="color-quality-right">
											<h5>Stok :
												<span><?php echo $data['stok']; ?></span></h5>
										</div>
									</div>
									<div class="occasional">
										<h5>Deskripsi :
											<span><?php echo $data['deskripsi']; ?></span></h5>
										<div class="colr ert">
											<label class="radio"><i></i></label>
										</div>
									</div>
									<br>
										<a target="_blank" href="https://wa.me/+6283155468398?text=Assalamu'alaikum saya mau pesan <?php echo $data['nama_barang'] ?>nya donk" class="btn btn-primary">Belanja Sekarang</a>
									<ul class="footer-social text-left mt-lg-4 mt-3">
											<li>Share On : </li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-facebook-f"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-twitter"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-google-plus-g"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fab fa-linkedin-in"></span>
												</a>
											</li>
											<li class="mx-2">
												<a href="#">
													<span class="fas fa-rss"></span>
												</a>
											</li>
											
										</ul>
			
								</div>
							<div class="clearfix"> </div>
					</div>
				<?php } ?>
				</div>
			</div>
				<div class="container-fluid">
					<!--/slide-->
					<div class="slider-img mid-sec mt-lg-5 mt-2 px-lg-5 px-3">
						<!--//banner-sec-->
					<!--//slider-->
				</div>
		</section>