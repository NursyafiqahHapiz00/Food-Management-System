<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<?php
	if(isset($_GET['delete_price_info'])){
		$delete_price_info_id = $_GET['delete_price_info'];
		$delete_price_info = "delete from price_info where price_info_id='$delete_price_info_id'";
		$run_delete = mysqli_query($con,$delete_price_info);

		if($run_delete){
			echo "<script>alert('One price info and penalty charge has been deleted!')</script>";
			echo "<script>window.open('index.php?price_info','_self')</script>";
		}
	}
?>

<?php 
	} 
?>