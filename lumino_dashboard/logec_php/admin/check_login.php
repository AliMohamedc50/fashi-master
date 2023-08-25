<?php
session_start();
if(isset($_POST['send'])) {
    require '../connection.php';
    $username_inp = $_POST['username'];
    $password_inp =  $_POST['password'];


    $select_admin =  "SELECT * FROM admin WHERE (username = '$username_inp' OR a_email = '$username_inp')  AND a_password = '$password_inp'";
    $result_admin = $conn->query($select_admin);
    $row_admin = $result_admin->fetch_assoc();
    $cont = $result_admin->num_rows;
    $id = $row_admin['id'];
    $img_pec = $row_admin['img'];
    $username = $row_admin['username'];

    if($cont > 0) {
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        $_SESSION['img'] = $img_pec;

        header("Location:../../index.php");
    }else {
        echo "sorry";
    };

};
?>