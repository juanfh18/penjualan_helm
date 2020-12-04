<div class="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="carousel-caption text-center">
							<h3>Helm Pria
								<span>Diskon akhir tahun 35%</span>
							</h3>
							<a href="?page=produk" class="btn btn-sm animated-button gibson-three mt-4">Belanja Sekarang</a>
						</div>
					</div>
					<div class="carousel-item item2">
						<div class="carousel-caption text-center">
							<h3>Helm Wanita
								<span>Ingin tampil menarik?</span>
							</h3>
							<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Belanja Sekarang</a>

						</div>
					</div>
					<div class="carousel-item item3">
						<div class="carousel-caption text-center">
							<h3>Helm Pria
								<span>Diskon akhri tahun 35% </span>
							</h3>
							<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Belanja Sekarang</a>

						</div>
					</div>
					<div class="carousel-item item4">
						<div class="carousel-caption text-center">
							<h3>Helm Wanita
								<span>Ingin tampil terbaik?</span>
							</h3>
							<a href="<?= $base_url ?>produk" class="btn btn-sm animated-button gibson-three mt-4">Belanja Sekarang</a>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--//banner -->
		</div>
	<!--//banner-sec-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 my-4">Produk Terbaru </h3>
				<div class="row">
					<!-- /womens -->

					<?php
						$barang = mysqli_query($koneksi,"SELECT * FROM barang a left join kategori b ON a.id_kategori=b.id_kategori ORDER by id_barang DESC LIMIT 4");
						while ($data = mysqli_fetch_array($barang)) {
					?>
					<div class="col-md-3 product-men women_two">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="login/images/<?php echo $data['foto']; ?>" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="<?= $base_url ?>detail_produk/<?php echo $data['nama_barang'] ?>" class="link-product-add-cart">Detail Produk</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4>
													<a href="?page=detail_produk"><?php echo $data['nama_barang']; ?></a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">Rp. <?php echo number_format($data['harga_jual']); ?></span>
												</div>
											</div>
											
										</div>
										<div class="googles single-item hvr-outline-out">
											

										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
					
				
					<!-- /mens -->
				</div>
				<!--//row-->
				<!--/meddle-->
				<!-- <div class="row">
					<div class="col-md-12 middle-slider my-4">
						<div class="middle-text-info ">

							<h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Penjualan Cepat Akhir Tahun</h3>
							<div class="simply-countdown-custom" id="simply-countdown-custom"></div>

						</div>
					</div>
				</div> -->
				<!--//meddle-->

				<!-- /testimonials -->
				<div class="testimonials py-lg-4 py-3 mt-4">
					<div class="testimonials-inner py-lg-4 py-3">
						<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Tesimonials</h3>
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<div class="testimonials_grid text-center">
										<h3>Testimoni
											<span>Customer</span>
										</h3>
									</div>
								</div>
								<?php 
										$testimoni = mysqli_query($koneksi,"SELECT * from testimoni ORDER BY id_testimoni DESC LIMIT 6");
										while ($data = mysqli_fetch_array($testimoni)) {
									?>
								<div class="carousel-item">
									<div class="testimonials_grid text-center">
										<h3><?php echo $data['nama_lengkap']; ?></h3>
										<label><?php echo $data['email']; ?></label>
										<p><?php echo $data['keterangan']; ?></p>
									</div>
								</div>
								<a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="fas fa-long-arrow-alt-left"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
						<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<!-- //testimonials -->
				<div class="row galsses-grids pt-lg-5 pt-3">
					<div class="col-lg-6 galsses-grid-left">
						<figure class="effect-lexi">
							<img src="images/banner5.jpg" alt="" class="img-fluid">
							<figcaption>
								<h3>Pilihan
									<span>Editor</span>
								</h3>
								<p> Ekspresikan gaya Anda sekarang.</p>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-6 galsses-grid-left">
						<figure class="effect-lexi">
							<img src="images/banner-mid.jpeg" alt="" class="img-fluid">
							<figcaption>
								<h3>Pilihan
									<span>Editor</span>
								</h3>
								<p>Ekspresikan gaya anda sekarang.</p>
							</figcaption>
						</figure>
					</div>
				</div>
				<!-- /grids -->
				<div class="bottom-sub-grid-content py-lg-5 py-3">
					<div class="row">
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">

								<span class="far fa-hand-paper"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Kepuasan terjamin</h4>
							<p>Kepuasan anda adalah tanggung jawab kami.</p>
							<p>
								<a href="<?= $base_url ?>produk" class="btn btn-sm animated-button gibson-three mt-4">Belanja Sekarang</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="fas fa-rocket"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Pengiriman cepat</h4>
							<p>Barang anda akan sampai tepat waktu.</p>
							<p>
								<a href="<?= $base_url ?>produk" class="btn btn-sm animated-button gibson-three mt-4">Belanja Sekarang</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="far fa-sun"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Perlindungan UV</h4>
							<p>Kami menjamin barang belanjaan anda aman sampai ke tangan.</p>
							<p>
								<a href="<?= $base_url ?>produk" class="btn btn-sm animated-button gibson-three mt-4">Belanja Sekarang</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
					</div>
				</div>
				<!-- //grids -->
				<!-- /clients-sec -->
				<div class="testimonials p-lg-5 p-3 mt-4">
					<div class="row last-section">
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-gift"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Tentang Produk</h3>
								<p>Terbuat dari bahan yang berkualitas dan terjamin</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-shield-alt"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Produk Aman</h3>
								<p>Sudah tersertifikasi <b>Standar Nassional Indonesia</b></p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-dollar-sign"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Bayar di Tempat</h3>
								<p>Bisa anda bayar saat barang sudah diterima</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-truck"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Pengiriman Mudah</h3>
								<p>Kami akan antarkan sampai rumah anda</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //clients-sec -->
			</div>
		</div>
	</section>