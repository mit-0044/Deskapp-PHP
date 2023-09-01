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
    <link rel="apple-touch-icon" sizes="180x180" href="../partials/../assests/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../partials/../assests/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../partials/../assests/vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="../partials/https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../partials/../assests/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="../partials/../assests/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="../partials/../assests/vendors/styles/style.css" />

</head>

<body>
	<?php include '../partials/_navbar.php' ?>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="mb-30">
					<div class="pb-20">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-12">
								<div class="sitemap">
									<h5 class="h5">Home</h5>
									<ul>
										<li><a href="../partials/index.php">Dashboard style 1</a></li>
										<li><a href="../partials/index2.php">Dashboard style 2</a></li>
									</ul>
								</div>
								<div class="sitemap">
									<h5 class="h5">Forms</h5>
									<ul>
										<li><a href="../partials/form-basic.php">Form Basic</a></li>
										<li>
											<a href="../partials/advanced-components.php">Advanced Components</a>
										</li>
										<li><a href="../partials/form-wizard.php">Form Wizard</a></li>
										<li><a href="../partials/html5-editor.php">HTML5 Editor</a></li>
										<li><a href="../partials/form-pickers.php">Form Pickers</a></li>
										<li><a href="../partials/image-cropper.php">Image Cropper</a></li>
										<li><a href="../partials/image-dropzone.php">Image Dropzone</a></li>
									</ul>
								</div>
								<div class="sitemap">
									<h5 class="h5">Invoice</h5>
									<ul>
										<li><a href="../partials/invoice.php">Invoice</a></li>
									</ul>
								</div>
								<div class="sitemap">
									<h5 class="h5">Chat Module</h5>
									<ul>
										<li><a href="../partials/chat.php">Chat</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">
								<div class="sitemap">
									<h5 class="h5">Tables</h5>
									<ul>
										<li><a href="../partials/basic-table.php">Basic Tables</a></li>
										<li><a href="../partials/datatable.php">DataTables</a></li>
									</ul>
								</div>
								<div class="sitemap">
									<h5 class="h5">Calendar</h5>
									<ul>
										<li><a href="../partials/calendar.php">Calendar</a></li>
									</ul>
								</div>
								<div class="sitemap">
									<h5 class="h5">Icons</h5>
									<ul>
										<li><a href="../partials/bootstrap-icon.php">Bootstrap Icons</a></li>
										<li><a href="../partials/font-awesome.php">FontAwesome Icons</a></li>
										<li><a href="../partials/foundation.php">Foundation Icons</a></li>
										<li><a href="../partials/ionicons.php">Ionicons Icons</a></li>
										<li><a href="../partials/themify.php">Themify Icons</a></li>
									</ul>
								</div>
								<div class="sitemap">
									<h5 class="h5">Charts</h5>
									<ul>
										<li><a href="../partials/highchart.php">Highchart</a></li>
										<li><a href="../partials/knob-chart.php">jQuery Knob</a></li>
										<li><a href="../partials/jvectormap.php">jvectormap</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">
								<div class="sitemap">
									<h5 class="h5">UI Elements</h5>
									<ul>
										<li><a href="../partials/ui-buttons.php">Buttons</a></li>
										<li><a href="../partials/ui-cards.php">Cards</a></li>
										<li><a href="../partials/ui-cards-hover.php">Cards Hover</a></li>
										<li><a href="../partials/ui-modals.php">Modals</a></li>
										<li><a href="../partials/ui-tabs.php">Tabs</a></li>
										<li>
											<a href="../partials/ui-tooltip-popover.php">Tooltip &amp; Popover</a>
										</li>
										<li><a href="../partials/ui-sweet-alert.php">Sweet Alert</a></li>
										<li><a href="../partials/ui-notification.php">Notification</a></li>
										<li><a href="../partials/ui-timeline.php">Timeline</a></li>
										<li><a href="../partials/ui-progressbar.php">Progressbar</a></li>
										<li><a href="../partials/ui-typography.php">Typography</a></li>
										<li><a href="../partials/ui-list-group.php">List group</a></li>
										<li><a href="../partials/ui-range-slider.php">Range slider</a></li>
										<li><a href="../partials/ui-carousel.php">Carousel</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">
								<div class="sitemap">
									<h5 class="h5">Additional Pages</h5>
									<ul>
										<li><a href="../partials/video-player.php">Video Player</a></li>
										<li><a href="../partials/login.php">Login</a></li>
										<li>
											<a href="../partials/forgot-password.php">Forgot Password</a>
										</li>
										<li><a href="../partials/reset-password.php">Reset Password</a></li>
										<li><a href="../partials/403.php">403</a></li>
										<li><a href="../partials/404.php">404</a></li>
										<li><a href="../partials/500.php">500</a></li>
									</ul>
								</div>
								<div class="sitemap">
									<h5 class="h5">Extra Pages</h5>
									<ul>
										<li><a href="../partials/blank.php">Blank</a></li>
										<li>
											<a href="../partials/contact-directory.php">Contact Directory</a>
										</li>
										<li><a href="../partials/blog.php">Blog</a></li>
										<li><a href="../partials/blog-detail.php">Blog Detail</a></li>
										<li><a href="../partials/product.php">Product</a></li>
										<li><a href="../partials/product-detail.php">Product Detail</a></li>
										<li><a href="../partials/faq.php">FAQ</a></li>
										<li><a href="../partials/profile.php">Profile</a></li>
										<li><a href="../partials/gallery.php">Gallery</a></li>
										<li><a href="../partials/pricing-table.php">Pricing Tables</a></li>
									</ul>
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
	<noscript><iframe src="https://www.googletagmanager.com/ns.php?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>