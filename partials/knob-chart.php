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
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
		rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../assests/vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="../assests/vendors/styles/icon-font.min.css" />
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
		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
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
<?php include "../partials/_navbar.php"; ?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="row clearfix progress-box">
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<input type="text" class="knob dial1" value="80" data-width="120" data-height="120"
									data-linecap="round" data-thickness="0.12" data-bgColor="#fff"
									data-fgColor="#1b00ff" data-angleOffset="180" readonly />
								<h5 class="text-blue padding-top-10 h5">My Earnings</h5>
								<span class="d-block">80% Average <i class="fa fa-line-chart text-blue"></i></span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<input type="text" class="knob dial2" value="70" data-width="120" data-height="120"
									data-linecap="round" data-thickness="0.12" data-bgColor="#fff"
									data-fgColor="#00e091" data-angleOffset="180" readonly />
								<h5 class="text-light-green padding-top-10 h5">
									Business Captured
								</h5>
								<span class="d-block">75% Average
									<i class="fa text-light-green fa-line-chart"></i></span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<input type="text" class="knob dial3" value="90" data-width="120" data-height="120"
									data-linecap="round" data-thickness="0.12" data-bgColor="#fff"
									data-fgColor="#f56767" data-angleOffset="180" readonly />
								<h5 class="text-light-orange padding-top-10 h5">
									Projects Speed
								</h5>
								<span class="d-block">90% Average
									<i class="fa text-light-orange fa-line-chart"></i></span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card-box pd-30 height-100-p">
							<div class="progress-box text-center">
								<input type="text" class="knob dial4" value="65" data-width="120" data-height="120"
									data-linecap="round" data-thickness="0.12" data-bgColor="#fff"
									data-fgColor="#a683eb" data-angleOffset="180" readonly />
								<h5 class="text-light-purple padding-top-10 h5">
									Panding Orders
								</h5>
								<span class="d-block">65% Average
									<i class="fa text-light-purple fa-line-chart"></i></span>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="progress-box text-center">
								<input type="text" class="knob dial5" value="35" data-width="220" data-height="220"
									data-thickness="0.08" data-fgColor="#a683eb" data-cursor="true" />
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="progress-box text-center">
								<input type="text" class="knob dial5" value="35" data-width="220" data-height="220"
									data-thickness="0.08" data-fgColor="#f56767" data-angleOffset="90"
									data-linecap="round" />
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="progress-box text-center">
								<input type="text" class="knob dial5" value="35" data-width="220" data-height="220"
									data-thickness="0.02" data-fgColor="#f56767" data-skin="tron"
									data-angleOffset="180" />
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<div class="progress-box text-center">
								<input type="text" class="knob dial5" value="35" data-width="220" data-height="220"
									data-thickness="0.08" data-fgColor="#0099ff" data-angleOffset="-125"
									data-angleArc="250" data-rotation="anticlockwise" />
							</div>
						</div>
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
	<script src="../assests/vendors/scripts/knob-chart-setting.js"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
			style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>