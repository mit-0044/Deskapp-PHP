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
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Third Party Plugins</h4>
						<p class="mb-0">
							We have used some third party plugins which are has include:
						</p>
					</div>
					<div class="pb-20">
						<table class="data-table table nowrap">
							<thead>
								<tr>
									<th class="table-plus">Plugins Name</th>
									<th class="datatable-nosort">More Details</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">air-datepicker</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="http://t1m0n.name/air-datepicker/docs/">http://t1m0n.name/air-datepicker/docs/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">apexcharts</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://apexcharts.com/">https://apexcharts.com/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">bootstrap</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://getbootstrap.com/">https://getbootstrap.com/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">bootstrap select</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://developer.snapappointments.com/bootstrap-select/">https://developer.snapappointments.com/bootstrap-select/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">bootstrap-tagsinput</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/">https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">Bootstrap TouchSpin</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://www.virtuosoft.eu/code/bootstrap-touchspin/">https://www.virtuosoft.eu/code/bootstrap-touchspin/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">bootstrap-wysihtml5</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://jhollingworth.github.io/bootstrap-wysihtml5/">https://jhollingworth.github.io/bootstrap-wysihtml5/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">cropperjs</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://fengyuanchen.github.io/cropperjs/">https://fengyuanchen.github.io/cropperjs/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">datatables</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://datatables.net/">https://datatables.net/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">dropzonejs</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://www.dropzonejs.com/">https://www.dropzonejs.com/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">fancybox</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="http://fancyapps.com/fancybox/">http://fancyapps.com/fancybox/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">fullcalendar</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://fullcalendar.io/">https://fullcalendar.io/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">Highcharts JS</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://www.highcharts.com/">https://www.highcharts.com/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">highlightjs</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://highlightjs.org/">https://highlightjs.org/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">Ion.RangeSlider</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="http://ionden.com/a/plugins/ion.rangeSlider/index.html">http://ionden.com/a/plugins/ion.rangeSlider/index.html</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">jquery-asColor</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://github.com/thecreation/jquery-asColor">https://github.com/thecreation/jquery-asColor</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">jquery-asColorPicker</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://github.com/thecreation/jquery-asColorPicker">https://github.com/thecreation/jquery-asColorPicker</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">jquery-asGradient</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://github.com/thecreation/jquery-asGradient">https://github.com/thecreation/jquery-asGradient</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">jQuery Knob</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="http://anthonyterrien.com/knob/">http://anthonyterrien.com/knob/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">jquery-steps</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="http://www.jquery-steps.com">http://www.jquery-steps.com</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">jVectorMap</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://jvectormap.com/">https://jvectormap.com/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">malihu jquery custom scrollbar</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="http://manos.malihu.gr/jquery-custom-content-scroller/">http://manos.malihu.gr/jquery-custom-content-scroller/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">plyr</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://plyr.io/">https://plyr.io/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">select2</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://select2.github.io">https://select2.github.io</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">slick</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://kenwheeler.github.io/slick/">https://kenwheeler.github.io/slick/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">sweetalert2</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://sweetalert2.github.io/">https://sweetalert2.github.io/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">switchery</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://abpetkov.github.io/switchery/">https://abpetkov.github.io/switchery/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">timedropper</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://felicegattuso.com/projects/timedropper/">https://felicegattuso.com/projects/timedropper/</a>
									</td>
								</tr>
								<tr>
									<td class="table-plus">
										<span class="badge badge-pill table-badge">wysihtml5</span>
									</td>
									<td>
										<a target="_blank" class="text-blue" href="https://github.com/xing/wysihtml5">https://github.com/xing/wysihtml5</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Simple Datatable End -->
			</div>
		</div>
	</div>

	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="vendors/scripts/datatable-setting.js"></script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
</body>

</html>