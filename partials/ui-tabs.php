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
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h4 text-blue mb-20">Default Tab</h5>
							<div class="tab">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active text-blue" data-toggle="tab" href="#home" role="tab" aria-selected="true">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#contact" role="tab" aria-selected="false">Contact</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="home" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu
											fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit
											anim id est laborum.
										</div>
									</div>
									<div class="tab-pane fade" id="profile" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu
											fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit
											anim id est laborum.
										</div>
									</div>
									<div class="tab-pane fade" id="contact" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu
											fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit
											anim id est laborum.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h4 text-blue mb-20">Customtab Tab</h5>
							<div class="tab">
								<ul class="nav nav-tabs customtab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#home2" role="tab" aria-selected="true">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#profile2" role="tab" aria-selected="false">Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#contact2" role="tab" aria-selected="false">Contact</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="home2" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu
											fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit
											anim id est laborum.
										</div>
									</div>
									<div class="tab-pane fade" id="profile2" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu
											fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit
											anim id est laborum.
										</div>
									</div>
									<div class="tab-pane fade" id="contact2" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu
											fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit
											anim id est laborum.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h4 text-blue mb-20">vertical Tab</h5>
							<div class="tab">
								<div class="row clearfix">
									<div class="col-md-3 col-sm-12">
										<ul class="nav flex-column vtabs nav-tabs" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#home3" role="tab" aria-selected="true">Home</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#profile3" role="tab" aria-selected="false">Profile</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#contact3" role="tab" aria-selected="false">Contact</a>
											</li>
										</ul>
									</div>
									<div class="col-md-9 col-sm-12">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="home3" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua. Ut enim ad minim veniam, quis
													nostrud exercitation ullamco laboris nisi ut aliquip
													ex ea commodo consequat. Duis aute irure dolor in
													reprehenderit in voluptate velit esse cillum dolore
													eu fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia
													deserunt mollit anim id est laborum.
												</div>
											</div>
											<div class="tab-pane fade" id="profile3" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua. Ut enim ad minim veniam, quis
													nostrud exercitation ullamco laboris nisi ut aliquip
													ex ea commodo consequat. Duis aute irure dolor in
													reprehenderit in voluptate velit esse cillum dolore
													eu fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia
													deserunt mollit anim id est laborum.
												</div>
											</div>
											<div class="tab-pane fade" id="contact3" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua. Ut enim ad minim veniam, quis
													nostrud exercitation ullamco laboris nisi ut aliquip
													ex ea commodo consequat. Duis aute irure dolor in
													reprehenderit in voluptate velit esse cillum dolore
													eu fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia
													deserunt mollit anim id est laborum.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h4 text-blue mb-20">Custom vertical Tab</h5>
							<div class="tab">
								<div class="row clearfix">
									<div class="col-md-3 col-sm-12">
										<ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#home4" role="tab" aria-selected="true">Home</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#profile4" role="tab" aria-selected="false">Profile</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#contact4" role="tab" aria-selected="false">Contact</a>
											</li>
										</ul>
									</div>
									<div class="col-md-9 col-sm-12">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="home4" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua. Ut enim ad minim veniam, quis
													nostrud exercitation ullamco laboris nisi ut aliquip
													ex ea commodo consequat. Duis aute irure dolor in
													reprehenderit in voluptate velit esse cillum dolore
													eu fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia
													deserunt mollit anim id est laborum.
												</div>
											</div>
											<div class="tab-pane fade" id="profile4" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua. Ut enim ad minim veniam, quis
													nostrud exercitation ullamco laboris nisi ut aliquip
													ex ea commodo consequat. Duis aute irure dolor in
													reprehenderit in voluptate velit esse cillum dolore
													eu fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia
													deserunt mollit anim id est laborum.
												</div>
											</div>
											<div class="tab-pane fade" id="contact4" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua. Ut enim ad minim veniam, quis
													nostrud exercitation ullamco laboris nisi ut aliquip
													ex ea commodo consequat. Duis aute irure dolor in
													reprehenderit in voluptate velit esse cillum dolore
													eu fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia
													deserunt mollit anim id est laborum.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h4 text-blue mb-20">Nav Pills Tabs</h5>
							<div class="tab">
								<ul class="nav nav-pills" role="tablist">
									<li class="nav-item">
										<a class="nav-link active text-blue" data-toggle="tab" href="#home5" role="tab" aria-selected="true">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#profile5" role="tab" aria-selected="false">Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#contact5" role="tab" aria-selected="false">Contact</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="home5" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu
											fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit
											anim id est laborum.
										</div>
									</div>
									<div class="tab-pane fade" id="profile5" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu
											fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit
											anim id est laborum.
										</div>
									</div>
									<div class="tab-pane fade" id="contact5" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu
											fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit
											anim id est laborum.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h4 text-blue mb-20">Nav Pills Tabs Right</h5>
							<div class="tab">
								<ul class="nav nav-pills justify-content-end" role="tablist">
									<li class="nav-item">
										<a class="nav-link active text-blue" data-toggle="tab" href="#home6" role="tab" aria-selected="true">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#profile6" role="tab" aria-selected="false">Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#contact6" role="tab" aria-selected="false">Contact</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="home6" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu
											fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit
											anim id est laborum.
										</div>
									</div>
									<div class="tab-pane fade" id="profile6" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu
											fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit
											anim id est laborum.
										</div>
									</div>
									<div class="tab-pane fade" id="contact6" role="tabpanel">
										<div class="pd-20">
											Lorem ipsum dolor sit amet, consectetur adipisicing
											elit, sed do eiusmod tempor incididunt ut labore et
											dolore magna aliqua. Ut enim ad minim veniam, quis
											nostrud exercitation ullamco laboris nisi ut aliquip ex
											ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu
											fugiat nulla pariatur. Excepteur sint occaecat cupidatat
											non proident, sunt in culpa qui officia deserunt mollit
											anim id est laborum.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h4 text-blue mb-20">Icons vertical Nav Pills Tab</h5>
							<div class="tab">
								<div class="row clearfix">
									<div class="col-md-3 col-sm-12">
										<ul class="nav flex-column nav-pills vtabs" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#home7" role="tab" aria-selected="true"><i class="fa fa-home"></i></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#profile7" role="tab" aria-selected="false"><i class="fa fa-users"></i></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#contact7" role="tab" aria-selected="false"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
									<div class="col-md-9 col-sm-12">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="home7" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua. Ut enim ad minim veniam, quis
													nostrud exercitation ullamco laboris nisi ut aliquip
													ex ea commodo consequat. Duis aute irure dolor in
													reprehenderit in voluptate velit esse cillum dolore
													eu fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia
													deserunt mollit anim id est laborum.
												</div>
											</div>
											<div class="tab-pane fade" id="profile7" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua. Ut enim ad minim veniam, quis
													nostrud exercitation ullamco laboris nisi ut aliquip
													ex ea commodo consequat. Duis aute irure dolor in
													reprehenderit in voluptate velit esse cillum dolore
													eu fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia
													deserunt mollit anim id est laborum.
												</div>
											</div>
											<div class="tab-pane fade" id="contact7" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua. Ut enim ad minim veniam, quis
													nostrud exercitation ullamco laboris nisi ut aliquip
													ex ea commodo consequat. Duis aute irure dolor in
													reprehenderit in voluptate velit esse cillum dolore
													eu fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia
													deserunt mollit anim id est laborum.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box">
							<h5 class="h4 text-blue mb-20">Icons vertical Tab</h5>
							<div class="tab">
								<div class="row clearfix">
									<div class="col-md-3 col-sm-12">
										<ul class="nav flex-column nav-tabs vtabs" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#home8" role="tab" aria-selected="true"><i class="fa fa-home"></i></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#profile8" role="tab" aria-selected="false"><i class="fa fa-users"></i></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#contact8" role="tab" aria-selected="false"><i class="fa fa-envelope-o"></i></a>
											</li>
										</ul>
									</div>
									<div class="col-md-9 col-sm-12">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="home8" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua. Ut enim ad minim veniam, quis
													nostrud exercitation ullamco laboris nisi ut aliquip
													ex ea commodo consequat. Duis aute irure dolor in
													reprehenderit in voluptate velit esse cillum dolore
													eu fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia
													deserunt mollit anim id est laborum.
												</div>
											</div>
											<div class="tab-pane fade" id="profile8" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua. Ut enim ad minim veniam, quis
													nostrud exercitation ullamco laboris nisi ut aliquip
													ex ea commodo consequat. Duis aute irure dolor in
													reprehenderit in voluptate velit esse cillum dolore
													eu fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia
													deserunt mollit anim id est laborum.
												</div>
											</div>
											<div class="tab-pane fade" id="contact8" role="tabpanel">
												<div class="pd-20">
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua. Ut enim ad minim veniam, quis
													nostrud exercitation ullamco laboris nisi ut aliquip
													ex ea commodo consequat. Duis aute irure dolor in
													reprehenderit in voluptate velit esse cillum dolore
													eu fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia
													deserunt mollit anim id est laborum.
												</div>
											</div>
										</div>
									</div>
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