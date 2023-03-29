<?php
	$nurse_session = $_SESSION['nurse_email'];
	$get_nurse = "select * from nurse where nurse_email='$nurse_session'";
	$run_nurse = mysqli_query($con,$get_nurse);
	$row_nurse = mysqli_fetch_array($run_nurse);

	$nurse_id = $row_nurse['nurse_id'];
	$nurse_fname = $row_nurse['nurse_fname'];
	$nurse_lname = $row_nurse['nurse_lname'];
	$ward_id = $row_nurse['ward_id'];
	$nurse_email = $row_nurse['nurse_email'];
	$nurse_contact = $row_nurse['nurse_contact'];
	$nurse_image = $row_nurse['nurse_image'];
?>

<h1 align="center" > Edit Your Account </h1>

<!-- To create form -->
<form action="" method="post" enctype="multipart/form-data" ><!--- form Starts -->

	<div class="form-group" ><!-- form-group Starts -->
		<label> Nurse ID: </label>
			<input type="text" name="nurse_id" class="form-control" required value="<?php echo $nurse_id; ?>">
	</div><!-- form-group Ends -->

	<div class="form-group" ><!-- form-group Starts -->
		<label> First Name: </label>
			<input type="text" name="nurse_fname" class="form-control" required value="<?php echo $nurse_fname; ?>">
	</div><!-- form-group Ends -->
	
	<div class="form-group" ><!-- form-group Starts -->
		<label> Last Name: </label>
			<input type="text" name="nurse_lname" class="form-control" required value="<?php echo $nurse_lname; ?>">
	</div><!-- form-group Ends -->

	<div class="form-group" ><!-- form-group Starts -->
		<label> Ward/Room: </label>
			<input type="text" name="ward_id" class="form-control" required value="<?php echo $ward_id; ?>">
	</div><!-- form-group Ends -->

	<div class="form-group" ><!-- form-group Starts -->
		<label> Email: </label>
			<input type="text" name="nurse_email" class="form-control" required value="<?php echo $nurse_email; ?>">
	</div><!-- form-group Ends -->

	<div class="form-group" ><!-- form-group Starts -->
		<label> Contact No: </label>
			<input type="text" name="nurse_contact" class="form-control" required value="<?php echo $nurse_contact; ?>">
	</div><!-- form-group Ends -->

	<div class="form-group" ><!-- form-group Starts -->
		<label> Profile Image: </label>
			<input type="file" name="nurse_image" class="form-control" required >
				<br>
			<img src="nurse_images/<?php echo $nurse_image; ?>" width="100" height="100" class="img-responsive" >
	</div><!-- form-group Ends -->

	<div class="text-center" ><!-- text-center Starts -->
		<button name="update" class="btn btn-primary" >
			<i class="fa fa-user-md" ></i> Update Profile
		</button>
	</div><!-- text-center Ends -->

</form><!--- form Ends -->

<?php
	if(isset($_POST['update'])){

	$update_id = $nurse_id;
	$nurse_fname = $_POST['nurse_fname'];
	$nurse_lname = $_POST['nurse_lname'];
	$ward_id = $_POST['ward_id'];
	$nurse_email = $_POST['nurse_email'];
	$nurse_contact = $_POST['nurse_contact'];
	$nurse_image = $_FILES['nurse_image']['name'];
	$nurse_image_tmp = $_FILES['nurse_image']['tmp_name'];

	move_uploaded_file($nurse_image_tmp,"nurse_images/$nurse_image");

	$update_nurse = "update nurse set nurse_id='$nurse_id', nurse_fname='$nurse_fname', nurse_lname='$nurse_lname', ward_id='$ward_id', nurse_email='$nurse_email', nurse_contact='$nurse_contact', nurse_image='$nurse_image' where nurse_id='$update_id'";
	$run_nurse = mysqli_query($con,$update_nurse);

		if($run_nurse){
			echo "<script>alert('Your account has been updated')</script>";
			echo "<script>window.open('my_account.php?edit_account','_self')</script>";
		}
	}
?>