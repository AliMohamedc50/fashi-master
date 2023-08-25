<?php
    require "logec_php/connection.php";
    $id = $_GET['id'];
    // echo " oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo" . $id 
    $delete_product = "DELETE FROM product WHERE id= $id";
    $conn->query($delete_product);
    // header("Location:../../admins.php")

?>