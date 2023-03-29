<?php
	if(isset($_GET['edit_patient'])){
		
		$edit_id = $_GET['edit_patient'];
		$get_patient_details = "select * from patient_details where patient_id='$edit_id'";
		$run_edit = mysqli_query($con,$get_patient_details);
		$row_edit = mysqli_fetch_array($run_edit);

		$patient_id = $row_edit['patient_id'];
		$patient_fname = $row_edit['patient_fname'];
		$patient_lname = $row_edit['patient_lname'];
		$ward_id = $row_edit['ward_id'];
		$patient_bed = $row_edit['patient_bed'];
		$patient_age = $row_edit['patient_age'];
		$patient_admit_date = $row_edit['patient_admit_date'];
		$diseases_id = $row_edit['diseases_id'];
		$patient_allergic = $row_edit['patient_allergic'];
		$patient_MAC = $row_edit['patient_MAC'];
	
		$get_ward = "select * from ward where ward_id='$ward_id'";
		$run_ward = mysqli_query($con,$get_ward);
		$row_ward = mysqli_fetch_array($run_ward);

		$ward_id = $row_ward['ward_id'];
		$patient_ward = $row_ward['patient_ward'];
		
		$get_diseases = "select * from diseases where diseases_id='$diseases_id'";
		$run_diseases = mysqli_query($con,$get_diseases);
		$row_diseases = mysqli_fetch_array($run_diseases);

		$diseases_id = $row_diseases['diseases_id'];
		$diseases_name = $row_diseases['diseases_name'];
	}
		
?>


<!DOCTYPE html>
<html>
	<head>
		<title> Edit Patient Details </title>

		<!-- To create format style text area -->
		<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
			<script>tinymce.init({selector:'textarea'});</script>

	</head>

<body>


<div class="row"><!-- row Starts -->
		<div class="col-lg-12"><!-- col-lg-12 Starts -->
			<ol class="breadcrumb"><!-- breadcrumb Starts -->
				<li class="active">
					<i class="fa fa-dashboard"> </i> Dashboard / Edit Patient Details
				</li>
			</ol><!-- breadcrumb Ends -->
		</div><!-- col-lg-12 Ends -->
	</div><!-- row Ends -->

	<div class="row"><!-- 2 row Starts --> 
		<div class="col-lg-12"><!-- col-lg-12 Starts -->
			<div class="panel panel-default"><!-- panel panel-default Starts -->
				<div class="panel-heading"><!-- panel-heading Starts -->
					<h3 class="panel-title">
						<i class="fa fa-cart-plus"></i> Edit Patient Details
					</h3>
				</div><!-- panel-heading Ends -->

							<div class="panel-body" ><!-- panel-body Starts -->

							<!-- To create form -->
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >First Name :</label>
									<div class="col-md-6" >
										<input type="text" name="patient_fname" class="form-control" value="<?php echo $patient_fname; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Last Name :</label>
									<div class="col-md-6" >
										<input type="text" name="patient_lname" class="form-control" value="<?php echo $patient_lname; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Ward :</label>
									<div class="col-md-6" >
										<select name="ward_id" class="form-control" >
												<option value="<?php echo $ward_id; ?>" > <?php echo $patient_ward; ?> </option>

												<?php
													$get_ward = "select * from ward ";
													$run_ward = mysqli_query($con,$get_ward);
														while ($row_ward=mysqli_fetch_array($run_ward)) {
													
														$ward_id = $row_ward['ward_id'];
														$patient_ward = $row_ward['patient_ward'];
															echo "<option value='$ward_id'>$patient_ward</option>";
													}
												?>
											</select>
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Bed No :</label>
									<div class="col-md-6" >
										<input type="number" name="patient_bed" class="form-control" value="<?php echo $patient_bed; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Age :</label>
									<div class="col-md-6" >
										<input type="text" name="patient_age" class="form-control" value="<?php echo $patient_age; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Admit Date :</label>
									<div class="col-md-6" >
										<input type="date" name="patient_admit_date" class="form-control" value="<?php echo $patient_admit_date; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Diseases :</label>
									<div class="col-md-6" >
										<select name="diseases_id" class="form-control" >
												<option value="<?php echo $diseases_id; ?>" > <?php echo $diseases_name; ?> </option>

												<?php
													$get_diseases = "select * from diseases ";
													$run_diseases = mysqli_query($con,$get_diseases);
														while ($row_diseases=mysqli_fetch_array($run_diseases)) {
													
														$diseases_id = $row_diseases['diseases_id'];
														$diseases_name = $row_diseases['diseases_name'];
															echo "<option value='$diseases_id'>$diseases_name</option>";
													}
												?>

											</select>
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Allergic :</label>
									<div class="col-md-6" >
										<input type="text" name="patient_allergic" class="form-control" value="<?php echo $patient_allergic; ?>" >
									</div>
							</div><!-- form-group Ends -->

	           	 			<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >MAC :</label>
									<div class="col-md-6" >
										<input type="text" name="patient_MAC" class="form-control" value="<?php echo $patient_MAC; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" ></label>
									<div class="col-md-6" >
									<a href="my_account.php?view_patient_details" class="btn btn-danger"> Back </a>
											<button type="submit" name="update" value="Update Patient Details" class="btn btn-primary">Update Patient Details</button>
									</div>
							</div><!-- form-group Ends -->
				</form><!-- form-horizontal Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->

	</body>
</html>

<?php
	if(isset($_POST['update'])){

		$patient_fname = $_POST['patient_fname'];
		$patient_lname = $_POST['patient_lname'];
		$ward_id = $_POST['ward_id'];
		$patient_bed = $_POST['patient_bed'];
		$patient_age = $_POST['patient_age'];
		$patient_admit_date = $_POST['patient_admit_date'];
		$diseases_id = $_POST['diseases_id'];
		$patient_allergic = $_POST['patient_allergic'];
		$patient_MAC = $_POST['patient_MAC'];

	$update_patient = "update patient_details set patient_fname='$patient_fname', patient_lname='$patient_lname', ward_id='$ward_id', patient_bed='$patient_bed', patient_age='$patient_age', patient_admit_date='$patient_admit_date', diseases_id='$diseases_id', patient_allergic='$patient_allergic', patient_MAC='$patient_MAC'";
	$run_patient = mysqli_query($con,$update_patient);

		if($run_patient){
			echo "<script> alert('Patient details has been updated successfully') </script>";
			echo "<script>window.open('my_account.php?view_patient_details','_self')</script>";
		}
	}
?>



