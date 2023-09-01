<?php
$update = false;
$delete = false;
include "../partials/_dbconnect.php";

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: index.php");
    session_abort();
    exit;
}

if (isset($_GET['did'])) {
    $get_id = $_GET['did'];
    $sql = "DELETE FROM `employee` WHERE `id` = '$get_id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $delete = true;
    }
}
if (isset($_GET['uid'])) {
    $update = true;
}
if (isset($_GET['aid'])) {
    $add = true;
}
?>
<!DOCTYPE html>
<html lang="en">

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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="../assets/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/vendors/styles/style.css" />
    <link rel="stylesheet" href="../assets/src/plugins/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/node_modules/sweetalert2/dist/sweetalert2.min.css">
</head>

<body>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <?php include '../partials/_navbar.php'; ?>
                <div class="container-fluid page-body-wrapper">
                    <div class="main-panel">
                        <div class="content-wrapper">
                            <div class="card-box mb-30">
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="mt-3 ml-4">
                                        <h3 class="text-blue">Employees</h3>
                                    </div>
                                    <div class="mr-3">
                                        <a class="btn btn-primary mt-3" href="../main/employee_crud.php"
                                            id="add_user">Add Employee</a>
                                    </div>
                                </div>
                                <?php if ($delete) { ?>
                                <div class="alert alert-danger mx-3" role="alert">
                                    <strong>Record Deleted Successfully</strong>
                                </div>
                                <?php } ?>
                                <?php if ($update) { ?>
                                <div class="alert alert-success mx-3" role="alert">
                                    <strong>Record Updated Successfully</strong>
                                </div>
                                <?php } ?>
                                <div class="pb-20 pd-10">
                                    <table class="table hover data-table-export">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Gender</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM `employee`";
                                            $result = mysqli_query($conn, $sql);
                                            $id = 0;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $id = $id + 1;
                                            ?>
                                            <tr class="text-center">
                                                <td class="table-plus text-center"><?php echo $id; ?></td>
                                                <td><?php echo $row['emp_fname'] ?></td>
                                                <td><?php echo $row['emp_lname'] ?></td>
                                                <td><?php echo $row['emp_gender'] ?></td>
                                                <td><?php echo $row['emp_email'] ?></td>
                                                <td><?php echo $row['emp_mobile'] ?></td>
                                                <td>
                                                    <a role="button"
                                                        href="../main/employee_crud.php?id=<?php echo $row['id'] ?>"
                                                        id="<?php echo $row['id'] ?>"
                                                        class="edit_btn btn btn-primary btn-sm mx-2">Edit</a>
                                                    <a role="button" href="#" id="<?php echo $row['id'] ?>"
                                                        class="delete_btn btn btn-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="../assets/vendors/scripts/core.js"></script>
    <script src="../assets/vendors/scripts/script.min.js"></script>
    <script src="../assets/vendors/scripts/process.js"></script>
    <script src="../assets/vendors/scripts/layout-settings.js"></script>
    <script src="../assets/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="../assets/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <!-- buttons for Export datatable -->
    <script src="../assets/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
    <script src="../assets/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/src/plugins/datatables/js/buttons.print.min.js"></script>
    <script src="../assets/src/plugins/datatables/js/buttons.html5.min.js"></script>
    <script src="../assets/src/plugins/datatables/js/buttons.flash.min.js"></script>
    <script src="../assets/src/plugins/datatables/js/pdfmake.min.js"></script>
    <script src="../assets/src/plugins/datatables/js/vfs_fonts.js"></script>
    <!-- Datatable Setting js -->
    <script src="../assets/vendors/scripts/datatable-setting.js"></script>
    <script src="/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

    <script>
    $('.delete_btn').click(function() {
        if (confirm('Are you sure want to delete?')) {
            dlt = this.id;
            window.location = `employee_list.php?did=${dlt}`
        };
    });
    $(document).ready(function() {
        <?php
            if ($delete) { ?>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Employee details has been deleted',
            showConfirmButton: false,
            timer: 1500,
        })
        <?php } ?>
    });
    $(document).ready(function() {
        <?php
            if ($update) { ?>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Employee details has been updated',
            showConfirmButton: false,
            timer: 1500,
        })
        <?php } ?>
    });
    $(document).ready(function() {
        <?php
            if ($add) { ?>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Employee details has been added',
            showConfirmButton: false,
            timer: 1500,
        })
        <?php } ?>
    });
    </script>
</body>

</html>