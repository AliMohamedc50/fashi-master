
<?php
require "logec_php/connection.php";
$id = $_GET['id'];
$select_one_categorie = "SELECT * FROM categories WHERE id = $id";
$result_one_categorie = $conn->query($select_one_categorie);
$result_row = $result_one_categorie->fetch_assoc();

?>



<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Show all Categories</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Show all Categories</h1>
			</div>

			<a href="?docat=add" class="btn btn-warning">Add new categorie</a>
			<table class="table table-dark ">
				<thead>
					<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Status</th>
					<th scope="col" >Action</th>
					</tr>
				</thead>

				
				<tbody>
					<tr>
						<th scope="row"><?=$result_row['id']?></th>
						<td><?=$result_row['c_name']?></td>
						<th scope="row"><?php if($result_row['c_status'] > 0 ) {echo "Available";}else {echo "not Available";}?></th>
						<td>
							<a href="?docat=edit&id=<?=$id?>" class="btn btn-success">Edit</a> 
							<a href="?docat=delet&id=<?=$id?>" class="btn btn-danger">Delete</a>
							<a href="?docat=show&id=<?=$id?>" class="btn btn-info">Show All Data</a>
						</td>
					</tr>
				</tbody>
			</div><!--/.row-->
			

</table>