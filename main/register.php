<?php
include "../partials/_dbconnect.php";
$success = false;
$error = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    error_reporting(0);
    $user_fname = htmlspecialchars($_POST['user_fname'], ENT_QUOTES);
    $user_lname = htmlspecialchars($_POST['user_lname'], ENT_QUOTES);
    $user_mobile = htmlspecialchars($_POST['user_mobile'], ENT_QUOTES);
    $user_email = htmlspecialchars($_POST['user_email'], ENT_QUOTES);
    $user_password = htmlspecialchars($_POST['user_password'], ENT_QUOTES);
    $hash = password_hash($user_password, PASSWORD_DEFAULT);
    $user_cpassword = htmlspecialchars($_POST['user_cpassword'], ENT_QUOTES);
    $user_city = htmlspecialchars($_POST['user_city'], ENT_QUOTES);
    $user_state = htmlspecialchars($_POST['user_state'], ENT_QUOTES);
    $user_country = htmlspecialchars($_POST['user_country'], ENT_QUOTES);

    $sql = "SELECT * from `admin` where user_email='$user_email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num > 0) {
        $error = "Email is already exist. <br>
		Please enter another email.";
    } else {

        $sql = "INSERT INTO `admin`(`user_fname`,`user_lname`,`user_email`, `user_mobile`, `user_pwd`,`user_city`, `user_state`, `user_country`) VALUES ('$user_fname','$user_lname','$user_email','$user_mobile','$hash','$user_city', '$user_state', '$user_country')";
        $result = mysqli_query($conn, $sql);

        $add = mysqli_insert_id($conn);
        $sql2 = "INSERT INTO `admin_image`(`user_id`,`user_image`) VALUES ('$add','images.png')";
        $result2 = mysqli_query($conn, $sql2);
        if ($result) {
            $success = true;
        } else {
            $error = "Something went wrong";
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
    <link rel="stylesheet" type="text/css" href="../assets/src/plugins/jquery-steps/jquery.steps.css" />
    <link rel="stylesheet" type="text/css" href="../assets/vendors/styles/style.css" />

    <style>
    .error {
        color: red;
    }
    </style>
</head>

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="#">
                    <img src="../assets/vendors/images/deskapp-logo.svg" alt="" />
                </a>
            </div>
            <div class="login-menu">
                <ul>
                    <li><a href="../index.php">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="../assets/vendors/images/register-page-img.png" alt="" />
                </div>
                <div class="col-md-6">
                    <div class="register bg-white box-shadow border-radius-10">
                        <div class="wizard-content">
                            <div class="col-md-12 col-sm-12 mb-30">
                                <h3 class="pl-10 pt-15">Register Here</h3>
                                <div class="tab-content">
                                    <div class="pd-20">
                                        <form action="" method="POST" id="registerForm">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>First Name :</label>
                                                        <input class="form-control" type="text" placeholder="First Name"
                                                            name="user_fname" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Last Name :</label>
                                                        <input class="form-control" type="text" placeholder="Last Name"
                                                            name="user_lname" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email Address :</label>
                                                        <input class="form-control" type="email"
                                                            placeholder="Email Address" name="user_email" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Mobile No. :</label>
                                                        <input class="form-control" type="number"
                                                            placeholder="Mobile No." name="user_mobile" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Password :</label>
                                                        <input class="form-control" type="password"
                                                            placeholder="Password" name="user_password"
                                                            id="user_password" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Confirm Password :</label>
                                                        <input class="form-control" type="password"
                                                            placeholder="Confirm Password" name="user_cpassword" />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Country :</label>
                                                        <select class="custom-select col-12 countries"
                                                            name="user_country">
                                                            <option selected disabled>Select Country</option>
                                                            <?php
                                                            $sql = "SELECT * FROM `country`";
                                                            $result = mysqli_query($conn, $sql);
                                                            while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                            <option value="<?php echo $row['countryid'] ?>">
                                                                <?php echo $row['country'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>State :</label>
                                                        <select class="custom-select col-12 states" name="user_state">
                                                            <option selected disabled>Select State</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>City :</label>
                                                        <select class="custom-select col-12 cities" name="user_city">
                                                            <option selected disabled>Select City</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary">Register</button>
                                                    <a type="button" href="../index.php"
                                                        class="btn btn-secondary">Cancel</a>
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
        </div>
    </div>
    <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center font-18">
                    <h3 class="mb-20">Success!</h3>
                    <div class="mb-30 text-center">
                        <img src="../assets/vendors/images/success.png" />
                    </div>
                    You are registered !!<br>
                    Now, you can login.
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="../index.php" type="button" class="btn btn-primary">
                        Ok
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="alert-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog">
            <div class="modal-content bg-danger text-white">
                <div class="modal-body text-center">
                    <h3 class="text-white mb-15">
                        <i class="fa fa-exclamation-triangle"></i> Error
                    </h3>
                    <p>
                        <?php echo $error; ?>
                    </p>
                    <button type="button" class="btn btn-light" data-dismiss="modal">
                        Ok
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/vendors/scripts/core.js"></script>
    <script src="../assets/vendors/scripts/script.min.js"></script>
    <script src="../assets/vendors/scripts/process.js"></script>
    <script src="../assets/vendors/scripts/layout-settings.js"></script>
    <script src="../assets/vendors/jquery-validation/jquery.validate.min.js"></script>
    <script>
    $(function() {
        $("#registerForm").validate({
            rules: {
                user_fname: "required",
                user_lname: "required",
                user_password: "required",
                user_city: "required",
                user_state: "required",
                user_country: "required",
                user_mobile: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                },
                user_email: {
                    required: true,
                    email: true,
                },
                user_gender: {
                    required: true,
                },
                user_cpassword: {
                    required: true,
                    equalTo: "#user_password",
                },
            },
            messages: {
                user_mobile: {
                    minlength: "Please enter 10 digits.",
                    maxlength: "Please enter 10 digits only.",
                },
                user_cpassword: {
                    equalTo: "Confirm Password Must Be Same As Password."
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
    $(function() {
        var $signupForm = $('#registerForm');

        $signupForm.validate({
            errorElement: 'em'
        });

        $signupForm.formToWizard({
            finish: 'SaveAccount',
            next: 'btn btn-primary next',
            previous: 'btn btn-default prev',
            buttonTag: 'button',
            validateBeforeNext: function(form, step) {
                var stepIsValid = true;
                var validator = form.validate();
                $(':input', step).each(function(index) {
                    var xy = validator.element(this);
                    stepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
                });
                return stepIsValid;
            },
            progress: function(i, count) {
                $('#progress-complete').width('' + (i / count * 100) + '%');
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
                    // $(".cities  option:gt(0)").remove();
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
        <?php if ($success) {
                echo "$('#success-modal').modal('show');";
            } ?>
        <?php if ($error) {
                echo "$('#alert-modal').modal('show');";
            } ?>
    });
    </script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.php?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>