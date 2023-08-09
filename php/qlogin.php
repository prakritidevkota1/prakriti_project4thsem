<?php
include('dbconnector.php');

if (isset($_POST['submit'])) {
    $admin = "admin";
    $adminpass = "12345";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM userdetails WHERE user_email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        if (($data['user_email'] == $email) && ($data['user_password'] == $password)&& ($data['type'] == 0)) {
            $_SESSION['email'] = $email;
            $_SESSION['type'] =0;
            header("location: ../homepageafterlogin.php");
           
            exit();
        } elseif (($email == $admin) && ($password == $adminpass) &&($data['type'] == "admin")) {
            $_SESSION['email'] = $admin;
            $_SESSION['type'] =$data['type'];
            header("location: ../admin_panel/index.php");
            exit();
        } else {
            echo 'Invalid user and password';
        }
    } else {
        echo 'User not found';
    }
}
?>
