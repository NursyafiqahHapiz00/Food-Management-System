

<<?php
	if(isset($_GET['edit_patient'])){
		
		$edit_id = $_GET['edit_patient'];
		$get_patient_details = "select * from patient_details where patient_id='$edit_id'";
		$run_edit = mysqli_query($con,$get_patient_details);
		$row_edit = mysqli_fetch_array($run_edit);

		$patient_id = $row_edit['patient_id'];
		$patient_fname = $row_edit['patient_fname'];
		$patient_lname = $row_edit['patient_lname'];
		$patient_ward = $row_edit['patient_ward'];
		$patient_bed = $row_edit['patient_bed'];
		$patient_age = $row_edit['patient_age'];
		$patient_admit_date = $row_edit['patient_admit_date'];
		$patient_illness = $row_edit['patient_illness'];
		$patient_allergic = $row_edit['patient_allergic'];
		$patient_MAC = $row_edit['patient_MAC'];
		$patient_breakfast = $row_edit['patient_breakfast'];
		$patient_menuB = $row_edit['patient_menuB'];
		$patient_lunch = $row_edit['patient_lunch'];
		$patient_menuL = $row_edit['patient_menuL'];
		$patient_hitea = $row_edit['patient_hitea'];
		$patient_menuH = $row_edit['patient_menuH'];
		$patient_dinner = $row_edit['patient_dinner'];
		$patient_menuD = $row_edit['patient_menuD'];

	}

	$get_patient = "select * from patient_details where patient_id='$patient_id'";
	$run_patient = mysqli_query($con,$get_patient);
	$row_patient = mysqli_fetch_array($run_patient);

	
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
								<label class="col-md-3 control-label" >Patient ID :</label>
									<div class="col-md-6" >
										<input type="text" name="patient_id" class="form-control" value="<?php echo $patient_id; ?>" >
									</div>
							</div><!-- form-group Ends -->

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
										<input type="text" name="patient_ward" class="form-control" value="<?php echo $patient_ward; ?>" >
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
								<label class="col-md-3 control-label" >Illness :</label>
									<div class="col-md-6" >
										<input type="text" name="patient_illness" class="form-control" value="<?php echo $patient_illness; ?>" >
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
								<label class="col-md-3 control-label" >Breakfast :</label>
									<div class="col-md-6" >
										<input type="text" name="patient_breakfast" class="form-control" value="<?php echo $patient_breakfast; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Menu :</label>
									<div class="col-md-6" >
										<input type="text" name="patient_menuB" class="form-control" value="<?php echo $patient_menuB; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Lunch :</label>
									<div class="col-md-6" >
										<input type="text" name="patient_lunch" class="form-control" value="<?php echo $patient_lunch; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Menu :</label>
									<div class="col-md-6" >
										<input type="text" name="patient_menuL" class="form-control" value="<?php echo $patient_menuL; ?>" >
									</div>
							</div><!-- form-group Ends -->
							
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Hi-Tea :</label>
									<div class="col-md-6" >
										<input type="text" name="patient_hitea" class="form-control" value="<?php echo $patient_hitea; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Menu :</label>
									<div class="col-md-6" >
										<input type="text" name="patient_menuH" class="form-control" value="<?php echo $patient_menuH; ?>" >
									</div>
							</div><!-- form-group Ends -->
							
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Dinner :</label>
									<div class="col-md-6" >
										<input type="text" name="patient_dinner" class="form-control" value="<?php echo $patient_dinner; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Menu :</label>
									<div class="col-md-6" >
										<input type="text" name="patient_menuD" class="form-control" value="<?php echo $patient_menuD; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" ></label>
									<div class="col-md-6" >
									<a href="index.php?view_patient" class="btn btn-danger"> Back </a>
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

		$patient_id = $_POST['patient_id'];
		$patient_fname = $_POST['patient_fname'];
		$patient_lname = $_POST['patient_lname'];
		$patient_ward = $_POST['patient_ward'];
		$patient_bed = $_POST['patient_bed'];
		$patient_age = $_POST['patient_age'];
		$patient_admit_date = $_POST['patient_admit_date'];
		$patient_illness = $_POST['patient_illness'];
		$patient_allergic = $_POST['patient_allergic'];
		$patient_MAC = $_POST['patient_MAC'];
		$patient_breakfast = $_POST['patient_breakfast'];
		$patient_menuB = $_POST['patient_menuB'];
		$patient_lunch = $_POST['patient_lunch'];
		$patient_menuL = $_POST['patient_menuL'];
		$patient_hitea = $_POST['patient_hitea'];
		$patient_menuH = $_POST['patient_menuH'];
		$patient_dinner = $_POST['patient_dinner'];
		$patient_menuD = $_POST['patient_menuD'];

	$update_patient = "update patient_details set patient_id='$patient_id', patient_fname='$patient_fname', patient_lname='$patient_lname', patient_ward='$patient_ward', patient_bed='$patient_bed', patient_age='$patient_age', patient_admit_date='$patient_admit_date', patient_illness='$patient_illness', patient_allergic='$patient_allergic', patient_MAC='$patient_MAC', patient_breakfast='$patient_breakfast', patient_menuB='$patient_menuB', patient_lunch='$patient_lunch', patient_menuL='$patient_menuL', patient_hitea='$patient_hitea', patient_menuH='$patient_menuH', patient_dinner='$patient_dinner', patient_menuD='$patient_menuD'";
	$run_patient = mysqli_query($con,$update_patient);

		if($run_patient){
			echo "<script> alert('Patient details has been updated successfully') </script>";
			echo "<script>window.open('nurse?index.php?view_patient_details','_self')</script>";
		}
	}
?>


