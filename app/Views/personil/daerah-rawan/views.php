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

			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">
							Daerah Rawan Kecelakaan
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