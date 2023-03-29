<?php
	if(isset($_GET['delete_patient_menu'])){

	$delete_id = $_GET['delete_patient_menu'];
	$delete_patient_menu = "delete from patient_m_menu where patient_m_menu_id='$delete_id'";
	$run_delete = mysqli_query($con,$delete_patient_menu);

	if($run_delete){
		echo "<script>alert('One menu of patient has been deleted!')</script>";
		echo "<script>window.open('my_account.php?view_patient_menu','_self')</script>";
		}
	}
?>