<?= $this->extend('landing/layout/template'); ?>

<?= $this->section('content-landing'); ?>

<section>

	<div class="container-fluid">
		<div class="row justify-content-center align-items-center" style="height: 100vh;">
			<div class="col-lg-5">
				<h2 class="" style="color: brown; font-weight: 500;">
					Selamat Datang di
				</h2>
				<h3 class="mb-5 text-warning">
					Aplikasi Pelaporan Kecelakaan Lalu Lintas
				</h3>
				<p style="font-weight: 400;">
					Dukung penanganan kecelakaan lalu lintas agar lebih cepat.
				</p>
				<p style="font-weight: 400;">
					Mari bergabung dan laporkan saat anda menemukan kecelakaan lalu lintas disekitar anda.
				</p>
				<a href="<?= base_url(); ?>/choose-user" class="mt-5 btn btn-warning" style="width: 200px;">
					<i class="fa fa-arrow-right"></i> Mulai
				</a>
			</div>
		</div>
	</div>

</section>


<?= $this->endSection('content-landing'); ?>