<?php

if(isset($_POST['add'])) {
    require '../connection.php';
    $new_username = $_POST['new_user'];
    $new_password = $_POST['new_password'];
    $new_email = $_POST['new_email'];
    $new_role = $_POST['new_role'];
    // $new_username = $_POST['new_user'];
    // $new_img = $_POST['new_img'];



    $name_img = $_FILES['new_img']['name'];
    $tmp_img = $_FILES['new_img']['tmp_name'];

    move_uploaded_file($tmp_img, "../../images/admin/$name_img");
    $date = date("Y-m-d");
    $insert_admin = "INSERT INTO admin(username, a_password, a_email, role, img, a_date) VALUES ('$new_username','$new_password','$new_email', '$new_role' ,'$name_img', '$date')";
    $conn->query($insert_admin);
    header("Location:../../admins.php");

};


?>