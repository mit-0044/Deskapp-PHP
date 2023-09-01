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
				<div class="container pd-0">
					<div class="contact-directory-list">
						<ul class="row">
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="../assests/vendors/images/photo2.jpg" alt="" />
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success">
												<i class="ion-android-person"></i> Freelancer
											</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="../assests/vendors/images/photo2.jpg" alt="" />
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success">
												<i class="ion-android-person"></i> Freelancer
											</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="../assests/vendors/images/photo2.jpg" alt="" />
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success">
												<i class="ion-android-person"></i> Freelancer
											</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="../assests/vendors/images/photo2.jpg" alt="" />
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success">
												<i class="ion-android-person"></i> Freelancer
											</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="../assests/vendors/images/photo2.jpg" alt="" />
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success">
												<i class="ion-android-person"></i> Freelancer
											</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="../assests/vendors/images/photo2.jpg" alt="" />
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success">
												<i class="ion-android-person"></i> Freelancer
											</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="../assests/vendors/images/photo2.jpg" alt="" />
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success">
												<i class="ion-android-person"></i> Freelancer
											</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="../assests/vendors/images/photo2.jpg" alt="" />
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success">
												<i class="ion-android-person"></i> Freelancer
											</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
									</div>
								</div>
							</li>
							<li class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
								<div class="contact-directory-box">
									<div class="contact-dire-info text-center">
										<div class="contact-avatar">
											<span>
												<img src="../assests/vendors/images/photo2.jpg" alt="" />
											</span>
										</div>
										<div class="contact-name">
											<h4>Wade Wilson</h4>
											<p>UI/UX designer</p>
											<div class="work text-success">
												<i class="ion-android-person"></i> Freelancer
											</div>
										</div>
										<div class="contact-skill">
											<span class="badge badge-pill">UI</span>
											<span class="badge badge-pill">UX</span>
											<span class="badge badge-pill">Photoshop</span>
											<span class="badge badge-pill badge-primary">+ 8</span>
										</div>
										<div class="profile-sort-desc">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											magna aliqua.
										</div>
									</div>
									<div class="view-contact">
										<a href="#">View Profile</a>
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
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>