<html>
	<body>

<?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
?>

  <!-- MAIN -->
<br><br><br><br>

<div id="content" ><!-- content Starts -->
	<div class="container" ><!-- container Starts -->
		<div class="col-md-12" ><!-- col-md-12 Starts -->

			<div class="box" ><!-- box Starts -->
				<div class="box-header" ><!-- box-header Starts -->
					<center><!-- center Starts -->
						<h2> Create New Account </h2>
					</center><!-- center Ends -->
				</div><!-- box-header Ends -->

				<!-- To create registeration form -->
				<form action="nurse_register.php" method="post" enctype="multipart/form-data" ><!-- form Starts -->
					<div class="form-group" ><!-- form-group Starts -->
						<label>Nurse ID</label>
							<input type="number" class="form-control" name="nurse_id" required>
					</div><!-- form-group Ends -->

					<div class="form-group" ><!-- form-group Starts -->
						<label>First Name</label>
							<input type="text" class="form-control" name="nurse_fname" required>
					</div><!-- form-group Ends -->
					
					<div class="form-group" ><!-- form-group Starts -->
						<label>Last Name</label>
							<input type="text" class="form-control" name="nurse_lname" required>
					</div><!-- form-group Ends -->

					<div class="form-group" ><!-- form-group Starts -->
						<label> Ward/Room </label>
							<select name="ward_id" class="form-control" >
								<option> Select Ward/Room </option>

									<?php
										$get_ward = "select * from ward ";
										$run_ward = mysqli_query($con,$get_ward);
										while ($row_ward=mysqli_fetch_array($run_ward)) {

											$ward_id = $row_ward['ward_id'];
											$patient_ward = $row_ward['patient_ward'];
											echo "<option value='$ward_id'>$patient_ward</option>";
										}
									?>
							</select>
					</div><!-- form-group Ends -->

					<div class="form-group"><!-- form-group Starts -->
						<label>Email Addresss</label>
							<input type="text" class="form-control" name="nurse_email" required>
					</div><!-- form-group Ends -->

					<div class="form-group"><!-- form-group Starts -->
						<label>Password </label>
							<div class="input-group"><!-- input-group Starts -->
								<span class="input-group-addon"><!-- input-group-addon Starts -->
									<i class="fa fa-check tick1"> </i>
									<i class="fa fa-times cross1"> </i>
								</span><!-- input-group-addon Ends -->
									<input type="password" class="form-control" id="pass" name="nurse_pass" required>
									<span class="input-group-addon"><!-- input-group-addon Starts -->
										<div id="meter_wrapper"><!-- meter_wrapper Starts -->
											<span id="pass_type"> </span>
												<div id="meter"> </div>
										</div><!-- meter_wrapper Ends -->
									</span><!-- input-group-addon Ends -->
							</div><!-- input-group Ends -->
					</div><!-- form-group Ends -->


					<div class="form-group"><!-- form-group Starts -->
						<label> Confirm Password </label>
							<div class="input-group"><!-- input-group Starts -->
								<span class="input-group-addon"><!-- input-group-addon Starts -->
									<i class="fa fa-check tick2"> </i>
									<i class="fa fa-times cross2"> </i>
								</span><!-- input-group-addon Ends -->
									<input type="password" class="form-control confirm" id="con_pass" required>
							</div><!-- input-group Ends -->
					</div><!-- form-group Ends -->

					<div class="form-group"><!-- form-group Starts -->
						<label>Contact No</label>
							<input type="text" class="form-control" name="nurse_contact" required>
					</div><!-- form-group Ends -->

					<div class="form-group"><!-- form-group Starts -->
						<label>Profile Image </label>
							<input type="file" class="form-control" name="nurse_image" required>
					</div><!-- form-group Ends -->

					<div class="text-center"><!-- text-center Starts -->
						<button type="submit" name="register" class="btn btn-primary">
								<i class="fa fa-user-md"></i> Register
						</button>
					</div><!-- text-center Ends -->

					<br>

					<center><!-- center Starts -->
						<a href="nurse_login.php" >
							<h4>Already have an account? Sign In</h4>
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

<!-- javascript for password check -->
<script>
$(document).ready(function(){

$('.tick1').hide();
$('.cross1').hide();

$('.tick2').hide();
$('.cross2').hide();


$('.confirm').focusout(function(){

var password = $('#pass').val();

var confirmPassword = $('#con_pass').val();

if(password == confirmPassword){

$('.tick1').show();
$('.cross1').hide();

$('.tick2').show();
$('.cross2').hide();



}
else{

$('.tick1').hide();
$('.cross1').show();

$('.tick2').hide();
$('.cross2').show();


}


});


});
</script>

<script>
$(document).ready(function(){

$("#pass").keyup(function(){

check_pass();

});

});

function check_pass() {
 var val=document.getElementById("pass").value;
 var meter=document.getElementById("meter");
 var no=0;
 if(val!="")
 {
// If the password length is less than or equal to 6
if(val.length<=6)no=1;

 // If the password length is greater than 6 and contain any lowercase alphabet or any number or any special character
  if(val.length>6 && (val.match(/[a-z]/) || val.match(/\d+/) || val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)))no=2;

  // If the password length is greater than 6 and contain alphabet,number,special character respectively
  if(val.length>6 && ((val.match(/[a-z]/) && val.match(/\d+/)) || (val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) || (val.match(/[a-z]/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))))no=3;

  // If the password length is greater than 6 and must contain alphabets,numbers and special characters
  if(val.length>6 && val.match(/[a-z]/) && val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))no=4;

  if(no==1)
  {
   $("#meter").animate({width:'50px'},300);
   meter.style.backgroundColor="red";
   document.getElementById("pass_type").innerHTML="Very Weak";
  }

  if(no==2)
  {
   $("#meter").animate({width:'100px'},300);
   meter.style.backgroundColor="#F5BCA9";
   document.getElementById("pass_type").innerHTML="Weak";
  }

  if(no==3)
  {
   $("#meter").animate({width:'150px'},300);
   meter.style.backgroundColor="#FF8000";
   document.getElementById("pass_type").innerHTML="Good";
  }

  if(no==4)
  {
   $("#meter").animate({width:'200px'},300);
   meter.style.backgroundColor="#00FF40";
   document.getElementById("pass_type").innerHTML="Strong";
  }
 }

 else
 {
  meter.style.backgroundColor="";
  document.getElementById("pass_type").innerHTML="";
 }
}
</script>

	</body>
</html>

<?php

if(isset($_POST['register'])){

$remoteip = $_SERVER['REMOTE_ADDR'];

	if($result['success'] == 0){
		$nurse_id = $_POST['nurse_id'];
		$ward_id = $_POST['ward_id'];
		$nurse_fname = $_POST['nurse_fname'];
		$nurse_lname = $_POST['nurse_lname'];
		$nurse_email = $_POST['nurse_email'];
		$nurse_pass = $_POST['nurse_pass'];
		$nurse_contact = $_POST['nurse_contact'];
		$nurse_image = $_FILES['nurse_image']['name'];
		$nurse_image_tmp = $_FILES['nurse_image']['tmp_name'];
		$nurse_ip = getRealUserIp();

	move_uploaded_file($nurse_image_tmp,"nurse/nurse_images/$nurse_image");

	$get_email = "select * from nurse where nurse_email='$nurse_email'";
	$run_email = mysqli_query($con,$get_email);
	$check_email = mysqli_num_rows($run_email);

	if($check_email == 1){
		echo "<script>alert('This email is already registered, try another one')</script>";
		exit();
	}

	$nurse_confirm_code = mt_rand();
	$subject = "Email Confirmation Message";
	$from = "e-dietary@gmail.com";
	$message = "

		<h2>
			Email Confirmation By e-dietary.com $nurse_fname
		</h2>

		<a href='localhost/e-dietary_file/e-dietary/nurse/my_account.php?$nurse_confirm_code'>
			Click Here To Confirm Email
		</a>
	";

	$headers = "From: $from \r\n";
	$headers .= "Content-type: text/html\r\n";
		mail($nurse_email,$subject,$message,$headers);

	$insert_nurse = "insert into nurse (nurse_id, ward_id, nurse_fname, nurse_lname, nurse_email, nurse_pass, nurse_contact, nurse_image, nurse_ip, nurse_confirm_code) values ('$nurse_id', '$ward_id', '$nurse_fname','$nurse_lname', '$nurse_email', '$nurse_pass', '$nurse_contact', '$nurse_image','$nurse_ip','$nurse_confirm_code')";
	$run_nurse = mysqli_query($con,$insert_nurse);

	if($run_nurse){
		$_SESSION['nurse_email']=$nurse_email;
		echo "<script>alert('You have been registered successfully!')</script>";
		echo "<script>window.open('nurse_login.php','_self')</script>";
	}
	}

		else{
			echo "<script>alert('Please register again!')</script>";
		}
	}
?>
