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
				<div class="pd-20 card-box mb-30">
					<h4 class="h4 text-blue">Tooltips</h4>
					<p class="pb-20">
						you can use
						<code>data-toggle="tooltip" title="Tooltip on top"</code>
					</p>
					<div class="pb-20">
						<button type="button" class="btn btn-primary margin-5" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
							Tooltip on top
						</button>
						<button type="button" class="btn btn-primary margin-5" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
							Tooltip on right
						</button>
						<button type="button" class="btn btn-primary margin-5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
							Tooltip on bottom
						</button>
						<button type="button" class="btn btn-primary margin-5" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
							Tooltip on left
						</button>
					</div>
				</div>
				<div class="pd-20 card-box mb-30">
					<h4 class="h4 text-blue">Popovers</h4>
					<p class="pb-20">
						you can use
						<code>data-container="body" data-toggle="popover"
							data-content=""</code>
					</p>
					<div class="pb-20">
						<button type="button" class="btn btn-outline-primary margin-5" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="popover">
							Popover on top
						</button>
						<button type="button" class="btn btn-outline-primary margin-5" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="popover">
							Popover on right
						</button>
						<button type="button" class="btn btn-outline-primary margin-5" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus	sagittis lacus vel augue laoreet rutrum faucibus." title="popover">
							Popover on bottom
						</button>
						<button type="button" class="btn btn-outline-primary margin-5" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="popover">
							Popover on left
						</button>
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