<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

		else {
?>

<?php
	if(isset($_GET['delete_patient_m_menu'])){
	$delete_id = $_GET['delete_patient_m_menu'];
	$delete_patient_m_menu = "delete from patient_m_menu where patient_m_menu_id='$delete_id'";
	$run_delete = mysqli_query($con,$delete_patient_m_menu);

	if($run_delete){
		echo "<script>alert('One patient meals menu has been deleted')</script>";
		echo "<script>window.open('index.php?view_patient_m_menu','_self')</script>";
		}
	}
?>

<?php 
	} 
?>