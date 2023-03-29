<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<?php
	if(isset($_GET['edit_price_info'])){
		
		$edit_price_info_id = $_GET['edit_price_info'];
		$edit_price_info_query = "select * from price_info where price_info_id='$edit_price_info_id'";
		$run_edit = mysqli_query($con,$edit_price_info_query);
		$row_edit = mysqli_fetch_array($run_edit);

		$price_info_id = $row_edit['price_info_id'];
		$price_charge= $row_edit['price_charge'];
		$penalty_charge= $row_edit['penalty_charge'];
	}
?>

<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-dashboard"></i> Dashboard / Edit Price and Penalty Charge
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading" ><!-- panel-heading Starts -->
				<h3 class="panel-title" ><!-- panel-title Starts -->
					<i class="fa fa-apple" ></i> Edit Price and Penalty Charge
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->

						<div class="panel-body" ><!-- panel-body Starts -->

						<!-- To create form -->
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Price Charge (RM):</label>
									<div class="col-md-6" >
										<input type="text" name="price_charge" class="form-control" value="<?php echo $price_charge; ?>" >
									</div>
							</div><!-- form-group Ends -->
													<!-- To create form -->
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Penalty Charge (RM):</label>
									<div class="col-md-6" >
										<input type="text" name="penalty_charge" class="form-control" value="<?php echo $penalty_charge; ?>" >
									</div>
							</div><!-- form-group Ends -->



							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" ></label>
									<div class="col-md-6" >
									<a href="index.php?price_info" class="btn btn-danger"> Back </a>
											<button type="submit" name="update" value="Update Meals Portion" class="btn btn-primary">Update</button>
									</div>
							</div><!-- form-group Ends -->

				</form><!-- form-horizontal Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->

<?php
	if(isset($_POST['update'])){

		$price_charge= $_POST['price_charge'];
		$penalty_charge= $_POST['penalty_charge'];


		$update_price_info = "update price_info
		set 
		price_charge='".$price_charge."',
		penalty_charge='".$penalty_charge."'

		where price_info_id='$price_info_id'";
		$run_price_info = mysqli_query($con,$update_price_info);

		if($run_price_info){
			echo "<script>alert('Price Info and Penalty Charge has been updated!')</script>";
			echo "<script>window.open('index.php?price_info','_self')</script>";
		}
	}
?>

<?php 
	} 
?>