<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">users</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">users</h1>
			</div>

			<a href="?doprod=add" class="btn btn-warning">Add new user</a>
			<table class="table table-dark ">
				<thead>
					<tr>
					<th scope="col">#</th>
					<th scope="col">Username</th>
					<th scope="col">Password</th>
					<th scope="col">Email</th>
					<th scope="col">Image</th>
					<th scope="col" >Action</th>
					</tr>
				</thead>
<?php 
$indes = 1;
$select_all_user = "SELECT * FROM users";
$result_all_user = $conn->query($select_all_user);
foreach ($result_all_user as $key) {



?>
				
				<tbody>
					<tr>
						<th scope="row"><?=$indes++?></th>
						<td><?=$key['username'] ?></td>
						<td><?=$key['password'] ?></td>
						<td>
							<a href="?docat=edit&id=<?=$key['id']?>" class="btn btn-success">Edit</a> 
							<a href="users.php?do=delet&id=<?=$id_user?>" class="btn btn-danger">Delete</a>
							<a href="users.php?do=show&id=<?=$id_user?>" class="btn btn-info">Show All Data</a>
						</td>
					</tr>
				</tbody>
			</div><!--/.row-->
			
			<?php
}

?>
</table>