<?= $this->extend('landing/layout/template'); ?>

<?= $this->section('content-landing'); ?>

<section class="sign-in d-flex justify-content-center align-items-center" style="min-height: 100vh;">
	<div class="container">
		<div class="signin-content">
			<div class="text-center d-flex align-items-end">
				<div>
					<img src="<?= base_url(); ?>/img/laka-1.png" alt="sing up image">
					<div class="text-center mt-3">
						<br>
						<a href="<?= base_url(); ?>/choose-user" class="signup-image-link">
							<i class="fa fa-arrow-left"></i> Kembali
						</a>
					</div>
				</div>
			</div>

			<div class="signin-form mt-5 mt-lg-0">
				<h5 class="form-title">
					Masuk sebagai Pelapor
				</h5>

				<div class="text-left mt-5">
					<p class="mb-3">
						Silahkan masuk dengan
					</p>
					<a href="<?= $tombol_login; ?>" class="btn btn-block btn-outline-info shadow text-left">
						<img src="<?= base_url(); ?>/img/google.png" style="width: 40px; margin-right: 10px;">
						Akun Google
					</a>
				</div>

				<div class="mt-5">
					<div class="d-block text-center">
						<span>
							Belum punya akun ? silahkan
						</span>
						<a href="<?= base_url(); ?>/pelapor/sign-up" class="signup-image-link ml-2">
							<i class="fa fa-arrow-circle-right"></i> Buat Akun
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		$(function() {
			$("#formLogin").submit(function(e) {
				e.preventDefault();

				var username = $('#username').val();
				var password = $('#password').val();

				$.ajax({
					type: "POST",
					url: "<?= base_url() ?>/pelapor/auth-login-pelapor",
					dataType: "JSON",
					data: {
						username: username,
						password: password
					},
					success: function(data) {
						if (data.success == "1") {
							Swal.fire(
								'Berhasil',
								data.pesan,
								'success'
							).then(function() {
								window.location = "<?= base_url() ?>/pelapor";
							});
						} else if (data.success == "0") {
							Swal.fire(
								'Gagal',
								data.pesan,
								'error'
							)
						}
					}
				});

			});

		});
	});
</script>

<?= $this->endSection('content-landing'); ?>