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
	<link rel="apple-touch-icon" sizes="180x180" href="../assests/../assests/vendors/images/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="../assests/../assests/vendors/images/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="../assests/../assests/vendors/images/favicon-16x16.png" />

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
				<!-- Fade-in effect -->
				<h5 class="h4 text-blue mb-10">Fade-in effect</h5>
				<p class="mb-30">You can use by default <code>.da-overlay</code></p>
				<div class="row clearfix">
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo1.jpg" alt="" />
								<div class="da-overlay">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo2.jpg" alt="" />
								<div class="da-overlay">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo3.jpg" alt="" />
								<div class="da-overlay">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo4.jpg" alt="" />
								<div class="da-overlay">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide Left effect -->
				<h5 class="h4 text-blue mb-10">Slide Left effect</h5>
				<p class="mb-30">
					You can use by default <code>.da-overlay .da-slide-left</code>
				</p>
				<div class="row clearfix">
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo1.jpg" alt="" />
								<div class="da-overlay da-slide-left">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo2.jpg" alt="" />
								<div class="da-overlay da-slide-left">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo3.jpg" alt="" />
								<div class="da-overlay da-slide-left">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo4.jpg" alt="" />
								<div class="da-overlay da-slide-left">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide Right effect -->
				<h5 class="h4 text-blue mb-10">Slide Right effect</h5>
				<p class="mb-30">
					You can use by default <code>.da-overlay .da-slide-right</code>
				</p>
				<div class="row clearfix">
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo1.jpg" alt="" />
								<div class="da-overlay da-slide-right">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo2.jpg" alt="" />
								<div class="da-overlay da-slide-right">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo3.jpg" alt="" />
								<div class="da-overlay da-slide-right">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo4.jpg" alt="" />
								<div class="da-overlay da-slide-right">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide Top effect -->
				<h5 class="h4 text-blue mb-10">Slide Top effect</h5>
				<p class="mb-30">
					You can use by default <code>.da-overlay .da-slide-top</code>
				</p>
				<div class="row clearfix">
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo1.jpg" alt="" />
								<div class="da-overlay da-slide-top">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo2.jpg" alt="" />
								<div class="da-overlay da-slide-top">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo3.jpg" alt="" />
								<div class="da-overlay da-slide-top">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo4.jpg" alt="" />
								<div class="da-overlay da-slide-top">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide Bottom effect -->
				<h5 class="h4 text-blue mb-10">Slide Bottom effect</h5>
				<p class="mb-30">
					You can use by default <code>.da-overlay .da-slide-bottom</code>
				</p>
				<div class="row clearfix">
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo1.jpg" alt="" />
								<div class="da-overlay da-slide-bottom">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo2.jpg" alt="" />
								<div class="da-overlay da-slide-bottom">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo3.jpg" alt="" />
								<div class="da-overlay da-slide-bottom">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
						<div class="da-card">
							<div class="da-card-photo">
								<img src="../assests/vendors/images/photo4.jpg" alt="" />
								<div class="da-overlay da-slide-bottom">
									<div class="da-social">
										<ul class="clearfix">
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="da-card-content">
								<h5 class="h5 mb-10">Don H. Rabon</h5>
								<p class="mb-0">Lorem ipsum dolor sit amet</p>
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