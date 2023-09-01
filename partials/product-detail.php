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
	<!-- Slick Slider css -->
	<link rel="stylesheet" type="text/css" href="../assests/src/plugins/slick/slick.css" />
	<!-- bootstrap-touchspin css -->
	<link rel="stylesheet" type="text/css" href="../assests/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css" />
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
	<?php include '../partials/_navbar.php' ?>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="product-wrap">
					<div class="product-detail-wrap mb-30">
						<div class="row">
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="product-slider slider-arrow">
									<div class="product-slide">
										<img src="../assests/vendors/images/product-img1.jpg" alt="" />
									</div>
									<div class="product-slide">
										<img src="../assests/vendors/images/product-img2.jpg" alt="" />
									</div>
									<div class="product-slide">
										<img src="../assests/vendors/images/product-img3.jpg" alt="" />
									</div>
									<div class="product-slide">
										<img src="../assests/vendors/images/product-img4.jpg" alt="" />
									</div>
								</div>
								<div class="product-slider-nav">
									<div class="product-slide-nav">
										<img src="../assests/vendors/images/product-img1.jpg" alt="" />
									</div>
									<div class="product-slide-nav">
										<img src="../assests/vendors/images/product-img2.jpg" alt="" />
									</div>
									<div class="product-slide-nav">
										<img src="../assests/vendors/images/product-img3.jpg" alt="" />
									</div>
									<div class="product-slide-nav">
										<img src="../assests/vendors/images/product-img4.jpg" alt="" />
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12">
								<div class="product-detail-desc pd-20 card-box height-100-p">
									<h4 class="mb-20 pt-20">Gufram Bounce Black</h4>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit,
										sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation
										ullamco laboris nisi ut aliquip ex ea commodo consequat.
										Duis aute irure dolor in reprehenderit in voluptate velit
										esse cillum dolore eu fugiat nulla pariatur. Excepteur
										sint occaecat cupidatat non proident, sunt in culpa qui
										officia deserunt mollit anim id est laborum.
									</p>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit,
										sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation
										ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</p>
									<div class="price"><del>$55.5</del><ins>$49.5</ins></div>
									<div class="mx-w-150">
										<div class="form-group">
											<label class="text-blue">quantity</label>
											<input id="demo3_22" type="text" value="1" name="demo3_22" />
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-6">
											<a href="#" class="btn btn-primary btn-block">Add To Cart</a>
										</div>
										<div class="col-md-6 col-6">
											<a href="#" class="btn btn-outline-primary btn-block">Buy Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<h4 class="mb-20">Recent Product</h4>
					<div class="product-list">
						<ul class="row">
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img">
										<img src="../assests/vendors/images/product-img1.jpg" alt="" />
									</div>
									<div class="product-caption">
										<h4><a href="#">Gufram Bounce Black</a></h4>
										<div class="price"><del>$55.5</del><ins>$49.5</ins></div>
										<a href="#" class="btn btn-outline-primary">Read More</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img">
										<img src="../assests/vendors/images/product-img2.jpg" alt="" />
									</div>
									<div class="product-caption">
										<h4><a href="#">Gufram Bounce White</a></h4>
										<div class="price"><del>$75.5</del><ins>$50</ins></div>
										<a href="#" class="btn btn-outline-primary">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img">
										<img src="../assests/vendors/images/product-img3.jpg" alt="" />
									</div>
									<div class="product-caption">
										<h4><a href="#">Contrast Lace-Up Sneakers</a></h4>
										<div class="price">
											<ins>$80</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Add To Cart</a>
									</div>
								</div>
							</li>
						</ul>
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
	<!-- Slick Sl../assests/ider js -->
	<script src="../assests/src/plugins/slick/slick.min.js"></script>
	<!-- bootstra../assests/p-touchspin js -->
	<script src="../assests/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script>
		jQuery(document).ready(function() {
			jQuery(".product-slider").slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: true,
				infinite: true,
				speed: 1000,
				fade: true,
				asNavFor: ".product-slider-nav",
			});
			jQuery(".product-slider-nav").slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				asNavFor: ".product-slider",
				dots: false,
				infinite: true,
				arrows: false,
				speed: 1000,
				centerMode: true,
				focusOnSelect: true,
			});
			$("input[name='demo3_22']").TouchSpin({
				initval: 1,
			});
		});
	</script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>