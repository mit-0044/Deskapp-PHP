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
	<link rel="stylesheet" type="text/css" href="../assests/src/plugins/cropperjs/dist/cropper.css" />
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



	 

	<?php include '../partials/_navbar.php' ?>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h5 mb-20">Basic Progress</h5>
							<div class="progress mb-20">
								<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress mb-20">
								<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress mb-20">
								<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress mb-20">
								<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h5 mb-20">Backgrounds Progress</h5>
							<div class="progress mb-20">
								<div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress mb-20">
								<div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress mb-20">
								<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress mb-20">
								<div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h5 mb-20">Multiple Progress</h5>
							<div class="progress mb-20">
								<div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress mb-20">
								<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress mb-20">
								<div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress mb-20">
								<div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress">
								<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h5 mb-20">Labels Progress</h5>
							<div class="progress mb-20">
								<div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
									50%
								</div>
							</div>
							<div class="progress mb-20">
								<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
									25%
								</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
									75%
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h5 mb-20">Height Progress</h5>
							<div class="progress mb-20" style="height: 5px">
								<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress mb-20" style="height: 18px">
								<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
									25%
								</div>
							</div>
							<div class="progress" style="height: 25px">
								<div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
									75%
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h5 mb-20">Animated Progress</h5>
							<div class="progress mb-20">
								<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress mb-20">
								<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h5 mb-20">Striped Progress</h5>
							<div class="progress mb-20">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress mb-20">
								<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress mb-20">
								<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress mb-20">
								<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- welcome modal start -->

	<script src="../assests/vendors/scripts/core.js"></script>
	<script src="../assests/vendors/scripts/script.min.js"></script>
	<script src="../assests/vendors/scripts/process.js"></script>
	<script src="../assests/vendors/scripts/layout-settings.js"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>