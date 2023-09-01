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
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="product-wrap">
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
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img">
										<img src="../assests/vendors/images/product-img4.jpg" alt="" />
									</div>
									<div class="product-caption">
										<h4><a href="#">Apple Watch Series 3</a></h4>
										<div class="price">
											<ins>$380</ins>
										</div>
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
										<img src="../assests/vendors/images/product-img4.jpg" alt="" />
									</div>
									<div class="product-caption">
										<h4><a href="#">Apple Watch Series 3</a></h4>
										<div class="price">
											<ins>$380</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Read More</a>
									</div>
								</div>
							</li>
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
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img">
										<img src="../assests/vendors/images/product-img4.jpg" alt="" />
									</div>
									<div class="product-caption">
										<h4><a href="#">Apple Watch Series 3</a></h4>
										<div class="price">
											<ins>$380</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Read More</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="blog-pagination mb-30">
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