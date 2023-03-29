<?php //e-dietary
		session_start(); 
		include("includes/db.php"); //Import from database file in includes folder
		
		if(!isset($_SESSION['admin_email'])){ 
		echo "<script>window.open('login.php','_self')</script>"; //Use _self to replace the current page
	}
	
	else { //If it is not appear login page
?>

<?php
	
	//To set the admin variable 	
	$admin_session = $_SESSION['admin_email']; //For admin session that using email
	$get_admin = "select * from admin  where admin_email='$admin_session'"; //Use $get to collect the values from admin. Select the records from admin_email in phpmyadmin (admins table)
	$run_admin = mysqli_query($con,$get_admin); //To run the admin database. To execute the sql query from admin_email in phpmyadmin 
	$row_admin = mysqli_fetch_array($run_admin); //To fetch the row array from the query result in admins phpmyadmin
	
	//To set the variable $row_admin
	$admin_id = $row_admin['admin_id']; //Row is used to get the admin_id rows record from phpmyadmin
	$admin_email = $row_admin['admin_email'];
	$admin_pass = $row_admin['admin_pass'];
	$admin_fname = $row_admin['admin_fname'];
	$admin_lname = $row_admin['admin_lname'];
	$admin_contact = $row_admin['admin_contact'];
	$admin_position = $row_admin['admin_position'];
	$admin_image = $row_admin['admin_image'];

	//To set the patient meals menu variable
	$get_patient_m_menu = "select * from patient_m_menu"; //Select record from patient meals menu table in phpmyadmin
	$run_patient_m_menu = mysqli_query($con,$get_patient_m_menu); //Run the patient meals menu database and execute the sql query from meals table in phpmyadmin
	$count_patient_m_menu = mysqli_num_rows($run_patient_m_menu); //Return the numbers elements from the meals menu table

	//To set the nurse variable
	$get_nurse = "select * from nurse"; //Select record from nurse table in phpmyadmin
	$run_nurse = mysqli_query($con,$get_nurse);
	$count_nurse = mysqli_num_rows($run_nurse);

	//To set the patient details variable
	$get_patient_details = "select * from patient_details"; //Select record from patient_details table in phpmyadmin
	$run_patient_details = mysqli_query($con,$get_patient_details);
	$count_patient_details = mysqli_num_rows($run_patient_details);

	//To set food wastage calculator variable
	$get_food_wastage = "select * from food_wastage";
	$run_food_wastage = mysqli_query($con,$get_food_wastage);
	$count_food_wastage = mysqli_num_rows($run_food_wastage);
?>


<!DOCTYPE html>
	<html>
		<head>
			<title>Admin</title>
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet">
			<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
			<link rel="icon" type="image/png" href="logo/favicon-32x32.png" sizes="32x32" />
	</head>

	<body>
		<div id="wrapper"> <!-- To set the content border within the center of the page and not stick to the edge of the webpage-->

	<?php 
		include("includes/sidebar.php");  
	?>

		<div id="page-wrapper"><!-- To center the wrapper -->
		<div class="container-fluid"><!-- Expand or shrink the webpage each time the vieport is resized -->

	<?php
		//To get dashboard record
			if(isset($_GET['dashboard'])){
			include("dashboard.php"); //Get the dashboard record from dashboard.php file
		}

		//To get meals portion record
		if(isset($_GET['insert_meals_portion'])){
			include("insert_meals_portion.php");
		}

		if(isset($_GET['view_meals_portion'])){
			include("view_meals_portion.php");
		}

		if(isset($_GET['edit_meals_portion'])){
			include("edit_meals_portion.php");
		}

			if(isset($_GET['delete_meals_portion'])){
			include("delete_meals_portion.php");
		}

		//To get meals_menu record
			if(isset($_GET['insert_meals_menu'])){
			include("insert_meals_menu.php"); //Get the insert_meals_menu record from insert_meals_menu.php file
		}

			if(isset($_GET['view_meals_menu'])){
			include("view_meals_menu.php"); //Get the view_meals_menu record from view_meals_menu.php file
		}

		//To get meals_menu breakfast record
			if(isset($_GET['insert_meals_menu_b'])){
			include("insert_meals_menu_b.php"); //Get the insert_meals_menu_b record from insert_meals_menu.php file
		}

			if(isset($_GET['view_meals_menu_b'])){
			include("view_meals_menu_b.php"); //Get the view_meals_menu_b record from view_meals_menu.php file
		}

		if(isset($_GET['edit_meals_menu_b'])){
			include("edit_meals_menu_b.php");
		}

			if(isset($_GET['delete_meals_menu_b'])){
			include("delete_meals_menu_b.php");
		}

		//To get meals_menu lunch record
			if(isset($_GET['insert_meals_menu_l'])){
			include("insert_meals_menu_l.php"); //Get the insert_meals_menu_l record from insert_meals_menu.php file
		}

			if(isset($_GET['view_meals_menu_l'])){
			include("view_meals_menu_l.php"); //Get the view_meals_menu_l record from view_meals_menu.php file
		}

		if(isset($_GET['edit_meals_menu_l'])){
			include("edit_meals_menu_l.php");
		}

			if(isset($_GET['delete_meals_menu_l'])){
			include("delete_meals_menu_l.php");
		}

		//To get meals_menu hi-tea record
			if(isset($_GET['insert_meals_menu_ht'])){
			include("insert_meals_menu_ht.php"); //Get the insert_meals_menu_ht record from insert_meals_menu.php file
		}

			if(isset($_GET['view_meals_menu_ht'])){
			include("view_meals_menu_ht.php"); //Get the view_meals_menu_ht record from view_meals_menu.php file
		}

		if(isset($_GET['edit_meals_menu_ht'])){
			include("edit_meals_menu_ht.php");
		}

			if(isset($_GET['delete_meals_menu_ht'])){
			include("delete_meals_menu_ht.php");
		}

		//To get meals_menu dinner record
			if(isset($_GET['insert_meals_menu_d'])){
			include("insert_meals_menu_d.php"); //Get the insert_meals_menu_d record from insert_meals_menu.php file
		}

			if(isset($_GET['view_meals_menu_d'])){
			include("view_meals_menu_d.php"); //Get the view_meals_menu_d record from view_meals_menu.php file
		}

		if(isset($_GET['edit_meals_menu_d'])){
			include("edit_meals_menu_d.php");
		}

			if(isset($_GET['delete_meals_menu_d'])){
			include("delete_meals_menu_d.php");
		}
		//To get price_info record
		if(isset($_GET['price_info'])){
			include("price_info.php");
		}
		if(isset($_GET['edit_price_info'])){
			include("edit_price_info.php");
		}
		if(isset($_GET['delete_price_info'])){
			include("delete_price_info.php");
		}

		//To get nurse record
		if(isset($_GET['view_nurse'])){
			include("view_nurse.php");
		}

			if(isset($_GET['delete_nurse'])){
			include("delete_nurse.php");
		}

		//To get patient details record
		if(isset($_GET['view_patient_details'])){
			include("view_patient_details.php");
		}

			if(isset($_GET['delete_patient_details'])){
			include("delete_patient_details.php");
		}

		//To get patient meals menu record
		if(isset($_GET['view_patient_m_menu'])){
			include("view_patient_m_menu.php");
		}

			if(isset($_GET['delete_patient_m_menu'])){
			include("delete_patient_m_menu.php");
		}

		//To get ward record
		if(isset($_GET['insert_ward'])){
			include("insert_ward.php");
		}

		if(isset($_GET['view_ward'])){
			include("view_ward.php");
		}

		if(isset($_GET['edit_ward'])){
			include("edit_ward.php");
		}

			if(isset($_GET['delete_ward'])){
			include("delete_ward.php");
		}

		//To get diseases record
		if(isset($_GET['insert_diseases'])){
			include("insert_diseases.php");
		}

		if(isset($_GET['view_diseases'])){
			include("view_diseases.php");
		}

		if(isset($_GET['edit_diseases'])){
			include("edit_diseases.php");
		}

			if(isset($_GET['delete_diseases'])){
			include("delete_diseases.php");
		}

		//To get food wastage calculator record
		if(isset($_GET['insert_food_wastage'])){
			include("insert_food_wastage.php");
		}

			if(isset($_GET['view_food_wastage'])){
			include("view_food_wastage.php");
		}

		if(isset($_GET['edit_food_wastage'])){
			include("edit_food_wastage.php");
		}

			if(isset($_GET['delete_food_wastage'])){
			include("delete_food_wastage.php");
		}

		//To get penalty record
			if(isset($_GET['view_penalty'])){
			include("view_penalty.php");
		}

			if(isset($_GET['delete_penalty'])){
			include("delete_penalty.php");
		}

		//To get complaint record
		if(isset($_GET['view_complaint'])){
			include("view_complaint.php");
		}

			if(isset($_GET['delete_complaint'])){
			include("delete_complaint.php");
		}

		//To get about us pages record
		if(isset($_GET['edit_about_us'])){
			include("edit_about_us.php");
		}

		//To get contact us pages record
		if(isset($_GET['edit_faqs'])){
			include("edit_faqs.php");
		}
		
		//To get contact us pages record
		if(isset($_GET['edit_sliders'])){
			include("edit_sliders.php");
		}

		//////
			if(isset($_GET['insert_box'])){
			include("insert_box.php");
		}

			if(isset($_GET['view_boxes'])){
			include("view_boxes.php");
		}

			if(isset($_GET['delete_box'])){
			include("delete_box.php");
		}

			if(isset($_GET['edit_box'])){
			include("edit_box.php");
		}

		//To get css record
			if(isset($_GET['edit_css'])){
			include("edit_css.php");
		}

		//To get admins record
			if(isset($_GET['insert_admin'])){
			include("insert_admin.php");
		}

			if(isset($_GET['view_admin'])){
			include("view_admin.php");
		}
		
			if(isset($_GET['delete_admin'])){
			include("delete_admin.php");
		}

			if(isset($_GET['admin_profile'])){
			include("admin_profile.php");
		}

			if(isset($_GET['change_pass_admin'])){
			include("change_pass_admin.php");
		}

		//To get icon record
			if(isset($_GET['insert_icon'])){
			include("insert_icon.php");
		}


			if(isset($_GET['view_icons'])){
			include("view_icons.php");
		}

			if(isset($_GET['delete_icon'])){
			include("delete_icon.php");
		}

			if(isset($_GET['edit_icon'])){
			include("edit_icon.php");
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