

			<table class="table table-dark ">
				<thead>
					<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<!-- <th scope="col">Password</th> -->
					<th scope="col">Email</th>
					<th scope="col">Seen</th>
					<!-- <th scope="col">Image</th> -->
					<th scope="col" >Action</th>
					</tr>
				</thead>
<?php 
$index = 1;
$select_all_messages = "SELECT * FROM messages WHERE view = '0'";
$result_all_messages = $conn->query($select_all_messages);
foreach ($result_all_messages as $key) {
    $seen = $key['view'];
?>
				
				<tbody>
					<tr>
						<th scope="row"><?=$index++?></th>
						<td><?=$key['name']?></td>
						<td><?=$key['email']?></td>
						<!-- <td><img style="width: 100px; height: 100px " src="images/messages/<?=$img?>" alt="" srcset=""></td> -->
						<td><?php if($seen == 0){echo "Not seen";}else{echo "seen";}?></td>
						<td>
							<a href="?do=show&id=<?=$key['id']?>" class="btn btn-info">View Message</a>
							<a href="messagess.php?do=delet&id=<?=$id_messages?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				</tbody>
			</div><!--/.row-->
			
			<?php
}

?>
</table>





<h3 class="page-header">Messages have been read</h3>

			<table class="table table-dark ">
				<thead>
					<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<!-- <th scope="col">Password</th> -->
					<th scope="col">Email</th>
					<th scope="col">Seen</th>
					<!-- <th scope="col">Image</th> -->
					<th scope="col" >Action</th>
					</tr>
				</thead>
<?php 
$index = 1;
$select_all_messages = "SELECT * FROM messages WHERE view = '1'";
$result_all_messages = $conn->query($select_all_messages);
foreach ($result_all_messages as $key) {
    $seen = $key['view'];
?>
				
				<tbody>
					<tr>
						<th scope="row"><?=$index++?></th>
						<td><?=$key['name']?></td>
						<td><?=$key['email']?></td>
						<!-- <td><img style="width: 100px; height: 100px " src="images/messages/<?=$img?>" alt="" srcset=""></td> -->
						<td><?php if($seen == 0){echo "Not seen";}else{echo "seen";}?></td>
						<td>
							<a href="?do=show&id=<?=$key['id']?>" class="btn btn-info">View Message</a>
							<a href="messagess.php?do=delet&id=<?=$id_messages?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				</tbody>
			</div><!--/.row-->
			
			<?php
}

?>
</table>