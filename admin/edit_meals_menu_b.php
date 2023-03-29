<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<?php
	if(isset($_GET['edit_meals_menu_b'])){
		
		$edit_meals_menu_id = $_GET['edit_meals_menu_b'];
		$edit_meals_menu_query = "select * from meals_menu_b where meals_menu_b_id='$edit_meals_menu_id'";
		$run_edit = mysqli_query($con,$edit_meals_menu_query);
		$row_edit = mysqli_fetch_array($run_edit);

		$meals_menu_b_id = $row_edit['meals_menu_b_id'];
		$meals_portion_id = $row_edit['meals_portion_id'];
		$meals_menu_b= $row_edit['meals_menu_b'];
		$meals_quantity_b= $row_edit['meals_quantity_b'];
		$meals_cost= $row_edit['meals_cost'];
	}
?>

<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-dashboard"></i> Dashboard / Edit Meals Menu for Breakfast
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading" ><!-- panel-heading Starts -->
				<h3 class="panel-title" ><!-- panel-title Starts -->
					<i class="fa fa-apple" ></i> Edit Meals Menu for Breakfast 
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->

						<div class="panel-body" ><!-- panel-body Starts -->

						<!-- To create form -->
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Meals Menu:</label>
									<div class="col-md-6" >
										<input type="text" name="meals_menu_b" class="form-control" value="<?php echo $meals_menu_b; ?>" >
									</div>
							</div><!-- form-group Ends -->
													<!-- To create form -->
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Quantity (gram):</label>
									<div class="col-md-6" >
										<input type="text" name="meals_quantity_b" class="form-control" value="<?php echo $meals_quantity_b; ?>" >
									</div>
							</div><!-- form-group Ends -->

													<!-- To create form -->
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Cost of Meals (RM):</label>
									<div class="col-md-6" >
										<input type="text" name="meals_cost" class="form-control" value="<?php echo $meals_cost  ; ?>" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" ></label>
									<div class="col-md-6" >
									<a href="index.php?view_meals_menu_b=1" class="btn btn-danger"> Back </a>
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

		$meals_menu_b= $_POST['meals_menu_b'];
		$meals_quantity_b= $_POST['meals_quantity_b'];
		$meals_cost= $_POST['meals_cost'];


		$update_meals_menu_b = "update meals_menu_b
		set 
		meals_menu_b='".$meals_menu_b."',
		meals_quantity_b='".$meals_quantity_b."',
		meals_cost='".$meals_cost."'

		where meals_menu_b_id='$meals_menu_b_id'";
		$run_meals_menu_b = mysqli_query($con,$update_meals_menu_b);

		if($run_meals_menu_b){
			echo "<script>alert('Meals menu has been updated!')</script>";
			echo "<script>window.open('index.php?view_meals_menu_b=1','_self')</script>";
		}
	}
?>

<?php 
	} 
?>