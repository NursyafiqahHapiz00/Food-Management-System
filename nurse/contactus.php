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
                    <div class="contact-form"><br>
						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid pink; text-align: center">
							<span style="font-size: 20px; background-color: #ffedc; padding: 0 5px;">
								<b>Register Patient</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
							<label>Patient ID :</label>
								<input type="number" class="form-control" name="patient_id" required>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
							<label>First Name :</label>
								<input type="text" class="form-control" name="patient_fname" required>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
							<label>Last Name :</label>
								<input type="text" class="form-control" name="patient_lname" required>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
							<label>Ward :</label>
								<input type="text" class="form-control" name="patient_ward" required>
						</div><!-- form-group Ends -->

						<div class="form-group"><!-- form-group Starts -->
							<label>Bed No :</label>
								<input type="number" class="form-control" name="patient_bed" required>
						</div><!-- form-group Ends -->
						
						<div class="form-group" ><!-- form-group Starts -->
							<label>Age :</label>
								<input type="number" class="form-control" name="patient_age" required>
						</div><!-- form-group Ends -->
						
						<div class="form-group" ><!-- form-group Starts -->
							<label>Admit Date :</label>
								<input type="date" class="form-control" name="patient_admit_date" required>
						</div><!-- form-group Ends -->
						
						<div class="form-group" ><!-- form-group Starts -->
							<label>Illness :</label>
								<input type="text" class="form-control" name="patient_illness" required>
						</div><!-- form-group Ends -->
				
						<div class="form-group" ><!-- form-group Starts -->
							<label>Allergic :</label>
								<input type="text" class="form-control" name="patient_allergic">
						</div><!-- form-group Ends -->
						
						<div class="form-group" ><!-- form-group Starts -->
							<label>MAC: </label>
								<select name="patient_MAC" id="patient_MAC" required>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								</select>
						</div><!-- form-group Ends -->
						
						<p> Type of Meal </p>
						
						<div class="form-group" ><!-- form-group Starts -->
							<label>Breakfast :</label>
								<input type="text" class="form-control" name="patient_breakfast" required>
						</div><!-- form-group Ends -->
						
						<div class="form-group" ><!-- form-group Starts -->
							<label>Menu :</label>
								<input type="text" class="form-control" name="patient_menuB" required>
						</div><!-- form-group Ends -->
						
						<div class="form-group" ><!-- form-group Starts -->
							<label>Lunch :</label>
								<input type="text" class="form-control" name="patient_lunch" required>
						</div><!-- form-group Ends -->
						
						<div class="form-group" ><!-- form-group Starts -->
							<label>Menu :</label>
								<input type="text" class="form-control" name="patient_menuL" required>
						</div><!-- form-group Ends -->
						
						<div class="form-group" ><!-- form-group Starts -->
							<label>Hi-Tea :</label>
								<input type="text" class="form-control" name="patient_hitea" required>
						</div><!-- form-group Ends -->
						
						<div class="form-group" ><!-- form-group Starts -->
							<label>Menu :</label>
								<input type="text" class="form-control" name="patient_menuH" required>
						</div><!-- form-group Ends -->
						
						<div class="form-group" ><!-- form-group Starts -->
							<label>Dinner :</label>
								<input type="text" class="form-control" name="patient_dinner" required>
						</div><!-- form-group Ends -->
						
						<div class="form-group" ><!-- form-group Starts -->
							<label>Menu :</label>
								<input type="text" class="form-control" name="patient_menuD" required>
						</div><!-- form-group Ends -->
							
						<div class="form-group col-md-12">
                                <button type="add" name="add" class="btn btn-primary pull right" value="add">
								<i class="fa fa-user-md"></i> Add
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['add'])){
								
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
	
								$insert_patient_details = "insert into patient_details (patient_id, patient_fname, patient_lname, patient_ward, patient_bed, patient_age, patient_admit_date, patient_illness, patient_allergic, patient_MAC, patient_breakfast, patient_menuB, patient_lunch, patient_menuL, patient_hitea, patient_menuH, patient_dinner, patient_menuD) values ('$patient_id','$patient_fname', '$patient_lname', '$patient_ward', '$patient_bed', '$patient_age', '$patient_admit_date', '$patient_illness', '$patient_allergic','$patient_MAC','$patient_breakfast','$patient_menuB','$patient_lunch', '$patient_menuL', '$patient_hitea', '$patient_menuH', '$patient_dinner', '$patient_menuD')";
								$run_patient_details = mysqli_query($con,$insert_patient_details);
	
									if($run_patient_details){
										echo "<script>alert('Patient detail has been updated!')</script>";
										echo "<script>window.open('patient_details.php','_self')</script>";
									}
							}
						?>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html>