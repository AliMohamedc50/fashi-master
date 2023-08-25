<?php
    require "logec_php/connection.php";
    $id = $_GET['id'];
    // echo " oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo" . $id 
    $delete_admin = "DELETE FROM categories WHERE id= $id";
    $conn->query($delete_admin);
    // header("Location:../../admins.php")

?>