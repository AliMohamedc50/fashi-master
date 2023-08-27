<?php
    require '../connection.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $insert_message = "INSERT INTO messages ( name , email, message) VALUES ('$name','$email' ,'$message')";
    $conn->query($insert_message);

?> 

