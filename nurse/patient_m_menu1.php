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
                    <div class="contact-form"><br><br><br>
						<!-- To make text between horizontal line -->
						<div style="width: 100%; height: 10px; border-bottom: 1px solid pink; text-align: center">
							<span style="font-size: 20px; background-color: #ffedc; padding: 0 5px;">
								<b>Register Patient</b>
							</span>
						</div>
						<br><br>

						<center>
						
							
							<div class="panel panel-default sidebar-menu"  style="width:50%"><!--- panel panel-default sidebar-menu Starts -->
		<div class="panel-heading"><!-- panel-heading Starts -->
			<h3 class="panel-title"><!-- panel-title Starts -->
			<center>Sort Meals Portion</center>
			</h3><!-- panel-title Ends -->
		</div><!-- panel-heading Ends -->
						
<div class="panel-body"><!-- panel-body Starts -->
<div class="form-group" ><!-- form-group Starts -->
<form action="patient_m_menu1.php" method="POST" style="display: flex;">
<select name="meals_portion_id" class="form-control">
<option> Select Meals Portion</option>

<?php
	$get_meals_portion_id = "select * from meals_portion";
	$run_meals_portion_id = mysqli_query($con,$get_meals_portion_id);
	while($row_meals_portion_id = mysqli_fetch_array($run_meals_portion_id)){

	$meals_portion_id = $row_meals_portion_id['meals_portion_id'];
	$meals_portion = $row_meals_portion_id['meals_portion'];
	echo "<option value='$meals_portion_id'> $meals_portion </option>";
	}
?>
</select>
<div>&nbsp;</div> 
<div>&nbsp;</div> 
<div>&nbsp;</div> 
<div class="pull-right">
<input class="btn btn-primary" type="submit" name="filter" value="Filter">
</div>
</form>
</div>
</div><!-- panel-body Ends -->
</div>
</center>

<div>

                        	<form class="form-horizontal" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
							
							<div class="form-group" ><!-- form-group Starts -->
									<label class="col-md-3 control-label"> Patient ID: </label>
										<div class="col-md-6">
											<input type="number" class="form-control" name="patient_id" required>
										</div>
								</div><!-- form-group Ends -->
                            <div>
							
							<div class="form-group" >
									<label class="col-md-3 control-label">Meals Portion:</label>
										<div class="col-md-6">


													<?php
														$meals_portion_id =  $_POST["meals_portion_id"];		
																																			
													?>	
								<input type="text" class="form-control" name="meals_portion_id" readonly value="<?php echo $meals_portion_id;
								?>"/>												

								
										</div>
								</div>
						                            							
								<div class="form-group" >
									<label class="col-md-3 control-label">Breakfast:</label>
										<div class="col-md-6">
											<select name="meals_menu_b_id" class="form-control" required>
												<option> Select Meals for Breakfast  </option>

													<?php
                                                    //$con = mysqli_connect("localhost","root","","e-dietary");

                                                    if(isset($_POST['meals_portion_id']))
                                                    {
                                                        $meals_portion_id = $_POST['meals_portion_id'];
														$get_meals_menu_b_id = "select * from meals_menu_b WHERE meals_portion_id=$meals_portion_id";
                                                    }
                                                    else{
                                                        $get_meals_menu_b_id = "select * from meals_menu_b";
                                                    }
														$run_meals_menu_b_id = mysqli_query($con,$get_meals_menu_b_id);
															while($row_meals_menu_b_id = mysqli_fetch_array($run_meals_menu_b_id)){

														$meals_menu_b_id = $row_meals_menu_b_id['meals_menu_b_id'];
														$meals_menu_b = $row_meals_menu_b_id['meals_menu_b'];
															echo "<option value='$meals_menu_b_id'> $meals_menu_b </option>";
														}
													?>									
											</select>
										</div>
								</div>

                                <div class="form-group" >
									<label class="col-md-3 control-label">Lunch:</label>
										<div class="col-md-6">
											<select name="meals_menu_l_id" class="form-control" required>
												<option> Select Meals for Lunch  </option>
												<?php
                                                   // $con = mysqli_connect("localhost","root","","e-dietary");

                                                    if(isset($_POST['meals_portion_id']))
                                                    {
                                                        $meals_portion_id = $_POST['meals_portion_id'];
														$get_meals_menu_l_id = "select * from meals_menu_l WHERE meals_portion_id=$meals_portion_id";
                                                    }
                                                    else{
                                                        $get_meals_menu_l_id = "select * from meals_menu_l";
                                                    }
														$run_meals_menu_l_id = mysqli_query($con,$get_meals_menu_l_id);
															while($row_meals_menu_l_id = mysqli_fetch_array($run_meals_menu_l_id)){

														$meals_menu_l_id = $row_meals_menu_l_id['meals_menu_l_id'];
														$meals_menu_l = $row_meals_menu_l_id['meals_menu_l'];
															echo "<option value='$meals_menu_l_id'> $meals_menu_l </option>";
														}
													?>																				
											</select>
										</div>
								</div>

                                <div class="form-group" >
									<label class="col-md-3 control-label">Hi-Tea:</label>
										<div class="col-md-6">
											<select name="meals_menu_ht_id" class="form-control" required>
												<option> Select Meals for Hi-Tea  </option>

												<?php
                                                  //  $con = mysqli_connect("localhost","root","","e-dietary");

                                                    if(isset($_POST['meals_portion_id']))
                                                    {
                                                        $meals_portion_id = $_POST['meals_portion_id'];
														$get_meals_menu_ht_id = "select * from meals_menu_ht WHERE meals_portion_id=$meals_portion_id";
                                                    }
                                                    else{
                                                        $get_meals_menu_ht_id = "select * from meals_menu_ht";
                                                    }
														$run_meals_menu_ht_id = mysqli_query($con,$get_meals_menu_ht_id);
															while($row_meals_menu_ht_id = mysqli_fetch_array($run_meals_menu_ht_id)){

														$meals_menu_ht_id = $row_meals_menu_ht_id['meals_menu_ht_id'];
														$meals_menu_ht = $row_meals_menu_ht_id['meals_menu_ht'];
															echo "<option value='$meals_menu_ht_id'> $meals_menu_ht </option>";
														}
													?>										
											</select>
										</div>
								</div>

                                <div class="form-group" >
									<label class="col-md-3 control-label">Dinner:</label>
										<div class="col-md-6">
											<select name="meals_menu_d_id" class="form-control" required>
												<option> Select Meals for Dinner  </option>

												<?php
                                                  //  $con = mysqli_connect("localhost","root","","e-dietary");

                                                    if(isset($_POST['meals_portion_id']))
                                                    {
                                                        $meals_portion_id = $_POST['meals_portion_id'];
														$get_meals_menu_d_id = "select * from meals_menu_d WHERE meals_portion_id=$meals_portion_id";
                                                    }
                                                    else{
                                                        $get_meals_menu_d_id = "select * from meals_menu_d";
                                                    }
														$run_meals_menu_d_id = mysqli_query($con,$get_meals_menu_d_id);
															while($row_meals_menu_d_id = mysqli_fetch_array($run_meals_menu_d_id)){

														$meals_menu_d_id = $row_meals_menu_d_id['meals_menu_d_id'];
														$meals_menu_d = $row_meals_menu_d_id['meals_menu_d'];
															echo "<option value='$meals_menu_d_id'> $meals_menu_d </option>";
														}
													?>										
											</select>
										</div>
								</div>	
								
								</div><!-- form-group Ends -->	

								<center>
								<div class="form-group col-md-12">
									<a href="patient_m_menu2=<?php echo $patient_m_menu_id; ?>">
									<button type="add" name="add" class="btn btn-primary pull-center" value="Add">
										<i class="fa fa-user-md"></i> Add
									</button>
                           		 </div>

								<center>
								<div class="form-group col-md-12">
										<a href="patient_m_menu.php" type="button" class="btn btn-danger"> Back</a>
									</div>							
							</form>
								
								<?php						
									if(isset($_POST['add'])){
										
										$patient_id = $_POST['patient_id'];
										$meals_portion_id = $_POST['meals_portion_id'];
										$meals_menu_b_id = $_POST['meals_menu_b_id'];
										$meals_menu_l_id = $_POST['meals_menu_l_id'];
										$meals_menu_ht_id = $_POST['meals_menu_ht_id'];
										$meals_menu_d_id = $_POST['meals_menu_d_id'];
			
										$insert_patient_m_menu = "insert into patient_m_menu (patient_id, meals_portion_id, meals_menu_b_id, meals_menu_l_id, meals_menu_ht_id, meals_menu_d_id) values ('$patient_id', '$meals_portion_id', '$meals_menu_b_id', '$meals_menu_l_id', '$meals_menu_ht_id', '$meals_menu_d_id')";
										$run_patient_m_menu = mysqli_query($con,$insert_patient_m_menu);
			
											if($run_patient_m_menu){
												echo "<script>alert('Patient meals portion has been keyed in!')</script>";
												echo "<script>window.open('nurse/my_account.php?view_patient_details','_self')</script>";
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