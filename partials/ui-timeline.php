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
				<div class="container pd-0">
					<div class="timeline mb-30">
						<ul>
							<li>
								<div class="timeline-date">15 Jan 2020</div>
								<div class="timeline-desc card-box">
									<div class="pd-20">
										<h4 class="mb-10 h4">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit.
										</h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu
											fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit
											anim id est laborum.
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="timeline-date">14 Jan 2020</div>
								<div class="timeline-desc card-box">
									<div class="pd-20">
										<h4 class="mb-10 h4">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit.
										</h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu
											fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit
											anim id est laborum.
										</p>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu
											fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit
											anim id est laborum.
										</p>
									</div>
								</div>
							</li>
							<li>
								<div class="timeline-date">13 Jan 2020</div>
								<div class="timeline-desc card-box">
									<div class="card card-box">
										<img class="card-img-top" src="vendors/images/img2.jpg" alt="Card image cap" />
										<div class="card-body">
											<h5 class="card-title weight-500">Card title</h5>
											<p class="card-text">
												Some quick example text to build on the card title and
												make up the bulk of the card's content.
											</p>
											<a href="#" class="btn btn-primary">Go somewhere</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="timeline-date">12 Jan 2020</div>
								<div class="timeline-desc card-box">
									<div class="pd-20">
										<blockquote class="blockquote mb-0">
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod tempor incididunt ut labore et
												dolore magna aliqua. Ut enim ad minim veniam, quis
												nostrud exercitation ullamco laboris nisi ut aliquip
												ex ea commodo consequat. Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum dolore eu
												fugiat nulla pariatur. Excepteur sint occaecat
												cupidatat non proident, sunt in culpa qui officia
												deserunt mollit anim id est laborum.
											</p>
											<footer class="blockquote-footer">
												<small>
													Someone famous in
													<cite title="Source Title">Source Title</cite>
												</small>
											</footer>
										</blockquote>
									</div>
								</div>
							</li>
						</ul>
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