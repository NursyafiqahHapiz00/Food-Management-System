<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<?php
	if(isset($_GET['edit_diseases'])){
		
		$edit_diseases_id = $_GET['edit_diseases'];
		$edit_diseases_query = "select * from diseases where diseases_id='$edit_diseases_id'";
		$run_edit = mysqli_query($con,$edit_diseases_query);
		$row_edit = mysqli_fetch_array($run_edit);

		$diseases_id = $row_edit['diseases_id'];
		$diseases_name = $row_edit['diseases_name'];
	}
?>

<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-dashboard"></i> Dashboard / Edit Disease
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading" ><!-- panel-heading Starts -->
				<h3 class="panel-title" ><!-- panel-title Starts -->
					<i class="fa fa-ambulance" ></i> Edit Disease
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->

						<div class="panel-body" ><!-- panel-body Starts -->

						<!-- To create form -->
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Type of Disease:</label>
									<div class="col-md-6" >
										<input type="text" name="diseases_name" class="form-control" value="<?php echo $diseases_name; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" ></label>
									<div class="col-md-6" >
									<a href="index.php?view_diseases=1" class="btn btn-danger"> Back </a>
											<button type="submit" name="update" value="Update Disease" class="btn btn-primary">Update Disease</button>
									</div>
							</div><!-- form-group Ends -->

				</form><!-- form-horizontal Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->

<?php
	if(isset($_POST['update'])){

		$diseases_name = $_POST['diseases_name'];
		
		$update_diseases = "update diseases set diseases_name='$diseases_name' where diseases_id='$diseases_id'";
		$run_diseases = mysqli_query($con,$update_diseases);

		if($run_diseases){
			echo "<script>alert('Disease has been updated!')</script>";
			echo "<script>window.open('index.php?view_diseases=1','_self')</script>";
		}
	}
?>

<?php 
	} 
?>