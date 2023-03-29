<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<?php
	if(isset($_GET['delete_meals_portion'])){
		$delete_meals_portion_id = $_GET['delete_meals_portion'];
		$delete_meals_portion = "delete from meals_portion where meals_portion_id='$delete_meals_portion_id'";
		$run_delete = mysqli_query($con,$delete_meals_portion);

		if($run_delete){
			echo "<script>alert('One meals portion has been deleted!')</script>";
			echo "<script>window.open('index.php?view_meals_portion=1','_self')</script>";
		}
	}
?>

<?php 
	} 
?>