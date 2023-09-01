<?php
include '../parts/_dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $username = $_POST['username'];
    $pwd = $_POST['password'];
    $confirm_pwd = $_POST['cpassword'];
    
    $first_name = htmlspecialchars($_POST['first_name'], ENT_QUOTES);
    $last_name = $_POST['last_name'];
    $last_name = htmlspecialchars($_POST['last_name'], ENT_QUOTES);
    $surname = $_POST['surname'];
    $surname = htmlspecialchars($_POST['surname'], ENT_QUOTES);
    $address = $_POST['address'];
    $address = htmlspecialchars($_POST['address'], ENT_QUOTES);
    $pincode = $_POST['pincode'];
    $pincode = htmlspecialchars($_POST['pincode'], ENT_QUOTES);
    $email = $_POST['email'];
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $mobile = $_POST['mobile'];
    $mobile = htmlspecialchars($_POST['mobile'], ENT_QUOTES);
    $username = $_POST['username'];
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES);
    $hash = password_hash($pwd, PASSWORD_DEFAULT);
    
    $sql = "SELECT * from `data_store` where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    
    if ($num > 0) {
        $error = "Username Already Exist";
    } else {
        foreach ((array)$_FILES['img']['name'] as $key => $val) {
            $img_name = $_FILES['img']['name'];
            $tmp_name = $_FILES['img']['tmp_name'];
            $size = $_FILES['img']['size'];
            $folder = "../user_img/";
            $path = $folder . $img_name;

            if ($_FILES['img']['size'] < 2097152) {
                $move = move_uploaded_file($tmp_name, $path);
                if ($move) {

                    $sql = "INSERT INTO `data_store`(`first_name`, `last_name`, `surname`, `address`, `pincode`, `email`, `mobile`, `username`, `pwd`, `img_name`) VALUES ('$first_name','$last_name','$surname','$address','$pincode','$email','$mobile','$username','$hash','$img_name')";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        $success = true;
                        header('location: ../main/welcome.php');
                    }echo "no";
                } else {
                    $statusMsg = "Uploaded File Size Is " . $_FILES['img']['size'] . '<br>';
                }
            }
        }
    }
}
