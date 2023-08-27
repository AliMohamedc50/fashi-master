
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">categories</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">categories</h1>
			</div>

			<a href="?docat=add" class="btn btn-warning">Add new categorie</a>
			<table class="table table-dark ">
				<thead>
					<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Status</th>
					<!-- <th scope="col">Email</th> -->
					<!-- <th scope="col">Image</th> -->
					<th scope="col" >Action</th>
					</tr>
				</thead>
<?php 
$indes = 1;
$select_all_categorie = "SELECT * FROM categories ";
$result_all_categorie = $conn->query($select_all_categorie);
foreach ($result_all_categorie as $key) {
	$id_categorie = $key['id'];
	$user_categorie = $key['c_name'];
	$status = $key['c_status']


?>
				
				<tbody>
					<tr>
						<th scope="row"><?=$indes++?></th>
						<td><?=$user_categorie ?></td>
						<th scope="row"><?php if($status > 0 ) {echo "Available";}else {echo "not Available";}?></th>
						<td>
							<a href="?docat=edit&id=<?=$key['id']?>" class="btn btn-success">Edit</a> 
							<a href="?docat=delet&id=<?=$id_categorie?>" class="btn btn-danger">Delete</a>
							<a href="?docat=show&id=<?=$id_categorie?>" class="btn btn-info">Show All Data</a>
						</td>
					</tr>
				</tbody>
			</div><!--/.row-->
			
			<?php
}

?>
</table>