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

<body>
	<?php include '../partials/_navbar.php' ?>
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="row clearfix">
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A basic message</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-basic">
									Click me
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A title with a text under</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-title">
									Click me
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A success message!</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-success">
									Click me
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A error message!</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-error">
									Click me
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">
								A warning message, with a function attached to the
								"Confirm"-button...
							</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-warning">
									Click me
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A custom positioned dialog</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-custom-position">
									Click me
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">
								By passing a parameter, you can execute something else for
								"Cancel".
							</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-params">
									Click me
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">
								A message with custom Image Header
							</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-image">
									Click me
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">A message with auto close timer</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="sa-close">
									Click me
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">
								Custom HTML description and buttons
							</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="custom-html-alert">
									Click me
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">
								A message with custom width, padding and background
							</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="custom-padding-width-alert">
									Click me
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">Ajax request example</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="ajax-alert">
									Click me
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">Chaining modals (queue) example</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="chaining-alert">
									Click me
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box text-center height-100-p">
							<h5 class="pt-20 h5 mb-30">Dynamic queue example</h5>
							<div class="max-width-200 mx-auto">
								<button type="button" class="btn mb-20 btn-primary btn-block" id="dynamic-alert">
									Click me
								</button>
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

	<!-- add sweet alert js & css in footer -->
	<script src="../assests/src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<script src="../assests/src/plugins/sweetalert2/sweet-alert.init.js"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>