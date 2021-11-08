<?= $this->extend('landing/layout/template'); ?>

<?= $this->section('content-landing'); ?>

<section class="sign-in">
	<div class="container">
		<div class="signin-content">
			<div class="signin-image text-center">
				<figure><img src="<?= base_url(); ?>/landing-temp/images/signin-image.jpg" alt="sing up image"></figure>
				<span class="">
					Sudah punya akun ? silahkan
				</span>
				<a href="<?= base_url(); ?>/pelapor/sign-in" class="signup-image-link">
					Masuk <i class="fa fa-arrow-right"></i>
				</a>
				<br>
				<a href="<?= base_url(); ?>/choose-user" class="signup-image-link">
					<i class="fa fa-arrow-left"></i> Kembali
				</a>
			</div>

			<div class="signin-form mt-5 mt-lg-0">
				<h4 class="form-title">
					Daftar sebagai Pelapor
				</h4>
				<form class="register-form" id="formPendaftaran">
					<div class="form-group">
						<label for="namaLengkap"><i class="zmdi zmdi-account material-icons-name"></i></label>
						<input type="text" name="namaLengkap" id="namaLengkap" placeholder="Nama Lengkap" required autofocus tabindex="1" />
					</div>
					<div class="form-group">
						<label for="nik"><i class="zmdi zmdi-card material-icons-name"></i></label>
						<input type="text" name="nik" id="nik" placeholder="NIK" minlength="8" maxlength="8" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required tabindex="2" />
					</div>
					<div class="form-group">
						<label for="noHp"><i class="zmdi zmdi-phone material-icons-name"></i></label>
						<input type="text" name="noHp" id="noHp" placeholder="No. HP (Contoh : 08XX ....)" minlength="11" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required tabindex="3" />
					</div>
					<div class="form-group">
						<label for="email"><i class="zmdi zmdi-email material-icons-name"></i></label>
						<input type="email" name="email" id="email" placeholder="Email" required onkeydown="validasiEmail()" tabindex="3" />
						<span id="validasiEmailConfirm"></span>
					</div>
					<div class="form-group">
						<label for="passwordBaru"><i class="zmdi zmdi-lock"></i></label>
						<input type="password" name="passwordBaru" id="passwordBaru" placeholder="Password" required tabindex="4" />
					</div>
					<div class="form-group">
						<label for="konfirmasiPassword"><i class="zmdi zmdi-lock"></i></label>
						<input type="password" name="konfirmasiPassword" id="konfirmasiPassword" placeholder="Konfirmasi Password" required tabindex="5" />
						<span id="confirm_password_message"></span>
					</div>
					<div class="form-group">
						<input type="checkbox" name="remember" id="remember" class="agree-term" required tabindex="6" />
						<label for="remember" class="label-agree-term">
							<span></span>Saya menyetujui <a href="#" id="btn-sk" data-bs-toggle="modal" data-bs-target="#modal-sk">
								Syarat & Ketentuan
							</a>
						</label>
					</div>
					<div class="form-group form-button">
						<button type="submit" id="signup" class="btn btn-success" style="width: 100%;" tabindex="7" disabled>
							<i class="zmdi zmdi-arrow-right"></i> Daftar
						</button>
					</div>
				</form>

			</div>
		</div>
	</div>
</section>

<div class="modal fade" id="modal-sk" role="dialog" aria-labelledby="modalSK" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalSK" style="color: #000;">Syarat & Ketentuan</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<ol type="1">
					<li>

					</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<script>
	function validasiEmail() {
		var form = document.getElementById("formPendaftaran");
		var email = document.getElementById("email").value;
		var text = document.getElementById("validasiEmailConfirm");
		var pattern = /^[^ ]+@[^ ]+.[a-z]{2,3}$/;

		if (email.match(pattern)) {
			form.classList.add("valid");
			form.classList.remove("invalid");
			// text.innerHTML = "Email valid";
			text.style.color = "green";
		} else {
			form.classList.remove("valid");
			form.classList.add("invalid");
			text.innerHTML = "Email tidak valid !";
			text.style.color = "#ff0000";
		}
		if (email == "") {
			form.classList.remove("valid");
			form.classList.remove("invalid");
			text.innerHTML = "";
			text.style.color = "#00ff00";
		}
	}

	$(document).ready(function() {
		$("#modal-sk").appendTo('body');
		$("#modal-sk").css("z-index", "1500");

		$(function() {
			//hang on event of form with id=myform
			$("#formPendaftaran").submit(function(e) {
				e.preventDefault();

				var namaLengkap = $('#namaLengkap').val();
				var nik = $('#nik').val();
				var noHp = $('#noHp').val();
				var email = $('#email').val();
				var passwordBaru = $('#passwordBaru').val();
				var konfirmasiPassword = $('#konfirmasiPassword').val();

				$.ajax({
					type: "POST",
					url: "<?= base_url() ?>/personil/create-account",
					dataType: "JSON",
					data: {
						namaLengkap: namaLengkap,
						nik: nik,
						noHp: noHp,
						email: email,
						passwordBaru: passwordBaru,
						konfirmasiPassword: konfirmasiPassword
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

	$('#konfirmasiPassword').on('keyup', function() {
		if (($('#passwordBaru').val() != "") && ($('#passwordBaru').val() != "")) {
			if ($('#passwordBaru').val() == $('#konfirmasiPassword').val()) {
				$('#confirm_password_message').html('Password cocok !').css('color', 'green');
				document.getElementById('signup').disabled = false;
			} else {
				$('#confirm_password_message').html('Password tidak cocok !').css('color', 'red');
				document.getElementById('signup').disabled = true;
			}
		}
	});
</script>



<?= $this->endSection('content-landing'); ?>