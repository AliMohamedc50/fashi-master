<?php
if(isset($_POST['edit'])) {
    // $new_username = $_POST['new_user'];
    // $new_password = $_POST['new_password'];
    // $new_email = $_POST['new_email'];
    // $new_role = $_POST['new_role'];



    require '../connection.php';
    $id = $_POST['id'];
    $new_username = $_POST['new_user'];
    $new_password = $_POST['new_password'];
    $new_email = $_POST['new_email'];
    $new_role = $_POST['new_role'];
    $inp_for_img = $_POST['inp_for_img'];

    
    
    
    $name_img = $_FILES['new_img']['name'];
    $tmp_img = $_FILES['new_img']['tmp_name'];

    // echo $name_img;
    move_uploaded_file($tmp_img, "../../images/admin/$name_img");


if (!$name_img == "") {
    $update_data_admin = "UPDATE admin SET username='$new_username' , img='$name_img' ,a_password='$new_password', a_email='$new_email', role='$new_role' WHERE id= '$id'";
}elseif (!($inp_for_img == "") && ($name_img == "")) {
    $update_data_admin = "UPDATE admin SET username='$new_username' , img='$inp_for_img' ,a_password='$new_password', a_email='$new_email', role='$new_role' WHERE id= '$id'";
    // echo "test";
}
    
    $conn->query($update_data_admin);

    header("Location:../../admins.php");
}
?>