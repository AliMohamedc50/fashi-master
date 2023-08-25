<?php
if(isset($_POST['addcat'])) {
    require '../connection.php';
    $new_name = $_POST['new_name'];
    $new_role = $_POST['new_role'];
    // $new_password = $_POST['new_password'];
    // $new_email = $_POST['new_email'];
    // $new_username = $_POST['new_user'];
    // $new_img = $_POST['new_img'];



    // $name_img = $_FILES['new_img']['name'];
    // $tmp_img = $_FILES['new_img']['tmp_name'];

    // move_uploaded_file($tmp_img, "../images/admin/$name_img");
    // $date = date("Y-m-d");
    $insert_admin = "INSERT INTO categories (c_name, c_status) VALUES ('$new_name','$new_role')";
    $conn->query($insert_admin);
    header("Location:../../categorie.php");

};


?>