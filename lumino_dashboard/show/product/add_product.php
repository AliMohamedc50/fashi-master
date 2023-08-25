
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
    <form action="logec_php/product/add_new_product.php" method="post" enctype="multipart/form-data" class="add_admin">
        <div>
            <label for="">Name</label>
            <input type="text" name="name_product" class="form-control">
        </div>
        <div>
            <label for="">Details</label>
            <input type="text" name="details_product" class="form-control">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name="price_product" class="form-control">
        </div>
        <div>
            <label for="">Discount</label>
            <input type="text" value="" name="discount_product" class="form-control">
        </div>
        <div>
            <label for="">Stock</label>
            <input type="number" name="stock_product" class="form-control">
        </div>
        <!-- <div>
            <label for="">Date</label>
            <input type="text" name="date_product" class="form-control">
        </div> -->
        <div>
            <label for="">Rate</label>
            <input type="number" name="rate_product" class="form-control">
        </div>
        <div>
            <label for="">Role</label>                
            <select name="categorie" class="form-control">
                <!-- <input type="text" name="new_role" class="form-control">  -->
<?php
require "logec_php/connection.php";
$select_categorie = "SELECT * FROM categories";
$result_categorie = $conn->query($select_categorie);
foreach ($result_categorie as $key_categorie) { 
?>
                <option  value="<?=$key_categorie['id'];?>"><?=$key_categorie['c_name'];?></option>

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
        <input type="submit" name="addprod" class="btn btn-info" value="Add Product">
        
</form>



		</div><!--/.row-->