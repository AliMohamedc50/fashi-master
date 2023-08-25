<?php

require "logec_php/connection.php";
$id = $_GET['id'];

$select_one_product = "SELECT * FROM product WHERE id = $id";
$result_one_product = $conn->query($select_one_product);
$result_row = $result_one_product->fetch_assoc();
$id_categorie = $result_row['id_categorie'];




// id
// p_name
// p_details
// p_discount
// p_price
// p_rate
// p_stock
// p_image
// p_categorie


// echo "hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh"

?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Add Product</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Product</h1>
			</div>
    <form action="logec_php/product/edit_product.php" method="post" enctype="multipart/form-data" class="add_admin">
        <input type="hidden" value="<?=$id?>" name="id" class="form-control">
        <input type="hidden" value="<?=$result_row['p_image']?>" name="inp_for_img" class="form-control">
        <div>
            <label for="">Name</label>
            <input type="text" value="<?=$result_row['p_name']?>" name="name_product" class="form-control">
        </div>
        <div>
            <label for="">Details</label>
            <input type="text" value="<?=$result_row['p_details']?>" name="details_product" class="form-control">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" value="<?=$result_row['p_price']?>" name="price_product" class="form-control">
        </div>
        <div>
            <label for="">Discount</label>
            <input type="text" value="<?=$result_row['p_discount']?>" name="discount_product" class="form-control">
        </div>
        <div>
            <label for="">Stock</label>
            <input type="number" value="<?=$result_row['p_stock']?>" name="stock_product" class="form-control">
        </div>
        <!-- <div>
            <label for="">Date</label>
            <input type="text"  name="date_product" class="form-control">
        </div> -->
        <div>
            <label for="">Rate</label>
            <input type="number" value="<?=$result_row['p_rate']?>" name="rate_product" class="form-control">
        </div>
        <div>
            <label for="">Role</label>                
            <select name="categorie" class="form-control">
                <!-- <input type="text" name="new_role" class="form-control">  -->
<?php
require "logec_php/connection.php";
// $index = 1 ;
$select_categorie = "SELECT * FROM categories";
$result_categorie = $conn->query($select_categorie);
foreach ($result_categorie as $key_categorie) {
    $id = $key_categorie['id'];
?>
                <option <?php if($id === $id_categorie){echo "selected";}?> value="<?=$id?>"><?=$key_categorie['c_name'];?></option>

<?php 
}
?>
                <!-- <option value="1">Admin</option> -->
            </select>
        </div>
        <div>
            <label for="">Image</label>
            <input type="file" name="p_image" class="form-control">
        </div>
        <input type="submit" name="editprod" class="btn btn-info" value="Edit Product">
        
</form>



		</div><!--/.row-->