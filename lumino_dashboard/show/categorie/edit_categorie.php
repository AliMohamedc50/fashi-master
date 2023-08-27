<?php

require "logec_php/connection.php";
$id = $_GET['id'];

$select_one_product = "SELECT * FROM categories WHERE id = $id";
$result_one_product = $conn->query($select_one_product);
$result_row = $result_one_product->fetch_assoc();
$stat = $result_row['c_status']

// echo "hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh"

?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Catrgore</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Catrgore</h1>
			</div>
    <form action="logec_php/categorie/add_new_categorie.php" method="post" enctype="multipart/form-data" class="add_admin">
        <div>
            <label for=""></label>
            <input value="<?=$result_row['c_name']?>" type="text" name="new_name" class="form-control">
        </div>
        <div>
            <label for="">Role</label>  
            <select name="new_role" class="form-control">
                <!-- <input type="text" name="new_role" class="form-control"> -->
                <option <?php if($stat == "1") {echo "selected";} ?> >Available</option>
                <option <?php if($stat == "0") {echo "selected";} ?> value="0">Not Available</option>
            </select>
        </div>
        <input type="submit" name="addcat" class="btn btn-info" value="Add">
        
</form>



		</div><!--/.row-->