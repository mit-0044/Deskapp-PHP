<?php
$success = false;
$error = false;
include "../partials/_dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $digit_1 = htmlspecialchars($_POST['digit_1'], ENT_QUOTES);
    $digit_2 = htmlspecialchars($_POST['digit_2'], ENT_QUOTES);
    $digit_3 = htmlspecialchars($_POST['digit_3'], ENT_QUOTES);
    $digit_4 = htmlspecialchars($_POST['digit_4'], ENT_QUOTES);
    $digit_5 = htmlspecialchars($_POST['digit_5'], ENT_QUOTES);
    $digit_6 = htmlspecialchars($_POST['digit_6'], ENT_QUOTES);

    $adm_otp = $digit_1 . $digit_2 . $digit_3 . $digit_4 . $digit_5 . $digit_6;
    $adm_email = $_GET['mail'];
    
    $sql = "SELECT * from `admin` where adm_email='$adm_email'";
    $result = mysqli_query($conn, $sql);
    if (empty($digit_1)) {
        $error = "All fields must be required.";
    } elseif (empty(trim($digit_2))) {
        $error = "All fields must be required.";
    } elseif (empty($digit_3)) {
        $error = "All fields must be required.";
    } elseif (empty($digit_4)) {
        $error = "All fields must be required.";
    } elseif (empty($digit_5)) {
        $error = "All fields must be required.";
    } elseif (empty($digit_6)) {
        $error = "All fields must be required.";
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($adm_otp == $row['adm_otp']) {
                echo "OTP Matched";
                // header("location: reset-password.php");
                header('location: reset-password.php?mail='.$adm_email.'');
            } else {
                $error = "Something went wrong";
            }
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

        .digit-group input {
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            font-weight: 800;
            color: black;
            margin: 0 2px;
            border-radius: 15px;
            border: 3px solid #1b00ff;
        }

        .prompt {
            margin-bottom: 20px;
            color: white;
        }

        .form-errors {
            color: red;
        }
    </style>
</head>

<body>
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a>
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
                            <h2 class="text-center text-primary">Forgot Password</h2>
                        </div>
                        <div id="success_msg">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Successful! </strong> OTP has been sent to your email.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <?php
                        if ($error) {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Error!  </strong>' . $error . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>';
                        }
                        ?>
                        <h6 class="text-center mb-20">Enter your OTP to reset your password</h6>
                        <div id="OTP" class="digit-group mb-20" data-group-name="digits" data-autosubmit="false">
                            <form action="" method="POST" id="Form">
                                <input type="text" id="digit-1" name="digit_1" data-next="digit-2" placeholder="-" class="required" />
                                <input type="text" id="digit-2" name="digit_2" data-next="digit-3" data-previous="digit-1" placeholder="-" class="required" />
                                <input type="text" id="digit-3" name="digit_3" data-next="digit-4" data-previous="digit-2" placeholder="-" class="required" />
                                <input type="text" id="digit-4" name="digit_4" data-next="digit-5" data-previous="digit-3" placeholder="-" class="required" />
                                <input type="text" id="digit-5" name="digit_5" data-next="digit-6" data-previous="digit-4" placeholder="-" class="required" />
                                <input type="text" id="digit-6" name="digit_6" data-previous="digit-5" placeholder="-" class="required" />
                                <label id="digit-2-error" class="error" for="digit-2"></label>
                                <div class="text-center pt-20">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Verify</button>
                                </div>
                            </form>
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
    <script src="../assests/vendors/jquery-validation/jquery.validate.min.js"></script>
    <script>
        <?php if ($error) { ?>
            $("#success_msg").hide();
        <?php } ?>
    </script>
    <script>
        $(function() {
            $("#Form").validate({
                rules: {
                    digit_1: "required",
                    digit_2: "required",
                    digit_3: "required",
                    digit_4: "required",
                    digit_5: "required",
                    digit_6: "required",
                },
                messages: {
                    digit_1: 'All fields must be required',
                    digit_2: 'All fields must be required',
                    digit_3: 'All fields must be required',
                    digit_4: 'All fields must be required',
                    digit_5: 'All fields must be required',
                    digit_6: 'All fields must be required',
                },
                
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>
    <script>
        $('.digit-group').find('input').each(function() {
            $(this).attr('maxlength', 1);
            $(this).on('keyup', function(e) {
                var parent = $($(this).parent());

                if (e.keyCode === 8 || e.keyCode === 37) {
                    var prev = parent.find('input#' + $(this).data('previous'));

                    if (prev.length) {
                        $(prev).select();
                    }
                } else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (
                        e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
                    var next = parent.find('input#' + $(this).data('next'));

                    if (next.length) {
                        $(next).select();
                    } else {
                        if (parent.data('autosubmit')) {
                            parent.submit();
                        }
                    }
                }
            });
        });
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>