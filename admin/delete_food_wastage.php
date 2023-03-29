<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

		else {
?>

<?php
	if(isset($_GET['delete_food_wastage'])){
		$delete_id = $_GET['delete_food_wastage'];
		$delete_food_wastage = "delete from food_wastage where f_w_id='$delete_id'";
		$run_delete = mysqli_query($con,$delete_food_wastage);

	if($run_delete){
		echo "<script>alert('One food wastage details has been deleted')</script>";
		echo "<script> window.open('index.php?view_food_wastage=1','_self') </script>";
		}
	}
?>

<?php 
	} 
?>