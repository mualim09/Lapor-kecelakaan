<?= $this->extend('landing/layout/template'); ?>

<?= $this->section('content-landing'); ?>

<section class="sign-in">
	<div class="container">
		<div class="signin-content">
			<div class="signin-image text-center">
				<figure>
					<img src="<?= base_url(); ?>/landing-temp/images/signin-image.jpg" alt="sing up image">
				</figure>
				<span class="">
					Belum punya akun ?
				</span>
				<a href="<?= base_url(); ?>/pelapor/sign-up" class="signup-image-link">
					Buat Akun
				</a>
				<br>
				<a href="<?= base_url(); ?>/choose-user" class="signup-image-link">
					<i class="fa fa-arrow-left"></i> Kembali
				</a>
			</div>

			<div class="signin-form mt-5 mt-lg-0">
				<h4 class="form-title">
					Masuk sebagai Pelapor
				</h4>
				<form method="POST" class="register-form mt-3" id="login-form">
					<div class="form-group">
						<label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
						<input type="text" name="username" id="username" placeholder="Username" />
					</div>
					<div class="form-group">
						<label for="password"><i class="zmdi zmdi-lock"></i></label>
						<input type="password" name="password" id="password" placeholder="Password" />
					</div>
					<div class="form-group">
						<input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
						<label for="remember-me" class="label-agree-term">
							<span></span> Ingat Saya
						</label>
					</div>
					<div class="form-group form-button">
						<button type="submit" name="signin" id="signin" class="btn btn-success" style="width: 100%;">
							<i class="zmdi zmdi-arrow-right"></i> Masuk
						</button>
					</div>
				</form>

				<div class="mt-5 text-center">
					<span class="social-label mb-3">
						atau masuk dengan
					</span>
					<a href="#" class="btn btn-sm btn-outline-info" style="width: 100%; color: #000; font-weight: 500;">
						<img src="<?= base_url(); ?>/img/google.png" style="width: 34px;"> Akun Google
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection('content-landing'); ?>