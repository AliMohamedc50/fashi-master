<?php

if(isset($_POST['addprod'])) {
    require '../connection.php';
    $name_product = $_POST['name_product'];
    $details_product = $_POST['details_product'];
    $price_product = $_POST['price_product'];
    $discount_product = $_POST['discount_product'];
    $stock_product = $_POST['stock_product'];
    // $date_product = $_POST['date_product'];
    $rate_product = $_POST['rate_product'];
    $id_categorie = $_POST['categorie'];

    $name_img = $_FILES['p_image']['name'];
    $tmp_img = $_FILES['p_image']['tmp_name'];

    move_uploaded_file($tmp_img, "../../images/product/$name_img");
    $date = date("Y-m-d");

    $insert_product = "INSERT INTO product ( p_name, p_details, p_image, p_price, p_discount, p_stock, p_date, p_rate, id_categorie ) VALUES
     ('$name_product','$details_product','$name_img' ,'$price_product','$discount_product', '$stock_product' ,  '$date', '$rate_product' , '$id_categorie')";
    $conn->query($insert_product);
    header("Location:../../product.php");

}


?>