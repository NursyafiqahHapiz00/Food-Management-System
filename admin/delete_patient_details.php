<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

		else {
?>

<?php
	if(isset($_GET['delete_patient_details'])){
		s
	$delete_id = $_GET['delete_patient_details'];
	$delete_patient_details = "delete from patient_details where patient_id='$delete_id'";
	$run_delete = mysqli_query($con,$delete_patient_details);

	if($run_delete){
		echo "<script>alert('One details of patient has been deleted')</script>";
		echo "<script>window.open('index.php?view_patient_details','_self')</script>";
		}
	}
?>

<?php 
	} 
?>