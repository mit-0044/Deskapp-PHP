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
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-20 h4">Basic List</h4>
							<ul class="list-group">
								<li class="list-group-item">Cras justo odio</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item">Morbi leo risus</li>
								<li class="list-group-item">Porta ac consectetur ac</li>
								<li class="list-group-item">Vestibulum at eros</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-20 h4">Links items List</h4>
							<div class="list-group">
								<a href="#" class="list-group-item list-group-item-action active">Cras justo odio</a>
								<a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
								<a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
								<a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
								<a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-20 h4">buttons items List</h4>
							<div class="list-group">
								<button type="button" class="list-group-item list-group-item-action">
									Cras justo odio
								</button>
								<button type="button" class="list-group-item list-group-item-action">
									Dapibus ac facilisis in
								</button>
								<button type="button" class="list-group-item list-group-item-action active">
									Morbi leo risus
								</button>
								<button type="button" class="list-group-item list-group-item-action">
									Porta ac consectetur ac
								</button>
								<button type="button" class="list-group-item list-group-item-action" disabled>
									Vestibulum at eros
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-20 h4">Flush List</h4>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">Cras justo odio</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item">Morbi leo risus</li>
								<li class="list-group-item">Porta ac consectetur ac</li>
								<li class="list-group-item">Vestibulum at eros</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-20 h4">Disabled items List</h4>
							<ul class="list-group">
								<li class="list-group-item disabled">Cras justo odio</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item">Morbi leo risus</li>
								<li class="list-group-item">Porta ac consectetur ac</li>
								<li class="list-group-item">Vestibulum at eros</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-20 h4">With badges List</h4>
							<ul class="list-group">
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Cras justo odio
									<span class="badge badge-primary badge-pill">14</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Dapibus ac facilisis in
									<span class="badge badge-primary badge-pill">2</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Morbi leo risus
									<span class="badge badge-primary badge-pill">1</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Dapibus ac facilisis in
									<span class="badge badge-primary badge-pill">5</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									Morbi leo risus
									<span class="badge badge-primary badge-pill">7</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-20 h4">Contextual List</h4>
							<ul class="list-group">
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item list-group-item-primary">
									This is a primary list group item
								</li>
								<li class="list-group-item list-group-item-secondary">
									This is a secondary list group item
								</li>
								<li class="list-group-item list-group-item-success">
									This is a success list group item
								</li>
								<li class="list-group-item list-group-item-danger">
									This is a danger list group item
								</li>
								<li class="list-group-item list-group-item-warning">
									This is a warning list group item
								</li>
								<li class="list-group-item list-group-item-info">
									This is a info list group item
								</li>
								<li class="list-group-item list-group-item-dark">
									This is a dark list group item
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-20 h4">Custom content List</h4>
							<div class="list-group">
								<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
									<h5 class="mb-1 h5 color-white">List group item heading</h5>
									<div class="pb-1">
										<small class="weight-600">3 days ago</small>
									</div>
									<p class="mb-1 font-14">
										Donec id elit non mi porta gravida at eget metus. Maecenas
										sed diam eget risus varius blandit.
									</p>
									<small>Donec id elit non mi porta.</small>
								</a>
								<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
									<h5 class="mb-1 h5">List group item heading</h5>
									<div class="pb-1">
										<small class="text-muted weight-600">3 days ago</small>
									</div>
									<p class="mb-1 font-14">
										Donec id elit non mi porta gravida at eget metus. Maecenas
										sed diam eget risus varius blandit.
									</p>
									<small class="text-muted">Donec id elit non mi porta.</small>
								</a>
								<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
									<h5 class="mb-1 h5">List group item heading</h5>
									<div class="pb-1">
										<small class="text-muted weight-600">3 days ago</small>
									</div>
									<p class="mb-1 font-14">
										Donec id elit non mi porta gravida at eget metus. Maecenas
										sed diam eget risus varius blandit.
									</p>
									<small class="text-muted">Donec id elit non mi porta.</small>
								</a>
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