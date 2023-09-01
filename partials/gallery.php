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
	<link rel="stylesheet" type="text/css" href="../assests/vendors/styles/core.css" />
	<link rel="stylesheet" type="text/css" href="../assests/vendors/styles/icon-font.min.css" />
	<link rel="stylesheet" type="text/css" href="../assests/src/plugins/fancybox/dist/jquery.fancybox.css" />
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
	<?php include '../partials/_navbar.php'; ?>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="gallery-wrap">
					<ul class="row">
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="../assests/vendors/images/product-img1.jpg" alt="" />
									<div class="da-overlay">
										<div class="da-social">
											<h5 class="mb-10 color-white pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing.
											</h5>
											<ul class="clearfix">
												<li>
													<a href="../assests/vendors/images/product-img1.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a>
												</li>
												<li>
													<a href="#"><i class="fa fa-link"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="../assests/vendors/images/product-img2.jpg" alt="" />
									<div class="da-overlay">
										<div class="da-social">
											<h5 class="mb-10 color-white pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing.
											</h5>
											<ul class="clearfix">
												<li>
													<a href="../assests/vendors/images/product-img2.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a>
												</li>
												<li>
													<a href="#"><i class="fa fa-link"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="../assests/vendors/images/product-img3.jpg" alt="" />
									<div class="da-overlay">
										<div class="da-social">
											<h5 class="mb-10 color-white pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing.
											</h5>
											<ul class="clearfix">
												<li>
													<a href="../assests/vendors/images/product-img3.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a>
												</li>
												<li>
													<a href="#"><i class="fa fa-link"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="../assests/vendors/images/product-img4.jpg" alt="" />
									<div class="da-overlay">
										<div class="da-social">
											<h5 class="mb-10 color-white pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing.
											</h5>
											<ul class="clearfix">
												<li>
													<a href="../assests/vendors/images/product-img4.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a>
												</li>
												<li>
													<a href="#"><i class="fa fa-link"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="../assests/vendors/images/product-img1.jpg" alt="" />
									<div class="da-overlay">
										<div class="da-social">
											<h5 class="mb-10 color-white pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing.
											</h5>
											<ul class="clearfix">
												<li>
													<a href="../assests/vendors/images/product-img1.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a>
												</li>
												<li>
													<a href="#"><i class="fa fa-link"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="../assests/vendors/images/product-img2.jpg" alt="" />
									<div class="da-overlay">
										<div class="da-social">
											<h5 class="mb-10 color-white pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing.
											</h5>
											<ul class="clearfix">
												<li>
													<a href="../assests/vendors/images/product-img2.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a>
												</li>
												<li>
													<a href="#"><i class="fa fa-link"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="../assests/vendors/images/product-img3.jpg" alt="" />
									<div class="da-overlay">
										<div class="da-social">
											<h5 class="mb-10 color-white pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing.
											</h5>
											<ul class="clearfix">
												<li>
													<a href="../assests/vendors/images/product-img3.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a>
												</li>
												<li>
													<a href="#"><i class="fa fa-link"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="../assests/vendors/images/product-img4.jpg" alt="" />
									<div class="da-overlay">
										<div class="da-social">
											<h5 class="mb-10 color-white pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing.
											</h5>
											<ul class="clearfix">
												<li>
													<a href="../assests/vendors/images/product-img4.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a>
												</li>
												<li>
													<a href="#"><i class="fa fa-link"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-lg-4 col-md-6 col-sm-12">
							<div class="da-card box-shadow">
								<div class="da-card-photo">
									<img src="../assests/vendors/images/product-img1.jpg" alt="" />
									<div class="da-overlay">
										<div class="da-social">
											<h5 class="mb-10 color-white pd-20">
												Lorem ipsum dolor sit amet, consectetur adipisicing.
											</h5>
											<ul class="clearfix">
												<li>
													<a href="../assests/vendors/images/product-img1.jpg" data-fancybox="images"><i class="fa fa-picture-o"></i></a>
												</li>
												<li>
													<a href="#"><i class="fa fa-link"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
	<!-- js -->
	<script src="../assests/vendors/scripts/core.js"></script>
	<script src="../assests/vendors/scripts/script.min.js"></script>
	<script src="../assests/vendors/scripts/process.js"></script>
	<script src="../assests/vendors/scripts/layout-settings.js"></script>
	<!-- fancybox Popup Js -->
	<script src="../assests/src/plugins/fancybox/dist/jquery.fancybox.js"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>