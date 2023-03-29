<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<?php
	if(isset($_GET['edit_ward'])){
		
		$edit_ward_id = $_GET['edit_ward'];
		$edit_ward_query = "select * from ward where ward_id='$edit_ward_id'";
		$run_edit = mysqli_query($con,$edit_ward_query);
		$row_edit = mysqli_fetch_array($run_edit);

		$ward_id = $row_edit['ward_id'];
		$patient_ward = $row_edit['patient_ward'];
		$no_beds = $row_edit['no_beds'];
	}
?>

<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-dashboard"></i> Dashboard / Edit Ward/Room
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading" ><!-- panel-heading Starts -->
				<h3 class="panel-title" ><!-- panel-title Starts -->
					<i class="fa fa-hospital-o" ></i> Edit Ward
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->

						<div class="panel-body" ><!-- panel-body Starts -->

						<!-- To create form -->
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Ward Name:</label>
									<div class="col-md-6" >
										<input type="text" name="patient_ward" class="form-control" value="<?php echo $patient_ward; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Number of Bed:</label>
									<div class="col-md-6" >
										<input type="number" name="no_beds" class="form-control" value="<?php echo $no_beds; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" ></label>
									<div class="col-md-6" >
									<a href="index.php?view_ward=1" class="btn btn-danger"> Back </a>
											<button type="submit" name="update" value="Update Ward" class="btn btn-primary">Update Ward</button>
									</div>
							</div><!-- form-group Ends -->

				</form><!-- form-horizontal Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->

<?php
	if(isset($_POST['update'])){

		$patient_ward = $_POST['patient_ward'];
		$no_beds = $_POST['no_beds'];

		$update_ward = "update ward set patient_ward='$patient_ward', no_beds='$no_beds' where ward_id='$ward_id'";
		$run_ward = mysqli_query($con,$update_ward);

		if($run_ward){
			echo "<script>alert('Ward has been updated!')</script>";
			echo "<script>window.open('index.php?view_ward=1','_self')</script>";
		}
	}
?>

<?php 
	} 
?>