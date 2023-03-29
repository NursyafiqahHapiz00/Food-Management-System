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
					<i class="fa fa-dashboard"> </i> Dashboard / Insert Food Wastage
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-trash"> </i> Insert Food Wastage
					</h3>
				</div>

				<div class="panel-body">
				

				<!-- To create form -->
				<form class="form-horizontal" method="post" action="">
					<div class="form-group" >
						<label class="col-md-3 control-label"> Date: </label>
							<div class="col-md-6">
								<input type="date" name="f_w_date" class="form-control" required>
							</div>
					</div>

					<br><br>
					<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
						<span style="font-size: 18px; background-color: #ddedf5; padding: 0 5px;">
							<b>Breakfast:</b>
						</span>
					</div>

					<br><br>
					<div class="form-group" >

						<label class="col-md-3 control-label"> Total Thrown Out Food (g): </label>
							<div class="col-md-6">
								<input type="number" name="thrown_out_percent_b" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Average Cost of Thrown Out (RM): </label>
							<div class="col-md-6">
								<input type="number" name="thrown_out_cost_b" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Total Food Produced (g): </label>
							<div class="col-md-6">
								<input type="number" name="food_produced_b" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Average Cost of Total Food Produced (RM): </label>
							<div class="col-md-6">
								<input type="number" name="food_produced_cost_b" class="form-control" required>
							</div>
					</div>
					
					<br><br>
					<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
						<span style="font-size: 18px; background-color: #ddedf5; padding: 0 5px;">
							<b>Lunch:</b>
						</span>
					</div>

					<br><br>
					<div class="form-group" >

						<label class="col-md-3 control-label"> Total Thrown Out Food (g): </label>
							<div class="col-md-6">
								<input type="number" name="thrown_out_percent_l" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Average Cost of Thrown Out (RM): </label>
							<div class="col-md-6">
								<input type="number" name="thrown_out_cost_l" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Total Food Produced (g): </label>
							<div class="col-md-6">
								<input type="number" name="food_produced_l" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Average Cost of Total Food Produced (RM): </label>
							<div class="col-md-6">
								<input type="number" name="food_produced_cost_l" class="form-control" required>
							</div>
					</div>

					<br><br>
					<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
						<span style="font-size: 18px; background-color: #ddedf5; padding: 0 5px;">
							<b>Hi-Tea:</b>
						</span>
					</div>

					<br><br>
					<div class="form-group" >

						<label class="col-md-3 control-label"> Total Thrown Out Food (g): </label>
							<div class="col-md-6">
								<input type="number" name="thrown_out_percent_ht" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Average Cost of Thrown Out (RM): </label>
							<div class="col-md-6">
								<input type="number" name="thrown_out_cost_ht" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Total Food Produced (g): </label>
							<div class="col-md-6">
								<input type="number" name="food_produced_ht" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Average Cost of Total Food Produced (RM): </label>
							<div class="col-md-6">
								<input type="number" name="food_produced_cost_ht" class="form-control" required>
							</div>
					</div>

					<br><br>
					<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
						<span style="font-size: 18px; background-color: #ddedf5; padding: 0 5px;">
							<b>Dinner:</b>
						</span>
					</div>

					<br><br>
					<div class="form-group" >

						<label class="col-md-3 control-label"> Total Thrown Out Food (g): </label>
							<div class="col-md-6">
								<input type="number" name="thrown_out_percent_d" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Average Cost of Thrown Out (RM): </label>
							<div class="col-md-6">
								<input type="number" name="thrown_out_cost_d" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Total Food Produced (g): </label>
							<div class="col-md-6">
								<input type="number" name="food_produced_d" class="form-control" required>
							</div>
					</div>

					<div class="form-group" >
						<label class="col-md-3 control-label"> Average Cost of Total Food Produced (RM): </label>
							<div class="col-md-6">
								<input type="number" name="food_produced_cost_d" class="form-control" required>
							</div>
					</div>
										
					<div class="form-group" >
						<label class="col-md-3 control-label"> </label>
							<div class="col-md-6">
								<input type="submit" name="calculate" class=" btn btn-primary form-control" value=" Calculate ">
							</div>
					</div>

					</form>
				</div>
			</div>
		</div>
	</div>

<?php
	if(isset($_POST['calculate'])){
		
		$f_w_date = $_POST['f_w_date'];
		$thrown_out_percent_b = $_POST['thrown_out_percent_b'];
		$thrown_out_cost_b = $_POST['thrown_out_cost_b'];
		$food_produced_b = $_POST['food_produced_b'];
		$food_produced_cost_b = $_POST['food_produced_cost_b'];
		$thrown_out_percent_l = $_POST['thrown_out_percent_l'];
		$thrown_out_cost_l = $_POST['thrown_out_cost_l'];
		$food_produced_l = $_POST['food_produced_l'];
		$food_produced_cost_l = $_POST['food_produced_cost_l'];
		$thrown_out_percent_ht = $_POST['thrown_out_percent_ht'];
		$thrown_out_cost_ht = $_POST['thrown_out_cost_ht'];
		$food_produced_ht = $_POST['food_produced_ht'];
		$food_produced_cost_ht = $_POST['food_produced_cost_ht'];
		$thrown_out_percent_d = $_POST['thrown_out_percent_d'];
		$thrown_out_cost_d = $_POST['thrown_out_cost_d'];
		$food_produced_d = $_POST['food_produced_d'];
		$food_produced_cost_d = $_POST['food_produced_cost_d'];

		$f_w_percent_b = ($thrown_out_percent_b / $food_produced_b) * 100;
		$f_w_cost_b = ($thrown_out_cost_b / $food_produced_cost_b);
		$f_w_percent_l = ($thrown_out_percent_l / $food_produced_l) * 100;
		$f_w_cost_l = ($thrown_out_cost_l / $food_produced_cost_l);
		$f_w_percent_ht = ($thrown_out_percent_ht / $food_produced_ht) * 100;
		$f_w_cost_ht = ($thrown_out_cost_ht / $food_produced_cost_ht);
		$f_w_percent_d = ($thrown_out_percent_d / $food_produced_d) * 100;
		$f_w_cost_d = ($thrown_out_cost_d / $food_produced_cost_d);

		$insert_f_w = "insert into food_wastage (f_w_date,f_w_percent_b,f_w_cost_b,f_w_percent_l, f_w_cost_l, f_w_percent_ht,f_w_cost_ht,f_w_percent_d,f_w_cost_d) values ('$f_w_date','$f_w_percent_b', '$f_w_cost_b', '$f_w_percent_l','$f_w_cost_l','$f_w_percent_ht','$f_w_cost_ht','$f_w_percent_d','$f_w_cost_d')";
		$run_f_w = mysqli_query($con,$insert_f_w);
			
			if($run_f_w){
				echo "<script>alert('Food wastage data has been inserted successfully')</script>";
				echo "<script>window.open('index.php?view_food_wastage=1','_self')</script>";
			}
		}
?>

<?php 
	} 
?>
