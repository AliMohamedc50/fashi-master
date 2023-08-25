
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Add Catrgore</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Catrgore</h1>
			</div>
    <form action="logec_php/categorie/add_new_categorie.php" method="post" enctype="multipart/form-data" class="add_admin">
        <div>
            <label for="">Username</label>
            <input type="text" name="new_name" class="form-control">
        </div>
        <div>
            <label for="">Role</label>  
            <select name="new_role" class="form-control">
                <!-- <input type="text" name="new_role" class="form-control"> -->
                <option value="1">Available</option>
                <option value="0">Not Available</option>
            </select>
        </div>
        <input type="submit" name="addcat" class="btn btn-info" value="Add">
        
</form>



		</div><!--/.row-->