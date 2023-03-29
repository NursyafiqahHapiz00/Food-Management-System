<?php 
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	
		else {
?>

	<!-- To create bootstrap elements -->
	<div class="row"> <!-- Row 1 starts -->
		<div class="col-lg-12"> <!-- To make website responsive -->
			<ol class="breadcrumb"> <!-- To create horizontal navigation bar -->
				<li class="active">
					<i class="fa fa-dashboard"></i> Dashboard / Meals Menu
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12"> 
			<div class="panel panel-default"> <!-- To colour the style of the panel  -->
				<div class="panel-heading"> <!-- To create a padding box around the heading of the coupon panel -->
					<h3 class="panel-title">
						<i class="fa fa-cutlery"></i> Meals Menu
					</h3>
				</div>	
											
				<div class="panel-body" >
					<br>	
                    <form class="form-horizontal" method="POST" action="">	
					<div class="form-group" ><!-- form-group Starts -->				
						<div class="col-md-6"> 	
							<a href="index.php?insert_meals_menu" class="btn btn-primary"><i class="fa fa-pencil"></i> Insert Meals Menu </a>
						</div>		
					</div><!-- form-group Ends --> 
					
                    <form class="form-horizontal" method="POST" action="">  
						<div class="form-group" ><!-- form-group Starts -->
							<label class="col-md-3 control-label" ></label>
								<div class="col-md-6" >
									<a href="index.php?view_meals_menu_b=1" type="button" class="btn btn-primary form-control">View Meals Menu for Breakfast</a>
								</div>
						</div><!-- form-group Ends --> 

						<div class="form-group" ><!-- form-group Starts -->
							<label class="col-md-3 control-label" ></label>
								<div class="col-md-6" >
									<a href="index.php?view_meals_menu_l=1" type="button" class="btn btn-primary form-control">View Meals Menu for Lunch</a>
								</div>
						</div><!-- form-group Ends --> 

						<div class="form-group" ><!-- form-group Starts -->
							<label class="col-md-3 control-label" ></label>
								<div class="col-md-6" >
									<a href="index.php?view_meals_menu_ht=1" type="button" class="btn btn-primary form-control">View Meals Menu for Hi-Tea</a>
								</div>
						</div><!-- form-group Ends --> 

						<div class="form-group" ><!-- form-group Starts -->
							<label class="col-md-3 control-label" ></label>
								<div class="col-md-6" >
									<a href="index.php?view_meals_menu_d=1" type="button" class="btn btn-primary form-control">View Meals Menu for Dinner</a>
								</div>
						</div><!-- form-group Ends --> 

                        <br>                              
                    </form>
                    <br>
				</div>
			</div>
		</div>
	</div>
	
<?php 
	}
?>