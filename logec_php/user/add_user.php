<?php
if (isset($_POST['send'])) {
    require '../connection.php';
    $user_name = $_POST['username'];
    $pass = $_POST['pass'];



    $insert_user = "INSERT INTO users( username, password) VALUES ('$user_name' ,'$pass')";
    $conn->query($insert_user);
    header('location:../../login.php');
}
?>