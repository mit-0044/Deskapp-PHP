<?php
include "../partials/_dbconnect.php";
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../main/index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_GET['id'])) {

        $id = $_GET['id'];
        $emp_fname = htmlspecialchars($_POST['emp_fname'], ENT_QUOTES);
        $emp_midname = htmlspecialchars($_POST['emp_midname'], ENT_QUOTES);
        $emp_lname = htmlspecialchars($_POST['emp_lname'], ENT_QUOTES);
        $emp_gender = htmlspecialchars($_POST['emp_gender'], ENT_QUOTES);
        $emp_email = htmlspecialchars($_POST['emp_email'], ENT_QUOTES);
        $emp_mobile = htmlspecialchars($_POST['emp_mobile'], ENT_QUOTES);
        $emp_address_line_1 = htmlspecialchars($_POST['emp_address_line_1'], ENT_QUOTES);
        $emp_address_line_2 = htmlspecialchars($_POST['emp_address_line_2'], ENT_QUOTES);
        $emp_city = htmlspecialchars($_POST['emp_city'], ENT_QUOTES);
        $emp_state = htmlspecialchars($_POST['emp_state'], ENT_QUOTES);
        $emp_country = htmlspecialchars($_POST['emp_country'], ENT_QUOTES);
        $emp_pincode = htmlspecialchars($_POST['emp_pincode'], ENT_QUOTES);

        $sql = "UPDATE `employee` SET `emp_fname`='$emp_fname',`emp_midname`='$emp_midname',`emp_lname`='$emp_lname',`emp_gender`='$emp_gender',`emp_mobile`='$emp_mobile',`emp_email`='$emp_email',`emp_address_line_1`='$emp_address_line_1',`emp_address_line_2`='$emp_address_line_2',`emp_city`='$emp_city',`emp_pincode`='$emp_pincode',`emp_state`='$emp_state',`emp_country`='$emp_country' WHERE `employee`.`id`= $id";
        $result = mysqli_query($conn, $sql);

        foreach ((array)$_FILES['emp_image']['name'] as $id => $val) {
            $img_name = $_FILES['emp_image']['name'][$id];
            $tmp_name = $_FILES['emp_image']['tmp_name'][$id];
            $size = $_FILES['emp_image']['size'][$id];
            $folder = "../assets/employee_image/";
            $path = $folder . $img_name;

            if ($_FILES['emp_image']['size'][$id] < 2097152) {

                $move = move_uploaded_file($tmp_name, $path);
                if ($move) {
                    $sql = "INSERT INTO `employee_image`(`emp_id`, `emp_image`) VALUES ('" . $_GET['id'] . "','$img_name')";
                    $result = mysqli_query($conn, $sql);
                    if ($sql) {
                        header("location: ../main/employee_crud.php?uid=" . $_GET['id'] . "");
                    } elseif (!$result) {
                        $error = "Images not uploaded";
                    }
                } else {
                    $statusMsg = "Uploaded File Size Is " . $_FILES['emp_image']['size'][$id] . '<br>';
                }
            }
        }
        if ($result) {
            header("location: ../main/employee_list.php?uid=" . $_GET['id'] . "");
        }
    } else {

        $emp_fname = htmlspecialchars($_POST['emp_fname'], ENT_QUOTES);
        $emp_midname = htmlspecialchars($_POST['emp_midname'], ENT_QUOTES);
        $emp_lname = htmlspecialchars($_POST['emp_lname'], ENT_QUOTES);
        $emp_gender = htmlspecialchars($_POST['emp_gender'], ENT_QUOTES);
        $emp_email = htmlspecialchars($_POST['emp_email'], ENT_QUOTES);
        $emp_mobile = htmlspecialchars($_POST['emp_mobile'], ENT_QUOTES);
        $emp_address_line_1 = htmlspecialchars($_POST['emp_address_line_1'], ENT_QUOTES);
        $emp_address_line_2 = htmlspecialchars($_POST['emp_address_line_2'], ENT_QUOTES);
        $emp_city = htmlspecialchars($_POST['emp_city'], ENT_QUOTES);
        $emp_state = htmlspecialchars($_POST['emp_state'], ENT_QUOTES);
        $emp_country = htmlspecialchars($_POST['emp_country'], ENT_QUOTES);
        $emp_pincode = htmlspecialchars($_POST['emp_pincode'], ENT_QUOTES);
        $sql = "SELECT * from `employee` where emp_email='$emp_email'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if ($num > 0) {
            $error = "Email is already exist. <br>
                    Please enter different email.";
        } else {
            $sql = "INSERT INTO `employee`(`emp_fname`, `emp_midname`, `emp_lname`, `emp_email`, `emp_mobile`, `emp_gender`, `emp_address_line_1`, `emp_address_line_2`, `emp_city`, `emp_state`, `emp_country`, `emp_pincode`) VALUES ('$emp_fname','$emp_midname','$emp_lname','$emp_email','$emp_mobile','$emp_gender','$emp_address_line_1','$emp_address_line_2','$emp_city','$emp_state','$emp_country','$emp_pincode')";

            $result = mysqli_query($conn, $sql);
            $add = mysqli_insert_id($conn);

            foreach ((array)$_FILES['emp_image']['name'] as $id => $val) {
                $img_name = $_FILES['emp_image']['name'][$id];
                $tmp_name = $_FILES['emp_image']['tmp_name'][$id];
                $size = $_FILES['emp_image']['size'][$id];
                $folder = "../assets/employee_image/";
                $path = $folder . $img_name;

                if ($_FILES['emp_image']['size'][$id] < 2097152) {

                    $move = move_uploaded_file($tmp_name, $path);
                    if ($move) {
                        $sql = "INSERT INTO `employee_image`(`emp_id`, `emp_image`) VALUES ('$add','$img_name')";
                        $result = mysqli_query($conn, $sql);
                        if ($sql) {
                            echo $result;
                            // header('location: ../partials/profile.php');
                        } elseif (!$result) {
                            $error = "Images not uploaded";
                        }
                    } else {
                        $statusMsg = "Uploaded File Size Is " . $_FILES['emp_image']['size'][$id] . '<br>';
                    }
                }
            }
            echo $sql;
        }
    }
}
if (isset($_GET['did_img'])) {
    $did_img = $_GET['did_img'];
    $emp_id = $_GET['id2'];
    $sql = "DELETE FROM `employee_image` WHERE `id` = " . $_GET['did_img'] . "";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $delete = true;
        header("location: ../main/employee_crud.php?id=$emp_id");
    }
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

    <!-- emp_mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="../assets/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/src/plugins/fancybox/dist/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="../assets/vendors/styles/style.css" />
    <style>
        .error {
            color: red;
            font-family: verdana, Helvetica;
        }
    </style>
</head>

<body>
    <?php include '../partials/_navbar.php';
    if (isset($_GET['id'])) {
        $emp_id = $_GET['id']; ?>
        <div class="main-container">
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <h3 class="pl-10 mb-20">Edit Employee</h3>
                        <div class="card-box height-90-p pb-0">
                            <div class="tab-content">
                                <!-- Timeline Tab start -->
                                <div class="pd-20">
                                    <?php
                                    $sql = "SELECT * FROM employee WHERE id = '$emp_id'";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $country = $row['emp_country'];
                                        $state = $row['emp_state'];
                                        $city = $row['emp_city'];
                                    ?>
                                        <form action="" method="POST" id="employee_update_form" enctype="multipart/form-data">
                                            <h4 class="h4 text-blue">Personal Information</h4>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>First Name:</label>
                                                        <input class="form-control" type="text" placeholder="First Name" name="emp_fname" value="<?php echo $row['emp_fname'] ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Middle Name:</label>
                                                        <input class="form-control" type="text" placeholder="Middle Name" name="emp_midname" value="<?php echo $row['emp_midname'] ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Last Name:</label>
                                                        <input class="form-control" type="text" placeholder="Last Name" name="emp_lname" value="<?php echo $row['emp_lname'] ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Email Address:</label>
                                                        <input class="form-control" type="email" placeholder="Email Address" name="emp_email" value="<?php echo $row['emp_email'] ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Mobile No.:</label>
                                                        <input class="form-control" type="number" placeholder="Mobile No." name="emp_mobile" value="<?php echo $row['emp_mobile'] ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="weight-600">Gender:</label>
                                                    <div class="form-group m-0 row">
                                                        <div class="custom-control custom-radio mb-5 col-md-4">
                                                            <input type="radio" id="Male" name="emp_gender" value="Male" class="custom-control-input" <?php if ($row['emp_gender'] == 'Male') {
                                                                                                                                                            echo "checked";
                                                                                                                                                        } ?>>
                                                            <label class="custom-control-label" for="Male">Male</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-5 col-md-4">
                                                            <input type="radio" id="Female" name="emp_gender" value="Female" class="custom-control-input" <?php if ($row['emp_gender'] == 'Female') {
                                                                                                                                                                echo "checked";
                                                                                                                                                            } ?>>
                                                            <label class="custom-control-label" for="Female">Female</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-5 col-md-4">
                                                            <input type="radio" id="Other" name="emp_gender" value="Other" class="custom-control-input" <?php if ($row['emp_gender'] == 'Other') {
                                                                                                                                                            echo "checked";
                                                                                                                                                        } ?>>
                                                            <label class="custom-control-label" for="Other">Other</label>
                                                        </div>
                                                        <label id="gender-error" class="error" for="emp_gender"></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <h4 class="h4 text-blue">Images</h4>
                                                    <div class="form-group m-0">
                                                        <input type="file" class="form-control-file form-control col-md-4" name="emp_image[]" id="emp_image" accept="image/*" multiple>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 ml-2">
                                                    <div class="row">
                                                        <?php
                                                        $sql = "SELECT * FROM employee_image WHERE emp_id = $emp_id";
                                                        $result = mysqli_query($conn, $sql);
                                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                                            <div class="da-card box-shadow m-2 row-md-12 border border-2">
                                                                <div class="da-card-photo" style="position: relative; top: 50%; transform: translateY(-50%);">
                                                                    <img class="" src="../assets/employee_image/<?php echo $row['emp_image'] ?>" alt="" id="<?php echo $row['id'] ?>" style="height: 200px; width: 200px;">
                                                                    <div class="da-overlay">
                                                                        <div class="da-social">
                                                                            <ul class="clearfix" id="<?php echo $row['emp_id'] ?>">
                                                                                <li class="delete_btn" id="<?php echo $row['id'];
                                                                                                            ?>">
                                                                                    <a type="button"><i class="icon-copy ion-trash-b"></i></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <h4 class="h4 text-blue mt-3">Residential Information</h4>
                                            <div class="row">
                                                <?php
                                                $sql = "SELECT * FROM employee WHERE id = " . $_GET['id'] . "";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Address Line 1:</label>
                                                            <input class="form-control" type="text" placeholder="Address Line 1" name="emp_address_line_1" value="<?php echo $row['emp_address_line_1'] ?>"></input>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Address Line 2:</label>
                                                            <input class="form-control" type="text" placeholder="Address Line 2" name="emp_address_line_2" value="<?php echo $row['emp_address_line_2'] ?>"></input>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Country: </label>
                                                        <select class="custom-select countries" name="emp_country">
                                                            <option selected disabled>Select Country</option>
                                                            <?php
                                                            $sql = "SELECT * FROM `country`";
                                                            $result = mysqli_query($conn, $sql);
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                                <option value="<?php echo $row['id'] ?>" <?php if ($row['id'] == $country) {
                                                                                                                echo "Selected";
                                                                                                            } ?>>
                                                                    <?php echo $row['name'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>State</label>
                                                        <select class="custom-select states" name="emp_state">
                                                            <option selected disabled>Select State</option>
                                                            <?php
                                                            $sql = "SELECT * FROM `state` WHERE country_id = '$country' ";
                                                            $result = mysqli_query($conn, $sql);
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                                <option value="<?php echo $row['id'] ?>" <?php if ($row['id'] == $state) {
                                                                                                                echo "Selected";
                                                                                                            } ?>>
                                                                    <?php echo $row['name'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <select class="custom-select cities" name="emp_city">
                                                            <option selected disabled>Select City</option>
                                                            <?php
                                                            $sql = "SELECT * FROM `city` WHERE state_id = '$state' ";
                                                            $result = mysqli_query($conn, $sql);
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                                <option value="<?php echo $row['id'] ?>" <?php if ($row['id'] == $city) {
                                                                                                                echo "Selected";
                                                                                                            } ?>>
                                                                    <?php echo $row['name'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <?php
                                                    $sql = "SELECT * FROM employee WHERE id = " . $_GET['id'] . "";
                                                    $result = mysqli_query($conn, $sql);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                        <div class="form-group">
                                                            <label>Pincode:</label>
                                                            <input class="form-control" type="number" placeholder="Pincode" name="emp_pincode" value="<?php echo $row['emp_pincode'] ?>"></input>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="" class="btn btn-primary">Update</button>
                                                    <a type="button" href="../main/employee_list.php" class="btn btn-secondary">Cancel</a>
                                                </div>
                                            </div>
                                        </form>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="main-container">
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="row">
                    <div class="col-md-12 col-sm-12 mb-30">
                        <h3 class="pl-10 mb-20">Add Employee</h3>
                        <div class="card-box height-90-p pb-0">
                            <div class="tab-content">
                                <!-- Timeline Tab start -->
                                <div class="pd-20">
                                    <form action="" method="POST" id="employee_add_form" enctype="multipart/form-data">
                                        <h4 class="h4 text-blue">Personal Information</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>First Name:</label>
                                                    <input class="form-control" type="text" placeholder="First Name" name="emp_fname" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Middle Name:</label>
                                                    <input class="form-control" type="text" placeholder="Middle Name" name="emp_midname" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Last Name:</label>
                                                    <input class="form-control" type="text" placeholder="Last Name" name="emp_lname" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Email Address:</label>
                                                    <input class="form-control" type="email" placeholder="Email Address" name="emp_email" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Mobile No.:</label>
                                                    <input class="form-control" type="number" placeholder="Mobile No." name="emp_mobile" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Image :</label>
                                                    <input type="file" class="form-control-file form-control height-auto" name="emp_image[]" id="emp_image" accept="image/*" multiple>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="weight-600">Gender:</label><br>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="Male" name="emp_gender" value="Male" class="custom-control-input">
                                                        <label class="custom-control-label" for="Male">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-5">
                                                        <input type="radio" id="Female" name="emp_gender" value="Female" class="custom-control-input">
                                                        <label class="custom-control-label" for="Female">Female</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-5">
                                                        <input type="radio" id="Other" name="emp_gender" value="Other" class="custom-control-input">
                                                        <label class="custom-control-label" for="Other">Other</label>
                                                    </div>
                                                    <label id="emp_gender-error" class="error" for="emp_gender"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="h4 text-blue">Residential Information</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address Line 1 :</label>
                                                    <input class="form-control" type="text" placeholder="Address Line 1" name="emp_address_line_1"></input>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address Line 2 :</label>
                                                    <input class="form-control" type="text" placeholder="Address Line 2" name="emp_address_line_2"></input>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Country :</label>
                                                    <select class="custom-select col-12 countries" name="emp_country" id="emp_country">
                                                        <option selected disabled>Select Country</option>
                                                        <?php
                                                        $sql = "SELECT * FROM `country`";
                                                        $result = mysqli_query($conn, $sql);
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                            <option value="<?php echo $row['id'] ?>">
                                                                <?php echo $row['name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>State :</label>
                                                    <select class="custom-select col-12 states" name="emp_state" id="emp_state">
                                                        <option selected disabled>Select State</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>City :</label>
                                                    <select class="custom-select col-12 cities" name="emp_city" id="emp_state">
                                                        <option selected disabled>Select City</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Pincode:</label>
                                                    <input class="form-control" type="number" placeholder="Pincode" name="emp_pincode"></input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="" class="btn btn-primary">Add</button>
                                                <a type="button" href="../main/employees.php" class="btn btn-secondary">Cancel</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
    ?>

    <!-- js -->
    <script src="../assets/vendors/scripts/core.js"></script>
    <script src="../assets/vendors/scripts/script.min.js"></script>
    <script src="../assets/vendors/scripts/process.js"></script>
    <script src="../assets/vendors/scripts/layout-settings.js"></script>
    <script src="../assets/src/plugins/sweetalert2/sweet-alert.min.js"></script>
    <script src="../assets/vendors/jquery-validation/jquery.validate.min.js"></script>
    <script>
        $(function() {
            $("#employee_update_form").validate({
                rules: {
                    emp_fname: "required",
                    emp_lname: "required",
                    emp_address_line_1: "required",
                    emp_address_line_2: "required",
                    emp_city: "required",
                    emp_state: "required",
                    emp_country: "required",
                    emp_mobile: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                    },
                    emp_email: {
                        required: true,
                        email: true,
                    },
                    emp_gender: {
                        required: true,
                    },
                    emp_pincode: {
                        required: true,
                        minlength: 6,
                        maxlength: 6,
                    },
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
        $(function() {
            $("#employee_add_form").validate({
                rules: {
                    emp_fname: "required",
                    emp_lname: "required",
                    "emp_image[]": "required",
                    emp_address_line_1: "required",
                    emp_address_line_2: "required",
                    emp_country: "required",
                    emp_state: "required",
                    emp_city: "required",
                    emp_mobile: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                    },
                    emp_email: {
                        required: true,
                        email: true,
                    },
                    emp_gender: {
                        required: true,
                    },
                    emp_pincode: {
                        required: true,
                        minlength: 6,
                        maxlength: 6,
                    },
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "../partials/get_countries.php",
                data: {
                    id: $(this).val()
                },
                beforeSend: function() {
                    $('.countries').find("option:eq(0)").html("Please wait..");
                },
                success: function(data) {
                    $('.countries').find("option:eq(0)").html("Select Country");
                    var obj = jQuery.parseJSON(data);
                    $(obj).each(function() {
                        var option = $('<option />');
                        option.attr('value', this.value).text(this.label);
                        $('.countries').append(option);
                    });
                }
            });
            $('.countries').change(function() {
                $.ajax({
                    type: "POST",
                    url: "../partials/get_states.php",
                    data: {
                        id: $(this).val()
                    },
                    beforeSend: function() {
                        $(".states option:gt(0)").remove();
                        $(".cities option:gt(0)").remove();
                        $('.states').find("option:eq(0)").html("Please wait..");
                    },
                    success: function(data) {
                        $('.states').find("option:eq(0)").html("Select State");
                        var obj = jQuery.parseJSON(data);
                        $(obj).each(function() {
                            var option = $('<option />');
                            option.attr('value', this.value).text(this.label);
                            $('.states').append(option);
                        });
                    }
                });
            });
            $('.states').change(function() {
                $.ajax({
                    type: "POST",
                    url: "../partials/get_cities.php",
                    data: {
                        id: $(this).val()
                    },
                    beforeSend: function() {
                        $(".cities option:gt(0)").remove();
                        $('.cities').find("option:eq(0)").html("Please wait..");
                    },
                    success: function(data) {
                        $('.cities').find("option:eq(0)").html("Select State");
                        var obj = jQuery.parseJSON(data);
                        $(obj).each(function() {
                            var option = $('<option />');
                            option.attr('value', this.value).text(this.label);
                            $('.cities').append(option);
                        });
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.delete_btn').click(function() {
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#008000',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        dlt_id = this.id,
                            dlt_class = this.parentNode.id,
                            window.location =
                            `employee_crud.php?did_img=${dlt_id}&id2=${dlt_class}`
                    }
                })
            });
        });
    </script>
    <!-- Google Tag Manager (noscript) -->

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>