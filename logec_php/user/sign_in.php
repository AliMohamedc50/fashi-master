<?php
if (isset($_POST['sign_in'])) {
    require '../connection.php';    
    $user_name = $_POST['username'];
    $pass = $_POST['pass'];


    
    $insert_user = "SELECT * FROM users WHERE username ='$user_name' AND password = '$pass'";
    $result_user = $conn->query($insert_user);
    $row_user = $result_user->fetch_assoc();
    $count = $result_user->num_rows;
    $id = $row_user['id'];
    if($count > 0) {
        $_SESSION['id'] = $id;
        header("Location:../../index.php");
    }else {
        header("Location:../../login.php");
    }
}
?>