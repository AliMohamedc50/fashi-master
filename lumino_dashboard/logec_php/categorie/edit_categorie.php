<?php
if(isset($_POST['editedoc'])) {
    require '../connection.php';
    $id_categorie = $_POST['id_categorie'];
    $Categorie_name = $_POST['Categorie_name'];
    $status = $_POST['status'];

 
     
    // echo  $id_categorie;
    // echo  $Categorie_name;
    // echo   $status;
    
    // $name_img = $_FILES['new_img']['name'];
    // $tmp_img = $_FILES['new_img']['tmp_name'];

    // // echo $name_img;
    // move_uploaded_file($tmp_img, "../../images/admin/$name_img");

    $update_data_admin = "UPDATE categories SET c_name='$Categorie_name' , c_status='$status'  WHERE id = '$id_categorie'";
    
    $conn->query($update_data_admin);

    header("Location:../../categorie.php");
}
?>