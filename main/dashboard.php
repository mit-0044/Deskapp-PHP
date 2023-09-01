<?php
include "../partials/_dbconnect.php";
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../index.php");
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
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="../assets/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/vendors/styles/style.css" />

</head>

<body>
    <?php include "../partials/_navbar.php"; ?>

    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            <div class="row pb-10">
                <div class="col-md-12 mb-20">
                    <div class="card-box height-100-p pd-20">
                        <div class="text-center pb-0 pb-md-3">
                            <img src="../assets/images/register-page-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome modal end -->
    <!-- js -->
    <script src="../assets/vendors/scripts/core.js"></script>
    <script src="../assets/vendors/scripts/script.min.js"></script>
    <script src="../assets/vendors/scripts/process.js"></script>
    <script src="../assets/vendors/scripts/layout-settings.js"></script>
    <script src="../assets/src/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="../assets/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="../assets/vendors/scripts/dashboard3.js"></script>
</body>

</html>