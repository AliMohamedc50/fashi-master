
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Admins</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Admins</h1>
			</div>

			<a href="?doprod=add" class="btn btn-warning">Add new admin</a>
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
$select_all_admin = "SELECT * FROM admin";
$result_all_admin = $conn->query($select_all_admin);
foreach ($result_all_admin as $key) {
	$id_admin = $key['id'];
	$user_admin = $key['username'];
	$pass_admin = $key['a_password'];
	$email_admin = $key['a_email'];
	$role = $key['role'];
	$img = $key['img'];


?>
				
				<tbody>
					<tr>
						<th scope="row"><?=$indes++?></th>
						<td><?=$user_admin ?></td>
						<td><?=$pass_admin?></td>
						<td><img style="width: 100px; height: 100px " src="images/admin/<?=$img?>" alt="" srcset=""></td>
						<td>   <?=$email_admin?></td>
						<td>
							<a href="?docat=edit&id=<?=$key['id']?>" class="btn btn-success">Edit</a> 
							<a href="admins.php?do=delet&id=<?=$id_admin?>" class="btn btn-danger">Delete</a>
							<a href="admins.php?do=show&id=<?=$id_admin?>" class="btn btn-info">Show All Data</a>
						</td>
					</tr>
				</tbody>
			</div><!--/.row-->
			
			<?php
}

?>
</table>