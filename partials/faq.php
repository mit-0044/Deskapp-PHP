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
	<?php include "../partials/_navbar.php"; ?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Frequently asked questions</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="index.html">Home</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">
										FAQ
									</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="faq-wrap">
					<h4 class="mb-20 h4 text-blue">Accordion example</h4>
					<div id="accordion">
						<div class="card">
							<div class="card-header">
								<button class="btn btn-block" data-toggle="collapse" data-target="#faq1">
									Collapsible Group Item #1
								</button>
							</div>
							<div id="faq1" class="collapse show" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life
									accusamus terry richardson ad squid. 3 wolf moon officia
									aute, non cupidatat skateboard dolor brunch. Food truck
									quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
									sunt aliqua put a bird on it squid single-origin coffee
									nulla assumenda shoreditch et. Nihil anim keffiyeh
									helvetica, craft beer labore wes anderson cred nesciunt
									sapiente ea proident. Ad vegan excepteur butcher vice lomo.
									Leggings occaecat craft beer farm-to-table, raw denim
									aesthetic synth nesciunt you probably haven't heard of them
									accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq2">
									Collapsible Group Item #2
								</button>
							</div>
							<div id="faq2" class="collapse" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life
									accusamus terry richardson ad squid. 3 wolf moon officia
									aute, non cupidatat skateboard dolor brunch. Food truck
									quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
									sunt aliqua put a bird on it squid single-origin coffee
									nulla assumenda shoreditch et. Nihil anim keffiyeh
									helvetica, craft beer labore wes anderson cred nesciunt
									sapiente ea proident. Ad vegan excepteur butcher vice lomo.
									Leggings occaecat craft beer farm-to-table, raw denim
									aesthetic synth nesciunt you probably haven't heard of them
									accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq3">
									Collapsible Group Item #3
								</button>
							</div>
							<div id="faq3" class="collapse" data-parent="#accordion">
								<div class="card-body">
									<p>
										Anim pariatur cliche reprehenderit, enim eiusmod high life
										accusamus terry richardson ad squid. 3 wolf moon officia
										aute, non cupidatat skateboard dolor brunch. Food truck
										quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
										tempor, sunt aliqua put a bird on it squid single-origin
										coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
										helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea proident. Ad vegan excepteur butcher vice
										lomo. Leggings occaecat craft beer farm-to-table, raw
										denim aesthetic synth nesciunt you probably haven't heard
										of them accusamus labore sustainable VHS.
									</p>
									<p class="mb-0">
										Anim pariatur cliche reprehenderit, enim eiusmod high life
										accusamus terry richardson ad squid. 3 wolf moon officia
										aute, non cupidatat skateboard dolor brunch. Food truck
										quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
										tempor, sunt aliqua put a bird on it squid single-origin
										coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
										helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea proident. Ad vegan excepteur butcher vice
										lomo. Leggings occaecat craft beer farm-to-table, raw
										denim aesthetic synth nesciunt you probably haven't heard
										of them accusamus labore sustainable VHS.
									</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq4">
									Collapsible Group Item #4
								</button>
							</div>
							<div id="faq4" class="collapse" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life
									accusamus terry richardson ad squid. 3 wolf moon officia
									aute, non cupidatat skateboard dolor brunch. Food truck
									quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
									sunt aliqua put a bird on it squid single-origin coffee
									nulla assumenda shoreditch et. Nihil anim keffiyeh
									helvetica, craft beer labore wes anderson cred nesciunt
									sapiente ea proident. Ad vegan excepteur butcher vice lomo.
									Leggings occaecat craft beer farm-to-table, raw denim
									aesthetic synth nesciunt you probably haven't heard of them
									accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq5">
									Collapsible Group Item #5
								</button>
							</div>
							<div id="faq5" class="collapse" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life
									accusamus terry richardson ad squid. 3 wolf moon officia
									aute, non cupidatat skateboard dolor brunch. Food truck
									quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
									sunt aliqua put a bird on it squid single-origin coffee
									nulla assumenda shoreditch et. Nihil anim keffiyeh
									helvetica, craft beer labore wes anderson cred nesciunt
									sapiente ea proident. Ad vegan excepteur butcher vice lomo.
									Leggings occaecat craft beer farm-to-table, raw denim
									aesthetic synth nesciunt you probably haven't heard of them
									accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq6">
									Collapsible Group Item #6
								</button>
							</div>
							<div id="faq6" class="collapse" data-parent="#accordion">
								<div class="card-body">
									<p>
										Anim pariatur cliche reprehenderit, enim eiusmod high life
										accusamus terry richardson ad squid. 3 wolf moon officia
										aute, non cupidatat skateboard dolor brunch. Food truck
										quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
										tempor, sunt aliqua put a bird on it squid single-origin
										coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
										helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea proident. Ad vegan excepteur butcher vice
										lomo. Leggings occaecat craft beer farm-to-table, raw
										denim aesthetic synth nesciunt you probably haven't heard
										of them accusamus labore sustainable VHS.
									</p>
									<p class="mb-0">
										Anim pariatur cliche reprehenderit, enim eiusmod high life
										accusamus terry richardson ad squid. 3 wolf moon officia
										aute, non cupidatat skateboard dolor brunch. Food truck
										quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
										tempor, sunt aliqua put a bird on it squid single-origin
										coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
										helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea proident. Ad vegan excepteur butcher vice
										lomo. Leggings occaecat craft beer farm-to-table, raw
										denim aesthetic synth nesciunt you probably haven't heard
										of them accusamus labore sustainable VHS.
									</p>
								</div>
							</div>
						</div>
					</div>
					<h4 class="mb-30 h4 text-blue padding-top-30">Collapse example</h4>
					<div class="padding-bottom-30">
						<div class="card">
							<div class="card-header">
								<button class="btn btn-block" data-toggle="collapse" data-target="#faq1-1">
									Collapsible Group Item #1
								</button>
							</div>
							<div id="faq1-1" class="collapse show">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life
									accusamus terry richardson ad squid. 3 wolf moon officia
									aute, non cupidatat skateboard dolor brunch. Food truck
									quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
									sunt aliqua put a bird on it squid single-origin coffee
									nulla assumenda shoreditch et. Nihil anim keffiyeh
									helvetica, craft beer labore wes anderson cred nesciunt
									sapiente ea proident. Ad vegan excepteur butcher vice lomo.
									Leggings occaecat craft beer farm-to-table, raw denim
									aesthetic synth nesciunt you probably haven't heard of them
									accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq2-2">
									Collapsible Group Item #2
								</button>
							</div>
							<div id="faq2-2" class="collapse">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life
									accusamus terry richardson ad squid. 3 wolf moon officia
									aute, non cupidatat skateboard dolor brunch. Food truck
									quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
									sunt aliqua put a bird on it squid single-origin coffee
									nulla assumenda shoreditch et. Nihil anim keffiyeh
									helvetica, craft beer labore wes anderson cred nesciunt
									sapiente ea proident. Ad vegan excepteur butcher vice lomo.
									Leggings occaecat craft beer farm-to-table, raw denim
									aesthetic synth nesciunt you probably haven't heard of them
									accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq3-3">
									Collapsible Group Item #3
								</button>
							</div>
							<div id="faq3-3" class="collapse">
								<div class="card-body">
									<p>
										Anim pariatur cliche reprehenderit, enim eiusmod high life
										accusamus terry richardson ad squid. 3 wolf moon officia
										aute, non cupidatat skateboard dolor brunch. Food truck
										quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
										tempor, sunt aliqua put a bird on it squid single-origin
										coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
										helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea proident. Ad vegan excepteur butcher vice
										lomo. Leggings occaecat craft beer farm-to-table, raw
										denim aesthetic synth nesciunt you probably haven't heard
										of them accusamus labore sustainable VHS.
									</p>
									<p class="mb-0">
										Anim pariatur cliche reprehenderit, enim eiusmod high life
										accusamus terry richardson ad squid. 3 wolf moon officia
										aute, non cupidatat skateboard dolor brunch. Food truck
										quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
										tempor, sunt aliqua put a bird on it squid single-origin
										coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
										helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea proident. Ad vegan excepteur butcher vice
										lomo. Leggings occaecat craft beer farm-to-table, raw
										denim aesthetic synth nesciunt you probably haven't heard
										of them accusamus labore sustainable VHS.
									</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq4-4">
									Collapsible Group Item #4
								</button>
							</div>
							<div id="faq4-4" class="collapse">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life
									accusamus terry richardson ad squid. 3 wolf moon officia
									aute, non cupidatat skateboard dolor brunch. Food truck
									quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
									sunt aliqua put a bird on it squid single-origin coffee
									nulla assumenda shoreditch et. Nihil anim keffiyeh
									helvetica, craft beer labore wes anderson cred nesciunt
									sapiente ea proident. Ad vegan excepteur butcher vice lomo.
									Leggings occaecat craft beer farm-to-table, raw denim
									aesthetic synth nesciunt you probably haven't heard of them
									accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq5-5">
									Collapsible Group Item #5
								</button>
							</div>
							<div id="faq5-5" class="collapse">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life
									accusamus terry richardson ad squid. 3 wolf moon officia
									aute, non cupidatat skateboard dolor brunch. Food truck
									quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
									sunt aliqua put a bird on it squid single-origin coffee
									nulla assumenda shoreditch et. Nihil anim keffiyeh
									helvetica, craft beer labore wes anderson cred nesciunt
									sapiente ea proident. Ad vegan excepteur butcher vice lomo.
									Leggings occaecat craft beer farm-to-table, raw denim
									aesthetic synth nesciunt you probably haven't heard of them
									accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq6-6">
									Collapsible Group Item #6
								</button>
							</div>
							<div id="faq6-6" class="collapse">
								<div class="card-body">
									<p>
										Anim pariatur cliche reprehenderit, enim eiusmod high life
										accusamus terry richardson ad squid. 3 wolf moon officia
										aute, non cupidatat skateboard dolor brunch. Food truck
										quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
										tempor, sunt aliqua put a bird on it squid single-origin
										coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
										helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea proident. Ad vegan excepteur butcher vice
										lomo. Leggings occaecat craft beer farm-to-table, raw
										denim aesthetic synth nesciunt you probably haven't heard
										of them accusamus labore sustainable VHS.
									</p>
									<p class="mb-0">
										Anim pariatur cliche reprehenderit, enim eiusmod high life
										accusamus terry richardson ad squid. 3 wolf moon officia
										aute, non cupidatat skateboard dolor brunch. Food truck
										quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
										tempor, sunt aliqua put a bird on it squid single-origin
										coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
										helvetica, craft beer labore wes anderson cred nesciunt
										sapiente ea proident. Ad vegan excepteur butcher vice
										lomo. Leggings occaecat craft beer farm-to-table, raw
										denim aesthetic synth nesciunt you probably haven't heard
										of them accusamus labore sustainable VHS.
									</p>
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