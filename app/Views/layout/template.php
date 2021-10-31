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

	<style>
		*,
		html,
		body {
			font-family: 'Poppins', sans-serif;
		}
	</style>


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

	<script>
		$(document).ready(function() {

			$('.btn-hapus').on('click', function(e) {
				event.preventDefault(); // prevent form submit

				Swal.fire({
					title: 'Apakah anda yakin ?',
					text: "Pilih ya, jika anda ingin menghapus data !",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya, hapus data !',
					cancelButtonText: 'Batal'
				}).then((result) => {
					if (result.isConfirmed) {
						var form = $(this).parents('form');
						form.submit();
					}
				});
			});

			$('.btn-logout').on('click', function(e) {
				event.preventDefault(); // prevent form submit

				Swal.fire({
					title: 'Konfirmasi ?',
					text: "Apakah anda yakin ingin keluar dari aplikasi ?",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya',
					cancelButtonText: 'Tidak'
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = $('.btn-logout').attr('href');
					}
				});
			});
		});

		$(function() {

			// $('.js-select-2-custom').select2();
			$('.js-select-2').select2();

			$('#data-table').DataTable({
				"paging": true,
				"responsive": true,
				"searching": true,
			});
		})
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
								<a href="#" class="dropdown-item">Pengaturan Akun</a>
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
									<li class="nav-item active">
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

									<li class="nav-item">
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

									<li class="nav-item">
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

									<li class="nav-item">
										<a class="nav-link" href="<?= base_url(); ?>/personil/laporan">
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

								</ul>

							<?php elseif ($user_level == "pelapor") : ?>

								<ul class="navbar-nav">
									<li class="nav-item active">
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

									<li class="nav-item">
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
												Laporan Saya
											</span>
										</a>
									</li>

								</ul>

								<div class="col-auto ms-auto d-print-none">
									<div class="btn-list">
										<a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
											<!-- Download SVG icon from http://tabler-icons.io/i/plus -->
											<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none" />
												<line x1="12" y1="5" x2="12" y2="19" />
												<line x1="5" y1="12" x2="19" y2="12" />
											</svg>
											Buat Laporan
										</a>
										<a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
											<!-- Download SVG icon from http://tabler-icons.io/i/plus -->
											<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none" />
												<line x1="12" y1="5" x2="12" y2="19" />
												<line x1="5" y1="12" x2="19" y2="12" />
											</svg>
										</a>
									</div>
								</div>

							<?php endif; ?>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="page-wrapper">

			<?= $this->renderSection('content'); ?>

			<footer class="footer d-print-none">
				<div class="container">
					<div class="row text-center align-items-center">
						<div class="col-12 col-lg-auto mt-3 mt-lg-0">
							<ul class="list-inline list-inline-dots mb-0">
								<li class="list-inline-item">
									Copyright &copy; <?= date('Y'); ?>
								</li>
							</ul>
						</div>

						<div class="col-lg-auto ms-lg-auto">
							<ul class="list-inline list-inline-dots mb-0">
								<li class="list-inline-item">
									<a href="https://instagram.com/rnaldppr" target="_blank" class="link-secondary">
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

	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function() {
			window.ApexCharts && (new ApexCharts(document.getElementById('chart-revenue-bg'), {
				chart: {
					type: "area",
					fontFamily: 'inherit',
					height: 40.0,
					sparkline: {
						enabled: true
					},
					animations: {
						enabled: false
					},
				},
				dataLabels: {
					enabled: false,
				},
				fill: {
					opacity: .16,
					type: 'solid'
				},
				stroke: {
					width: 2,
					lineCap: "round",
					curve: "smooth",
				},
				series: [{
					name: "Profits",
					data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
				}],
				grid: {
					strokeDashArray: 4,
				},
				xaxis: {
					labels: {
						padding: 0,
					},
					tooltip: {
						enabled: false
					},
					axisBorder: {
						show: false,
					},
					type: 'datetime',
				},
				yaxis: {
					labels: {
						padding: 4
					},
				},
				labels: [
					'2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
				],
				colors: ["#206bc4"],
				legend: {
					show: false,
				},
			})).render();
		});
		// @formatter:on
	</script>

	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function() {
			window.ApexCharts && (new ApexCharts(document.getElementById('chart-new-clients'), {
				chart: {
					type: "line",
					fontFamily: 'inherit',
					height: 40.0,
					sparkline: {
						enabled: true
					},
					animations: {
						enabled: false
					},
				},
				fill: {
					opacity: 1,
				},
				stroke: {
					width: [2, 1],
					dashArray: [0, 3],
					lineCap: "round",
					curve: "smooth",
				},
				series: [{
					name: "May",
					data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 4, 46, 39, 62, 51, 35, 41, 67]
				}, {
					name: "April",
					data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61, 27, 39, 35, 41, 27, 35, 51, 46, 62, 37, 44, 53, 41, 65, 39, 37]
				}],
				grid: {
					strokeDashArray: 4,
				},
				xaxis: {
					labels: {
						padding: 0,
					},
					tooltip: {
						enabled: false
					},
					type: 'datetime',
				},
				yaxis: {
					labels: {
						padding: 4
					},
				},
				labels: [
					'2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
				],
				colors: ["#206bc4", "#a8aeb7"],
				legend: {
					show: false,
				},
			})).render();
		});
		// @formatter:on
	</script>

	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function() {
			window.ApexCharts && (new ApexCharts(document.getElementById('chart-active-users'), {
				chart: {
					type: "bar",
					fontFamily: 'inherit',
					height: 40.0,
					sparkline: {
						enabled: true
					},
					animations: {
						enabled: false
					},
				},
				plotOptions: {
					bar: {
						columnWidth: '50%',
					}
				},
				dataLabels: {
					enabled: false,
				},
				fill: {
					opacity: 1,
				},
				series: [{
					name: "Profits",
					data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
				}],
				grid: {
					strokeDashArray: 4,
				},
				xaxis: {
					labels: {
						padding: 0,
					},
					tooltip: {
						enabled: false
					},
					axisBorder: {
						show: false,
					},
					type: 'datetime',
				},
				yaxis: {
					labels: {
						padding: 4
					},
				},
				labels: [
					'2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
				],
				colors: ["#206bc4"],
				legend: {
					show: false,
				},
			})).render();
		});
		// @formatter:on
	</script>

	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function() {
			window.ApexCharts && (new ApexCharts(document.getElementById('chart-mentions'), {
				chart: {
					type: "bar",
					fontFamily: 'inherit',
					height: 240,
					parentHeightOffset: 0,
					toolbar: {
						show: false,
					},
					animations: {
						enabled: false
					},
					stacked: true,
				},
				plotOptions: {
					bar: {
						columnWidth: '50%',
					}
				},
				dataLabels: {
					enabled: false,
				},
				fill: {
					opacity: 1,
				},
				series: [{
					name: "Web",
					data: [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 12, 5, 8, 22, 6, 8, 6, 4, 1, 8, 24, 29, 51, 40, 47, 23, 26, 50, 26, 41, 22, 46, 47, 81, 46, 6]
				}, {
					name: "Social",
					data: [2, 5, 4, 3, 3, 1, 4, 7, 5, 1, 2, 5, 3, 2, 6, 7, 7, 1, 5, 5, 2, 12, 4, 6, 18, 3, 5, 2, 13, 15, 20, 47, 18, 15, 11, 10, 0]
				}, {
					name: "Other",
					data: [2, 9, 1, 7, 8, 3, 6, 5, 5, 4, 6, 4, 1, 9, 3, 6, 7, 5, 2, 8, 4, 9, 1, 2, 6, 7, 5, 1, 8, 3, 2, 3, 4, 9, 7, 1, 6]
				}],
				grid: {
					padding: {
						top: -20,
						right: 0,
						left: -4,
						bottom: -4
					},
					strokeDashArray: 4,
					xaxis: {
						lines: {
							show: true
						}
					},
				},
				xaxis: {
					labels: {
						padding: 0,
					},
					tooltip: {
						enabled: false
					},
					axisBorder: {
						show: false,
					},
					type: 'datetime',
				},
				yaxis: {
					labels: {
						padding: 4
					},
				},
				labels: [
					'2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19', '2020-07-20', '2020-07-21', '2020-07-22', '2020-07-23', '2020-07-24', '2020-07-25', '2020-07-26'
				],
				colors: ["#206bc4", "#79a6dc", "#bfe399"],
				legend: {
					show: false,
				},
			})).render();
		});
		// @formatter:on
	</script>

	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function() {
			window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-activity'), {
				chart: {
					type: "radialBar",
					fontFamily: 'inherit',
					height: 40,
					width: 40,
					animations: {
						enabled: false
					},
					sparkline: {
						enabled: true
					},
				},
				tooltip: {
					enabled: false,
				},
				plotOptions: {
					radialBar: {
						hollow: {
							margin: 0,
							size: '75%'
						},
						track: {
							margin: 0
						},
						dataLabels: {
							show: false
						}
					}
				},
				colors: ["#206bc4"],
				series: [35],
			})).render();
		});
		// @formatter:on
	</script>

	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function() {
			window.ApexCharts && (new ApexCharts(document.getElementById('chart-development-activity'), {
				chart: {
					type: "area",
					fontFamily: 'inherit',
					height: 192,
					sparkline: {
						enabled: true
					},
					animations: {
						enabled: false
					},
				},
				dataLabels: {
					enabled: false,
				},
				fill: {
					opacity: .16,
					type: 'solid'
				},
				stroke: {
					width: 2,
					lineCap: "round",
					curve: "smooth",
				},
				series: [{
					name: "Purchases",
					data: [3, 5, 4, 6, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 8, 4, 14, 30, 17, 19, 15, 14, 25, 32, 40, 55, 60, 48, 52, 70]
				}],
				grid: {
					strokeDashArray: 4,
				},
				xaxis: {
					labels: {
						padding: 0,
					},
					tooltip: {
						enabled: false
					},
					axisBorder: {
						show: false,
					},
					type: 'datetime',
				},
				yaxis: {
					labels: {
						padding: 4
					},
				},
				labels: [
					'2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
				],
				colors: ["#206bc4"],
				legend: {
					show: false,
				},
				point: {
					show: false
				},
			})).render();
		});
		// @formatter:on
	</script>

	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function() {
			window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-1'), {
				chart: {
					type: "line",
					fontFamily: 'inherit',
					height: 24,
					animations: {
						enabled: false
					},
					sparkline: {
						enabled: true
					},
				},
				tooltip: {
					enabled: false,
				},
				stroke: {
					width: 2,
					lineCap: "round",
				},
				series: [{
					color: "#206bc4",
					data: [17, 24, 20, 10, 5, 1, 4, 18, 13]
				}],
			})).render();
		});
		// @formatter:on
	</script>

	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function() {
			window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-2'), {
				chart: {
					type: "line",
					fontFamily: 'inherit',
					height: 24,
					animations: {
						enabled: false
					},
					sparkline: {
						enabled: true
					},
				},
				tooltip: {
					enabled: false,
				},
				stroke: {
					width: 2,
					lineCap: "round",
				},
				series: [{
					color: "#206bc4",
					data: [13, 11, 19, 22, 12, 7, 14, 3, 21]
				}],
			})).render();
		});
		// @formatter:on
	</script>

	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function() {
			window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-3'), {
				chart: {
					type: "line",
					fontFamily: 'inherit',
					height: 24,
					animations: {
						enabled: false
					},
					sparkline: {
						enabled: true
					},
				},
				tooltip: {
					enabled: false,
				},
				stroke: {
					width: 2,
					lineCap: "round",
				},
				series: [{
					color: "#206bc4",
					data: [10, 13, 10, 4, 17, 3, 23, 22, 19]
				}],
			})).render();
		});
		// @formatter:on
	</script>

	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function() {
			window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-4'), {
				chart: {
					type: "line",
					fontFamily: 'inherit',
					height: 24,
					animations: {
						enabled: false
					},
					sparkline: {
						enabled: true
					},
				},
				tooltip: {
					enabled: false,
				},
				stroke: {
					width: 2,
					lineCap: "round",
				},
				series: [{
					color: "#206bc4",
					data: [6, 15, 13, 13, 5, 7, 17, 20, 19]
				}],
			})).render();
		});
		// @formatter:on
	</script>

	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function() {
			window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-5'), {
				chart: {
					type: "line",
					fontFamily: 'inherit',
					height: 24,
					animations: {
						enabled: false
					},
					sparkline: {
						enabled: true
					},
				},
				tooltip: {
					enabled: false,
				},
				stroke: {
					width: 2,
					lineCap: "round",
				},
				series: [{
					color: "#206bc4",
					data: [2, 11, 15, 14, 21, 20, 8, 23, 18, 14]
				}],
			})).render();
		});
		// @formatter:on
	</script>

	<script>
		// @formatter:off
		document.addEventListener("DOMContentLoaded", function() {
			window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-6'), {
				chart: {
					type: "line",
					fontFamily: 'inherit',
					height: 24,
					animations: {
						enabled: false
					},
					sparkline: {
						enabled: true
					},
				},
				tooltip: {
					enabled: false,
				},
				stroke: {
					width: 2,
					lineCap: "round",
				},
				series: [{
					color: "#206bc4",
					data: [22, 12, 7, 14, 3, 21, 8, 23, 18, 14]
				}],
			})).render();
		});
		// @formatter:on
	</script>
</body>

</html>