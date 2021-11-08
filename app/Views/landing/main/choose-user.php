<?= $this->extend('landing/layout/template'); ?>

<?= $this->section('content-landing'); ?>

<section style="background-color: #0080ff;">

	<div class="container-fluid">
		<div class="row justify-content-center align-items-end" style="height: 100vh;">
			<div class="col-lg-5" style="position: relative;">
				<h3 class="mb-5 text-warning">
					Aplikasi Pelaporan Kecelakaan Lalu Lintas
				</h3>
				<h5 class="mb-2 text-white">
					Masuk sebagai ?
				</h5>
				<div class="d-flex mt-4">
					<a href="<?= base_url(); ?>/pelapor" class="btn btn-danger shadow" style="width: 190px; margin-right: 10px;">
						<i class="fa fa-users"></i> Pelapor
					</a>
					<a href="<?= base_url(); ?>/personil" class="btn btn-warning shadow" style="width: 190px;">
						<i class="fa fa-users"></i> Personil Polantas
					</a>
				</div>
				<br>
				<br>
				<a href="<?= base_url(); ?>" class="text-white shadow">
					<i class="fa fa-arrow-left"></i> Kembali
				</a>
				<br>
				<br>
				<img src="<?= base_url(); ?>/img/laka-1.png" style="width: 90%;">
			</div>
		</div>
	</div>

</section>


<?= $this->endSection('content-landing'); ?>