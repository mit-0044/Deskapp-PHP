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
        $user_type = htmlspecialchars($_POST['user_type'], ENT_QUOTES);
        $user_fname = htmlspecialchars($_POST['user_fname'], ENT_QUOTES);
        $user_lname = htmlspecialchars($_POST['user_lname'], ENT_QUOTES);
        $user_gender = htmlspecialchars($_POST['user_gender'], ENT_QUOTES);
        $user_email = htmlspecialchars($_POST['user_email'], ENT_QUOTES);
        $user_mobile = htmlspecialchars($_POST['user_mobile'], ENT_QUOTES);
        $user_address_1 = htmlspecialchars($_POST['user_address_1'], ENT_QUOTES);
        $user_address_2 = htmlspecialchars($_POST['user_address_2'], ENT_QUOTES);
        $user_city = htmlspecialchars($_POST['user_city'], ENT_QUOTES);
        $user_state = htmlspecialchars($_POST['user_state'], ENT_QUOTES);
        $user_country = htmlspecialchars($_POST['user_country'], ENT_QUOTES);
        $user_pincode = htmlspecialchars($_POST['user_pincode'], ENT_QUOTES);

        $sql = "UPDATE `users` SET `user_type`='$user_type',`user_fname`='$user_fname',`user_lname`='$user_lname',`user_gender`='$user_gender',`user_mobile`='$user_mobile',`user_email`='$user_email',`user_address_1`='$user_address_1',`user_address_2`='$user_address_2',`user_city`='$user_city',`user_state`='$user_state',`user_country`='$user_country',`user_pincode`='$user_pincode' WHERE `users`.`id`= $id";
        $result = mysqli_query($conn, $sql);

        foreach ((array) $_FILES['user_image']['name'] as $key => $val) {
            $img_name = $_FILES['user_image']['name'];
            $tmp_name = $_FILES['user_image']['tmp_name'];
            $size = $_FILES['user_image']['size'];
            $folder = "../assets/user_image/";
            $path = $folder . $img_name;
            if ($_FILES['user_image']['size'] < 2097152) {

                $move = move_uploaded_file($tmp_name, $path);
                if ($move) {
                    $check_sql = "SELECT * FROM `user_image` WHERE user_id = " . $_GET['id'] . "";
                    $result = mysqli_query($conn, $check_sql);
                    if (mysqli_num_rows($result) > 0) {
                        // Update the existing image
                        $update_sql = "UPDATE `user_image` SET user_image = '$img_name' WHERE user_id = " . $_GET['id'] . "";
                        $result = mysqli_query($conn, $update_sql);
                        if ($result) {
                            header('location: ../main/profile.php');
                        } else {
                            echo "Error inserting image: " . mysqli_error($conn);
                        }
                    } else {
                        // Insert a new image
                        $insert_sql = "INSERT INTO `user_image`(`user_id`, `user_image`) VALUES ('" . $_GET['id'] . "','$img_name')";
                        $result = mysqli_query($conn, $insert_sql);
                        if ($result) {
                            header('location: ../main/profile.php');
                        } else {
                            echo "Error inserting image: " . mysqli_error($conn);
                        }
                    }
                }
            } else {
                $statusMsg = "Uploaded File Size Is " . $_FILES['user_image']['size'] . '<br>';
            }
        }
        if ($result) {
            header("location: ../main/users.php?uid=" . $_GET['id'] . "");
        }
    } else {
        $user_fname = htmlspecialchars($_POST['user_fname'], ENT_QUOTES);
        $user_midname = htmlspecialchars($_POST['user_midname'], ENT_QUOTES);
        $user_lname = htmlspecialchars($_POST['user_lname'], ENT_QUOTES);
        $user_gender = htmlspecialchars($_POST['user_gender'], ENT_QUOTES);
        $user_email = htmlspecialchars($_POST['user_email'], ENT_QUOTES);
        $user_mobile = htmlspecialchars($_POST['user_mobile'], ENT_QUOTES);
        $user_address_line_1 = htmlspecialchars($_POST['user_address_line_1'], ENT_QUOTES);
        $user_address_line_2 = htmlspecialchars($_POST['user_address_line_2'], ENT_QUOTES);
        $user_city = htmlspecialchars($_POST['user_city'], ENT_QUOTES);
        $user_state = htmlspecialchars($_POST['user_state'], ENT_QUOTES);
        $user_country = htmlspecialchars($_POST['user_country'], ENT_QUOTES);
        $user_pincode = htmlspecialchars($_POST['user_pincode'], ENT_QUOTES);
        $sql = "SELECT * from `employee` where user_email='$user_email'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if ($num > 0) {
            $error = "Email is already exist. <br>
                    Please enter different email.";
        } else {
            $sql = "INSERT INTO `employee`(`user_fname`, `user_midname`, `user_lname`, `user_email`, `user_mobile`, `user_gender`, `user_address_line_1`, `user_address_line_2`, `user_city`, `user_state`, `user_country`, `user_pincode`) VALUES ('$user_fname','$user_midname','$user_lname','$user_email','$user_mobile','$user_gender','$user_address_line_1','$user_address_line_2','$user_city','$user_state','$user_country','$user_pincode')";

            $result = mysqli_query($conn, $sql);
            $add = mysqli_insert_id($conn);

            foreach ($_FILES['user_image']['name'] as $val) {
                $img_name = $_FILES['user_image']['name'];
                $tmp_name = $_FILES['user_image']['tmp_name'];
                $size = $_FILES['user_image']['size'];
                $folder = "../assets/user_image/";
                $path = $folder . $img_name;

                if ($_FILES['user_image']['size'] < 2097152) {
                    $move = move_uploaded_file($tmp_name, $path);
                    if ($move) {
                        $sql = "INSERT INTO `user_image`(`user_id`, `user_image`) VALUES ('" . $_GET['id'] . "','$img_name')";
                        $result = mysqli_query($conn, $sql);
                        if ($sql) {
                            header("location: ../main/user_crud.php?uid=" . $_GET['id'] . "");
                        } elseif (!$result) {
                            $error = "Images not uploaded";
                        }
                    } else {
                        $statusMsg = "Uploaded File Size Is " . $_FILES['user_image']['size'] . '<br>';
                    }
                }
            }
            if ($result) {
                header("location: ../main/users.php?aid=" . $_GET['id'] . "");
            }
        }
    }
}
if (isset($_GET['did_img'])) {
    $did_img = $_GET['did_img'];
    $user_id = $_GET['id2'];
    $sql = "DELETE FROM `user_image` WHERE `id` = " . $_GET['did_img'] . "";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $delete = true;
        header("location: ../main/user_crud.php?id=$user_id");
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

    <!-- user_mobile Specific Metas -->
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
        $user_id = $_GET['id']; ?>
        <div class="main-container">
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="row">
                    <div class="col-md-12 col-sm-12 mb-30">
                        <div class="card-box height-90-p pb-0">
                            <div class="tab-content">
                                <div class="col-md-12 pt-3">
                                    <h3 class="text-blue">Update User</h3>
                                </div>
                                <div class="pd-20">
                                    <form action="" method="POST" id="user_update_form" enctype="multipart/form-data">
                                        <h4 class="h4 text-blue">Personal Information</h4>
                                        <div class="row">
                                            <?php
                                            $sql = "SELECT * FROM users WHERE id = $user_id";
                                            $res = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($res)) {
                                                $country = $row['user_country'];
                                                $state = $row['user_state'];
                                                $city = $row['user_city'];
                                            ?>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>User Type: <span class="text-danger">*</span></label>
                                                        <select class="custom-select" name="user_type" id="user_type">
                                                            <option selected disabled>Select User Type</option>
                                                            <option value="Admin" <?php if ($row['user_type'] == 'Admin') {
                                                                                        echo "selected";
                                                                                    } ?>>
                                                                Admin</option>
                                                            <option value="User" <?php if ($row['user_type'] == 'User') {
                                                                                        echo "selected";
                                                                                    } ?>>User
                                                            </option>
                                                            <option value="Employee" <?php if ($row['user_type'] == 'Employee') {
                                                                                            echo "selected";
                                                                                        } ?>>
                                                                Employee</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>First Name: <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" placeholder="First Name" name="user_fname" value="<?php echo $row['user_fname'] ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Last Name: <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" placeholder="Last Name" name="user_lname" value="<?php echo $row['user_lname'] ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Email Address: <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="email" placeholder="Email Address" name="user_email" value="<?php echo $row['user_email'] ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Mobile No.: <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="number" placeholder="Mobile No." name="user_mobile" value="<?php echo $row['user_mobile'] ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="weight-600">Gender: <span class="text-danger">*</span></label>
                                                        <div class="d-flex">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="Male" name="user_gender" value="Male" class="custom-control-input mx-1" <?php if ($row['user_gender'] == 'Male') {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                } ?>>
                                                                <label class="custom-control-label" for="Male">Male</label>
                                                            </div>
                                                            <div class="custom-control custom-radio mb-5">
                                                                <input type="radio" id="Female" name="user_gender" value="Female" class="custom-control-input mx-1" <?php if ($row['user_gender'] == 'Female') {
                                                                                                                                                                        echo "checked";
                                                                                                                                                                    } ?>>
                                                                <label class="custom-control-label" for="Female">Female</label>
                                                            </div>
                                                            <div class="custom-control custom-radio mb-5">
                                                                <input type="radio" id="Other" name="user_gender" value="Other" class="custom-control-input mx-1" <?php if ($row['user_gender'] == 'Other') {
                                                                                                                                                                        echo "checked";
                                                                                                                                                                    } ?>>
                                                                <label class="custom-control-label" for="Other">Other</label>
                                                            </div>
                                                            <label id="user_gender-error" class="error" for="user_gender"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Image : <span class="text-danger">*</span></label>
                                                            <input type="file" class="form-control-file form-control height-auto" name="user_image" id="user_image" accept="image/*">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                <?php }
                                            $sql = "SELECT * FROM user_image WHERE user_id = $user_id";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                                    <img class=" border border-2" src="../assets/user_image/<?php echo $row['user_image'] ?>" alt="" id="<?php echo $row['id'] ?>" style="height: 200px; width: 200px;">
                                                <?php } ?>

                                                </div>
                                        </div>
                                        <h4 class="h4 text-blue">Residential Information</h4>
                                        <div class="row">
                                            <?php
                                            $sql = "SELECT * FROM users WHERE id = $user_id";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Address Line 1 : <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="text" placeholder="Address Line 1" name="user_address_1" value="<?php echo $row['user_address_1'] ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Address Line 2 :</label>
                                                        <input class="form-control" type="text" placeholder="Address Line 2" name="user_address_2" value="<?php echo $row['user_address_2'] ?>" />
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Country: <span class="text-danger">*</span></label>
                                                    <select class="custom-select col-12 countries" name="user_country" id="user_country">
                                                        <option selected disabled>Select Country</option>
                                                        <?php
                                                        $sql = "SELECT * FROM `country`";
                                                        $result = mysqli_query($conn, $sql);
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                            <option value="<?php echo $row['id'] ?>" <?php if ($row['id'] == $country) {
                                                                                                            echo "selected";
                                                                                                        } ?>>
                                                                <?php echo $row['name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>State: <span class="text-danger">*</span></label>
                                                    <select class="custom-select col-12 states" name="user_state" id="user_state">
                                                        <option selected disabled>Select State</option>
                                                        <?php
                                                        $sql = "SELECT * FROM `state` WHERE country_id = $country";
                                                        $result = mysqli_query($conn, $sql);
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                            <option value="<?php echo $row['id'] ?>" <?php if ($row['id'] == $state) {
                                                                                                            echo "selected";
                                                                                                        } ?>>
                                                                <?php echo $row['name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>City: <span class="text-danger">*</span></label>
                                                    <select class="custom-select col-12 cities" name="user_city" id="user_state">
                                                        <option selected disabled>Select City</option>
                                                        <?php
                                                        $sql = "SELECT * FROM city WHERE state_id = $state";
                                                        $result = mysqli_query($conn, $sql);
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                            <option value="<?php echo $row['id'] ?>" <?php if ($row['id'] == $city) {
                                                                                                            echo "selected";
                                                                                                        } ?>>
                                                                <?php echo $row['name'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <?php
                                                $sql = "SELECT * FROM users WHERE id = $user_id";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <div class="form-group">
                                                        <label>Pincode: <span class="text-danger">*</span></label>
                                                        <input class="form-control" type="number" placeholder="Pincode" name="user_pincode" value="<?php echo $row['user_pincode'] ?>" />
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="" class="btn btn-primary">Submit</button>
                                                <a type="button" href="../main/users.php" class="btn btn-secondary">Cancel</a>
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
    <?php } else { ?>
        <div class="main-container">
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="row">
                    <div class="col-md-12 col-sm-12 mb-30">
                        <div class="card-box height-90-p pb-0">
                            <div class="tab-content">
                                <div class="col-md-12 pt-3">
                                    <h3 class="text-blue">Add Employee</h3>
                                </div>
                                <div class="pd-20">
                                    <form action="" method="POST" id="user_add_form" enctype="multipart/form-data">
                                        <h4 class="h4 text-blue">Personal Information</h4>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>User Type: <span class="text-danger">*</span></label>
                                                    <select class="custom-select" name="user_type" id="user_type">
                                                        <option selected disabled>Select User Type</option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="User">User</option>
                                                        <option value="Employee">Employee</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>First Name: <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" placeholder="First Name" name="user_fname" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Last Name: <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" placeholder="Last Name" name="user_lname" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Email Address: <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="email" placeholder="Email Address" name="user_email" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Mobile No.: <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="number" placeholder="Mobile No." name="user_mobile" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Image : <span class="text-danger">*</span></label>
                                                    <input type="file" class="form-control-file form-control height-auto" name="user_image" id="user_image" accept="image/*">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="weight-600">Gender: <span class="text-danger">*</span></label>
                                                    <div class="d-flex">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="Male" name="user_gender" value="Male" class="custom-control-input">
                                                            <label class="custom-control-label" for="Male">Male</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-5">
                                                            <input type="radio" id="Female" name="user_gender" value="Female" class="custom-control-input">
                                                            <label class="custom-control-label" for="Female">Female</label>
                                                        </div>
                                                        <div class="custom-control custom-radio mb-5">
                                                            <input type="radio" id="Other" name="user_gender" value="Other" class="custom-control-input">
                                                            <label class="custom-control-label" for="Other">Other</label>
                                                        </div>
                                                        <label id="user_gender-error" class="error" for="user_gender"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="weight-600">Password: <span class="text-danger">*</span></label><br>
                                                    <em class="">Your default password is: <u class="text-danger weight-600">Password</u> (Case
                                                        sensitive)</em>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="h4 text-blue">Residential Information</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address Line 1 : <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="text" placeholder="Address Line 1" name="user_address_line_1"></input>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address Line 2 :</label>
                                                    <input class="form-control" type="text" placeholder="Address Line 2" name="user_address_line_2"></input>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Country: <span class="text-danger">*</span></label>
                                                    <select class="custom-select col-12 countries" name="user_country" id="user_country">
                                                        <option selected disabled>Select Country</option>
                                                        <?php
                                                        $sql = "SELECT * FROM `country`";
                                                        $result = mysqli_query($conn, $sql);
                                                        $id = 0;
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
                                                    <label>State: <span class="text-danger">*</span></label>
                                                    <select class="custom-select col-12 states" name="user_state" id="user_state">
                                                        <option selected disabled>Select State</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>City: <span class="text-danger">*</span></label>
                                                    <select class="custom-select col-12 cities" name="user_city" id="user_state">
                                                        <option selected disabled>Select City</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Pincode: <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="number" placeholder="Pincode" name="user_pincode"></input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="" class="btn btn-primary">Submit</button>
                                                <a type="button" href="../main/users.php" class="btn btn-secondary">Cancel</a>
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
            $("#user_add_form").validate({
                rules: {
                    user_type: {
                        required: true,
                    },
                    user_fname: "required",
                    user_lname: "required",
                    user_email: {
                        required: true,
                        email: true,
                    },
                    user_mobile: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                    },
                    user_image: "required",
                    user_gender: {
                        required: true,
                    },
                    user_address_1: "required",
                    user_country: "required",
                    user_state: "required",
                    user_city: "required",
                    user_pincode: {
                        required: true,
                        minlength: 6,
                        maxlength: 6,
                    },
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
            $("#user_update_form").validate({
                rules: {
                    user_type: {
                        required: true,
                    },
                    user_fname: "required",
                    user_lname: "required",
                    user_email: {
                        required: true,
                        email: true,
                    },
                    user_mobile: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                    },
                    user_gender: {
                        required: true,
                    },
                    user_address_1: "required",
                    user_country: "required",
                    user_state: "required",
                    user_city: "required",
                    user_pincode: {
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
                            `user_crud.php?did_img=${dlt_id}&id2=${dlt_class}`
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