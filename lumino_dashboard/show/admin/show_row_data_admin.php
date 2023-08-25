<?php


$id = $_GET['id'];
$select_one_admin = "SELECT * FROM admin WHERE id = $id";
$result_one_admin = $conn->query($select_one_admin);
$result_row = $result_one_admin->fetch_assoc();


?>



<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

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
				
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td><?=$result_row['username'] ?></td>
						<td><?=$result_row['a_password'] ?></td>
						<td><img style="width: 100px; height: 100px " src="images/admin/<?=$result_row['img'] ?>" alt="" srcset=""></td>
						<td>   <?=$result_row['a_email'] ?></td>
						<td>
							<a href="?do=edit&id=<?=$id?>" class="btn btn-success">Edit</a> 
							<a href="admins.php?do=delet&id=<?=$id?>" class="btn btn-danger">Delete</a>
							<a href="admins.php?do=show&id=<?=$id?>" class="btn btn-info">Show All Data</a>
						</td>
					</tr>
				</tbody>
			</div><!--/.row-->
</table>
</div>