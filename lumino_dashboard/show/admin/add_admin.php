
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Add Admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Admin</h1>
			</div>
    <form action="logec_php/admin/add_new_admin.php" method="post" enctype="multipart/form-data" class="add_admin">
        <div>
            <label for="">Username</label>
            <input type="text" name="new_user" class="form-control">
        </div>
        <div>
            <label for="">password</label>
            <input type="password" name="new_password" class="form-control">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="new_email" class="form-control">
        </div>
        <div>
            <label for="">Role</label>                
            <select name="new_role" class="form-control">
                <!-- <input type="text" name="new_role" class="form-control"> -->
                <option value="0">super Admin</option>
                <option value="1">Admin</option>
            </select>
        </div>
        <div>
            <label for="">Image</label>
            <input type="file" name="new_img" class="form-control">
        </div>
        <input type="submit" name="add" class="btn" value="Add">
        
</form>



		</div><!--/.row-->