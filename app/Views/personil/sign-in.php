<?= $this->extend('landing/layout/template'); ?>

<?= $this->section('content-landing'); ?>

<section class="sign-in d-flex justify-content-center align-items-center" style="min-height: 100vh;">
	<div class="container">
		<div class="signin-content">
			<div class="text-center d-flex align-items-end">
				<div>
					<img src="<?= base_url(); ?>/img/laka-1.png" alt="sing up image">
					<div class="text-center mt-3">
						<div class="d-flex justify-content-center">
							<span>
								Belum punya akun ? silahkan
							</span>
							<a href="<?= base_url(); ?>/personil/sign-up" class="signup-image-link ml-2">
								<i class="fa fa-arrow-circle-right"></i> Buat Akun
							</a>
						</div>
						<br>
						<a href="<?= base_url(); ?>/choose-user" class="signup-image-link">
							<i class="fa fa-arrow-left"></i> Kembali
						</a>
					</div>
				</div>
			</div>

			<div class="signin-form mt-5 mt-lg-0">
				<h5 class="form-title">
					Masuk sebagai Personil
				</h5>
				<form class="regix`ster-form mt-3" id="formLogin">
					<div class="form-group">
						<label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
						<input type="text" name="username" id="username" placeholder="NRP / Email" autofocus autocomplete="off" />
					</div>
					<div class="form-group">
						<label for="password"><i class="zmdi zmdi-lock"></i></label>
						<input type="password" name="password" id="password" placeholder="Password" autocomplete="off" />
					</div>
					<div class="form-group">
						<input type="checkbox" name="remember" id="remember" class="agree-term" />
						<label for="remember" class="label-agree-term">
							<span></span> Ingat Saya
						</label>
					</div>
					<div class="form-group form-button">
						<button type="submit" id="btnLogin" class="btn btn-success" style="width: 100%;">
							<i class="zmdi zmdi-arrow-right"></i> Masuk
						</button>
					</div>
				</form>
				<br>
				<br>

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
					url: "<?= base_url() ?>/personil/auth-login-personil",
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
								window.location = "<?= base_url() ?>/personil";
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