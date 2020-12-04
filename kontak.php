<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="<?= $base_url ?>">Home</a>
							<i>|</i>
						</li>
						<li>Tentang Kami</li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
<!-- top Products -->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Kontak</h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">Kami senang mendiskusikan ide Anda</p>
				<div class="address row">

					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Alamat</h6>
								<p> Toboh Gadang, Padang Pariaman

								</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Email</h6>
								<p>Email :
									<a href="mailto:example@email.com"> HelmKu@gmail.com</a>

								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Phone</h6>
								<p><a target="_blank" href="https://wa.me/+6283155468398?text=assalamu'alaikum">+6283155468398</a></li></p>

							</div>

						</div>
					</div>
				</div>
				<div class="contact_grid_right">
					<div class="row contact_left_grid">
						<div class="col-md-6 con-left">
							<form action="" method="POST">
								<div class="form-group">
									<label class="my-2">Nama</label>
									<input class="form-control" type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="email" placeholder="Masukkan Email" required="">
								</div>
								<div class="form-group">
									<label class="my-2">No HP</label>
									<input class="form-control" type="text" name="nohp" placeholder="Masukkan No HP" required="">
								</div>
							</div>
							<div class="col-md-6 con-right">
								<div class="form-group">
									<label>Message</label>
									<textarea id="textarea" name="keterangan" class="form-control" placeholder="Tuliskan Pesan Yang Ingin Disampaikan" required=""></textarea>
								</div>
								<input type="submit" name="simpan" class="btn btn-success form-control" value="SIMPAN">
							</div>
						</form>
						<?php
								if (isset($_POST['simpan'])) {
								 	$query = mysqli_query($koneksi,"INSERT INTO testimoni set id_testimoni='', nama_lengkap='$_POST[nama_lengkap]', email='$_POST[email]', nohp='$_POST[nohp]', keterangan='$_POST[keterangan]'");
								 	echo "<script>alert('Komentar Berhasil Di Kirim, Terima Kasih Sudah Membeli')
								 	window.location='$base_url';
								 	</script>";

								 } 
							?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="contact-map">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52861.45926462836!2d100.21930538829302!3d-0.6717644245343988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4e7514d5da555%3A0xf6ca2ca5789e7729!2sSintuk%20Toboh%20Gadang%2C%20Kabupaten%20Padang%20Pariaman%2C%20Sumatera%20Barat!5e1!3m2!1sid!2sid!4v1606963537561!5m2!1sid!2sid" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>