<?php
header('Access-Control-Allow-Origin: *');
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title><?= $title; ?> -- LAPOR LAKA LANTAS APP</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
	<!-- CSS files -->
	<link href="<?= base_url(); ?>/main-temp/dist/css/tabler.min.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>/main-temp/dist/css/tabler-flags.min.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>/main-temp/dist/css/tabler-payments.min.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>/main-temp/dist/css/tabler-vendors.min.css" rel="stylesheet" />

	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/dist/libs/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/dist/libs/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/dist/libs/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/dist/libs/datatables-responsive/css/responsive.bootstrap4.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/fontawesome.min.css" integrity="sha512-Rcr1oG0XvqZI1yv1HIg9LgZVDEhf2AHjv+9AuD1JXWGLzlkoKDVvE925qySLcEywpMAYA/rkg296MkvqBF07Yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link href="<?= base_url(); ?>/main-temp/dist/css/demo.min.css" rel="stylesheet" />

	<link rel="stylesheet" href="<?= base_url(); ?>/assets-custom/css/main.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/fontawesome.min.js" integrity="sha512-xs1el+uLI2T4QTvRIv3kFBWvjQiPVAvKQM4kzZrJoLVZ1tSz1E0fkZch0cjd1f+sTk2MtBCHbP3PiVTdoFKAJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.9/dist/sweetalert2.all.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="<?= base_url(); ?>/main-temp/dist/libs/select2/js/select2.min.js"></script>

	<script src="<?= base_url(); ?>/main-temp/dist/libs/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url(); ?>/main-temp/dist/libs/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url(); ?>/main-temp/dist/libs/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?= base_url(); ?>/main-temp/dist/libs/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

	<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>

	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>

<body class="antialiased">

	<?php if (session()->getFlashdata('pesan_berhasil')) : ?>
		<script>
			Swal.fire(
				'Berhasil !',
				'<?= session()->getFlashdata('pesan_berhasil'); ?>',
				'success'
			)
		</script>
	<?php elseif (session()->getFlashdata('pesan_gagal')) : ?>
		<script>
			Swal.fire(
				'Gagal !',
				'<?= session()->getFlashdata('pesan_gagal'); ?>',
				'error'
			)
		</script>
	<?php endif; ?>

	<script>
		<?php if (session()->getFlashdata('toastr_success')) : ?>
			toastr.success("<?= session()->getFlashdata('toastr_success'); ?>");
		<?php elseif (session()->getFlashdata('toastr_error')) :  ?>
			toastr.error("<?= session()->getFlashdata('toastr_error'); ?>");
		<?php elseif (session()->getFlashdata('toastr_warning')) :  ?>
			toastr.warning("<?= session()->getFlashdata('toastr_warning'); ?>");
		<?php elseif (session()->getFlashdata('toastr_info')) :  ?>
			toastr.info("<?= session()->getFlashdata('toastr_info'); ?>");
		<?php endif; ?>
	</script>



	<div class="wrapper">
		<div class="sticky-top">
			<header class="navbar navbar-expand-md navbar-dark sticky-top d-print-none">
				<div class="container-xl">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
						<span class="navbar-toggler-icon"></span>
					</button>
					<h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
						<a href="<?= base_url(); ?>/personil" style="text-decoration: none;">
							LAPOR LAKA LANTAS APP
						</a>
					</h1>

					<div class="navbar-nav flex-row order-md-last">
						<div class="nav-item dropdown d-none d-md-flex me-3">
							<a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="35" height="35" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none" />
									<path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
									<path d="M9 17v1a3 3 0 0 0 6 0v-1" />
								</svg>
								<span class="badge bg-red"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
								<div class="card">
									<div class="card-body">
										<h4>
											Notifikasi
										</h4>
										<p>
											Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, explicabo?
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="nav-item dropdown">
							<a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
								<span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
								<div class="d-none d-xl-block ps-2">
									<div><?= $user_nama_lengkap; ?></div>
									<div class="mt-1 small text-muted">
										NRP. <?= $user_nrp; ?>
									</div>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
								<a href="<?= base_url(); ?>/personil/pengaturan" class="dropdown-item">Pengaturan Akun</a>
								<a href="<?= base_url(); ?>/personil/logout" class="dropdown-item btn-logout">Keluar</a>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="navbar-expand-md">
				<div class="collapse navbar-collapse" id="navbar-menu">
					<div class="navbar navbar-light">
						<div class="container-xl">

							<?php if ($user_level == "personil") : ?>

								<ul class="navbar-nav">
									<li class="nav-item <?= $request->uri->getSegment(2) == '' ? 'active' : ''; ?>">
										<a class="nav-link" href="<?= base_url(); ?>/personil">
											<span class="nav-link-icon d-md-none d-lg-inline-block">
												<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none" />
													<polyline points="5 12 3 12 12 3 21 12 19 12" />
													<path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
													<path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
												</svg>
											</span>
											<span class="nav-link-title">
												Dashboard
											</span>
										</a>
									</li>

									<li class="nav-item <?= $request->uri->getSegment(2) == 'laporan' ? 'active' : ''; ?>">
										<a class="nav-link" href="<?= base_url(); ?>/personil/laporan">
											<span class="nav-link-icon d-md-none d-lg-inline-block">
												<!-- Download SVG icon from http://tabler-icons.io/i/file-report -->
												<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none" />
													<circle cx="17" cy="17" r="4" />
													<path d="M17 13v4h4" />
													<path d="M12 3v4a1 1 0 0 0 1 1h4" />
													<path d="M11.5 21h-6.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v2m0 3v4" />
												</svg>
											</span>
											<span class="nav-link-title">
												Laporan Masuk
											</span>
										</a>
									</li>

									<li class="nav-item <?= $request->uri->getSegment(2) == 'history' ? 'active' : ''; ?>">
										<a class="nav-link" href="<?= base_url(); ?>/personil/history">
											<span class="nav-link-icon d-md-none d-lg-inline-block">
												<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none" />
													<polyline points="12 8 12 12 14 14" />
													<path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5" />
												</svg>
											</span>
											<span class="nav-link-title">
												History
											</span>
										</a>
									</li>

									<li class="nav-item <?= $request->uri->getSegment(2) == 'fasilitas-kesehatan' ? 'active' : ''; ?>">
										<a class="nav-link" href="<?= base_url(); ?>/personil/fasilitas-kesehatan">
											<span class="nav-link-icon d-md-none d-lg-inline-block">
												<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none" />
													<line x1="3" y1="21" x2="21" y2="21" />
													<path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
													<path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
													<line x1="10" y1="9" x2="14" y2="9" />
													<line x1="12" y1="7" x2="12" y2="11" />
												</svg>
											</span>
											<span class="nav-link-title">
												Fasilitas Kesehatan
											</span>
										</a>
									</li>

									<li class="nav-item <?= $request->uri->getSegment(2) == 'daerah-rawan' ? 'active' : ''; ?>">
										<a class="nav-link" href="<?= base_url(); ?>/personil/daerah-rawan">
											<span class="nav-link-icon d-md-none d-lg-inline-block">
												<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none" />
													<path d="M12 9v2m0 4v.01" />
													<path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
												</svg>
											</span>
											<span class="nav-link-title">
												Daerah Rawan
											</span>
										</a>
									</li>

									<li class="nav-item <?= $request->uri->getSegment(2) == 'pengaturan' ? 'active' : ''; ?>">
										<a class="nav-link" href="<?= base_url(); ?>/personil/pengaturan">
											<span class="nav-link-icon d-md-none d-lg-inline-block">
												<!-- Download SVG icon from http://tabler-icons.io/i/user -->
												<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none" />
													<circle cx="12" cy="7" r="4" />
													<path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
												</svg>
											</span>
											<span class="nav-link-title">
												Pengaturan Akun
											</span>
										</a>
									</li>

								</ul>

							<?php elseif ($user_level == "pelapor") : ?>

								<ul class="navbar-nav">
									<li class="nav-item <?= $request->uri->getSegment(2) == '' ? 'active' : ''; ?>">
										<a class="nav-link" href="<?= base_url(); ?>/pelapor">
											<span class="nav-link-icon d-md-none d-lg-inline-block">
												<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none" />
													<polyline points="5 12 3 12 12 3 21 12 19 12" />
													<path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
													<path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
												</svg>
											</span>
											<span class="nav-link-title">
												Dashboard
											</span>
										</a>
									</li>

									<li class="nav-item <?= $request->uri->getSegment(2) == 'laporan' ? 'active' : ''; ?>">
										<a class="nav-link" href="<?= base_url(); ?>/pelapor/laporan">
											<span class="nav-link-icon d-md-none d-lg-inline-block">
												<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none" />
													<circle cx="17" cy="17" r="4" />
													<path d="M17 13v4h4" />
													<path d="M12 3v4a1 1 0 0 0 1 1h4" />
													<path d="M11.5 21h-6.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v2m0 3v4" />
												</svg>
											</span>
											<span class="nav-link-title">
												Laporan
											</span>
										</a>
									</li>

									<li class="nav-item <?= $request->uri->getSegment(2) == 'fasilitas-kesehatan' ? 'active' : ''; ?>">
										<a class="nav-link" href="<?= base_url(); ?>/pelapor/fasilitas-kesehatan">
											<span class="nav-link-icon d-md-none d-lg-inline-block">
												<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none" />
													<line x1="3" y1="21" x2="21" y2="21" />
													<path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16" />
													<path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />
													<line x1="10" y1="9" x2="14" y2="9" />
													<line x1="12" y1="7" x2="12" y2="11" />
												</svg>
											</span>
											<span class="nav-link-title">
												Fasilitas Kesehatan
											</span>
										</a>
									</li>

									<li class="nav-item <?= $request->uri->getSegment(2) == 'daerah-rawan' ? 'active' : ''; ?>">
										<a class="nav-link" href="<?= base_url(); ?>/pelapor/daerah-rawan">
											<span class="nav-link-icon d-md-none d-lg-inline-block">
												<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none" />
													<path d="M12 9v2m0 4v.01" />
													<path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
												</svg>
											</span>
											<span class="nav-link-title">
												Daerah Rawan
											</span>
										</a>
									</li>

									<li class="nav-item <?= $request->uri->getSegment(2) == 'pengaturan' ? 'active' : ''; ?>">
										<a class="nav-link" href="<?= base_url(); ?>/pelapor/pengaturan">
											<span class="nav-link-icon d-md-none d-lg-inline-block">
												<!-- Download SVG icon from http://tabler-icons.io/i/user -->
												<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
													<path stroke="none" d="M0 0h24v24H0z" fill="none" />
													<circle cx="12" cy="7" r="4" />
													<path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
												</svg>
											</span>
											<span class="nav-link-title">
												Pengaturan Akun
											</span>
										</a>
									</li>

								</ul>

							<?php endif; ?>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="page-wrapper">

			<div class="content-min-height">
				<?= $this->renderSection('content'); ?>
			</div>

			<footer class="footer d-print-none" style="background-color: #000;">
				<div class="container">
					<div class="row text-center align-items-center">
						<div class="col-12 col-lg-auto mt-3 mt-lg-0">
							<ul class="list-inline list-inline-dots mb-0">
								<li class="list-inline-item text-white">
									Copyright &copy; <?= date('Y'); ?>
								</li>
							</ul>
						</div>

						<div class="col-lg-auto ms-lg-auto">
							<ul class="list-inline list-inline-dots mb-0">
								<li class="list-inline-item">
									<a href="https://instagram.com/rnaldppr" target="_blank" class="link-secondary text-white">
										Ronaldo Pei Piro - D1042151017
									</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</footer>

		</div>
	</div>

	<!-- Libs JS -->
	<script src="<?= base_url(); ?>/main-temp/dist/libs/apexcharts/dist/apexcharts.min.js"></script>
	<!-- Tabler Core -->
	<script src="<?= base_url(); ?>/main-temp/dist/js/tabler.min.js"></script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJkHXEVXBSLY7ExRcxoDxXzRYLJHg7qfI&callback=initMap"></script>

	<script src="<?= base_url(); ?>/assets-custom/js/main.js"></script>


</body>

</html>