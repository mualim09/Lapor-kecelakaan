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

			<div class="col-lg-12">
				<div class="row row-cards">

					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<p class="mb-3">Tindaklanjut Laporan Masuk <strong>75</strong> dari <strong>100</strong></p>
								<div class="progress progress-separated mb-3">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div>
									<div class="progress-bar bg-primary" role="progressbar" style="width: 70%"></div>
									<div class="progress-bar bg-success" role="progressbar" style="width: 5%"></div>
								</div>
								<div class="row justify-content-between">
									<div class="col-auto d-flex align-items-center pe-2">
										<span class="legend me-2 bg-warning"></span>
										<small>Belum tindaklanjut</small>
										<span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">: 25</span>
									</div>
									<div class="col-auto d-flex align-items-center px-2">
										<span class="legend me-2 bg-primary"></span>
										<small>Tindaklanjut oleh personil lain</small>
										<span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">: 70</span>
									</div>
									<div class="col-auto d-flex align-items-center px-2">
										<span class="legend me-2 bg-success"></span>
										<small>Tindaklanjut oleh saya</small>
										<span class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-muted">: 5</span>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Data Laporan Masuk</h3>
					</div>
					<div class="card-body border-bottom py-3">

						<div class="table-responsive">
							<table class="table card-table table-vcenter text-nowrap datatable">
								<thead>
									<th>No.</th>
									<th>Aksi</th>
									<th>Waktu</th>
									<th>Lokasi</th>
									<th>Pelapor</th>
									<th>Status</th>
								</thead>
								<tbody>

								</tbody>
							</table>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
</div>

<?= $this->endSection('content'); ?>