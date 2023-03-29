<?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

		<div id="contact-page" class="container">
			<div class="row">   
                <div class="col-sm-12">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>
					
						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Register Patient</b>
							</span>
						</div>
						<br><br>
						
					
						<div class="status alert alert-success" style="display: none"></div>
                        	<form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
								<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id" required>
										</div>
								</div><!-- form-group Ends -->
	
								<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> First Name: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="patient_fname" required>	
										</div>
								</div><!-- form-group Ends -->
			
								<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Last Name: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="patient_lname" required>
										</div>
								</div><!-- form-group Ends -->

								<div class="form-group"><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Bed: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_bed" required>
										</div>
								</div><!-- form-group Ends -->

								<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Age: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_age" required>
										</div>
								</div><!-- form-group Ends -->

								<div class="form-group" >
									<label class="col-md-3 control-label">Ward:</label>
										<div class="col-md-6">
											<select name="ward_id" class="form-control" required>
												<option> Select Ward  </option>

													<?php
														$get_ward_id = "select * from ward";
														$run_ward_id = mysqli_query($con,$get_ward_id);
															while($row_ward_id = mysqli_fetch_array($run_ward_id)){

														$ward_id = $row_ward_id['ward_id'];
														$patient_ward = $row_ward_id['patient_ward'];
															echo "<option value='$ward_id'> $patient_ward </option>";
														}
													?>									
											</select>
										</div>
								</div>

								<div class="form-group" >
									<label class="col-md-3 control-label">Diseases:</label>
										<div class="col-md-6">
											<select name="diseases_id" class="form-control" required>
												<option> Select Diseases  </option>

													<?php
														$get_diseases_id = "select * from diseases";
														$run_diseases_id = mysqli_query($con,$get_diseases_id);
															while($row_diseases_id = mysqli_fetch_array($run_diseases_id)){

														$diseases_id = $row_diseases_id['diseases_id'];
														$diseases_name = $row_diseases_id['diseases_name'];
															echo "<option value='$diseases_id'> $diseases_name </option>";
														}
													?>									
											</select>
										</div>
								</div>					
						
								<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Admit Date: </label>
										<div class="col-md-6">
											<input type="date" class="form-control" name="patient_admit_date" required>
										</div>
								</div><!-- form-group Ends -->						
								
								<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Allergic: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="patient_allergic">
										</div>
								</div><!-- form-group Ends -->
								
								<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Mother and Child (MAC): </label>
										<div class="col-md-6">
											<select name="patient_MAC" id="patient_MAC" class="form-control" required>
												<option> Choose Option  </option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>
								</div><!-- form-group Ends -->	
								<center>
								<div class="form-group col-md-12">
									<button type="add" name="add" class="btn btn-primary pull-center" value="Add">
										<i class="fa fa-user-md"></i> Next
									</button>
                           		 </div>
							</form>
													</div>
								
								<?php						
									if(isset($_POST['add'])){
										
										$patient_id = $_POST['patient_id'];
										$patient_fname = $_POST['patient_fname'];
										$patient_lname = $_POST['patient_lname'];
										$patient_bed = $_POST['patient_bed'];
										$patient_age = $_POST['patient_age'];
										$ward_id = $_POST['ward_id'];
										$diseases_id = $_POST['diseases_id'];
										$patient_admit_date = $_POST['patient_admit_date'];
										$patient_allergic = $_POST['patient_allergic'];
										$patient_MAC = $_POST['patient_MAC'];
			
										$insert_patient_details = "insert into patient_details (patient_id, patient_fname, patient_lname, patient_bed, patient_age, ward_id, diseases_id, patient_admit_date, patient_allergic, patient_MAC) values ('$patient_id','$patient_fname', '$patient_lname', '$patient_bed', '$patient_age', '$ward_id', '$diseases_id', '$patient_admit_date', '$patient_allergic','$patient_MAC')";
										$run_patient_details = mysqli_query($con,$insert_patient_details);
			
											if($run_patient_details){
												echo "<script>alert('Patient details has been registered!')</script>";
												echo "<script>window.open('patient_m_menu.php','_self')</script>";
											}
									}
								?>

						</div><!--/#contact-page-->
					</div>
				</div>
			</div>
		</div>

	<br><br><br><br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html>