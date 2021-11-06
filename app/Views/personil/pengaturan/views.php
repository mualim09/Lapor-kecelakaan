<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-xl">
	<!-- Page title -->
	<div class="page-header d-print-none">
		<div class="row align-items-center">
			<div class="col">
				<!-- Page pre-title -->
				<div class="page-pretitle">
					Home
				</div>
				<h2 class="page-title">
					<?= $title; ?>
				</h2>
			</div>

		</div>
	</div>
</div>

<div class="page-body">
	<div class="container-xl">
		<div class="row row-deck row-cards">

			<div class="col-lg-6">
				<div class="card">

					<div class="card-header">
						<h3 class="card-title">Profil</h3>
					</div>

					<div class="card-body border-bottom py-3">

						<form action="<?= base_url(); ?>/Personil/Pengaturan/update_user/<?= $user_id; ?>" method="POST" enctype="multipart/form-data">
							<?= csrf_field(); ?>

							<div class="form-group row mt-3">
								<label for="nama_lengkap" class="col-sm-3 col-form-label">
									Nama Lengkap
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : ''; ?>" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap ..." value="<?= (old('nama_lengkap')) ? old('nama_lengkap') : $user_nama_lengkap; ?>" readonly>
									<div class="invalid-feedback">
										<?= $validation->getError('nama_lengkap'); ?>
									</div>
								</div>
							</div>

							<div class="form-group row mt-3">
								<label for="nrp" class="col-sm-3 col-form-label">
									NRP
								</label>
								<div class="col-sm-9">
									<input type="text" class="form-control <?= ($validation->hasError('nrp')) ? 'is-invalid' : ''; ?>" id="nrp" name="nrp" value="<?= (old('nrp')) ? old('nrp') : $user_nrp; ?>" readonly>
									<div class="invalid-feedback">
										<?= $validation->getError('nrp'); ?>
									</div>
								</div>
							</div>

							<div class="form-group row mt-3">
								<label for="id_pangkat_personil" class="col-sm-3 col-form-label">
									Pangkat
								</label>
								<div class="col-sm-9">
									<select name="id_pangkat_personil" id="id_pangkat_personil" class="form-control js-select-2">
										<option value="">-- Pilih Pangkat --</option>
										<?php foreach ($pangkat_personil as $row) : ?>
											<option value="<?= $row['id_pangkat_personil']; ?>" <?= ($row['id_pangkat_personil'] == $user_satker) ? 'selected' : ''; ?>>
												<?= $row['pangkat']; ?>
											</option>
										<?php endforeach; ?>
									</select>
									<div class="invalid-feedback">
										<?= $validation->getError('id_pangkat_personil'); ?>
									</div>
								</div>
							</div>

							<div class="form-group row mt-3">
								<label for="id_satker" class="col-sm-3 col-form-label">
									Satuan Kerja
								</label>
								<div class="col-sm-9">
									<select name="id_satker" id="id_satker" class="form-control js-select-2">
										<option value="">-- Pilih Satuan Kerja --</option>
										<?php foreach ($satuan_kerja as $row) : ?>
											<option value="<?= $row['id_satker']; ?>" <?= ($row['id_satker'] == $user_satker) ? 'selected' : ''; ?>>
												<?= $row['nama_satker']; ?>
											</option>
										<?php endforeach; ?>
									</select>
									<div class="invalid-feedback">
										<?= $validation->getError('id_satker'); ?>
									</div>
								</div>
							</div>

							<div class="form-group row mt-3">
								<label for="email" class="col-sm-3 col-form-label">
									Email
								</label>
								<div class="col-sm-9">
									<input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Masukkan email ..." value="<?= (old('email')) ? old('email') : $user_email; ?>">
									<div class="invalid-feedback">
										<?= $validation->getError('email'); ?>
									</div>
								</div>
							</div>

							<div class="form-group row mt-3">
								<label for="no_hp" class="col-sm-3 col-form-label">
									No. Handphone
								</label>
								<div class="col-sm-4">
									<input type="text" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" id="no_hp" name="no_hp" placeholder="Masukkan No. Handphone ..." value="<?= (old('no_hp')) ? old('no_hp') : $user_no_hp; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
									<div class="invalid-feedback">
										<?= $validation->getError('no_hp'); ?>
									</div>
								</div>
							</div>

							<div class="form-group row mt-3 mt-5">
								<div class="col-sm-9 offset-3">
									<button type="submit" class="btn btn-success pl-4 pr-4">
										<i class="fa fa-save"></i> SIMPAN
									</button>
								</div>
							</div>

						</form>

					</div>

				</div>
			</div>

			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Akun</h3>
					</div>
					<div class="card-body border-bottom py-3">



					</div>

				</div>
			</div>

			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fa fa-edit"></i>
							Ubah Password
						</h3>
					</div>
					<div class="card-body border-bottom py-3">



					</div>

				</div>
			</div>

			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">
							<i class="fa fa-edit"></i>
							Ubah Foto Profil
						</h3>
					</div>
					<div class="card-body border-bottom py-3">



					</div>

				</div>
			</div>


		</div>
	</div>
</div>

<?= $this->endSection('content'); ?>