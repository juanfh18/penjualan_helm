<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="<?php $base_url ?>">Home</a>
							<i>|</i>
						</li>
						<li>Belanja</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container-fluid">
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-w3layouts my-lg-4 mt-3">New Arrivals for you </h3>
					<div class="row">
						<!-- product left -->
						<div class="side-bar col-lg-3">
							
							<!-- deals -->
							<div class="deal-leftmk left-side">
								<h3 class="agileits-sear-head">Special Price</h3>
								<?php
									$barang = mysqli_query($koneksi,"SELECT * FROM barang a left join kategori b ON a.id_kategori=b.id_kategori ORDER by harga_jual ASC LIMIT 4");
									while ($data = mysqli_fetch_array($barang)) {
								?>
								<div class="special-sec1">
									<div class="img-deals">
										<img src="login/images/<?php echo $data['foto']; ?>" class="img-fluid" alt="">
									</div>
									<div class="img-deal1">
										<h3><?php echo $data['nama_barang']; ?></h3>
										<a href="<?= $base_url ?>detail_produk/<?php echo $data['nama_barang'] ?>"><?php echo $data['harga_jual']; ?></a>
									</div>
									<div class="clearfix"></div>
								</div>
							<?php } ?>
							</div>
							<!-- //deals -->
						</div>
						<!-- //product left -->
						<!--/product right-->
						<div class="left-ads-display col-lg-9">
							<div class="wrapper_top_shop">
								<div class="row">
									<!-- /womens -->
									<?php
										$barang = mysqli_query($koneksi,"SELECT * FROM barang a left join kategori b ON a.id_kategori=b.id_kategori ORDER by id_barang DESC");
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
							</div>
						</div>
						<!--//product right-->
					</div>
				</div>
			</div>
		</section>