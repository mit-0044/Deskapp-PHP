<?php
$success = false;
include "../partials/_dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['change_password'])) {
        $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
        $cpassword = htmlspecialchars($_POST['cpassword'], ENT_QUOTES);
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $adm_email = $_SESSION['email'];
        if (empty(trim($password))) {
            $error = "Please Enter New Password.";
        } elseif (empty(trim($cpassword))) {
            $error = "Please Enter Confirm New Password.";
        } else {
            $sql = "UPDATE `admin` SET `adm_pwd` = '$hash' WHERE `admin`.`adm_email` = '$adm_email'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $success = true;
            } else {
                $error = "Something went wrong";
            }
        }
    }
}
?>
<div class="header">
    <div class="header-left">
        <div class="menu-icon bi bi-list"></div>
        <div class="d-flex justify-content-between col-md-12">
            <div class="m-auto">
                <div class="weight-600">IP Address: <?php echo $_SERVER['REMOTE_ADDR']; ?> &nbsp;</div>
            </div>
            <div class="d-flex" style="margin-right: -200px;">
                <div class="weight-600"><?php echo date("d/m/Y"); ?> &nbsp;</div>
                <div id="clock" class="weight-600"></div>
            </div>
        </div>
    </div>
    <div class="header-right">
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <span class="micon bi bi-person-fill"></span>
                    </span>
                    <span class="user-name"><?php echo $_SESSION['fname'] . ' ' . $_SESSION['lname'] ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="../main/profile.php"><i class="dw dw-user1 pe-2"></i> Profile</a>
                    <a class="dropdown-item" href="../main/logout.php"><i class="dw dw-logout pe-2"></i> Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="left-side-bar">
    <div class="brand-logo">
        <a href="">
            <img src="../assets/vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
            <img src="../assets/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-house"></span><span class="mtext">Home</span>
                    </a>
                    <ul class="submenu">
                        <?php
                        if (basename($_SERVER['PHP_SELF']) == 'dashboard.php') {
                            echo ' <li><a class="active" href="../main/dashboard.php">Dashboard</a></li>';
                        } else {
                            echo ' <li><a class="" href="../main/dashboard.php">Dashboard</a></li>';
                        }
                        if ($_SESSION['type'] == 'Admin') {
                            if (basename($_SERVER['PHP_SELF']) == 'users.php') {
                                echo ' <li><a class="active" href="../main/users.php">Users</a></li>';
                            } else {
                                echo ' <li><a class="" href="../main/users.php">Users</a></li>';
                            }
                        }
                        if (basename($_SERVER['PHP_SELF']) == 'employees.php') {
                            echo ' <li><a class="active" href="../main/employees.php">Employee List</a></li>';
                        } else {
                            echo ' <li><a class="" href="../main/employees.php">Employee List</a></li>';
                        }
                        if (basename($_SERVER['PHP_SELF']) == 'feedbacks.php') {
                            echo ' <li><a class="active" href="../main/feedbacks.php">Feedback List</a></li>';
                        } else {
                            echo ' <li><a class="" href="../main/feedbacks.php">Feedback List</a></li>';
                        }
                        if (basename($_SERVER['PHP_SELF']) == 'profile.php') {
                            echo ' <li><a class="active" href="../main/profile.php">Profile</a></li>';
                        } else {
                            echo ' <li><a class="" href="../main/profile.php">Profile</a></li>';
                        }
                        ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    setInterval(showTime, 1000);

    function showTime() {
        let time = new Date();
        let hour = time.getHours();
        let min = time.getMinutes();
        let sec = time.getSeconds();
        am_pm = " AM";

        if (hour > 12) {
            hour -= 12;
            am_pm = " PM";
        }
        if (hour == 0) {
            hr = 12;
            am_pm = "AM";
        }
        hour = hour < 10 ? "0" + hour : hour;
        min = min < 10 ? "0" + min : min;
        sec = sec < 10 ? "0" + sec : sec;

        let currentTime = hour + ":" +
            min + ":" + sec + am_pm;

        document.getElementById("clock")
            .innerHTML = currentTime;
    }
    showTime();
</script>