<?php
	if(isset($_GET['delete_patient'])){

	$delete_id = $_GET['delete_patient'];
	$delete_patient = "delete from patient_details where patient_id='$delete_id'";
	$run_delete = mysqli_query($con,$delete_patient);

	if($run_delete){
		echo "<script>alert('One patient has been discharged')</script>";
		echo "<script>window.open('my_account.php?view_patient_details','_self')</script>";
		}
	}
?>