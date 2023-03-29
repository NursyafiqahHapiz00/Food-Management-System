<html>
	<body>

<?php
	session_start();
	if(!isset($_SESSION['nurse_email'])){
		echo "<script>window.open('../edit_account.php','_self')</script>";
	}

	else {
	include("includes/db.php");
	include("../includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">My </span>Account
      </div>	  
		<p class="nero__text"></p>
    </div>
  </main>

<div id="content" ><!-- content Starts -->
	<div class="container" ><!-- container Starts -->
		<div class="col-md-12"><!-- col-md-12 Starts -->

<?php
	$nurse_email = $_SESSION['nurse_email'];
	$get_nurse = "select * from nurse where nurse_email='$nurse_email'";
	$run_nurse = mysqli_query($con,$get_nurse);
	$row_nurse = mysqli_fetch_array($run_nurse);

	$nurse_confirm_code = $row_nurse['nurse_confirm_code'];
	$nurse_fname = $row_nurse['nurse_fname'];
	$nurse_lname = $row_nurse['nurse_lname'];

	if(!empty($nurse_confirm_code)){
?>

<div class="alert alert-danger alert-dismissible"><!-- alert alert-danger Starts -->
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong> Warning! </strong> Please confirm your email and if you have not received your confirmation email
		<a href="my_account.php?send_email" class="alert-link">
			Send Email Again
		</a>
</div><!-- alert alert-danger Ends -->

<?php 
	} 
?>

</div><!-- col-md-12 Ends -->

<div class="col-md-3"><!-- col-md-3 Starts -->

<?php 
	include("includes/sidebar.php"); 
?>

</div><!-- col-md-3 Ends -->

<div class="col-md-9" ><!--- col-md-9 Starts -->
	<div class="box" ><!-- box Starts -->

<?php
	if(isset($_GET[$nurse_confirm_code])){

	$update_nurse = "update nurse set nurse_confirm_code='' where nurse_confirm_code='$nurse_confirm_code'";
	$run_confirm = mysqli_query($con,$update_nurse);
		echo "<script>alert('Your email has been confirmed!')</script>";
		echo "<script>window.open('my_account.php?edit_account','_self')</script>";
	}

	if(isset($_GET['send_email'])){
		$subject = "Email Confirmation Message";
		$from = "sad.ahmed22224@gmail.com";
		$message = "

		<h2>
			Email Confirmation By Computerfever.com $nurse_fname
		</h2>
		
		<a href='localhost/e-dietary/nurse/my_account.php?$nurse_confirm_code'>
			Click Here To Confirm Email
		</a>
		";

		$headers = "From: $from \r\n";
		$headers .= "Content-type: text/html\r\n";

		mail($nurse_email,$subject,$message,$headers);
			echo "<script>alert('Your confirmation email has been sent to you! Kindly check your inbox.')</script>";
			echo "<script>window.open('my_account.php?edit_account','_self')</script>";
	}


	if(isset($_GET['edit_account'])) {
		include("edit_account.php");
	}

	if(isset($_GET['view_patient_details'])){
		include("view_patient_details.php");
	}
	
	if(isset($_GET['delete_patient'])){
		include("delete_patient.php");
	}
	
	if(isset($_GET['edit_patient'])){
		include("edit_patient.php");
	}
	
	if(isset($_GET['view_patient_menu'])){
		include("view_patient_menu.php");
	}
	
	if(isset($_GET['delete_patient_menu'])){
		include("delete_patient_menu.php");
	}
	
	if(isset($_GET['edit_patient_menu'])){
		include("edit_patient_menu.php");
	}
	
	if(isset($_GET['change_pass'])){
		include("change_pass.php");
	}

	if(isset($_GET['logout'])){
		include("logout.php");
	}

?>

			</div><!-- box Ends -->
		</div><!--- col-md-9 Ends -->
	</div><!-- container Ends -->
</div><!-- content Ends -->

<?php
	include("../includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

	</body>
</html>

<?php 
	} 
?>
