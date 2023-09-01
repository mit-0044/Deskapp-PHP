<?php
include '../parts/_dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $first_name = htmlspecialchars($_POST['first_name'], ENT_QUOTES);
    $last_name = htmlspecialchars($_POST['last_name'], ENT_QUOTES);
    $surname = htmlspecialchars($_POST['surname'], ENT_QUOTES);
    $address = htmlspecialchars($_POST['address'], ENT_QUOTES);
    $pincode = htmlspecialchars($_POST['pincode'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $mobile = htmlspecialchars($_POST['mobile'], ENT_QUOTES);
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES);
    $pwd = htmlspecialchars($_POST['password'], ENT_QUOTES);
    $hash = password_hash($pwd, PASSWORD_DEFAULT);

    $sql = "SELECT * from `users` where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if ($num > 0) {
        $error = "Username Already Exist";
    } else {

        $sql = "INSERT INTO `data_store`(`first_name`, `last_name`, `surname`, `address`, `pincode`, `email`, `mobile`, `username`, `pwd`) VALUES ('$first_name','$last_name','$surname','$address','$pincode','$email','$mobile','$username','$hash')";

        $result = mysqli_query($conn, $sql);
        $user_id = mysqli_insert_id($conn);

        foreach ((array)$_FILES['img']['name'] as $key => $val) {
            $img_name = $_FILES['img']['name'][$key];
            $tmp_name = $_FILES['img']['tmp_name'][$key];
            $size = $_FILES['img']['size'][$key];
            $folder = "../user_img/";
            $path = $folder . $img_name;


            if ($_FILES['img']['size'][$key] < 2097152) {
                $move = move_uploaded_file($tmp_name, $path);

                if ($move) {

                    $sql = "INSERT INTO `img_store`(`user_id`, `img_name`) VALUES ('$user_id','$img_name')";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        header('location: ../main/welcome.php');
                    }
                } else {
                    $statusMsg = "Uploaded File Size Is " . $_FILES['img']['size'] . '<br>';
                }
            }
        }
    }
}
