<?php
$success = false;
include "../partials/_dbconnect.php";
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../main/index.php");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {
        $user_fname = htmlspecialchars($_POST['user_fname'], ENT_QUOTES);
        $user_lname = htmlspecialchars($_POST['user_lname'], ENT_QUOTES);
        $user_gender = $_POST['user_gender'];
        $user_mobile = htmlspecialchars($_POST['user_mobile'], ENT_QUOTES);
        $user_city = htmlspecialchars($_POST['user_city'], ENT_QUOTES);
        $user_state = $_POST['user_state'];
        $user_country = $_POST['user_country'];
        $user_gmail = urlencode($_POST['user_gmail']);
        $user_twitter = urlencode($_POST['user_twitter']);
        $user_linkedin = urlencode($_POST['user_linkedin']);
        $user_github = urlencode($_POST['user_github']);
        $user_facebook = urlencode($_POST['user_facebook']);
        $user_youtube = urlencode($_POST['user_youtube']);
        $user_instagram = urlencode($_POST['user_instagram']);
        $user_dropbox = urlencode($_POST['user_dropbox']);

        $sql = "UPDATE `users` SET `user_fname`='$user_fname',`user_lname`='$user_lname',`user_gender`='$user_gender',`user_mobile`='$user_mobile',`user_city`='$user_city',`user_state`='$user_state',`user_country`='$user_country',`user_gmail`='$user_gmail',`user_twitter`='$user_twitter',`user_linkedin`='$user_linkedin',`user_github`='$user_github',`user_facebook`='$user_facebook',`user_youtube`='$user_youtube',`user_instagram`='$user_instagram',`user_dropbox`='$user_dropbox' WHERE `users`.`id`= '" . $_SESSION['id'] . "'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $success = true;
            // header("location: ../partials/profile.php");
        }
    }
    if (isset($_POST['imageUpdate'])) {
        foreach ((array) $_FILES['user_image']['name'] as $key => $val) {
            $img_name = $_FILES['user_image']['name'];
            $tmp_name = $_FILES['user_image']['tmp_name'];
            $size = $_FILES['user_image']['size'];
            $folder = "../assets/user_image/";
            $path = $folder . $img_name;
            if ($_FILES['user_image']['size'] < 2097152) {

                $move = move_uploaded_file($tmp_name, $path);
                if ($move) {
                    $sql = "UPDATE `user_image` SET `user_image` = '$img_name' WHERE `user_image`.`id` = " . $_SESSION['id'] . " ";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        header('location: ../main/profile.php');
                    }
                }
            } else {
                $statusMsg = "Uploaded File Size Is " . $_FILES['user_image']['size'] . '<br>';
            }
        }
    } else {
        echo "<script>
				alert('Please select the image less than 2 MB')
			</script>";
        header('location: ../main/profile.php');
    }
    if (isset($_GET['ukey'])) {
        $update = true;
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="../assets/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/vendors/styles/style.css" />
    <link rel="stylesheet" type="text/css" href="../assets/src/plugins/cropperjs/dist/cropper.css">
    <link rel="stylesheet" type="text/css" href="../assets/src/plugins/dropzone/src/dropzone.css">

</head>

<body>
    <?php include '../partials/_navbar.php' ?>

    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                    <div class="mb-40">
                        <div class="da-card">
                            <div class="da-card-photo">
                                <?php
                                $sql = "SELECT * FROM user_image WHERE user_id = " . $_SESSION['id'] . "";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($result)) {
                                    if (empty($row['user_image'])) { ?>
                                        <img src="../assets/images/images.png" alt="Image not exist" />
                                    <?php } else { ?>
                                        <img src="../assets/user_image/<?php echo $row['user_image'] ?>" alt="Admin Image" />
                                <?php }
                                } ?>
                                <div class="da-overlay">
                                    <div class="da-social">
                                        <ul class="clearfix">
                                            <li>
                                                <a type="button" id="upload_image_btn"><i class="fa fa-edit"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="da-card-content text-center p-2">
                                <?php
                                $sql = "SELECT * FROM users WHERE id = " . $_SESSION['id'] . "";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $country = $row['user_country'];
                                    $state = $row['user_state'];
                                    $city = $row['user_city'];
                                ?>
                                    <div class="col">
                                        <div class="da-card-content">
                                            <h4 class="text-blue"><?php echo $row['user_fname'];
                                                                    echo " ";
                                                                    echo $row['user_lname'] ?></h4>
                                            <span class="weight-600"><?php echo $row['user_type']; ?></span>
                                        </div>
                                    </div>
                            </div>
                            <div class="row mx-2" id="uploadDiv">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group float-left" id="uploadDiv2">
                                        <label class="float-left">Upload Image</label>
                                        <input type="file" class="form-control-file form-control" accept="image/*" id="upload_image" name="user_image">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit" name="imageUpdate" id="updateButton">Upload</button>
                                        <button class="btn btn-secondary" type="button" id="cancelButton">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="height-100-p">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                                    <div class="row pd-20">
                                        <div class="col-md-6 profile-info">
                                            <h3 class="mb-20 pb-3">Contact Information</h3>
                                            <ul>
                                                <li>
                                                    <h6 class="text-blue">Email Address:</h6>
                                                    <p><?php echo $row['user_email'] ?></p>
                                                </li>
                                                <li>
                                                    <h6 class="text-blue">Mobile Number:</h6>
                                                    <p><?php echo $row['user_mobile'];
                                                    } ?></p>
                                                </li>
                                                <li>
                                                    <h6 class="text-blue">City:</h6>
                                                    <p><?php
                                                        $sql = "SELECT * FROM `city`";
                                                        $result = mysqli_query($conn, $sql);
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            if ($row['id'] == $city) {
                                                                echo $row['name'];
                                                            }
                                                        }
                                                        ?></p>
                                                </li>
                                                <li>
                                                    <h6 class="text-blue">State:</h6>
                                                    <p><?php
                                                        $sql = "SELECT * FROM `state`";
                                                        $result = mysqli_query($conn, $sql);
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            if ($row['id'] == $state) {
                                                                echo $row['name'];
                                                            }
                                                        }
                                                        ?></p>
                                                </li>
                                                <li>
                                                    <h6 class="text-blue">Country:</h6>
                                                    <p>
                                                        <?php
                                                        $sql = "SELECT * FROM `country`";
                                                        $result = mysqli_query($conn, $sql);
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            if ($row['id'] == $country) {
                                                                echo $row['name'];
                                                            }
                                                        }
                                                        ?>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 profile-info">
                                            <h3 class="mb-20 pb-3">Social Links</h3>
                                            <div class="row d-flex flex-direction-between">
                                                <div class="col-md-4">
                                                    <ul class="clearfix">
                                                        <?php
                                                        $sql = "SELECT * FROM `users` WHERE id = " . $_SESSION['id'] . "";
                                                        $result = mysqli_query($conn, $sql);
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                            <li>
                                                                <a href="<?php echo urldecode($row['user_gmail']) ?>" class="pb-5" target="_blank"><img src="../assets/images/social_icons/gmail.svg" alt="Gmail" /></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo urldecode($row['user_twitter']) ?>" class="pb-5" target="_blank"><img src="../assets/images/social_icons/twitter.svg" alt="Twitter" /></a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo urldecode($row['user_linkedin']) ?>" class="pb-5" target="_blank"><img src="../assets/images/social_icons/linkedin.svg" alt="Linked In" /></a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo urldecode($row['user_github']) ?>" class="pb-5" target="_blank"><img src="../assets/images/social_icons/github.svg" alt="GitHub" /></a>
                                                            </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="clearfix">
                                                        <li>
                                                            <a href="<?php echo urldecode($row['user_facebook']) ?>" class="pb-5" target="_blank"><img src="../assets/images/social_icons/facebook.svg" alt="Facebook" /></a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo urldecode($row['user_youtube']) ?>" class="pb-5" target="_blank"><img src="../assets/images/social_icons/youtube.svg" alt="Youtube" /></a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo urldecode($row['user_instagram']) ?>" class="pb-5" target="_blank"><img src="../assets/images/social_icons/instagram.svg" alt="Instagram" /></a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo urldecode($row['user_dropbox']) ?>" class="pb-5" target="_blank"><img src="../assets/images/social_icons/dropbox.svg" alt="Dropbox" /></a>
                                                        </li>
                                                    </ul>
                                                <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-0 text-right">
                                            <button class="btn btn-primary" id="" data-toggle="modal" data-target="#bd-edit-modal-lg" data-backdrop="static" type="button">Edit Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- edit modal start -->
    <div class="col-md-4 col-sm-12 mb-30">
        <div class="modal fade bs-edit-modal-lg" id="bd-edit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-blue" id="myLargeModalLabel">
                            Edit Profile Information
                        </h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="row">
                                <?php
                                $sql = "SELECT * FROM users WHERE id = " . $_SESSION['id'] . "";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $country == $row['user_country'];
                                    $state == $row['user_state'];
                                    $city == $row['user_city'];
                                ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name:<span class="text-danger font-20">*</span></label>
                                            <input class="form-control" type="text" placeholder="First Name" name="user_fname" value="<?php echo $row['user_fname']; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name:<span class="text-danger font-20">*</span></label>
                                            <input class="form-control" type="text" placeholder="Last Name" name="user_lname" value="<?php echo $row['user_lname']; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mobile No.:<span class="text-danger font-20">*</span></label>
                                            <input class="form-control" type="text" placeholder="Mobile No." name="user_mobile" value="<?php echo $row['user_mobile']; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email:<span class="text-danger font-20">*</span></label>
                                            <input class="form-control" type="text" placeholder="Email Address" name="user_email" value="<?php echo $row['user_email']; ?>" disabled />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Gender:<span class="text-danger font-20">*</span></label>
                                            <div class="d-flex">
                                                <div class="custom-control custom-radio mb-5">
                                                    <input type="radio" id="male" name="user_gender" class="custom-control-input" <?php if ($row['user_gender'] == 'Male') {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?> />
                                                    <label class="custom-control-label" for="male">Male</label>
                                                </div>
                                                <div class="custom-control custom-radio mb-5">
                                                    <input type="radio" id="female" name="user_gender" class="custom-control-input" <?php if ($row['user_gender'] == 'Female') {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?> />
                                                    <label class="custom-control-label" for="female">Female</label>
                                                </div>
                                                <div class="custom-control custom-radio mb-5">
                                                    <input type="radio" id="Other" name="user_gender" class="custom-control-input" <?php if ($row['user_gender'] == 'Other') {
                                                                                                                                        echo 'checked';
                                                                                                                                    } ?> />
                                                    <label class="custom-control-label" for="Other">Other</label>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Country :</label>
                                            <select class="custom-select countries" name="user_country">
                                                <option selected disabled>Select Country</option>
                                                <?php
                                                $sql = "SELECT * FROM `country`";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <option value="<?php echo $row['id']; ?>" <?php if ($row['id'] == $country) {
                                                                                                    echo 'selected';
                                                                                                } ?>>
                                                        <?php echo $row['name']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>State :</label>
                                            <select class="custom-select states" name="user_state">
                                                <option selected disabled>Select State</option>
                                                <?php
                                                $sql = "SELECT * FROM `state` WHERE country_id = $country";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <option value="<?php echo $row['id']; ?>" <?php if ($row['id'] == $state) {
                                                                                                    echo 'selected';
                                                                                                } ?>>
                                                        <?php echo $row['name']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>City :</label>
                                            <select class="custom-select cities" name="user_city">
                                                <option selected disabled>Select City</option>
                                                <?php
                                                $sql = "SELECT * FROM `city` WHERE state_id = $state";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <option value="<?php echo $row['id']; ?>" <?php if ($row['id'] == $city) {
                                                                                                    echo 'selected';
                                                                                                } ?>>
                                                        <?php echo $row['name']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <?php
                                $sql = "SELECT * FROM `users` WHERE id = " . $_SESSION['id'] . "";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gmail:</label>
                                            <input class="form-control" type="url" placeholder="Gmail" name="user_gmail" value="<?php echo urldecode($row['user_gmail']) ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Facebook:</label>
                                            <input class="form-control" type="text" placeholder="Facebook" name="user_facebook" value="<?php echo urldecode($row['user_facebook']) ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Twitter:</label>
                                            <input class="form-control" type="text" placeholder="Twitter" name="user_twitter" value="<?php echo urldecode($row['user_twitter']) ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Youtube:</label>
                                            <input class="form-control" type="text" placeholder="Youtube" name="user_youtube" value="<?php echo urldecode($row['user_youtube']) ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>LinkedIn:</label>
                                            <input class="form-control" type="text" placeholder="LinkedIn" name="user_linkedin" value="<?php echo urldecode($row['user_linkedin']) ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Instagram:</label>
                                            <input class="form-control" type="text" placeholder="Instagram" name="user_instagram" value="<?php echo urldecode($row['user_instagram']) ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>GitHub:</label>
                                            <input class="form-control" type="text" placeholder="GitHub" name="user_github" value="<?php echo urldecode($row['user_github']) ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Dropbox:</label>
                                            <input class="form-control" type="text" placeholder="Dropbox" name="user_dropbox" value="<?php echo urldecode($row['user_dropbox']) ?>" />
                                        </div>
                                    </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" class="btn btn-primary">
                            Save changes
                        </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/vendors/scripts/core.js"></script>
    <script src="../assets/vendors/scripts/script.min.js"></script>
    <script src="../assets/vendors/scripts/process.js"></script>
    <script src="../assets/vendors/scripts/layout-settings.js"></script>
    <script src="../assets/src/plugins/sweetalert2/sweet-alert.min.js"></script>
    <script src="../assets/src/plugins/dropzone/src/dropzone.js"></script>
    <script src="../assets/src/plugins/cropperjs/dist/cropper.js"></script>

    <script>
        $(document).ready(function() {
            $('#uploadDiv').hide();
            $("#upload_image_btn").click(function() {
                $('#upload_image').click();
                $('#upload_image').change(function() {
                    $('#uploadDiv2').hide();
                    $('#uploadDiv').show();
                });
            });
            $("#cancelButton").click(function() {
                $('#uploadDiv').hide();
            });
        });
    </script>
    <script>
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
                        console.log(data);
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
                        console.log(data);
                        $('.cities').find("option:eq(0)").html("Select City");
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
            <?php
            if ($update) { ?>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your image has been uploaded',
                    showConfirmButton: false,
                    timer: 2000,
                })
            <?php } ?>
        });
    </script>

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>