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
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<!-- Slides only -->
						<div class="card-box mb-30">
							<div class="clearfix pd-20">
								<div class="pull-left">
									<h4 class="h4">Slides only</h4>
								</div>
								<div class="pull-right">
									<a href="#carousel1" class="btn btn-primary btn-sm scroll-click" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
								</div>
							</div>
							<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="../assests/vendors/images/img2.jpg" alt="First slide" />
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="../assests/vendors/images/img3.jpg" alt="Second slide" />
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="../assests/vendors/images/img4.jpg" alt="Third slide" />
									</div>
								</div>
							</div>
							<div class="collapse collapse-box" id="carousel1">
								<div class="code-box">
									<div class="clearfix">
										<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#copy-carousel1"><i class="fa fa-clipboard"></i> Copy Code</a>
										<a href="#carousel1" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
									</div>
									<pre><code class="xml copy-pre" id="copy-carousel1">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="vendors/images/img2.jpg" alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img3.jpg" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img4.jpg" alt="Third slide">
		</div>
	</div>
</div>
									</code></pre>
								</div>
							</div>
						</div>
					</div>
					<!-- With controls -->
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="card-box mb-30">
							<div class="clearfix pd-20">
								<div class="pull-left">
									<h4 class="h4">With controls</h4>
								</div>
								<div class="pull-right">
									<a href="#carousel2" class="btn btn-primary btn-sm scroll-click" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
								</div>
							</div>
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="../assests/vendors/images/img2.jpg" alt="First slide" />
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="../assests/vendors/images/img3.jpg" alt="Second slide" />
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="../assests/vendors/images/img4.jpg" alt="Third slide" />
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div class="collapse collapse-box" id="carousel2">
								<div class="code-box">
									<div class="clearfix">
										<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#copy-carousel2"><i class="fa fa-clipboard"></i> Copy Code</a>
										<a href="#carousel2" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
									</div>
									<pre><code class="xml copy-pre" id="copy-carousel2">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="vendors/images/img2.jpg" alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img3.jpg" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img4.jpg" alt="Third slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
									</code></pre>
								</div>
							</div>
						</div>
					</div>
					<!-- With indicators -->
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="card-box mb-30">
							<div class="clearfix pd-20">
								<div class="pull-left">
									<h4 class="h4">With indicators</h4>
								</div>
								<div class="pull-right">
									<a href="#carousel3" class="btn btn-primary btn-sm scroll-click" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
								</div>
							</div>
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="../assests/vendors/images/img3.jpg" alt="First slide" />
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="../assests/vendors/images/img4.jpg" alt="Second slide" />
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="../assests/vendors/images/img5.jpg" alt="Third slide" />
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div class="collapse collapse-box" id="carousel3">
								<div class="code-box">
									<div class="clearfix">
										<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#copy-carousel3"><i class="fa fa-clipboard"></i> Copy Code</a>
										<a href="#carousel3" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
									</div>
									<pre><code class="xml copy-pre" id="copy-carousel3">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="vendors/images/img3.jpg" alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img4.jpg" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img5.jpg" alt="Third slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
									</code></pre>
								</div>
							</div>
						</div>
					</div>
					<!-- With captions -->
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="card-box mb-30">
							<div class="clearfix pd-20">
								<div class="pull-left">
									<h4 class="h4">With captions</h4>
								</div>
								<div class="pull-right">
									<a href="#carousel4" class="btn btn-primary btn-sm scroll-click" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
								</div>
							</div>
							<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
									<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="../assests/vendors/images/img1.jpg" alt="First slide" />
										<div class="carousel-caption d-none d-md-block">
											<h5 class="color-white">First slide label</h5>
											<p>
												Nulla vitae elit libero, a pharetra augue mollis
												interdum.
											</p>
										</div>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="../assests/vendors/images/img3.jpg" alt="Second slide" />
										<div class="carousel-caption d-none d-md-block">
											<h5 class="color-white">Second slide label</h5>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipiscing
												elit.
											</p>
										</div>
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="../assests/vendors/images/img2.jpg" alt="Third slide" />
										<div class="carousel-caption d-none d-md-block">
											<h5 class="color-white">Third slide label</h5>
											<p>
												Praesent commodo cursus magna, vel scelerisque nisl
												consectetur.
											</p>
										</div>
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<div class="collapse collapse-box" id="carousel4">
								<div class="code-box">
									<div class="clearfix">
										<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left" data-clipboard-target="#copy-carousel4"><i class="fa fa-clipboard"></i> Copy Code</a>
										<a href="#carousel4" class="btn btn-primary btn-sm pull-right" rel="content-y" data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
									</div>
									<pre><code class="xml copy-pre" id="copy-carousel4">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="vendors/images/img1.jpg" alt="First slide" />
			<div class="carousel-caption d-none d-md-block">
				<h5 class="color-white">First slide label</h5>
				<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img3.jpg" alt="Second slide" />
			<div class="carousel-caption d-none d-md-block">
				<h5 class="color-white">Second slide label</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="vendors/images/img2.jpg" alt="Third slide" />
			<div class="carousel-caption d-none d-md-block">
				<h5 class="color-white">Third slide label</h5>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
									</code></pre>
								</div>
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