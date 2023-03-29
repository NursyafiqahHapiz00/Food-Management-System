<?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward/Room*: </label>
									<div class="col-md-6">
											<select name="ward_id" class="form-control" required>
												<option> Select Ward/Room  </option>

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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

	<br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

<html>
	<body>
	</body>
</html><?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>

						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Complaint</b>
							</span>
						</div>
						<br><br>
						
						<div class="status alert alert-success" style="display: none"></div>
                        <form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Nurse ID*: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="nurse_id" required>
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Ward*: </label>
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
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id">
										</div>
						</div><!-- form-group Ends -->
	
						<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Reason*: </label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="complaint_reason" required>
										</div>
						</div><!-- form-group Ends -->
						<center>	
						<div class="form-group col-md-12">
                                <button type="submit" name="submit" class="btn btn-primary pull-center" value="submit">
									<i class="fa fa-user-md"></i> Submit
								</button>
                            </div>
                        </form>
						
						<?php						
							if(isset($_POST['submit'])){
								
								$nurse_id = $_POST['nurse_id'];
								$ward_id = $_POST['ward_id'];
								$patient_id = $_POST['patient_id'];			
								$complaint_reason = $_POST['complaint_reason'];
	
								$insert_complaint = "insert into complaint (nurse_id, ward_id, patient_id, complaint_reason) values ('$nurse_id', '$ward_id', '$patient_id','$complaint_reason')";
								$run_complaint = mysqli_query($con,$insert_complaint);
	
									if($run_complaint){
										echo "<script>alert('Complaint has been recorded!')</script>";
										echo "<script>window.open('complaint.php','_self')</script>";
									}
							}
						?>
						</div><!--/#contact-page-->	
					</div>
				</div>
			</div>
		</div>

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