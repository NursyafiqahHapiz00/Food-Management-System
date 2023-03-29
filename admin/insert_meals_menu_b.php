<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<div class="row"><!-- row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li class="active">
				<i class="fa fa-dashboard"> </i> Dashboard / Insert Meals Menu for Breakfast
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- row Ends -->

<div class="row"><!-- 2 row Starts --> 
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading"><!-- panel-heading Starts -->
				<h3 class="panel-title">
					<i class="fa fa-cart-plus"></i> Insert Meals Menu for Breakfast
				</h3>
			</div><!-- panel-heading Ends -->

						<div class="panel-body"><!-- panel-body Starts -->

						<!-- To create form -->
						<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->
						
						<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" > Meals Portion: </label>
									<div class="col-md-6" >
									<select name="meals_portion_id" class="form-control" >
											
									<?php
									
									$sql=" SELECT * FROM meals_portion ";
									$run_m_portion = mysqli_query($con,$sql);
										while ($row_m_portion=mysqli_fetch_array($run_m_portion)) {
					
										$meals_portion_id = $row_m_portion['meals_portion_id'];
										$meals_portion = $row_m_portion['meals_portion'];
										echo "<option value='$meals_portion_id'>$meals_portion</option>";
											}
											?>
										</select>
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->					
								<label class="col-md-3 control-label" > Menu: </label>
									<div class="col-md-6" >
										<input type="text" name="Menu" class="form-control" required >
									</div>
							</div><!-- form-group Ends -->
							
							<div class="form-group" ><!-- form-group Starts -->
							<label class="col-md-9 control-label" style="color:red;" align="left">
							    Example: Kway Teow Soup (Without Flavor) or White Bread + Scramble Egg
							</label>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->					
								<label class="col-md-3 control-label" > Quantity (gram): </label>
									<div class="col-md-6" >
										<input type="text" name="Quantity" class="form-control" required >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->					
								<label class="col-md-3 control-label" > Cost of Meals (RM): </label>
									<div class="col-md-6" >
										<input type="text" name="CostofMeals" class="form-control" required >
									</div>
							</div><!-- form-group Ends -->


							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" ></label>
									<div class="col-md-6" >
										<input type="submit" name="submit" value="Add" class="btn btn-primary form-control" >
									</div>
							</div><!-- form-group Ends -->
							
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" ></label>
									<div class="col-md-6"> 	
										<a href="index.php?insert_meals_menu" class="btn btn-danger form-control"> Back </a>
									</div>
							</div><!-- form-group Ends -->

					</form><!-- form-horizontal Ends -->

				</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->	
</div><!-- 2 row Ends --> 

				<?php 
					if(isset($_POST['submit'])){  
						
						$meals_portion_id= $_POST['meals_portion_id'];
						$Menu=$_POST["Menu"];
						$Quantity=$_POST["Quantity"];
						$CostofMeals = $_POST['CostofMeals'];
					
					//to insert in mysql
						
						$query="INSERT INTO meals_menu_b (meals_portion_id,meals_menu_b,meals_quantity_b,meals_cost) 
								VALUES ('$meals_portion_id','$Menu','$Quantity','$CostofMeals')";

						$run= mysqli_query($con,$query)  ;

						if($run){
							echo "<script>alert('Menu Form submitted successfully')</script>";
							echo "<script>window.open('index.php?view_meals_menu_b=1','_self')</script>";
						}
						else{
							echo "Form not submitted". mysqli_error($con);
							}
					}
					?>

<?php 
	} 
?>



