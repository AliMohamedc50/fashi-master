<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">products</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">products</h1>
			</div>

			<a href="?doprod=add" class="btn btn-warning">Add new product</a>
			<table class="table table-dark ">
				<thead>
					<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<!-- <th scope="col">Password</th> -->
					<!-- <th scope="col">Email</th> -->
					<th scope="col">Image</th>
					<th scope="col">Price</th>
					<th scope="col">Discount</th>
					<th scope="col">Stock</th>
					<th scope="col" >Action</th>
					</tr>
				</thead>
<?php 
$indes = 1;
$select_all_product = "SELECT * FROM product";                                             
$result_all_product = $conn->query($select_all_product);
foreach ($result_all_product as $key) {
	$id_product = $key['id'];
	$name_product = $key['p_name'];
	$details_product = $key['p_details'];
	$price_product = $key['p_price'];
	$discount_product = $key['p_discount'];
	$Stock_product = $key['p_stock'];
	$img = $key['p_image'];
?>
				<tbody>
					<tr>
						<th scope="row"><?=$indes++?></th>
						<td><?=$name_product ?></td>
						<td><img style="width: 100px; height: 100px " src="images/product/<?=$img?>" alt="" srcset=""></td>
						<td><?=$price_product?></td>
						<td><?=$discount_product?></td>
						<td><?=$Stock_product?></td>
						<td>
							<a href="?doprod=edit&id=<?=$key['id']?>" class="btn btn-success">Edit</a> 
							<a href="?doprod=delet&id=<?=$id_product?>" class="btn btn-danger">Delete</a>
							<a href="?do=show&id=<?=$id_product?>" class="btn btn-info">Show All Data</a>
						</td>
					</tr>
				</tbody>
			</div><!--/.row-->
			
			<?php
}
?>
</table>