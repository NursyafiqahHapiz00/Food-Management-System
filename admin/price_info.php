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
				<i class="fa fa-dashboard"> </i> Dashboard / Price Charge for Four Meals
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- row Ends -->

<div class="row"><!-- 2 row Starts --> 
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading"><!-- panel-heading Starts -->
				<h3 class="panel-title">
					<i class="fa fa-cart-plus"></i> Price Charge for Four Meals
				</h3>
			</div><!-- panel-heading Ends -->

			

						<div class="panel-body"><!-- panel-body Starts -->

						<!-- To create form -->
						<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

							<div class="form-group" ><!-- form-group Starts -->					
								<label class="col-md-3 control-label" > Price Charge (RM): </label>
									<div class="col-md-6" >
										<input type="text" name="PriceCharge" class="form-control" required >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->					
								<label class="col-md-3 control-label" > Penalty Charge on Price (%): </label>
									<div class="col-md-6" >
										<input type="text" name="PenaltyCharge" class="form-control" required >
									</div>
							</div><!-- form-group Ends -->


							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" ></label>
									<div class="col-md-6" >
										<input type="submit" name="submit" value="Add" class="btn btn-primary form-control" >
									</div>
							</div><!-- form-group Ends -->

					</form><!-- form-horizontal Ends -->

				</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->	
</div><!-- 2 row Ends --> 

				<?php 
					if(isset($_POST['submit'])){  
						$PriceCharge=$_POST["PriceCharge"];
						$PenaltyCharge= $_POST['PenaltyCharge'];
					//to insert in mysql
						
						$query="INSERT INTO price_info (price_charge,penalty_charge) 
								VALUES ('$PriceCharge','$PenaltyCharge')";

						$run= mysqli_query($con,$query)  ;

						if($run){
							echo "<script>alert('Price info form submitted successfully')</script>";
							echo "<script>window.open('index.php?price_info','_self')</script>";
						}
						else{
							echo "Form not submitted". mysqli_error($con);
							}
					}
					?>

<?php 
	} 
?>
<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading"><!-- panel-heading Starts -->
				<h3 class="panel-title"><!-- panel-title Starts -->
					<i class="fa fa-apple"> </i> View Price and Penalty Charge for Four Meals
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->
<div class="panel-body"><!-- panel-body Starts -->

<!-- To create table -->
<div class="table-responsive"><!-- table-responsive Starts -->
	<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->
		<thead><!-- thead Starts -->

			<tr>

				<th>Price Info ID</th>
				<th>Price Charge</th>
				<th>Penalty Charge</th>
				<th>Action</th>
				<th>Action</th>

			</tr>

		</thead><!-- thead Ends -->
		
		<tbody><!-- tbody Starts -->

		<?php
			$i=0;
			$get_price_info = "select * from price_info";
			$run_price_info = mysqli_query($con,$get_price_info);
				while($row_price_info = mysqli_fetch_array($run_price_info)){

			$price_info_id = $row_price_info['price_info_id'];
			$price_charge = $row_price_info['price_charge'];
			$penalty_charge = $row_price_info['penalty_charge'];
			$i++;
		?>

		<tr>

			<td> <?php echo $i; ?> </td>

			<td> <?php echo "RM". $price_charge; ?> </td>
			<td> <?php echo $penalty_charge ."%"; ?> </td>

			<td> 
				<a href="index.php?edit_price_info=<?php echo $price_info_id; ?>">
				<button class="btn btn-success"><i class="fa fa-pencil"></i> Edit</button>
				</a>
			</td>

			<td> 
				<a href="index.php?delete_price_info=<?php echo $price_info_id; ?>">
				<button class="btn btn-danger"><i class="fa fa-trash-o" ></i> Delete</button>
				</a>
			</td>
			
		</tr>

		<?php 
			} 
		?>

</tbody><!-- tbody Ends -->
</table><!-- table table-bordered table-hover table-striped Ends -->
</div><!-- table-responsive Ends -->
</div><!-- panel-body Ends -->


