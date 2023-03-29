<?php 
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
		else {
?>

	<!-- To create navigation bar header -->
	<nav class="navbar navbar-inverse navbar-fixed-top" > <!-- To create black navigation bar -->
		<div class="navbar-header" ><!-- Navigation bar place at top of the page -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" > <!-- To collapse or hide the admin navigation bar -->
				<span class="sr-only" >Toggle Navigation</span> <!-- Hide the elements of toggle navigation except for the screen readers -->
				<span class="icon-bar" ></span> <!-- To create icon at navigation bar -->
				<span class="icon-bar" ></span>
				<span class="icon-bar" ></span>
			</button>
				<a class="navbar-brand" href="index.php?dashboard">Admin</a> <!-- To appear the brand of company name -->
		</div>

		<!-- To create navigation top right -->
		<ul class="nav navbar-right top-nav" > <!-- To create admin elements at top right -->
			<li class="dropdown" > <!-- To create dropdown elements -->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" >
					<i class="fa fa-user" ></i> <!-- To create icon user -->
						<?php echo $admin_fname; ?> <b class="caret" ></b>
				</a>

	<!-- To create dropdown menu admin top right -->
	<ul class="dropdown-menu" >
		<li>
			<a href="index.php?admin_profile=<?php echo $admin_id; ?>" >
				<i class="fa fa-fw fa-user" ></i> My Profile <!-- To create profile dropdown menu -->
			</a>
		</li>

		<li>
			<a href="index.php?view_patient_m_menu" >
				<i class="fa fa-fw fas fa-cutlery"></i> Meals Menu <!-- To create products dropdown menu -->
					<span class="badge" ><?php echo $count_patient_m_menu; ?></span>
			</a>
		</li>

		<li>
			<a href="index.php?view_patient_details" >
				<i class="fa fa-fw fa-users" ></i> Patient
					<span class="badge" ><?php echo $count_patient_details; ?></span>
			</a>
		</li>

		<li>
			<a href="index.php?view_nurse" >
				<i class="fa fa-fw fa-stethoscope" ></i> Nurse
					<span class="badge" ><?php echo $count_nurse; ?></span>
			</a>
		</li>

		<li class="divider"></li> <!-- To create divider in dropdown menu -->
		<li>
			<a href="logout.php">
				<i class="fa fa-fw fa-power-off"> </i> Log Out
			</a>
		</li>
	</ul>
</li>
</ul>

	<!-- To create side navigation bar-->
	<div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->
		<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

	<center>
		<img src="admin_image/<?php echo $admin_image; ?>" width="100" height="100" > <!-- To create admin image at side bar -->		 		
		</center>

	<li>
		<a href="index.php?dashboard">
			<i class="fa fa-fw fa-dashboard"></i> Dashboard
		</a>
	</li>
	
	<!-- To create collapse meals -->
	<li>
		<a href="#" data-toggle="collapse" data-target="#meals">
			<i class="fa fa-fw fa-cutlery""></i> Meals
				<i class="fa fa-fw fa-caret-down"></i>
	</a>

	<ul id="meals" class="collapse">
		<li>
			<a href="index.php?insert_meals_portion"> Insert Meals Portion </a>
		</li>

		<li>
			<a href="index.php?view_meals_portion=1"> View Meals Portion </a>
		</li>

		<li>
			<a href="index.php?insert_meals_menu"> Insert Meals Menu </a>
		</li>

		<li>
			<a href="index.php?view_meals_menu"> View Meals Menu</a>
		</li>

		<li>
			<a href="index.php?price_info"> Price Info</a>
		</li>
	</ul>
	</li>

	<!-- To create sidebar nurse -->	
	<li>
		<a href="index.php?view_nurse">
			<i class="fa fa-fw fa-stethoscope"></i> Nurse
		</a>
	</li>

	<!-- To create collapse patient -->
	<li>
		<a href="#" data-toggle="collapse" data-target="#patient">
			<i class="fa fa-fw fa-users"></i> Patient 
			<i class="fa fa-fw fa-caret-down"></i>
		</a>

	<ul id="patient" class="collapse">
		<li>
			<a href="index.php?view_patient_details"> View Patient Details</a>
		</li>

		<li>
			<a href="index.php?view_patient_m_menu"> View Patient Meals Menu</a>
		</li>

		<li>
			<a href="index.php?insert_ward"> Insert Ward/Room </a>
		</li>

		<li>
			<a href="index.php?view_ward=1"> View Ward/Room </a>
		</li>

		<li>
			<a href="index.php?insert_diseases"> Insert Diseases </a>
		</li>

		<li>
			<a href="index.php?view_diseases=1"> View Diseases </a>
		</li>
	</ul>
	</li>

	<!-- To create collapse food wastage calculator -->
	<li>
		<a href="#" data-toggle="collapse" data-target="#food_wastage">
			<i class="fa fa-fw fa-trash"></i> Food Wastage
			<i class="fa fa-fw fa-caret-down"></i>
		</a>

	<ul id="food_wastage" class="collapse">
		<li>
			<a href="index.php?insert_food_wastage"> Food Wastage Calculator </a>
		</li>

		<li>
			<a href="index.php?view_food_wastage=1"> View Food Wastage </a>
		</li>

	</ul>
	</li>

	<!-- To create sidebar penalty -->	
	<li>
		<a href="index.php?view_penalty=1">
			<i class="fa fa-fw fa-money"></i> Penalty
		</a>
	</li>

	<!-- To create sidebar complaint -->	
	<li>
		<a href="index.php?view_complaint=1">
			<i class="fa fa-fw fa-list"></i> Complaint
		</a>
	</li>
	
	<!-- To create collapse pages -->
	<li> 
		<a href="#" data-toggle="collapse" data-target="#pages">
			<i class="fa fa-fw fa-edit"> </i> Pages
			<i class="fa fa-fw fa-caret-down"></i>	
		</a>

	<ul id="pages" class="collapse">
		<li>
			<a href="index.php?edit_about_us"> Edit About Us </a>
		</li>		
	
		<li>
			<a href="index.php?edit_faqs"> Edit FAQs </a>
		</li>		

		<li>
			<a href="index.php?edit_sliders"> Edit Home </a>
		</li>
	</ul>
	</li>
	
	<!-- To create collapse admin -->
	<li>
		<a href="#" data-toggle="collapse" data-target="#admin">
			<i class="fa fa-fw fa-gear"></i> Admin
			<i class="fa fa-fw fa-caret-down"></i>
		</a>

	<ul id="admin" class="collapse">
		<li>
			<a href="index.php?insert_admin"> Insert Admin </a>
		</li>

		<li>
			<a href="index.php?view_admin"> View Admin </a>
		</li>
		
		<li>
			<a href="index.php?admin_profile=<?php echo $admin_id; ?>"> Edit Profile </a>
		</li>

		<li>
			<a href="index.php?change_pass_admin=<?php echo $admin_id; ?>"> Change Password </a>
		</li>
	</ul>
	</li>
	
	<!-- To create sidebar logout -->	
	<li>
		<a href="logout.php">
			<i class="fa fa-fw fa-power-off"></i> Log Out
		</a>
	</li>

		</ul>
	</div>
</nav>

<?php 
	} 
?>