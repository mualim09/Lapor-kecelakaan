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
			<div class="col-sm-6 col-lg-3">
				<div class="card">
					<div class="card-body">

						<div class="d-flex align-items-center">
							<div class="subheader">Laporan Masuk</div>
						</div>
						<div class="h1 mb-3">
							75
						</div>

						<div class="d-flex mb-2">
							<small>Laporan yang ditindaklanjut</small>
							<div class="ms-auto">
								<span class="text-green d-inline-flex align-items-center lh-1">
									75%
									<!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
									<svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<polyline points="3 17 9 11 13 15 21 7" />
										<polyline points="14 7 21 7 21 14" />
									</svg>
								</span>
							</div>
						</div>
						<div class="progress progress-sm">
							<div class="progress-bar bg-blue" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
								<span class="visually-hidden">75% Complete</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-lg-3">
				<div class="card">
					<div class="card-body">

						<div class="d-flex align-items-center">
							<div class="subheader">Tindaklanjut oleh saya</div>
						</div>
						<div class="h1 mb-3">
							18
						</div>

						<div class="d-flex mb-2">
							<small>Laporan yang ditindaklanjut</small>
							<div class="ms-auto">
								<span class="text-green d-inline-flex align-items-center lh-1">
									20%
									<svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<polyline points="3 17 9 11 13 15 21 7" />
										<polyline points="14 7 21 7 21 14" />
									</svg>
								</span>
							</div>
						</div>
						<div class="progress progress-sm">
							<div class="progress-bar bg-blue" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
								<span class="visually-hidden">20% Complete</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-lg-3">
				<div class="card">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div class="subheader">New clients</div>
							<div class="ms-auto lh-1">
								<div class="dropdown">
									<a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item active" href="#">Last 7 days</a>
										<a class="dropdown-item" href="#">Last 30 days</a>
										<a class="dropdown-item" href="#">Last 3 months</a>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex align-items-baseline">
							<div class="h1 mb-3 me-2">6,782</div>
							<div class="me-auto">
								<span class="text-yellow d-inline-flex align-items-center lh-1">
									0%
									<!-- Download SVG icon from http://tabler-icons.io/i/minus -->
									<svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<line x1="5" y1="12" x2="19" y2="12" />
									</svg>
								</span>
							</div>
						</div>
						<div id="chart-new-clients" class="chart-sm"></div>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-lg-3">
				<div class="card">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div class="subheader">Active users</div>
							<div class="ms-auto lh-1">
								<div class="dropdown">
									<a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a class="dropdown-item active" href="#">Last 7 days</a>
										<a class="dropdown-item" href="#">Last 30 days</a>
										<a class="dropdown-item" href="#">Last 3 months</a>
									</div>
								</div>
							</div>
						</div>
						<div class="d-flex align-items-baseline">
							<div class="h1 mb-3 me-2">2,986</div>
							<div class="me-auto">
								<span class="text-green d-inline-flex align-items-center lh-1">
									4%
									<!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
									<svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none" />
										<polyline points="3 17 9 11 13 15 21 7" />
										<polyline points="14 7 21 7 21 14" />
									</svg>
								</span>
							</div>
						</div>
						<div id="chart-active-users" class="chart-sm"></div>
					</div>
				</div>
			</div>

			<div class="col-lg-12">
				<div class="row row-cards">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<h3 class="card-title">Grafik laporan masuk</h3>
								<div id="grafik-laporan-masuk" class="chart-lg"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none" />
							<circle cx="12" cy="12" r="3" />
							<circle cx="12" cy="12" r="8" />
							<line x1="12" y1="2" x2="12" y2="4" />
							<line x1="12" y1="20" x2="12" y2="22" />
							<line x1="20" y1="12" x2="22" y2="12" />
							<line x1="2" y1="12" x2="4" y2="12" />
						</svg>
						<h3 class="card-title" style="margin-left: 10px;">Lokasi anda</h3>
					</div>
					<div class="card-body">
						<table class="table-sm mb-3">
							<tr>
								<td>Alamat</td>
								<td>:</td>
								<td>
									<span id="outputAlamat"></span>
								</td>
							</tr>
							<tr>
								<td>Koordinat</td>
								<td>:</td>
								<td>
									<span id="outputKoordinat"></span>
								</td>
							</tr>
							<tr>
								<td>Tingkat Akurasi</td>
								<td>:</td>
								<td>
									<span id="outputAkurasi"></span>
								</td>
							</tr>
						</table>
						<div id="map" style="height: 400px; width: 100%;"></div>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>

<script>
	let map, infoWindow, geocoder, marker, accuracyStatus;
	let outputAlamat = document.getElementById("outputAlamat");
	let outputKoordinat = document.getElementById("outputKoordinat");
	let outputAkurasi = document.getElementById("outputAkurasi");

	function initMap() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {
				if (position.coords.accuracy < 100) {
					accuracyStatus = `
							<strong style="color: green;">
								<span class="glyphicon glyphicon-ok"></span>
								Akurasi : ` + position.coords.accuracy.toFixed(2) + ` m (Bagus)
							</strong>`;
				} else {
					accuracyStatus = `
							<strong style="color: red;">
								<span class="glyphicon glyphicon-warning-sign"></span>
								Akurasi : ` + position.coords.accuracy.toFixed(2) + ` m (Lemah)
							</strong>`;
				}

				var pos = {
					lat: position.coords.latitude,
					lng: position.coords.longitude,
				};

				map = new google.maps.Map(document.getElementById('map'), {
					zoom: 7,
					center: pos
				});

				infowindow = new google.maps.InfoWindow();

				geocoder = new google.maps.Geocoder();
				geocoder.geocode({
					'latLng': pos
				}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						map.setZoom(15);
						map.setCenter(pos);
						marker = new google.maps.Marker({
							position: pos,
							map: map,
							animation: google.maps.Animation.BOUNCE,
						});

						var infowindowText = `
							<div class='text-center'>
								<strong>Posisi anda saat ini</strong>
								<br>` +
							results[3].formatted_address +
							`<br>(` + pos.lat.toFixed(5) + `, ` + pos.lng.toFixed(5) + `)<br>` + accuracyStatus + `
								</strong>
							</div>`;
						infowindow.setContent(infowindowText);
						infowindow.open(map, marker);
						marker.addListener('click', function() {
							infowindow.open(map, marker);
						});
						outputAlamat.innerHTML = results[0].formatted_address;
						outputKoordinat.innerHTML = `(` + pos.lat + `, ` + pos.lng + `)`;
						outputAkurasi.innerHTML = accuracyStatus;
					}
				});
			}, function() {
				handleLocationError(true, infoWindow, map.getCenter());
			});
		} else {
			handleLocationError(false, infoWindow, map.getCenter());
		}
	}

	function handleLocationError(browserHasGeolocation, infoWindow, pos) {
		infoWindow.setPosition(pos);
		infoWindow.setContent(browserHasGeolocation ?
			`<span class="alert alert-danger"> Error: The Geolocation service failed. </span>` :
			`<span class="alert alert-danger">Error: Your browser doesnt support geolocation. </span>`);
		infoWindow.open(map);
	}
</script>


<!-- Modal -->

<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">New report</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="mb-3">
					<label class="form-label">Name</label>
					<input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
				</div>
				<label class="form-label">Report type</label>
				<div class="form-selectgroup-boxes row mb-3">
					<div class="col-lg-6">
						<label class="form-selectgroup-item">
							<input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
							<span class="form-selectgroup-label d-flex align-items-center p-3">
								<span class="me-3">
									<span class="form-selectgroup-check"></span>
								</span>
								<span class="form-selectgroup-label-content">
									<span class="form-selectgroup-title strong mb-1">Simple</span>
									<span class="d-block text-muted">Provide only basic data needed for the report</span>
								</span>
							</span>
						</label>
					</div>
					<div class="col-lg-6">
						<label class="form-selectgroup-item">
							<input type="radio" name="report-type" value="1" class="form-selectgroup-input">
							<span class="form-selectgroup-label d-flex align-items-center p-3">
								<span class="me-3">
									<span class="form-selectgroup-check"></span>
								</span>
								<span class="form-selectgroup-label-content">
									<span class="form-selectgroup-title strong mb-1">Advanced</span>
									<span class="d-block text-muted">Insert charts and additional advanced analyses to be inserted in the report</span>
								</span>
							</span>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8">
						<div class="mb-3">
							<label class="form-label">Report url</label>
							<div class="input-group input-group-flat">
								<span class="input-group-text">
									https://tabler.io/reports/
								</span>
								<input type="text" class="form-control ps-0" value="report-01" autocomplete="off">
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="mb-3">
							<label class="form-label">Visibility</label>
							<select class="form-select">
								<option value="1" selected>Private</option>
								<option value="2">Public</option>
								<option value="3">Hidden</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-6">
						<div class="mb-3">
							<label class="form-label">Client name</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mb-3">
							<label class="form-label">Reporting period</label>
							<input type="date" class="form-control">
						</div>
					</div>
					<div class="col-lg-12">
						<div>
							<label class="form-label">Additional information</label>
							<textarea class="form-control" rows="3"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
					Cancel
				</a>
				<a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
					<!-- Download SVG icon from http://tabler-icons.io/i/plus -->
					<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none" />
						<line x1="12" y1="5" x2="12" y2="19" />
						<line x1="5" y1="12" x2="19" y2="12" />
					</svg>
					Create new report
				</a>
			</div>
		</div>
	</div>
</div>

<script>
	// @formatter:off
	document.addEventListener("DOMContentLoaded", function() {


		window.ApexCharts && (new ApexCharts(document.getElementById('grafik-laporan-masuk'), {
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
				name: "Tidak ditindaklanjut",
				data: [
					1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 12, 5, 8, 22, 6, 8, 6, 4, 1, 8, 24, 29, 51, 40, 47, 23, 26, 50, 26, 41
				]
			}, {
				name: "Di tindaklanjut",
				data: [
					2, 9, 1, 7, 8, 3, 6, 5, 5, 4, 6, 4, 1, 9, 3, 6, 7, 5, 2, 8, 4, 9, 1, 2, 6, 7, 5, 1, 8, 3, 2
				]
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
				<?php
				$start = $day = strtotime('2021-10-01');
				$end = strtotime('2021-10-31');
				while ($day <= $end) {
					echo "'" . date('Y-m-d', $day) . "', ", PHP_EOL;
					$day = strtotime("+1 day", $day);
				} ?>
			],
			colors: ["#00e550", "#c30000"],
			legend: {
				show: false,
			},
		})).render();
	});
	// @formatter:on
</script>




<!--  -->

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


<?= $this->endSection('content'); ?>