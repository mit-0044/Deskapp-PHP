<?php
include "../partials/_dbconnect.php";
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../main/index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_GET['id'])) {
        $fname = htmlspecialchars($_POST['fname'], ENT_QUOTES);
        $lname = htmlspecialchars($_POST['lname'], ENT_QUOTES);
        $gender_radio = $_POST['gender_radio'];
        $gender_checkbox = implode(",", $_POST['gender_checkbox']);
        $gender_select = $_POST['gender_select'];
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
        $mobile = htmlspecialchars($_POST['mobile'], ENT_QUOTES);
        $feedback = htmlspecialchars($_POST['feedback'], ENT_QUOTES);

        $sql = "UPDATE `feedback` SET `fname`='$fname',`lname`='$lname',`gender_radio`='$gender_radio',`gender_checkbox`='$gender_checkbox',`gender_select`='$gender_select',`mobile`='$mobile',`email`='$email',`feedback`='$feedback' WHERE `feedback`.`id`='" . $_GET['id'] . "'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("location: ../main/feedbacks.php?uid=" . $_GET['id'] . "");
        }
    } else {

        $fname = htmlspecialchars($_POST['fname'], ENT_QUOTES);
        $lname = htmlspecialchars($_POST['lname'], ENT_QUOTES);
        $gender_radio = $_POST['gender_radio'];
        $gender_checkbox = implode(",", $_POST['gender_checkbox']);
        $gender_select = $_POST['gender_select'];
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
        $mobile = htmlspecialchars($_POST['mobile'], ENT_QUOTES);
        $feedback = htmlspecialchars($_POST['feedback'], ENT_QUOTES);

        $sql = "INSERT INTO `feedback`(`fname`, `lname`, `email`, `mobile`, `gender_radio`, `gender_checkbox`, `gender_select`, `feedback`) VALUES ('$fname','$lname','$email','$mobile','$gender_radio','$gender_checkbox','$gender_select','$feedback')";

        $result = mysqli_query($conn, $sql);
        $add = mysqli_insert_id($conn);

        if ($result) {
            header("location: ../main/feedbacks.php?aid=$add");
        }
    }
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="../assets/vendors/styles/icon-font.min.css" />
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
    if (isset($_GET['id'])) { ?>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="row">
                <div class="col-md-12 col-sm-12 mb-30">
                    <div class="card-box height-90-p pb-0">
                        <div class="tab-content">
                            <h3 class="text-blue pt-3 px-3">Edit Feedback</h3>
                            <!-- Timeline Tab start -->
                            <div class="pd-20">
                                <?php
                                    $sql = "SELECT * FROM feedback WHERE id = " . $_GET['id'] . "";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $gender_checkbox = explode(",", $row['gender_checkbox'])
                                    ?>
                                <form action="" method="POST" id="feedback_form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name:</label>
                                                <input class="form-control" type="text" placeholder="First Name"
                                                    name="fname" value="<?php echo $row['fname'] ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name:</label>
                                                <input class="form-control" type="text" placeholder="Last Name"
                                                    name="lname" value="<?php echo $row['lname'] ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Address:</label>
                                                <input class="form-control" type="email" placeholder="Email Address"
                                                    name="email" value="<?php echo $row['email'] ?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mobile No.:</label>
                                                <input class="form-control" type="text" placeholder="Mobile No."
                                                    name="mobile" value="<?php echo $row['mobile'] ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Feedback Detail:</label>
                                                <textarea class="form-control" rows="3"
                                                    placeholder="Write your feedback here"
                                                    name="feedback"><?php echo $row['feedback'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="weight-600">Gender Radio:</label><br>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="Male1" name="gender_radio" value="Male"
                                                            class="custom-control-input"
                                                            <?php if ($row["gender_radio"] == "Male") {
                                                                                                                                                                    echo "Checked";
                                                                                                                                                                } ?>>
                                                        <label class="custom-control-label" for="Male1">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-5">
                                                        <input type="radio" id="Female1" name="gender_radio"
                                                            value="Female" class="custom-control-input"
                                                            <?php if ($row["gender_radio"] == "Female") {
                                                                                                                                                                        echo "Checked";
                                                                                                                                                                    } ?>>
                                                        <label class="custom-control-label" for="Female1">Female</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-5">
                                                        <input type="radio" id="Other1" name="gender_radio"
                                                            value="Other" class="custom-control-input"
                                                            <?php if ($row["gender_radio"] == "Other") {
                                                                                                                                                                    echo "Checked";
                                                                                                                                                                } ?>>
                                                        <label class="custom-control-label" for="Other1">Other</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="weight-600">Gender Checkbox</label>
                                                    <div class="custom-control custom-checkbox mb-5">
                                                        <input type="checkbox" class="custom-control-input" id="Male2"
                                                            name="gender_checkbox[]" value="Male"
                                                            <?php if (in_array("Male", $gender_checkbox)) {
                                                                                                                                                                            echo "Checked";
                                                                                                                                                                        } ?> />
                                                        <label class="custom-control-label" for="Male2">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-5">
                                                        <input type="checkbox" class="custom-control-input" id="Female2"
                                                            name="gender_checkbox[]" value="Female"
                                                            <?php if (in_array("Female", $gender_checkbox)) {
                                                                                                                                                                                echo "Checked";
                                                                                                                                                                            } ?> />
                                                        <label class="custom-control-label" for="Female2">Female</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-5">
                                                        <input type="checkbox" class="custom-control-input" id="Other2"
                                                            name="gender_checkbox[]" value="Other"
                                                            <?php if (in_array("Other", $gender_checkbox)) {
                                                                                                                                                                            echo "Checked";
                                                                                                                                                                        } ?> />
                                                        <label class="custom-control-label" for="Other2">Other</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="form-label">Gender Select</label>
                                                    <label id="gender_select-error" class="error"
                                                        for="gender_select"></label>
                                                    <select class="custom-select col-12" name="gender_select">
                                                        <option selected disabled>Select Gender</option>
                                                        <option value="Male" <?php if ($row['gender_select'] == "Male") {
                                                                                            echo "Selected";
                                                                                        } ?>>Male</option>
                                                        <option value="Female" <?php if ($row['gender_select'] == "Female") {
                                                                                            echo "Selected";
                                                                                        } ?>>Female</option>
                                                        <option value="Other" <?php if ($row['gender_select'] == "Other") {
                                                                                            echo "Selected";
                                                                                        } ?>>Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="" class="btn btn-primary">Update</button>
                                            <a type="button" href="../main/feedbacks.php"
                                                class="btn btn-secondary">Cancel</a>
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
                    <h3 class="pl-10 mb-20 text-blue">Add Feedback</h3>
                    <div class="card-box height-90-p pb-0">
                        <div class="tab-content">
                            <!-- Timeline Tab start -->
                            <div class="pd-20">
                                <form action="" method="POST" id="feedback_form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name:</label>
                                                <input class="form-control" type="text" placeholder="First Name"
                                                    name="fname" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name:</label>
                                                <input class="form-control" type="text" placeholder="Last Name"
                                                    name="lname" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email Address:</label>
                                                <input class="form-control" type="email" placeholder="Email Address"
                                                    name="email" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mobile No.:</label>
                                                <input class="form-control" type="number" placeholder="Mobile No."
                                                    name="mobile" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Feedback Detail:</label>
                                                <textarea class="form-control" placeholder="Write your feedback here"
                                                    name="feedback"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="weight-600">Gender Radio:</label><br>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="Male1" name="gender_radio" value="Male"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="Male1">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-5">
                                                        <input type="radio" id="Female1" name="gender_radio"
                                                            value="Female" class="custom-control-input">
                                                        <label class="custom-control-label" for="Female1">Female</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-5">
                                                        <input type="radio" id="Other1" name="gender_radio"
                                                            value="Other" class="custom-control-input">
                                                        <label class="custom-control-label" for="Other1">Other</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="weight-600">Gender Checkbox</label>
                                                    <div class="custom-control custom-checkbox mb-5">
                                                        <input type="checkbox" class="custom-control-input" id="Male2"
                                                            name="gender_checkbox[]" value="Male" />
                                                        <label class="custom-control-label" for="Male2">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-5">
                                                        <input type="checkbox" class="custom-control-input" id="Female2"
                                                            name="gender_checkbox[]" value="Female" />
                                                        <label class="custom-control-label" for="Female2">Female</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox mb-5">
                                                        <input type="checkbox" class="custom-control-input" id="Other2"
                                                            name="gender_checkbox[]" value="Other" />
                                                        <label class="custom-control-label" for="Other2">Other</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="form-label">Gender Select</label>
                                                    <label id="gender_select-error" class="error"
                                                        for="gender_select"></label>
                                                    <select class="custom-select col-12" name="gender_select">
                                                        <option selected disabled>Select Gender</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="" class="btn btn-primary">Submit</button>
                                    <a type="button" href="../main/feedbacks.php" class="btn btn-secondary">Cancel</a>
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
    <script src="../assets/vendors/jquery-validation/jquery.validate.min.js"></script>
    <script>
    $(function() {
        $("#feedback_form").validate({
            rules: {
                fname: "required",
                lname: "required",
                feedback: "required",
                mobile: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                },
                email: {
                    required: true,
                    email: true,
                },
                gender_radio: {
                    required: true,
                },
                "gender_checkbox[]": {
                    required: true,
                },
                gender_select: {
                    required: true,
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
    </script>
    <!-- Google Tag Manager (noscript) -->

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>