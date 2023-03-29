<?php //e-dietary
		session_start(); 
		include("includes/db.php"); //Import from database file in includes folder
		
		if(!isset($_SESSION['nurse_email'])){ 
		echo "<script>window.open('nurse_login.php','_self')</script>"; //Use _self to replace the current page
	}
	
	else { //If it is not appear login page
?>

	<!DOCTYPE html>
	<html>
		<head>
			<title>Edit Patient Details</title>
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet">
			<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
			<link rel="icon" type="image/png" href="logo/favicon-32x32.png" sizes="32x32" />
	</head>

	<body>
		<div id="wrapper"> <!-- To set the content border within the center of the page and not stick to the eadge of the webpage-->

	<?php 
		include("includes/sidebar.php");  
	?>

		<div id="page-wrapper"><!-- To center the wrapper -->
		<div class="container-fluid"><!-- Expand or shrink the webpage each time the vieport is resized -->

	<?php
		//To get patient record
		if(isset($_GET['patient_details'])){
			include("patient_details.php");
		}

			if(isset($_GET['view_patient_details'])){
			include("view_patient_details.php");
		}

			if(isset($_GET['delete_patient'])){
			include("delete_patient.php");
		}

			if(isset($_GET['edit_patient'])){
			include("edit_patient.php");
		}
		?>

			</div>

		</div>

	</div>

	<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>

<?php 
	} 
?>