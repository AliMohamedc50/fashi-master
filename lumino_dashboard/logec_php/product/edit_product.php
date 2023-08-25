<?php

if(isset($_POST['editprod'])) {
    require '../connection.php';
    $id = $_POST['id'];
    $name_product = $_POST['name_product'];
    $details_product = $_POST['details_product'];
    $price_product = $_POST['price_product'];
    $discount_product = $_POST['discount_product'];
    $stock_product = $_POST['stock_product'];
    $rate_product = $_POST['rate_product'];
    $id_categorie = $_POST['categorie'];
    $inp_for_img  = $_POST['inp_for_img']; 
    // $date_product = $_POST['date_product'];
    $name_img = $_FILES['p_image']['name'];
    $tmp_img = $_FILES['p_image']['tmp_name'];

    move_uploaded_file($tmp_img, "../../images/product/$name_img");
    $date = date("Y-m-d");

    if (!$name_img == "") {
        $insert_product = "UPDATE product SET p_name='$name_product',p_details='$details_product',p_image='$name_img', p_price='$price_product',p_discount='$discount_product',p_stock='$stock_product',p_date='$date',p_rate='$rate_product ',id_categorie='$id_categorie' WHERE id=$id";
    }elseif (!($inp_for_img == "") && ($name_img == "")) {
        $insert_product = "UPDATE product SET p_name='$name_product',p_details='$details_product',p_image='$inp_for_img', p_price='$price_product',p_discount='$discount_product',p_stock='$stock_product',p_date='$date',p_rate='$rate_product ',id_categorie='$id_categorie' WHERE id=$id";

    }
    $conn->query($insert_product);
    header("Location:../../product.php");

}


?>