<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<?php
	if(isset($_GET['delete_meals_menu_l'])){
		$delete_meals_menu_l_id = $_GET['delete_meals_menu_l'];
		$delete_meals_menu_l = "delete from meals_menu_l where meals_menu_l_id='$delete_meals_menu_l_id'";
		$run_delete = mysqli_query($con,$delete_meals_menu_l);

		if($run_delete){
			echo "<script>alert('One meals menu has leen deleted!')</script>";
			echo "<script>window.open('index.php?view_meals_menu_l=1','_self')</script>";
		}
	}
?>

<?php 
	} 
?>