<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Starts -->
	<div class="panel-heading"><!-- panel-heading Starts -->

<?php
	$nurse_session = $_SESSION['nurse_email'];
	$get_nurse = "select * from nurse where nurse_email='$nurse_session'";
	$run_nurse = mysqli_query($con,$get_nurse);
	$row_nurse = mysqli_fetch_array($run_nurse);

	$nurse_image = $row_nurse['nurse_image'];
	$nurse_fname = $row_nurse['nurse_fname'];
	$nurse_lname = $row_nurse['nurse_lname'];

	if(!isset($_SESSION['nurse_email'])){
	}

		else {
			echo "
			<center>
			<img src='nurse_images/$nurse_image' class='img-responsive'>
			</center>
			<br>
			<h3 align='center' class='panel-title'> $nurse_fname $nurse_lname </h3>
			";
		}
?>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->
	<ul class="nav nav-pills nav-stacked"><!-- nav nav-pills nav-stacked Starts -->
		<li class="<?php if(isset($_GET['edit_account'])){ echo "active"; } ?>">
			<a href="my_account.php?edit_account"> 
				<i class="fa fa-pencil"></i> Edit Account 
			</a>
		</li>
		<li class="<?php if(isset($_GET['view_patient_details'])){ echo "active"; } ?>">
			<a href="my_account.php?view_patient_details"> 
				<i class="fa fa-list"> </i> View Patient Details
			</a>
		</li>
		<li class="<?php if(isset($_GET['view_patient_menu'])){ echo "active"; } ?>">
			<a href="my_account.php?view_patient_menu"> 
				<i class="fa fa-list"> </i> View Patient Menu
			</a>
		</li>
		<li class="<?php if(isset($_GET['change_pass'])){ echo "active"; } ?>">
			<a href="my_account.php?change_pass"> 
				<i class="fa fa-user"></i> Change Password 
			</a>
		</li>

		<li>
			<a href="logout.php"> 
				<i class="fa fa-sign-out"></i> Logout 
			</a>
		</li>

		</ul><!-- nav nav-pills nav-stacked Ends -->
	</div><!-- panel-body Ends -->
</div><!-- panel panel-default sidebar-menu Ends -->