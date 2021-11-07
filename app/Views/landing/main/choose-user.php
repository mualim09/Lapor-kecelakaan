<?= $this->extend('landing/layout/template'); ?>

<?= $this->section('content-landing'); ?>

<section style="background-color: #0080ff;">

	<div class="container-fluid">
		<div class="row justify-content-center align-items-center" style="height: 100vh;">
			<div class="col-lg-5">
				<h3 class="mb-1 text-warning">
					Aplikasi Pelaporan Kecelakaan Lalu Lintas
				</h3>
				<img src="<?= base_url(); ?>/img/laka-1.jpg" style="width: 80%;" class="mb-5">
				<h5 class="mb-2">
					Masuk sebagai ?
				</h5>
				<div class="d-flex mt-3">
					<a href="<?= base_url(); ?>/pelapor" class="btn btn-outline-success shadow" style="width: 190px; margin-right: 10px;">
						<i class="fa fa-users"></i> Pelapor
					</a>
					<a href="<?= base_url(); ?>/personil" class="btn btn-outline-info" style="width: 190px;">
						<i class="fa fa-users"></i> Personil Polantas
					</a>
				</div>
				<br>
				<br>
				<a href="<?= base_url(); ?>" class="text-dark">
					<i class="fa fa-arrow-left"></i> Kembali
				</a>
			</div>
		</div>
	</div>

</section>


<?= $this->endSection('content-landing'); ?>