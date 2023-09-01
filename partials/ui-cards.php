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
				<div class="row clearfix">
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card card-box">
							<img class="card-img-top" src="../assests/vendors/images/img2.jpg" alt="Card image cap" />
							<div class="card-body">
								<h5 class="card-title weight-500">Card title</h5>
								<p class="card-text">
									Some quick example text to build on the card title and make
									up the bulk of the card's content.
								</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card card-box">
							<img class="card-img-top" src="../assests/vendors/images/img3.jpg" alt="Card image cap" />
							<div class="card-body">
								<h5 class="card-title weight-500">Card title</h5>
								<p class="card-text">
									Some quick example text to build on the card title and make
									up the bulk of the card's content.
								</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">Cras justo odio</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item">Vestibulum at eros</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card card-box">
							<div class="card-body">
								<h5 class="card-title weight-500">Card title</h5>
								<p class="card-text">
									Some quick example text to build on the card title and make
									up the bulk of the card's content.
								</p>
							</div>
							<img class="card-img-top" src="../assests/vendors/images/img1.jpg" alt="Card image cap" />
							<div class="card-body">
								<p class="card-text">
									Some quick example text to build on the card title and make
									up the bulk of the card's content.
								</p>
								<a href="#" class="card-link text-primary">Card link</a>
								<a href="#" class="card-link text-primary">Another link</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="card card-box">
							<img class="card-img-top" src="../assests/vendors/images/img4.jpg" alt="Card image cap" />
							<div class="card-body">
								<p class="card-text">
									Some quick example text to build on the card title and make
									up the bulk of the card's content. Some quick example text
									to build on the card title and make up the bulk of the
									card's content.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-sm-12 col-md-4 mb-30">
						<div class="card card-box">
							<h5 class="card-header weight-500">Featured</h5>
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">
									With supporting text below as a natural lead-in to
									additional content.
								</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
							<div class="card-footer text-muted">2 days ago</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 mb-30">
						<div class="card card-box">
							<div class="card-header">Quote</div>
							<div class="card-body">
								<blockquote class="blockquote mb-0">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Integer posuere erat a ante.
									</p>
									<footer class="blockquote-footer">
										Someone famous in
										<cite title="Source Title">Source Title</cite>
									</footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 mb-30">
						<div class="card card-box">
							<div class="card-header">Featured</div>
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">
									With supporting text below as a natural lead-in to
									additional content.
								</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-sm-12 col-md-12 col-lg-4 mb-30">
						<div class="card card-box">
							<img class="card-img-top" src="../assests/vendors/images/img4.jpg" alt="Card image cap" />
							<div class="card-body">
								<h5 class="card-title weight-500">Card title</h5>
								<p class="card-text">
									This is a wider card with supporting text below as a natural
									lead-in to additional content. This content is a little bit
									longer.
								</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-4 mb-30">
						<div class="card bg-dark card-box">
							<img class="card-img" src="../assests/vendors/images/img1.jpg" alt="Card image" />
							<div class="card-img-overlay">
								<h5 class="card-title weight-500">Card title</h5>
								<p class="card-text">
									This is a wider card with supporting text below as a natural
									lead-in.
								</p>
								<p class="card-text">Last updated 3 mins ago</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-4 mb-30">
						<div class="card card-box">
							<div class="card-body">
								<h5 class="card-title weight-500">Card title</h5>
								<p class="card-text">
									This is a wider card with supporting text below as a natural
									lead-in to additional content. This content is a little bit
									longer.
								</p>
								<p class="card-text">
									<small class="text-muted">Last updated 3 mins ago</small>
								</p>
							</div>
							<img class="card-img-bottom" src="../assests/vendors/images/img5.jpg" alt="Card image cap" />
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-sm-12 col-md-4 mb-30">
						<div class="card card-box">
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">
									With supporting text below as a natural lead-in to
									additional content.
								</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 mb-30">
						<div class="card card-box text-center">
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">
									With supporting text below as a natural lead-in to
									additional content.
								</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4 mb-30">
						<div class="card card-box text-right">
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">
									With supporting text below as a natural lead-in to
									additional content.
								</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
				</div>
				<h4 class="h4 text-blue mb-30">Navigation</h4>
				<div class="row clearfix">
					<div class="col-sm-12 col-md-6 mb-30">
						<div class="card card-box text-center">
							<div class="card-header">
								<ul class="nav nav-tabs card-header-tabs">
									<li class="nav-item">
										<a class="nav-link active" href="#">Active</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled" href="#">Disabled</a>
									</li>
								</ul>
							</div>
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">
									With supporting text below as a natural lead-in to
									additional content.
								</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 mb-30">
						<div class="card card-box">
							<div class="card-header">
								<ul class="nav nav-pills card-header-pills">
									<li class="nav-item">
										<a class="nav-link active" href="#">Active</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Link</a>
									</li>
									<li class="nav-item">
										<a class="nav-link disabled" href="#">Disabled</a>
									</li>
								</ul>
							</div>
							<div class="card-body">
								<h5 class="card-title">Special title treatment</h5>
								<p class="card-text">
									With supporting text below as a natural lead-in to
									additional content.
								</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>
					</div>
				</div>
				<h4 class="h4 text-blue mb-30">Background and color</h4>
				<div class="row clearfix">
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-white bg-primary card-box">
							<div class="card-header">Header</div>
							<div class="card-body">
								<h5 class="card-title text-white">Primary card title</h5>
								<p class="card-text">
									Some quick example text to build on the card title and make
									up the bulk of the card's content.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-white bg-secondary card-box">
							<div class="card-header">Header</div>
							<div class="card-body">
								<h5 class="card-title text-white">Secondary card title</h5>
								<p class="card-text">
									Some quick example text to build on the card title and make
									up the bulk of the card's content.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-white bg-success card-box">
							<div class="card-header">Header</div>
							<div class="card-body">
								<h5 class="card-title text-white">Success card title</h5>
								<p class="card-text">
									Some quick example text to build on the card title and make
									up the bulk of the card's content.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-black bg-warning card-box">
							<div class="card-header">Header</div>
							<div class="card-body">
								<h5 class="card-title">Warning card title</h5>
								<p class="card-text">
									Some quick example text to build on the card title and make
									up the bulk of the card's content.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-white bg-info card-box">
							<div class="card-header">Header</div>
							<div class="card-body">
								<h5 class="card-title text-white">Info card title</h5>
								<p class="card-text">
									Some quick example text to build on the card title and make
									up the bulk of the card's content.
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 mb-30">
						<div class="card text-white bg-dark card-box">
							<div class="card-header">Header</div>
							<div class="card-body">
								<h5 class="card-title text-white">Dark card title</h5>
								<p class="card-text">
									Some quick example text to build on the card title and make
									up the bulk of the card's content.
								</p>
							</div>
						</div>
					</div>
				</div>
				<h4 class="h4 text-blue mb-30">Card groups</h4>
				<div class="card-group mb-30">
					<div class="card card-box">
						<img class="card-img-top" src="../assests/vendors/images/img3.jpg" alt="Card image cap" />
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">
								This is a wider card with supporting text below as a natural
								lead-in to additional content. This content is a little bit
								longer.
							</p>
							<p class="card-text">
								<small class="text-muted">Last updated 3 mins ago</small>
							</p>
						</div>
					</div>
					<div class="card card-box">
						<img class="card-img-top" src="../assests/vendors/images/img4.jpg" alt="Card image cap" />
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">
								This card has supporting text below as a natural lead-in to
								additional content.
							</p>
							<p class="card-text">
								<small class="text-muted">Last updated 3 mins ago</small>
							</p>
						</div>
					</div>
					<div class="card card-box">
						<img class="card-img-top" src="../assests/vendors/images/img2.jpg" alt="Card image cap" />
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">
								This is a wider card with supporting text below as a natural
								lead-in to additional content. This card has even longer
								content than the first to show that equal height action.
							</p>
							<p class="card-text">
								<small class="text-muted">Last updated 3 mins ago</small>
							</p>
						</div>
					</div>
				</div>
				<h4 class="h4 text-blue mb-30">Card decks</h4>
				<div class="card-deck mb-30">
					<div class="card">
						<img class="card-img-top" src="../assests/vendors/images/img2.jpg" alt="Card image cap" />
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">
								This is a longer card with supporting text below as a natural
								lead-in to additional content. This content is a little bit
								longer.
							</p>
							<p class="card-text">
								<small class="text-muted">Last updated 3 mins ago</small>
							</p>
						</div>
					</div>
					<div class="card">
						<img class="card-img-top" src="../assests/vendors/images/img3.jpg" alt="Card image cap" />
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">
								This card has supporting text below as a natural lead-in to
								additional content.
							</p>
							<p class="card-text">
								<small class="text-muted">Last updated 3 mins ago</small>
							</p>
						</div>
					</div>
					<div class="card">
						<img class="card-img-top" src="../assests/vendors/images/img4.jpg" alt="Card image cap" />
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">
								This is a wider card with supporting text below as a natural
								lead-in to additional content. This card has even longer
								content than the first to show that equal height action.
							</p>
							<p class="card-text">
								<small class="text-muted">Last updated 3 mins ago</small>
							</p>
						</div>
					</div>
				</div>
				<h4 class="h4 text-blue mb-30">Card columns</h4>
				<div class="card-columns mb-30">
					<div class="card card-box">
						<img class="card-img-top" src="../assests/vendors/images/img1.jpg" alt="Card image cap" />
						<div class="card-body">
							<h5 class="card-title">Card title that wraps to a new line</h5>
							<p class="card-text">
								This is a longer card with supporting text below as a natural
								lead-in to additional content. This content is a little bit
								longer.
							</p>
						</div>
					</div>
					<div class="card card-box p-3">
						<blockquote class="blockquote mb-0 card-body">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Integer posuere erat a ante.
							</p>
							<footer class="blockquote-footer">
								<small class="text-muted">
									Someone famous in
									<cite title="Source Title">Source Title</cite>
								</small>
							</footer>
						</blockquote>
					</div>
					<div class="card card-box">
						<img class="card-img-top" src="../assests/vendors/images/img2.jpg" alt="Card image cap" />
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">
								This card has supporting text below as a natural lead-in to
								additional content.
							</p>
							<p class="card-text">
								<small class="text-muted">Last updated 3 mins ago</small>
							</p>
						</div>
					</div>
					<div class="card card-box bg-primary text-white text-center p-3">
						<blockquote class="blockquote mb-0">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Integer posuere erat.
							</p>
							<footer class="blockquote-footer">
								<small class="text-white">
									Someone famous in
									<cite title="Source Title">Source Title</cite>
								</small>
							</footer>
						</blockquote>
					</div>
					<div class="card card-box text-center">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">
								This card has supporting text below as a natural lead-in to
								additional content.
							</p>
							<p class="card-text">
								<small class="text-muted">Last updated 3 mins ago</small>
							</p>
						</div>
					</div>
					<div class="card card-box">
						<img class="card-img" src="../assests/vendors/images/img3.jpg" alt="Card image" />
					</div>
					<div class="card card-box p-3 text-right">
						<blockquote class="blockquote mb-0">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Integer posuere erat a ante.
							</p>
							<footer class="blockquote-footer">
								<small class="text-muted">
									Someone famous in
									<cite title="Source Title">Source Title</cite>
								</small>
							</footer>
						</blockquote>
					</div>
					<div class="card card-box">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">
								This is a wider card with supporting text below as a natural
								lead-in to additional content. This card has even longer
								content than the first to show that equal height action.
							</p>
							<p class="card-text">
								<small class="text-muted">Last updated 3 mins ago</small>
							</p>
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