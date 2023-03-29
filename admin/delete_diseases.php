<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<?php
	if(isset($_GET['delete_diseases'])){
		$delete_diseases_id = $_GET['delete_diseases'];
		$delete_diseases = "delete from diseases where diseases_id='$delete_diseases_id'";
		$run_delete = mysqli_query($con,$delete_diseases);

		if($run_delete){
			echo "<script>alert('One disease has been deleted!')</script>";
			echo "<script>window.open('index.php?view_diseases=1','_self')</script>";
		}
	}
?>

<?php 
	} 
?>