<html>
	<body>

<?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");

?>

  <!-- MAIN -->
<br><br>

<div id="content" ><!-- content Starts -->
	<div class="container" ><!-- container Starts -->
		<div class="col-md-12" ><!-- col-md-12 Starts -->

			<div class="box" ><!-- box Starts -->
				<div class="logo">
					<a class="logo__link" href="index.php">
						<img class="logo__img" src="images/long_logo_t.png" alt="e-dietary logotype" width="200" height="100">
					</a>
				</div>

				<div class="box-header" ><!-- box-header Starts -->
					<center>
						<h1>Login</h1>
					</center>
				</div><!-- box-header Ends -->

				<!-- To create login form -->
				<form action="" method="post" ><!--form Starts -->
					<div class="form-group" ><!-- form-group Starts -->
						<label>Username</label>
							<input type="text" class="form-control" name="nurse_email" required >
					</div><!-- form-group Ends -->

					<div class="form-group" ><!-- form-group Starts -->
						<label>Password</label>
							<input type="password" class="form-control" name="nurse_pass" required >
								<h4 align="right">
									<a href="forgot_pass.php"> Forgot Password?</a>
								</h4>
					</div><!-- form-group Ends -->

					<div class="text-center" ><!-- text-center Starts -->
						<button name="login" value="Login" class="btn btn-primary" >
							<i class="fa fa-sign-in" ></i> Log in
						</button>
					</div><!-- text-center Ends -->

					<center><!-- center Starts -->
						<a href="nurse_register.php" >
							<h4>Don't have an account? Register Here</h4>
						</a>
					</center><!-- center Ends -->

					<br>
					
					<center><!-- center Starts -->
						<a href="admin/login.php" >
							<h4>Admin? Sign In Here</h4>
						</a>
					</center><!-- center Ends -->
				</form><!-- form Ends -->
			</div><!-- box Ends -->
		</div><!-- col-md-12 Ends -->
	</div><!-- container Ends -->
</div><!-- content Ends -->

<br><br>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

	</body>
</html>

<?php
	if(isset($_POST['login'])){

	$nurse_email = $_POST['nurse_email'];
	$nurse_pass = $_POST['nurse_pass'];

	$select_nurse = "select * from nurse where nurse_email='$nurse_email' AND nurse_pass='$nurse_pass'";
	$run_nurse = mysqli_query($con,$select_nurse);
	$get_ip = getRealUserIp();
	$check_nurse = mysqli_num_rows($run_nurse);

	if($check_nurse==0){
		echo "<script>alert('Your password or email is wrong!')</script>";
		exit();
	}

	if($check_nurse==1){
		$_SESSION['nurse_email']=$nurse_email;
		echo "<script>alert('You are logged in!')</script>";
		echo "<script>window.open('home.php','_self')</script>";
	}

		else {
			$_SESSION['nurse_email']=$nurse_email;
			echo "<script>alert('You are logged in')</script>";
			echo "<script>window.open('index.php','_self')</script>";
		} 
	}
?>