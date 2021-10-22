<?= $this->extend('landing/layout/template'); ?>

<?= $this->section('content-landing'); ?>

<section class="sign-in">
	<div class="container">
		<div class="signin-content">
			<div class="signin-image text-center">
				<figure><img src="<?= base_url(); ?>/landing-temp/images/signin-image.jpg" alt="sing up image"></figure>
				<span class="">
					Belum punya akun ?
				</span>
				<a href="#" class="signup-image-link">Buat Akun</a>
			</div>

			<div class="signin-form">
				<h4 class="form-title">
					Masuk sebagai Personil
				</h4>
				<form method="POST" class="register-form" id="login-form">
					<div class="form-group">
						<label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
						<input type="text" name="your_name" id="your_name" placeholder="Username" />
					</div>
					<div class="form-group">
						<label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
						<input type="password" name="your_pass" id="your_pass" placeholder="Password" />
					</div>
					<div class="form-group">
						<input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
						<label for="remember-me" class="label-agree-term">
							<span></span> Ingat Saya
						</label>
					</div>
					<div class="form-group form-button">
						<button type="submit" name="signin" id="signin" class="btn btn-success">
							<i class="zmdi zmdi-arrow-right"></i> Masuk
						</button>
					</div>
				</form>

				<div class="social-login">
					<span class="social-label">atau masuk dengan</span>
					<ul class="socials">
						<li>
							<a href="#" class="btn btn-block">
								<i class="display-flex-center zmdi zmdi-google"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection('content-landing'); ?>