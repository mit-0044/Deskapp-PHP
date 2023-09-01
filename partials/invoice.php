<?php
include "../partials/_dbconnect.php";

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
	header("location: index.php");
	session_abort();
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
				<div class="invoice-box bg-transparent">
					<button class="btn btn-secondary" id="print_button">Print</button>
					<button class="btn btn-secondary" id="export_button">Export</button>
				</div><br>
				<div class="invoice-wrap table data-table-export nowrap" id="invoice-wrap">
					<div class="invoice-box">
						<h3 class="text-center mb-30 weight-600 text-blue">INVOICE</h3>
						<div class="row pb-30">
							<div class="col-md-6">
								<h5 class="mb-15"><?php ?></h5>
								<p class="font-14 mb-5">
									Date Issued: <strong class="weight-600"><?php echo date('d/m/Y') ?></strong>
								</p>
								<p class="font-14 mb-5">
									Invoice No: <strong class="weight-600"><?php echo $_SESSION['id']; ?></strong>
								</p>
							</div>
							<div class="col-md-6">
								<div class="text-right">
									<strong>
										<p class="font-14 mb-5"><?php echo $_SESSION['fname'];
																echo " ";
																echo $_SESSION['lname'] ?></p>
									</strong>
									<strong>
										<p class="font-14 mb-5"><?php echo $_SESSION['email']; ?></p>
									</strong>
								</div>
							</div>
						</div>
						<div class="invoice-desc pb-30">
							<div class="invoice-desc-head clearfix">
								<div class="invoice-sub">Description</div>
								<div class="invoice-rate">Rate</div>
								<div class="invoice-hours">Hours</div>
								<div class="invoice-subtotal">Subtotal</div>
							</div>
							<div class="invoice-desc-body">
								<ul>
									<li class="clearfix">
										<div class="invoice-sub">Website Design</div>
										<div class="invoice-rate">$20</div>
										<div class="invoice-hours">100</div>
										<div class="invoice-subtotal">
											<span class="weight-600">$2000</span>
										</div>
									</li>
									<li class="clearfix">
										<div class="invoice-sub">Logo Design</div>
										<div class="invoice-rate">$20</div>
										<div class="invoice-hours">100</div>
										<div class="invoice-subtotal">
											<span class="weight-600">$2000</span>
										</div>
									</li>
									<li class="clearfix">
										<div class="invoice-sub">Website Design</div>
										<div class="invoice-rate">$20</div>
										<div class="invoice-hours">100</div>
										<div class="invoice-subtotal">
											<span class="weight-600">$2000</span>
										</div>
									</li>
									<li class="clearfix">
										<div class="invoice-sub">Logo Design</div>
										<div class="invoice-rate">$20</div>
										<div class="invoice-hours">100</div>
										<div class="invoice-subtotal">
											<span class="weight-600">$2000</span>
										</div>
									</li>
								</ul>
							</div>
							<div class="invoice-desc-footer">
								<div class="invoice-desc-head clearfix">
									<div class="invoice-sub">Bank Info</div>
									<div class="invoice-rate">Due By</div>
									<div class="invoice-subtotal">Total Due</div>
								</div>
								<div class="invoice-desc-body">
									<ul>
										<li class="clearfix">
											<div class="invoice-sub">
												<p class="font-14 mb-5">
													Account No:
													<strong class="weight-600">123 456 789</strong>
												</p>
												<p class="font-14 mb-5">
													Code: <strong class="weight-600">4556</strong>
												</p>
											</div>
											<div class="invoice-rate font-20 weight-600">
												10 Jan 2018
											</div>
											<div class="invoice-subtotal">
												<span class="weight-600 font-24 text-danger">$8000</span>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<h4 class="text-center pb-20">Thank You!!</h4>
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
	<script>
		$(document).ready(function() {
			$("#print_button").click(function() {
				var printContents = document.getElementById("invoice-wrap").innerHTML;
				var originalContents = document.body.innerHTML;
				document.body.innerHTML = printContents;
				window.print();
				// document.body.innerHTML = originalContents;
			});
		})
	</script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>