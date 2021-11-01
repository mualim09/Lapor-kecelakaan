<?= $this->extend('landing/layout/template'); ?>

<?= $this->section('content-landing'); ?>

<section style="background-color: #fff;">

	<div class="container-fluid">
		<div class="row justify-content-center align-items-center" style="height: 100vh;">
			<div class="col-lg-5">
				<h2 class="" style="color: brown; font-weight: 500;">
					Selamat Datang di
				</h2>
				<h3 class="text-warning">
					Aplikasi Pelaporan Kecelakaan Lalu Lintas
				</h3>
				<img src="<?= base_url(); ?>/img/laka-2.jpg" style="width: 80%;" class="mb-2">
				<h5 style="font-weight: 500;">
					Mari bergabung dan laporkan saat anda menemukan kecelakaan lalu lintas disekitar anda.
				</h5>
				<a href="<?= base_url(); ?>/choose-user" class="mt-4 btn btn-lg btn-warning" style="width: 200px;">
					<i class="fa fa-arrow-right"></i> Mulai
				</a>
			</div>
		</div>
	</div>

</section>


<?= $this->endSection('content-landing'); ?>