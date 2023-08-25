<?php
$id = $_GET['id'];
$select_one_admin = "SELECT * FROM admin WHERE id = $id";
$result_one_admin = $conn->query($select_one_admin);
$result_row = $result_one_admin->fetch_assoc();


?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Admin</h1>
			</div>
    <form action="logec_php/admin/edit_admin.php" method="post" enctype="multipart/form-data" class="add_admin">
        <div>
            <!-- <label for="">id</label> -->
            <input type="hidden" value="<?=$result_row['id']?>" name="id" class="form-control">
        </div>
        <div>
            <label for="">Username</label>
            <input type="text" value="<?=$result_row['username']?>" name="new_user" class="form-control">
        </div>
        <div>
            <label for="">password</label>
            <input type="password" value="<?=$result_row['a_password']?>" name="new_password" class="form-control">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" value="<?=$result_row['a_email']?>" name="new_email" class="form-control">
        </div>
        <div>
            <label for="">Role</label>                
            <select name="new_role" value="<?=$result_row['role']?>" class="form-control">
                <!-- <input type="text" name="new_role" class="form-control"> -->
                <option <?php if($result_row['role'] == '0') {echo "selected";}?> value="0">super Admin</option>
                <option <?php if($result_row['role'] == '1') {echo "selected";}?> value="1">Admin</option>
            </select>
        </div>
        <div>
            <label for="">Image</label>
            <img style="width: 100px; height: 100px" src="images/admin/<?=$result_row['img']?>" alt="" srcset="">
            <input type="text" name="inp_for_img" value="<?=$result_row['img']?>">
            <input type="file" name="new_img"  class="form-control">
        </div>
        <input type="submit" name="edit" class="btn btn-info" value="Edit">
        
</form>



		</div>