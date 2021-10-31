<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?= $title; ?> -- LAPOR LAKA LANTAS APP</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/main-temp/img/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/css/owl.theme.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/css/owl.transitions.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/css/meanmenu/meanmenu.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/css/animate.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/css/normalize.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/css/scrollbar/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/css/jvectormap/jquery-jvectormap-2.0.3.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/css/notika-custom-icon.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/css/wave/waves.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/fontawesome.min.css" integrity="sha512-Rcr1oG0XvqZI1yv1HIg9LgZVDEhf2AHjv+9AuD1JXWGLzlkoKDVvE925qySLcEywpMAYA/rkg296MkvqBF07Yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/css/main.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/style.css">
	<link rel="stylesheet" href="<?= base_url(); ?>/main-temp/css/responsive.css">

	<script src="<?= base_url(); ?>/main-temp/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
	<div class="header-top-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="logo-area">
						<a href="<?= base_url(); ?>">
							LAPOR LAKA LANTAS APP
						</a>
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="header-top-menu">
						<ul class="nav navbar-nav notika-top-nav">
							<li class="nav-item nc-al">
								<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
									<span>
										<i class="notika-icon notika-alarm"></i>
									</span>
									<div class="spinner4 spinner-4"></div>
								</a>
								<div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn">
									<div class="hd-mg-tt">
										<h2>Notifikasi</h2>
									</div>
									<div class="hd-message-info">
										<a href="#">
											<div class="hd-message-sn">
												<div class="hd-message-img">
													<img src="<?= base_url(); ?>/main-temp/img/post/1.jpg" alt="" />
												</div>
												<div class="hd-mg-ctn">
													<h3>David Belle</h3>
													<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
												</div>
											</div>
										</a>
										<a href="#">
											<div class="hd-message-sn">
												<div class="hd-message-img">
													<img src="<?= base_url(); ?>/main-temp/img/post/2.jpg" alt="" />
												</div>
												<div class="hd-mg-ctn">
													<h3>Jonathan Morris</h3>
													<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
												</div>
											</div>
										</a>
										<a href="#">
											<div class="hd-message-sn">
												<div class="hd-message-img">
													<img src="<?= base_url(); ?>/main-temp/img/post/4.jpg" alt="" />
												</div>
												<div class="hd-mg-ctn">
													<h3>Fredric Mitchell</h3>
													<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
												</div>
											</div>
										</a>
										<a href="#">
											<div class="hd-message-sn">
												<div class="hd-message-img">
													<img src="<?= base_url(); ?>/main-temp/img/post/1.jpg" alt="" />
												</div>
												<div class="hd-mg-ctn">
													<h3>David Belle</h3>
													<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
												</div>
											</div>
										</a>
										<a href="#">
											<div class="hd-message-sn">
												<div class="hd-message-img">
													<img src="<?= base_url(); ?>/main-temp/img/post/2.jpg" alt="" />
												</div>
												<div class="hd-mg-ctn">
													<h3>Glenn Jecobs</h3>
													<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
												</div>
											</div>
										</a>
									</div>
									<div class="hd-mg-va">
										<a href="#">View All</a>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
									<img src="<?= (empty($user_foto)) ? base_url() . '/img/noimg.png' : base_url() . '/img/personel/' . $user_foto; ?>" alt="Foto <?= $user_pangkat; ?> <?= $user_nama_lengkap; ?> - NRP. <?= $user_nrp; ?>" style="width: 30px; height: 30px; object-position: center; object-fit: cover; border-radius: 50%; margin: 0; padding: 0;" />
								</a>
								<div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
									<div class="hd-mg-tt">
										<h2>Profil Saya</h2>
									</div>
									<hr>
									<div class="hd-message-info">
										<div class="hd-message-sn">
											<div class="hd-message-img chat-img">
												<img src="<?= (empty($user_foto)) ? base_url() . '/img/noimg.png' : base_url() . '/img/personel/' . $user_foto; ?>" alt="Foto <?= $user_pangkat; ?> <?= $user_nama_lengkap; ?> - NRP. <?= $user_nrp; ?>" />
											</div>
											<div class="hd-mg-ctn">
												<h3>
													<?= $user_pangkat; ?> <?= $user_nama_lengkap; ?>
												</h3>
												<p>NRP. <?= $user_nrp; ?></p>
											</div>
										</div>
										<a href="#" class="btn btn-sm text-left btn-block btn-secondary">
											<i class="fa fa-setting"></i> Pengaturan Akun
										</a>
										<a href="#" class="btn btn-sm text-left btn-block btn-secondary">
											<i class="fa fa-sign-out"></i> Keluar
										</a>
									</div>

								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="mobile-menu-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="mobile-menu">
						<nav id="dropdown">
							<ul class="mobile-menu-nav">
								<li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
									<ul class="collapse dropdown-header-top">
										<li><a href="index.html">Dashboard One</a></li>
										<li><a href="index-2.html">Dashboard Two</a></li>
										<li><a href="index-3.html">Dashboard Three</a></li>
										<li><a href="index-4.html">Dashboard Four</a></li>
										<li><a href="analytics.html">Analytics</a></li>
										<li><a href="widgets.html">Widgets</a></li>
									</ul>
								</li>
								<li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
									<ul id="demoevent" class="collapse dropdown-header-top">
										<li><a href="inbox.html">Inbox</a></li>
										<li><a href="view-email.html">View Email</a></li>
										<li><a href="compose-email.html">Compose Email</a></li>
									</ul>
								</li>
								<li><a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
									<ul id="democrou" class="collapse dropdown-header-top">
										<li><a href="animations.html">Animations</a></li>
										<li><a href="google-map.html">Google Map</a></li>
										<li><a href="data-map.html">Data Maps</a></li>
										<li><a href="code-editor.html">Code Editor</a></li>
										<li><a href="image-cropper.html">Images Cropper</a></li>
										<li><a href="wizard.html">Wizard</a></li>
									</ul>
								</li>
								<li><a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
									<ul id="demolibra" class="collapse dropdown-header-top">
										<li><a href="flot-charts.html">Flot Charts</a></li>
										<li><a href="bar-charts.html">Bar Charts</a></li>
										<li><a href="line-charts.html">Line Charts</a></li>
										<li><a href="area-charts.html">Area Charts</a></li>
									</ul>
								</li>
								<li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
									<ul id="demodepart" class="collapse dropdown-header-top">
										<li><a href="normal-table.html">Normal Table</a></li>
										<li><a href="data-table.html">Data Table</a></li>
									</ul>
								</li>
								<li><a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
									<ul id="demo" class="collapse dropdown-header-top">
										<li><a href="form-elements.html">Form Elements</a></li>
										<li><a href="form-components.html">Form Components</a></li>
										<li><a href="form-examples.html">Form Examples</a></li>
									</ul>
								</li>
								<li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
									<ul id="Miscellaneousmob" class="collapse dropdown-header-top">
										<li><a href="notification.html">Notifications</a>
										</li>
										<li><a href="alert.html">Alerts</a>
										</li>
										<li><a href="modals.html">Modals</a>
										</li>
										<li><a href="buttons.html">Buttons</a>
										</li>
										<li><a href="tabs.html">Tabs</a>
										</li>
										<li><a href="accordion.html">Accordion</a>
										</li>
										<li><a href="dialog.html">Dialogs</a>
										</li>
										<li><a href="popovers.html">Popovers</a>
										</li>
										<li><a href="tooltips.html">Tooltips</a>
										</li>
										<li><a href="dropdown.html">Dropdowns</a>
										</li>
									</ul>
								</li>
								<li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
									<ul id="Pagemob" class="collapse dropdown-header-top">
										<li><a href="contact.html">Contact</a>
										</li>
										<li><a href="invoice.html">Invoice</a>
										</li>
										<li><a href="typography.html">Typography</a>
										</li>
										<li><a href="color.html">Color</a>
										</li>
										<li><a href="login-register.html">Login Register</a>
										</li>
										<li><a href="404.html">404 Page</a>
										</li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="main-menu-area mg-tb-40">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
						<li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
						</li>
						<li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-mail"></i> Email</a>
						</li>
						<li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Interface</a>
						</li>
						<li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-bar-chart"></i> Charts</a>
						</li>
						<li><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Tables</a>
						</li>
						<li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-form"></i> Forms</a>
						</li>
						<li><a data-toggle="tab" href="#Appviews"><i class="notika-icon notika-app"></i> App views</a>
						</li>
						<li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> Pages</a>
						</li>
					</ul>
					<div class="tab-content custom-menu-content">
						<div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
							<ul class="notika-main-menu-dropdown">
								<li><a href="index.html">Dashboard One</a>
								</li>
								<li><a href="index-2.html">Dashboard Two</a>
								</li>
								<li><a href="index-3.html">Dashboard Three</a>
								</li>
								<li><a href="index-4.html">Dashboard Four</a>
								</li>
								<li><a href="analytics.html">Analytics</a>
								</li>
								<li><a href="widgets.html">Widgets</a>
								</li>
							</ul>
						</div>
						<div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
							<ul class="notika-main-menu-dropdown">
								<li><a href="inbox.html">Inbox</a>
								</li>
								<li><a href="view-email.html">View Email</a>
								</li>
								<li><a href="compose-email.html">Compose Email</a>
								</li>
							</ul>
						</div>
						<div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
							<ul class="notika-main-menu-dropdown">
								<li><a href="animations.html">Animations</a>
								</li>
								<li><a href="google-map.html">Google Map</a>
								</li>
								<li><a href="data-map.html">Data Maps</a>
								</li>
								<li><a href="code-editor.html">Code Editor</a>
								</li>
								<li><a href="image-cropper.html">Images Cropper</a>
								</li>
								<li><a href="wizard.html">Wizard</a>
								</li>
							</ul>
						</div>
						<div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
							<ul class="notika-main-menu-dropdown">
								<li><a href="flot-charts.html">Flot Charts</a>
								</li>
								<li><a href="bar-charts.html">Bar Charts</a>
								</li>
								<li><a href="line-charts.html">Line Charts</a>
								</li>
								<li><a href="area-charts.html">Area Charts</a>
								</li>
							</ul>
						</div>
						<div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
							<ul class="notika-main-menu-dropdown">
								<li><a href="normal-table.html">Normal Table</a>
								</li>
								<li><a href="data-table.html">Data Table</a>
								</li>
							</ul>
						</div>
						<div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
							<ul class="notika-main-menu-dropdown">
								<li><a href="form-elements.html">Form Elements</a>
								</li>
								<li><a href="form-components.html">Form Components</a>
								</li>
								<li><a href="form-examples.html">Form Examples</a>
								</li>
							</ul>
						</div>
						<div id="Appviews" class="tab-pane notika-tab-menu-bg animated flipInX">
							<ul class="notika-main-menu-dropdown">
								<li><a href="notification.html">Notifications</a>
								</li>
								<li><a href="alert.html">Alerts</a>
								</li>
								<li><a href="modals.html">Modals</a>
								</li>
								<li><a href="buttons.html">Buttons</a>
								</li>
								<li><a href="tabs.html">Tabs</a>
								</li>
								<li><a href="accordion.html">Accordion</a>
								</li>
								<li><a href="dialog.html">Dialogs</a>
								</li>
								<li><a href="popovers.html">Popovers</a>
								</li>
								<li><a href="tooltips.html">Tooltips</a>
								</li>
								<li><a href="dropdown.html">Dropdowns</a>
								</li>
							</ul>
						</div>
						<div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
							<ul class="notika-main-menu-dropdown">
								<li><a href="contact.html">Contact</a>
								</li>
								<li><a href="invoice.html">Invoice</a>
								</li>
								<li><a href="typography.html">Typography</a>
								</li>
								<li><a href="color.html">Color</a>
								</li>
								<li><a href="login-register.html">Login Register</a>
								</li>
								<li><a href="404.html">404 Page</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?= $this->renderSection('content'); ?>

	<div class="footer-copyright-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="footer-copy-right">
						<p>
							Copyright © <?= date("Y"); ?> <br>
							Ronaldo Pei Piro - D1042151107
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url(); ?>/main-temp/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/wow.min.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/jquery-price-slider.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/owl.carousel.min.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/jquery.scrollUp.min.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/meanmenu/jquery.meanmenu.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/counterup/jquery.counterup.min.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/counterup/waypoints.min.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/counterup/counterup-active.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/jvectormap/jvectormap-active.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/sparkline/jquery.sparkline.min.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/sparkline/sparkline-active.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/flot/jquery.flot.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/flot/jquery.flot.resize.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/flot/curvedLines.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/flot/flot-active.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/knob/jquery.knob.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/knob/jquery.appear.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/knob/knob-active.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/wave/waves.min.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/wave/wave-active.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/todo/jquery.todo.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/plugins.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/chat/moment.min.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/chat/jquery.chat.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/fontawesome.min.js" integrity="sha512-xs1el+uLI2T4QTvRIv3kFBWvjQiPVAvKQM4kzZrJoLVZ1tSz1E0fkZch0cjd1f+sTk2MtBCHbP3PiVTdoFKAJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<script src="<?= base_url(); ?>/main-temp/js/main.js"></script>
	<script src="<?= base_url(); ?>/main-temp/js/tawk-chat.js"></script>
</body>

</html>