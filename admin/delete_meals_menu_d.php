<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<?php
	if(isset($_GET['delete_meals_menu_d'])){
		$delete_meals_menu_d_id = $_GET['delete_meals_menu_d'];
		$delete_meals_menu_d = "delete from meals_menu_d where meals_menu_d_id='$delete_meals_menu_d_id'";
		$run_delete = mysqli_query($con,$delete_meals_menu_d);

		if($run_delete){
			echo "<script>alert('One meals menu has been deleted!')</script>";
			echo "<script>window.open('index.php?view_meals_menu_d=1','_self')</script>";
		}
	}
?>

<?php 
	} 
?>