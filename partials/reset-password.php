<?php
$success = false;
$error = false;
include "../partials/_dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
    $cpassword = htmlspecialchars($_POST['cpassword'], ENT_QUOTES);
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $adm_email = $_GET['mail'];
    if (empty(trim($password))) {
        $error = "Please Enter New Password.";
    } elseif (empty(trim($cpassword))) {
        $error = "Please Enter Confirm New Password.";
    } else {
        $sql = "UPDATE `admin` SET `adm_pwd` = '$hash' WHERE `admin`.`adm_email` = '$adm_email'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $success = true;
            // echo "Successfu ll";
            // header('location: ../main/index.php?key=update');
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
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="">
                    <img src="../assests/vendors/images/deskapp-logo.svg" alt="" />
                </a>
            </div>
        </div>
    </div>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="../assests/vendors/images/forgot-password.png" alt="" />
                </div>
                <div class="col-md-6">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Reset Password</h2>
                        </div>
                        <div id="success_msg">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Successful! </strong> OTP verification successful.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <h6 class="mb-20">Enter your new password, confirm and submit</h6>
                        <form action="" method="POST" id="Form">
                            <div class="col-md-12 p-0">
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="New Password" name="password" id="password" />
                                </div>
                            </div>
                            <div class="col-md-12 p-0">
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Confirm New Password" name="cpassword" id="cpassword" />
                                </div>
                            </div>
                            <div class="row pb-20">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="show_password" />
                                        <label class="custom-control-label" for="show_password">Show Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="align-items-center">
                                <!-- <div class="col-5"> -->
                                <div class="input-group mb-0">
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <a type="button" href="../main/index.php" class="btn btn-secondary">Cancel</a>
                                </div>
                                <!-- </div> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center font-18">
                    <h3 class="mb-20">Successfull!</h3>
                    <div class="mb-30 text-center">
                        <img src="../assests/vendors/images/success.png" />
                    </div>
                    You are registered !!<br>
                    Now, you can login.
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="../main/dashboard.php" type="button" class="btn btn-primary">
                        Ok
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="alert-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
    <!-- js -->
    <script src="../assests/vendors/scripts/core.js"></script>
    <script src="../assests/vendors/scripts/script.min.js"></script>
    <script src="../assests/vendors/scripts/process.js"></script>
    <script src="../assests/vendors/scripts/layout-settings.js"></script>
    <script src="../assests/vendors/jquery-validation/jquery.validate.min.js"></script>
    <script>
        $(function() {
            $("#Form").validate({
                rules: {
                    password: "required",
                    cpassword: {
                        required: true,
                        equalTo: password,
                    },
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#show_password').click(function() {
                if (this.checked) {
                    document.getElementById('password').type = "text";
                    document.getElementById('cpassword').type = "text";
                } else {
                    document.getElementById('password').type = "password";
                    document.getElementById('cpassword').type = "password";
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            <?php if ($success) { ?>
                $('#success-modal').modal('show');
            <?php } ?>
            <?php if ($error) { ?>
                $('#alert-modal').modal('show');
            <?php } ?>
        });
    </script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>