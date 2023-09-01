<?php

//upload.php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo "Hello";
    if (isset($_POST['imageUpdate'])) {
        foreach ((array)$_FILES['adm_image']['name'] as $key => $val) {
            $img_name = $_FILES['adm_image']['name'];
            $tmp_name = $_FILES['adm_image']['tmp_name'];
            $size = $_FILES['adm_image']['size'];
            $folder = "../assests/admin_image/";
            $path = $folder . $img_name;
            if ($_FILES['adm_image']['size'] < 2097152) {

                $move = move_uploaded_file($tmp_name, $path);
                if ($move) {
                    $sql = "SELECT * from `admin_image` where adm_id=" . $_SESSION['id'] . "";
                    $result = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($result);
                    if (empty($num)) {
                        $sql = "INSERT INTO `admin_image`(`adm_id`, `adm_image`) VALUES (" . $_SESSION['id'] . ",'$img_name')";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            echo $sql;
                            exit;
                            // header('location: ../partials/profile.php?ukey=' . $_SESSION['id'] . '');
                        }
                    } else {
                        $sql = "UPDATE `admin_image` SET `adm_image` = '$img_name' WHERE `admin_image`.`id` = " . $_SESSION['id'] . " ";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            echo $sql;
                            exit;
                            // header('location: ../partials/profile.php');
                        }
                    }
                } else {
                    $statusMsg = "Uploaded File Size Is " . $_FILES['adm_image']['size'] . '<br>';
                }
            }
        }
        exit;
    }
}
