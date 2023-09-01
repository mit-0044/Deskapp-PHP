    <?php
    require 'partials/_dbconnect.php';
    $error = false;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email = htmlspecialchars($_POST['user_email'], ENT_QUOTES);
        $password = htmlspecialchars($_POST['user_password'], ENT_QUOTES);

        $sql = "SELECT * from `users` where user_email='$email' ";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if (empty(trim($email))) {
            $error = "Please Enter Your Email.";
        } elseif (empty(trim($password))) {
            $error = "Please Enter Your Password.";
        } elseif (!$num) {
            $error = "Email is doesn't exist.";
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $verify = password_verify($password, $row['user_pwd']);
                if ($verify) {
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['fname'] = $row['user_fname'];
                    $_SESSION['lname'] = $row['user_lname'];
                    $_SESSION['email'] = $row['user_email'];
                    $_SESSION['type'] = $row['user_type'];
                    $_SESSION['id'] = $row['id'];

                    if (isset($_POST['remember_me'])) {
                        setcookie("user_email", $_POST["user_email"], time() + (10 * 365 * 24 * 60 * 60));
                        setcookie("user_password", $_POST["user_password"], time() + (10 * 365 * 24 * 60 * 60));
                        header("location: main/dashboard.php");
                    } else {
                        header("location: main/dashboard.php");
                    }
                } else {
                    $error = "Invalid Credentials.";
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
        <link rel="apple-touch-icon" sizes="180x180" href="assests/vendors/images/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="assests/vendors/images/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="assests/vendors/images/favicon-16x16.png" />

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
            rel="stylesheet" />
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="assests/vendors/styles/core.css" />
        <link rel="stylesheet" type="text/css" href="assests/vendors/styles/icon-font.min.css" />
        <link rel="stylesheet" type="text/css" href="assests/vendors/styles/style.css" />
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
                    <a href="login.php">
                        <img src="assests/vendors/images/deskapp-logo.svg" alt="" />
                    </a>
                </div>
            </div>
        </div>
        <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-7">
                        <img src="assests/vendors/images/login-page-img.png" alt="" />
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="login-box bg-white box-shadow border-radius-10">
                            <div class="login-title">
                                <h2 class="text-center text-primary">Login To Deskapp</h2>
                            </div>
                            <?php
                            if ($error) {
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									<strong>Error!  </strong>' . $error . '
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>';
                            }
                            ?>
                            <form id="Form" action="" method="POST">
                                <div class="col-md-12 p-0">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Email" name="user_email"
                                            value="<?php if (isset($_COOKIE['user_email'])) {
                                                                                                                                    echo $_COOKIE['user_email'];
                                                                                                                                } ?>" />
                                    </div>
                                </div>
                                <div class="col-md-12 p-0">
                                    <div class="form-group">
                                        <input type="password" name="user_password" id="pwd"
                                            class="form-control form-control-lg" placeholder="Password"
                                            value="<?php if (isset($_COOKIE['user_password'])) {
                                                                                                                                                                    echo $_COOKIE['user_password'];
                                                                                                                                                                }  ?>" />
                                    </div>
                                    <div class="input-group-append custom">
                                        <span class="input-group-text">
                                            <a type="button" id="showPwdBtn" class="bg-transparent m-0 p-0"
                                                style="border: transparent !important;">
                                                Hide
                                            </a>
                                            <a type="button" id="hidePwdBtn" class="bg-transparent m-0 p-0"
                                                style="border: transparent !important;">
                                                Show
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="row pb-30">
                                    <div class="col-6">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberMe"
                                                name="remember_me" />
                                            <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="forgot-password">
                                            <a href="partials/forgot-password.php">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group mb-0">
                                            <button class="btn btn-primary btn-lg btn-block"
                                                type="submit">Submit</button>
                                        </div>
                                        <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
                                            OR
                                        </div>
                                        <div class="input-group mb-0">
                                            <a class="btn btn-outline-primary btn-lg btn-block"
                                                href="main/register.php">Create Account</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assests/vendors/scripts/core.js"></script>
        <script src="assests/vendors/scripts/script.min.js"></script>
        <script src="assests/vendors/scripts/process.js"></script>
        <script src="assests/vendors/scripts/layout-settings.js"></script>
        <script src="assests/vendors/jquery-validation/jquery.validate.min.js"></script>
        <script>
        $(document).ready(function() {
            let passInput = $("#pwd");
            $('#showPwdBtn').hide()
            $('#hidePwdBtn').on('click', function() {
                if (passInput.attr('type') === 'password') {
                    passInput.attr('type', 'text');
                    $('#showPwdBtn').show()
                    $('#hidePwdBtn').hide()
                }
            });
            $('#showPwdBtn').on('click', function() {
                let passInput = $("#pwd");
                if (passInput.attr('type') === 'text') {
                    passInput.attr('type', 'password');
                    $('#showPwdBtn').hide()
                    $('#hidePwdBtn').show()
                }
            });
        });
        </script>

        <script>
        $(function() {
            $("#Form").validate({
                rules: {
                    user_email: {
                        required: true,
                        email: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    user_password: {
                        required: true,
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
            <?php if ($error) {
                    echo "$('#alert-modal').modal('show');";
                } ?>
        });
        </script>
        <script>
        const rmCheck = document.getElementById("rememberMe"),
            emailInput = document.getElementById("email");

        if (localStorage.checkbox && localStorage.checkbox !== "") {
            rmCheck.setAttribute("checked", "checked");
            emailInput.value = localStorage.username;
        } else {
            rmCheck.removeAttribute("checked");
            emailInput.value = "";
        }

        function lsRememberMe() {
            if (rmCheck.checked && emailInput.value !== "") {
                localStorage.username = emailInput.value;
                localStorage.checkbox = rmCheck.value;
            } else {
                localStorage.username = "";
                localStorage.checkbox = "";
            }
        }
        </script>
    </body>

    </html>