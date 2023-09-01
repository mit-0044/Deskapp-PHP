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
				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">line Chart</h4>
					<div id="chart1"></div>
				</div>
				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">Area Chart</h4>
					<div id="chart2"></div>
				</div>
				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">Column Chart</h4>
					<div id="chart3"></div>
				</div>
				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">Bar Chart</h4>
					<div id="chart4"></div>
				</div>
				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">Mixed Chart</h4>
					<div id="chart5"></div>
				</div>
				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">Timeline Chart</h4>
					<div id="chart6"></div>
				</div>
				<div class="bg-white pd-20 card-box mb-30">
					<h4 class="h4 text-blue">Candlestick Chart</h4>
					<div id="chart7"></div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="h4 text-blue">Pie Chart</h4>
							<div id="chart8"></div>
						</div>
					</div>
					<div class="col-md-6 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="h4 text-blue">Radial Bar Chart</h4>
							<div id="chart9"></div>
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
	<script src="../assests/src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="../assests/vendors/scripts/apexcharts-setting.js"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>