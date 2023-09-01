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
    <link rel="stylesheet" type="text/css" href="../assests/vendors/styles/style.css" />

</head>

<body>

	<?php include '../partials/_navbar.php' ?>

	<div class="main-container">
		<div class="pd-ltr-20 height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="blog-wrap">
					<div class="container pd-0">
						<div class="row">
							<div class="col-md-8 col-sm-12">
								<div class="blog-list">
									<ul>
										<li>
											<div class="row no-gutters">
												<div class="col-lg-4 col-md-12 col-sm-12">
													<div class="blog-img">
														<img src="../assests/vendors/images/img2.jpg" alt="" class="bg_img" />
													</div>
												</div>
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="blog-caption">
														<h4>
															<a href="#">Lorem ipsum dolor sit amet, consectetur
																adipisicing elit</a>
														</h4>
														<div class="blog-by">
															<p>
																Lorem ipsum dolor sit amet, consectetur
																adipisicing elit, sed do eiusmod tempor
																incididunt ut labore et dolore magna aliqua.
																Ut enim ad minim veniam, quis nostrud
																exercitation ullamco laboris nisi ut aliquip
																ex ea commodo
															</p>
															<div class="pt-10">
																<a href="#" class="btn btn-outline-primary">Read More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="row no-gutters">
												<div class="col-lg-4 col-md-12 col-sm-12">
													<div class="blog-img">
														<img src="../assests/vendors/images/img3.jpg" alt="" class="bg_img" />
													</div>
												</div>
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="blog-caption">
														<h4>
															<a href="#">Lorem ipsum dolor sit amet, consectetur
																adipisicing elit</a>
														</h4>
														<div class="blog-by">
															<p>
																Lorem ipsum dolor sit amet, consectetur
																adipisicing elit, sed do eiusmod tempor
																incididunt ut labore et dolore magna aliqua.
																Ut enim ad minim veniam, quis nostrud
																exercitation ullamco laboris nisi ut aliquip
																ex ea commodo
															</p>
															<div class="pt-10">
																<a href="#" class="btn btn-outline-primary">Read More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="row no-gutters">
												<div class="col-lg-4 col-md-12 col-sm-12">
													<div class="blog-img">
														<img src="../assests/vendors/images/img4.jpg" alt="" class="bg_img" />
													</div>
												</div>
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="blog-caption">
														<h4>
															<a href="#">Lorem ipsum dolor sit amet, consectetur
																adipisicing elit</a>
														</h4>
														<div class="blog-by">
															<p>
																Lorem ipsum dolor sit amet, consectetur
																adipisicing elit, sed do eiusmod tempor
																incididunt ut labore et dolore magna aliqua.
																Ut enim ad minim veniam, quis nostrud
																exercitation ullamco laboris nisi ut aliquip
																ex ea commodo
															</p>
															<div class="pt-10">
																<a href="#" class="btn btn-outline-primary">Read More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="row no-gutters">
												<div class="col-lg-4 col-md-12 col-sm-12">
													<div class="blog-img">
														<img src="../assests/vendors/images/img5.jpg" alt="" class="bg_img" />
													</div>
												</div>
												<div class="col-lg-8 col-md-12 col-sm-12">
													<div class="blog-caption">
														<h4>
															<a href="#">Lorem ipsum dolor sit amet, consectetur
																adipisicing elit</a>
														</h4>
														<div class="blog-by">
															<p>
																Lorem ipsum dolor sit amet, consectetur
																adipisicing elit, sed do eiusmod tempor
																incididunt ut labore et dolore magna aliqua.
																Ut enim ad minim veniam, quis nostrud
																exercitation ullamco laboris nisi ut aliquip
																ex ea commodo
															</p>
															<div class="pt-10">
																<a href="#" class="btn btn-outline-primary">Read More</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="blog-pagination">
									<div class="btn-toolbar justify-content-center mb-15">
										<div class="btn-group">
											<a href="#" class="btn btn-outline-primary prev"><i class="fa fa-angle-double-left"></i></a>
											<a href="#" class="btn btn-outline-primary">1</a>
											<a href="#" class="btn btn-outline-primary">2</a>
											<span class="btn btn-primary current">3</span>
											<a href="#" class="btn btn-outline-primary">4</a>
											<a href="#" class="btn btn-outline-primary">5</a>
											<a href="#" class="btn btn-outline-primary next"><i class="fa fa-angle-double-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="card-box mb-30">
									<h5 class="pd-20 h5 mb-0">Categories</h5>
									<div class="list-group">
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">HTML
											<span class="badge badge-primary badge-pill">7</span></a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">Css
											<span class="badge badge-primary badge-pill">10</span></a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between active">Bootstrap
											<span class="badge badge-primary badge-pill">8</span></a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">jQuery
											<span class="badge badge-primary badge-pill">15</span></a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">Design
											<span class="badge badge-primary badge-pill">5</span></a>
									</div>
								</div>
								<div class="card-box mb-30">
									<h5 class="pd-20 h5 mb-0">Latest Post</h5>
									<div class="latest-post">
										<ul>
											<li>
												<h4>
													<a href="#">Ut enim ad minim veniam, quis nostrud
														exercitation ullamco</a>
												</h4>
												<span>HTML</span>
											</li>
											<li>
												<h4>
													<a href="#">Lorem ipsum dolor sit amet, consectetur
														adipisicing elit</a>
												</h4>
												<span>Css</span>
											</li>
											<li>
												<h4>
													<a href="#">Ut enim ad minim veniam, quis nostrud
														exercitation ullamco</a>
												</h4>
												<span>jQuery</span>
											</li>
											<li>
												<h4>
													<a href="#">Lorem ipsum dolor sit amet, consectetur
														adipisicing elit</a>
												</h4>
												<span>Bootstrap</span>
											</li>
											<li>
												<h4>
													<a href="#">Lorem ipsum dolor sit amet, consectetur
														adipisicing elit</a>
												</h4>
												<span>Design</span>
											</li>
										</ul>
									</div>
								</div>
								<div class="card-box overflow-hidden">
									<h5 class="pd-20 h5 mb-0">Archives</h5>
									<div class="list-group">
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">January 2020</a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">February 2020</a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">March 2020</a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">April 2020</a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">May 2020</a>
									</div>
								</div>
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
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>