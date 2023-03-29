<?php
	if(isset($_GET['edit_patient_menu'])){
		
		$edit_id = $_GET['edit_patient_menu'];
		$get_patient_menu = "select * from patient_m_menu where patient_m_menu_id='$edit_id'";
		$run_edit = mysqli_query($con,$get_patient_menu);
		$row_edit = mysqli_fetch_array($run_edit);

			$patient_m_menu_id = $row_edit['patient_m_menu_id'];
			$patient_id = $row_edit['patient_id'];
			$meals_portion_id = $row_edit['meals_portion_id'];
			$meals_menu_b_id = $row_edit['meals_menu_b_id'];
			$meals_menu_l_id = $row_edit['meals_menu_l_id'];
			$meals_menu_ht_id = $row_edit['meals_menu_ht_id'];
			$meals_menu_d_id = $row_edit['meals_menu_d_id'];
					
			$get_meals_portion = "select * from meals_portion where meals_portion_id='$meals_portion_id'";
			$run_meals_portion = mysqli_query($con,$get_meals_portion);
					$row_meals_portion = mysqli_fetch_array($run_meals_portion);
					$meals_portion = $row_meals_portion['meals_portion'];
					
					$get_meals_menu_b = "select * from meals_menu_b where meals_menu_b_id='$meals_menu_b_id'";
					$run_meals_menu_b = mysqli_query($con,$get_meals_menu_b);
					$row_meals_menu_b = mysqli_fetch_array($run_meals_menu_b);
					$meals_menu_b = $row_meals_menu_b['meals_menu_b'];

					$get_meals_menu_l = "select * from meals_menu_l where meals_menu_l_id='$meals_menu_l_id'";
					$run_meals_menu_l = mysqli_query($con,$get_meals_menu_l);
					$row_meals_menu_l = mysqli_fetch_array($run_meals_menu_l);
					$meals_menu_l = $row_meals_menu_l['meals_menu_l'];
					
					$get_meals_menu_ht = "select * from meals_menu_ht where meals_menu_ht_id='$meals_menu_ht_id'";
					$run_meals_menu_ht = mysqli_query($con,$get_meals_menu_ht);
					$row_meals_menu_ht = mysqli_fetch_array($run_meals_menu_ht);
					$meals_menu_ht = $row_meals_menu_ht['meals_menu_ht'];
					
					$get_meals_menu_d = "select * from meals_menu_d where meals_menu_d_id='$meals_menu_d_id'";
					$run_meals_menu_d = mysqli_query($con,$get_meals_menu_d);
					$row_meals_menu_d = mysqli_fetch_array($run_meals_menu_d);
					$meals_menu_d = $row_meals_menu_d['meals_menu_d'];
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
					<i class="fa fa-dashboard"> </i> Dashboard / Edit Patient Menu
				</li>
			</ol><!-- breadcrumb Ends -->
		</div><!-- col-lg-12 Ends -->
	</div><!-- row Ends -->

	<div class="row"><!-- 2 row Starts --> 
		<div class="col-lg-12"><!-- col-lg-12 Starts -->
			<div class="panel panel-default"><!-- panel panel-default Starts -->
				<div class="panel-heading"><!-- panel-heading Starts -->
					<h3 class="panel-title">
						<i class="fa fa-cart-plus"></i> Edit Patient Menu
					</h3>
				</div><!-- panel-heading Ends -->

							<div class="panel-body" ><!-- panel-body Starts -->

							<!-- To create form -->
							<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Patient ID :</label>
									<div class="col-md-6" >
										<input type="number" name="patient_id" class="form-control" value="<?php echo $patient_id; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Meals Portion :</label>
									<div class="col-md-6" >
										<select name="meals_portion_id" class="form-control" >
												<option value="<?php echo $meals_portion_id; ?>" > <?php echo $meals_portion_id; ?> </option>

												<?php
													$get_meals_portion = "select * from meals_portion ";
													$run_meals_portion = mysqli_query($con,$get_meals_portion);
														while ($row_meals_portion=mysqli_fetch_array($run_meals_portion)) {
													
														$meals_portion_id = $row_meals_portion['meals_portion_id'];
														$meals_portion = $row_meals_portion['meals_portion'];
															echo "<option value='$meals_portion_id'>$meals_portion</option>";
													}
												?>
											</select>
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Breakfast :</label>
									<div class="col-md-6" >
										<select name="meals_menu_b_id" class="form-control" >
												<option value="<?php echo $meals_menu_b_id; ?>" > <?php echo $meals_menu_b; ?> </option>

												<?php
													$get_meals_menu_b = "select * from meals_menu_b ";
													$run_meals_menu_b = mysqli_query($con,$get_meals_menu_b);
														while ($row_meals_menu_b=mysqli_fetch_array($run_meals_menu_b)) {
													
														$meals_menu_b_id = $row_meals_menu_b['meals_menu_b_id'];
														$meals_menu_b = $row_meals_menu_b['meals_menu_b'];
															echo "<option value='$meals_menu_b_id'>$meals_menu_b</option>";
													}
												?>
											</select>
									</div>
							</div><!-- form-group Ends -->
							
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Lunch :</label>
									<div class="col-md-6" >
										<select name="meals_menu_l_id" class="form-control" >
												<option value="<?php echo $meals_menu_l_id; ?>" > <?php echo $meals_menu_l; ?> </option>

												<?php
													$get_meals_menu_l = "select * from meals_menu_l ";
													$run_meals_menu_l = mysqli_query($con,$get_meals_menu_l);
														while ($row_meals_menu_l=mysqli_fetch_array($run_meals_menu_l)) {
													
														$meals_menu_l_id = $row_meals_menu_l['meals_menu_l_id'];
														$meals_menu_l = $row_meals_menu_l['meals_menu_l'];
															echo "<option value='$meals_menu_l_id'>$meals_menu_l</option>";
													}
												?>
											</select>
									</div>
							</div><!-- form-group Ends -->
							
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Hi-Tea :</label>
									<div class="col-md-6" >
										<select name="meals_menu_ht_id" class="form-control" >
												<option value="<?php echo $meals_menu_ht_id; ?>" > <?php echo $meals_menu_ht; ?> </option>

												<?php
													$get_meals_menu_ht = "select * from meals_menu_ht ";
													$run_meals_menu_ht = mysqli_query($con,$get_meals_menu_ht);
														while ($row_meals_menu_ht=mysqli_fetch_array($run_meals_menu_ht)) {
													
														$meals_menu_ht_id = $row_meals_menu_ht['meals_menu_ht_id'];
														$meals_menu_ht = $row_meals_menu_ht['meals_menu_ht'];
															echo "<option value='$meals_menu_ht_id'>$meals_menu_ht</option>";
													}
												?>
											</select>
									</div>
							</div><!-- form-group Ends -->
							
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Dinner :</label>
									<div class="col-md-6" >
										<select name="meals_menu_d_id" class="form-control" >
												<option value="<?php echo $meals_menu_d_id; ?>" > <?php echo $meals_menu_d; ?> </option>

												<?php
													$get_meals_menu_d = "select * from meals_menu_d ";
													$run_meals_menu_d = mysqli_query($con,$get_meals_menu_d);
														while ($row_meals_menu_d=mysqli_fetch_array($run_meals_menu_d)) {
													
														$meals_menu_d_id = $row_meals_menu_d['meals_menu_d_id'];
														$meals_menu_d = $row_meals_menu_d['meals_menu_d'];
															echo "<option value='$meals_menu_d_id'>$meals_menu_d</option>";
													}
												?>
											</select>
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" ></label>
									<div class="col-md-6" >
									<a href="my_account.php?view_patient_menu" class="btn btn-danger"> Back </a>
											<button type="submit" name="update" value="Update Patient Menu" class="btn btn-primary">Update Patient Menu</button>
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
		$meals_portion_id = $_POST['meals_portion_id'];
		$meals_menu_b_id = $_POST['meals_menu_b_id'];
		$meals_menu_l_id = $_POST['meals_menu_l_id'];
		$meals_menu_ht_id = $_POST['meals_menu_ht_id'];
		$meals_menu_d_id = $_POST['meals_menu_d_id'];
		
	$update_patient_menu = "update patient_m_menu set patient_id='$patient_id', meals_portion_id='$meals_portion_id', meals_menu_b_id='$meals_menu_b_id', meals_menu_l_id='$meals_menu_l_id', meals_menu_ht_id='$meals_menu_ht_id', meals_menu_d_id='$meals_menu_d_id'";
	$run_patient_menu = mysqli_query($con,$update_patient_menu);

		if($run_patient_menu){
			echo "<script> alert('One patient menu has been updated successfully') </script>";
			echo "<script>window.open('my_account.php?view_patient_menu,'_self')</script>";
		}
	}
?>



