<?php
    require "./logec_php/connection.php";
    $id = $_GET['id'];
    $delete_admin = "DELETE FROM admin WHERE id= $id";
    $conn->query($delete_admin);
    // header("Location:../../admins.php")

?>