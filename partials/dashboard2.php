<?php
include "../partials/_dbconnect.php";
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../main/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8" />
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../assests/vendors/images/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="../assests/vendors/images/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="../assests/vendors/images/favicon-16x16.png" />

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
	<!-- CSS -->
	<link rel="s
	tylesheet" type="text/css" href="../assests/vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="../assests/vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="../assests/src/plugins/jvectormap/jquery-jvectormap-2.0.3.css" />
	<link rel="stylesheet" type="text/css" href="../assests/vendors/styles/style.css" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag("js", new Date());

		gtag("config", "G-GBZ3SGGX85");
	</script>
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				"gtm.start": new Date().getTime(),
				event: "gtm.js"
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != "dataLayer" ? "&l=" + l : "";
			j.async = true;
			j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
	</script>
	<!-- End Google Tag Manager -->
</head>

<body>

	<?php include '../partials/_navbar.php' ?>

	<div class="main-container">
		<div class="xs-pd-20-10 pd-ltr-20">
			<div class="row clearfix progress-box">
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<div class="progress-box text-center">
							<input type="text" class="knob dial1" value="80" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#1b00ff" data-angleOffset="180" readonly />
							<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
							<span class="d-block">80% Average <i class="fa fa-line-chart text-blue"></i></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<div class="progress-box text-center">
							<input type="text" class="knob dial2" value="70" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#00e091" data-angleOffset="180" readonly />
							<h5 class="text-light-green padding-top-10 h5">
								Business Captured
							</h5>
							<span class="d-block">75% Average <i class="fa text-light-green fa-line-chart"></i></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<div class="progress-box text-center">
							<input type="text" class="knob dial3" value="90" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#f56767" data-angleOffset="180" readonly />
							<h5 class="text-light-orange padding-top-10 h5">
								Projects Speed
							</h5>
							<span class="d-block">90% Average <i class="fa text-light-orange fa-line-chart"></i></span>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<div class="progress-box text-center">
							<input type="text" class="knob dial4" value="65" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#a683eb" data-angleOffset="180" readonly />
							<h5 class="text-light-purple padding-top-10 h5">
								Panding Orders
							</h5>
							<span class="d-block">65% Average <i class="fa text-light-purple fa-line-chart"></i></span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 pt-10 height-100-p">
						<h2 class="mb-30 h4">Browser Visit</h2>
						<div class="browser-visits">
							<ul>
								<li class="d-flex flex-wrap align-items-center">
									<div class="icon">
										<img src="vendors/images/chrome.png" alt="" />
									</div>
									<div class="browser-name">Google Chrome</div>
									<div class="visit">
										<span class="badge badge-pill badge-primary">50%</span>
									</div>
								</li>
								<li class="d-flex flex-wrap align-items-center">
									<div class="icon">
										<img src="vendors/images/firefox.png" alt="" />
									</div>
									<div class="browser-name">Mozilla Firefox</div>
									<div class="visit">
										<span class="badge badge-pill badge-secondary">40%</span>
									</div>
								</li>
								<li class="d-flex flex-wrap align-items-center">
									<div class="icon">
										<img src="vendors/images/safari.png" alt="" />
									</div>
									<div class="browser-name">Safari</div>
									<div class="visit">
										<span class="badge badge-pill badge-success">40%</span>
									</div>
								</li>
								<li class="d-flex flex-wrap align-items-center">
									<div class="icon">
										<img src="vendors/images/edge.png" alt="" />
									</div>
									<div class="browser-name">Microsoft Edge</div>
									<div class="visit">
										<span class="badge badge-pill badge-warning">20%</span>
									</div>
								</li>
								<li class="d-flex flex-wrap align-items-center">
									<div class="icon">
										<img src="vendors/images/opera.png" alt="" />
									</div>
									<div class="browser-name">Opera Mini</div>
									<div class="visit">
										<span class="badge badge-pill badge-info">20%</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 pt-10 height-100-p">
						<h2 class="mb-30 h4">World Map</h2>
						<div id="browservisit" style="width: 100% !important; height: 380px"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-7 col-md-12 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<h4 class="mb-30 h4">Compliance Trend</h4>
						<div id="compliance-trend" class="compliance-trend"></div>
					</div>
				</div>
				<div class="col-lg-5 col-md-12 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<h4 class="mb-30 h4">Records</h4>
						<div id="chart" class="chart"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- js -->
	<script src="../assests/vendors/scripts/core.js"></script>
	<script src="../assests/vendors/scripts/script.min.js"></script>
	<script src="../assests/vendors/scripts/process.js"></script>
	<script src="../assests/vendors/scripts/layout-settings.js"></script>
	<script src="../assests/src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
	<script src="../assests/src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="../assests/src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
	<script src="../assests/src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
	<script src="../assests/src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="../assests/vendors/scripts/dashboard2.js"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>