<?php
session_start();
require '../connection.php';
$id_product = $_POST['id'];
$price = $_POST['price'];
$date = date('y-m-d');
$id_user = $_SESSION['id'];


$insert_card = "INSERT INTO card( id_product, id_user, count, total_price, c_date) VALUES ($id_product, $id_user, 1 ,$price,$date)";

$conn->query($insert_card);
?>