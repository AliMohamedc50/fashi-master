<?php
session_start();
require '../connection.php';

$id_product = $_POST['id'];
$price = $_POST['price'];
$date = date('y-m-d');
$id_user = $_SESSION['id'];

$select_product_data = "SELECT * FROM product WHERE id = $id_product";
$result_product = $conn->query($select_product_data);
$row_product = $result_product->fetch_assoc();
$image = $row_product['p_image'];
$name = $row_product['p_name'];

$select_card = "SELECT * FROM card WHERE id_user = $id_user AND id_product = $id_product";
$result_card = $conn->query($select_card);
$row_card = $result_card->fetch_assoc();

$count_row = $result_card->num_rows;

if ($count_row > 0) {
    $count = $row_card['count'];
    $new_count = $count + 1;
    $total_price = $new_count * $price;
    $update_card = "UPDATE card SET count = $new_count, total_price = '$total_price' WHERE id_user = $id_user AND id_product = $id_product";
    $conn->query($update_card);
} else {
    $insert_card = "INSERT INTO card(id_product, id_user, c_name, c_image, count, c_price, total_price, c_date) VALUES ('$id_product', '$id_user', '$name', '$image', 1, $price, '$price', '$date')";
    $conn->query($insert_card);
}


// $id_user = $_SESSION["id"];



    
    
    $id_user_to_card = $_SESSION["id"];
    $select_card_2 = "SELECT * FROM card WHERE id_user = $id_user_to_card ORDER BY id DESC LIMIT 2";
    $result = mysqli_query($conn, $select_card_2);
    
    foreach ($result as $key) {
        ?>
    <tr>
        <td class="si-pic" style="width: 80px;"><img src="img/products/<?= $key["c_image"] ?>" alt=""></td>
        <td class="si-text">
            <div class="product-selected">
                <p><?= $key["c_price"] . "x" . $key["count"] ?></p>
                <h6><?= $key["c_name"] ?></h6>
            </div>
        </td>
        <td class="si-close">
            <i class="ti-close"></i>
        </td>
    </tr>
    <?php
}

?>


