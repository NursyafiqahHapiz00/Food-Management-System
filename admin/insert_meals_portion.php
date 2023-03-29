<?php
	if(!isset($_SESSION['admin_email'])){
	echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li>
				<i class="fa fa-dashboard"></i> Dashboard / Insert Meals Portion
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading" ><!-- panel-heading Starts -->
				<h3 class="panel-title" ><!-- panel-title Starts -->
					<i class="fa fa-apple" ></i> Insert Meals Portion
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->

						<div class="panel-body" ><!-- panel-body Starts -->

						<!-- To create form -->
						<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" >Meals Portion Name</label>
									<div class="col-md-6" >
										<input type="text" name="meals_portion" class="form-control" >
									</div>
							</div><!-- form-group Ends -->

							<div class="form-group" ><!-- form-group Starts -->
								<label class="col-md-3 control-label" ></label>
									<div class="col-md-6" >
										<input type="submit" name="submit" value="Insert Meals Portion" class="btn btn-primary form-control" >
									</div>
							</div><!-- form-group Ends -->

				</form><!-- form-horizontal Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->

<?php
	if(isset($_POST['submit'])){
		$meals_portion = $_POST['meals_portion'];

		$insert_meals_portion = "insert into meals_portion (meals_portion) values ('$meals_portion')";
		$run_meals_portion = mysqli_query($con,$insert_meals_portion);

		if($run_meals_portion){
			echo "<script>alert('New meals portion has been inserted')</script>";
			echo "<script>window.open('index.php?view_meals_portion=1','_self')</script>";
		}
	}
?>

<?php 
	} 
?>