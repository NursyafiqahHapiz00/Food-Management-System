<?php
	if(!isset($_SESSION['admin_email'])){
	echo "<script>window.open('login.php','_self')</script>";
	}
		else {
?>

	<!-- To create bootstrap elements -->
	<div class="row" > <!-- Row 1 starts -->
		<div class="col-lg-12" > <!-- To make website responsive -->
			<ol class="breadcrumb" > <!-- To make navigation horizontal bar -->
				<li class="active" >
					<i class="fa fa-dashboard" ></i> Dashboard / Change Admin Password
				</li>
			</ol>
		</div>
	</div>

	<div class="row" >
		<div class="col-lg-12" >
			<div class="panel panel-default" >
				<div class="panel-heading" >
					<h3 class="panel-title" >
						<i class="fa fa-gear" ></i> Change Admin Password
					</h3>
				</div>

							<div class="panel-body">

							<!-- To create form -->
							<form class="form-horizontal" method="post" enctype="multipart/form-data">				
													
									<div class="form-group">
										<label class="col-md-3 control-label">Old Password: </label>
											<div class="col-md-6">
												<input type="password" name="old_pass" class="form-control" required>
											</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">New Password: </label>
											<div class="col-md-6">
												<input type="password" name="new_pass" class="form-control" required>
											</div>
									</div>

									<div class="form-group"> <!-- To group all the form  -->	
										<label class="col-md-3 control-label">Re-type New Password: </label>
											<div class="col-md-6"> <!-- To make the website responsive -->
												<input type="password" name="new_pass_again" class="form-control" required>
											</div>
									</div>																											

									<div class="form-group">
										<label class="col-md-3 control-label"></label>
											<div class="col-md-6">
												<input type="submit" name="submit" value="Change Password" class="btn btn-primary form-control">
											</div>
									</div>

					</form> 
				</div>
			</div>
		</div>
	</div>

<?php
	if(isset($_POST['submit'])){
		
	$admin_email = $_SESSION['admin_email'];
	$old_pass = $_POST['old_pass'];
	$new_pass = $_POST['new_pass'];
	$new_pass_again = $_POST['new_pass_again'];

	$sel_old_pass = "select * from admin where admin_pass='$old_pass'";
	$run_old_pass = mysqli_query($con,$sel_old_pass);
	$check_old_pass = mysqli_num_rows($run_old_pass);

		if($check_old_pass==0){
			echo "<script>alert('Your current password is not valid. Please try again!')</script>";
			exit();
		}

		if($new_pass!=$new_pass_again){
			echo "<script>alert('Your new password does not match!')</script>";
			exit();
		}

		$update_pass = "update admin set admin_pass='$new_pass' where admin_email='$admin_email'";
		$run_pass = mysqli_query($con,$update_pass);

		if($run_pass){
			echo "<script>alert('Your password has been changed successfully!')</script>";
			echo "<script>window.open('index.php?change_pass_admin','_self')</script>";
		}
	}
?>

<?php 
	}  
?>