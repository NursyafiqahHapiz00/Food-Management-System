<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<?php
	if(isset($_GET['edit_meals_portion'])){
		
		$edit_meals_portion_id = $_GET['edit_meals_portion'];
		$edit_meals_portion_query = "select * from meals_portion where meals_portion_id='$edit_meals_portion_id'";
		$run_edit = mysqli_query($con,$edit_meals_portion_query);
		$row_edit = mysqli_fetch_array($run_edit);

		$meals_portion_id = $row_edit['meals_portion_id'];
		$meals_portion = $row_edit['meals_portion'];
	}
?>

<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-dashboard"></i> Dashboard / Edit Meals Portion
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading" ><!-- panel-heading Starts -->
				<h3 class="panel-title" ><!-- panel-title Starts -->
					<i class="fa fa-apple" ></i> Edit Meals Portion
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->

						<div class="panel-body" ><!-- panel-body Starts -->

						<!-- To create form -->
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Meals Portion Name:</label>
									<div class="col-md-6" >
										<input type="text" name="meals_portion" class="form-control" value="<?php echo $meals_portion; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" ></label>
									<div class="col-md-6" >
									<a href="index.php?view_meals_portion=1" class="btn btn-danger"> Back </a>
											<button type="submit" name="update" value="Update Meals Portion" class="btn btn-primary">Update Meals Portion</button>
									</div>
							</div><!-- form-group Ends -->

				</form><!-- form-horizontal Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->

<?php
	if(isset($_POST['update'])){

		$meals_portion = $_POST['meals_portion'];

		$update_meals_portion = "update meals_portion set meals_portion='$meals_portion' where meals_portion_id='$meals_portion_id'";
		$run_meals_portion = mysqli_query($con,$update_meals_portion);

		if($run_meals_portion){
			echo "<script>alert('Meals portion has been updated!')</script>";
			echo "<script>window.open('index.php?view_meals_portion=1','_self')</script>";
		}
	}
?>

<?php 
	} 
?>