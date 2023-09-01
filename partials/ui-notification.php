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

<?php include '../partials/_navbar.php' ?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="row clearfix">
				<div class="col-lg-6 col-md-6 col-sm-12 mb-30">
					<div class="pd-20 card-box height-100-p">
						<h4 class="h4">Examples</h4>
						<p class="pb-20">
							Alerts are available for any length of text, as well as an
							optional dismiss button. For proper styling, use one of the
							eight <strong>required</strong> contextual classes
							<code>(e.g., .alert-success)</code>. For inline dismissal, use
							the alerts jQuery plugin.
						</p>

						<div class="alert alert-primary" role="alert">
							This is a primary alert—check it out!
						</div>
						<div class="alert alert-secondary" role="alert">
							This is a secondary alert—check it out!
						</div>
						<div class="alert alert-success" role="alert">
							This is a success alert—check it out!
						</div>
						<div class="alert alert-danger" role="alert">
							This is a danger alert—check it out!
						</div>
						<div class="alert alert-warning" role="alert">
							This is a warning alert—check it out!
						</div>
						<div class="alert alert-info" role="alert">
							This is a info alert—check it out!
						</div>
						<div class="alert alert-light" role="alert">
							This is a light alert—check it out!
						</div>
						<div class="alert alert-dark" role="alert">
							This is a dark alert—check it out!
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 mb-30">
					<div class="pd-20 card-box height-100-p">
						<h4 class="h4">Link color</h4>
						<p class="pb-20">
							Use the <code>.alert-link</code> utility class to quickly
							provide matching colored links within any alert.
						</p>

						<div class="alert alert-primary" role="alert">
							This is a primary alert with
							<a href="#" class="alert-link">an example link</a>. Give it a
							click if you like.
						</div>
						<div class="alert alert-secondary" role="alert">
							This is a secondary alert with
							<a href="#" class="alert-link">an example link</a>. Give it a
							click if you like.
						</div>
						<div class="alert alert-success" role="alert">
							This is a success alert with
							<a href="#" class="alert-link">an example link</a>. Give it a
							click if you like.
						</div>
						<div class="alert alert-danger" role="alert">
							This is a danger alert with
							<a href="#" class="alert-link">an example link</a>. Give it a
							click if you like.
						</div>
						<div class="alert alert-warning" role="alert">
							This is a warning alert with
							<a href="#" class="alert-link">an example link</a>. Give it a
							click if you like.
						</div>
						<div class="alert alert-info" role="alert">
							This is a info alert with
							<a href="#" class="alert-link">an example link</a>. Give it a
							click if you like.
						</div>
						<div class="alert alert-light" role="alert">
							This is a light alert with
							<a href="#" class="alert-link">an example link</a>. Give it a
							click if you like.
						</div>
						<div class="alert alert-dark" role="alert">
							This is a dark alert with
							<a href="#" class="alert-link">an example link</a>. Give it a
							click if you like.
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 mb-30">
					<div class="pd-20 card-box height-100-p">
						<h4 class="h4">Dismissing</h4>
						<p class="pb-20">
							You can see this in action with a live demo:
						</p>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Holy guacamole!</strong> You should check in on some
							of those fields below.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							<strong>Holy guacamole!</strong> You should check in on some
							of those fields below.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="alert alert-primary alert-dismissible fade show" role="alert">
							<strong>Holy guacamole!</strong> You should check in on some
							of those fields below.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="alert alert-secondary alert-dismissible fade show" role="alert">
							<strong>Holy guacamole!</strong> You should check in on some
							of those fields below.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="alert alert-info alert-dismissible fade show" role="alert">
							<strong>Holy guacamole!</strong> You should check in on some
							of those fields below.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="alert alert-dark alert-dismissible fade show" role="alert">
							<strong>Holy guacamole!</strong> You should check in on some
							of those fields below.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 mb-30">
					<div class="pd-20 card-box height-100-p">
						<div class="alert alert-success" role="alert">
							<h4 class="alert-heading h4">Well done!</h4>
							<p>
								Aww yeah, you successfully read this important alert
								message. This example text is going to run a bit longer so
								that you can see how spacing within an alert works with this
								kind of content.
							</p>
							<hr />
							<p class="mb-0">
								Whenever you need to, be sure to use margin utilities to
								keep things nice and tidy.
							</p>
						</div>
						<div class="alert alert-primary" role="alert">
							<h4 class="alert-heading h4">Well done!</h4>
							<p>
								Aww yeah, you successfully read this important alert
								message. This example text is going to run a bit longer so
								that you can see how spacing within an alert works with this
								kind of content.
							</p>
							<hr />
							<p class="mb-0">
								Whenever you need to, be sure to use margin utilities to
								keep things nice and tidy.
							</p>
						</div>
						<div class="alert alert-secondary" role="alert">
							<h4 class="alert-heading h4">Well done!</h4>
							<p>
								Aww yeah, you successfully read this important alert
								message. This example text is going to run a bit longer so
								that you can see how spacing within an alert works with this
								kind of content.
							</p>
							<hr />
							<p class="mb-0">
								Whenever you need to, be sure to use margin utilities to
								keep things nice and tidy.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-wrap pd-20 mb-20 card-box">
			DeskApp - Bootstrap 4 Admin Template By
			<a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
		</div>
	</div>
</div>
<!-- welcome modal start -->

<script src="../assests/vendors/scripts/core.js"></script>
<script src="../assests/vendors/scripts/script.min.js"></script>
<script src="../assests/vendors/scripts/process.js"></script>
<script src="../assests/vendors/scripts/layout-settings.js"></script>

<!-- add sweet alert js & css in footer -->
<script src="../assests/src/plugins/sweetalert2/sweetalert2.all.js"></script>
<link rel="stylesheet" type="text/css" href="../assests/src/plugins/sweetalert2/sweetalert2.css" />
<script src="../assests/src/plugins/sweetalert2/sweet-alert.init.js"></script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>