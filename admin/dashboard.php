<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
?>

<div class="row"><!-- Row 1 Starts -->
	<div class="col-lg-12">
		<!-- <h1 class="page-header">Dashboard</h1> -->
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->

<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-dollar fa-5x"> </i>
					</div>

		<?php 
		$query=$con->query("SELECT sum(penalty_amount) as penalty_amount 
		FROM penalty");
		foreach($query as $data)
		{
			$penalty_amount= $data['penalty_amount'];
		}
		?>
	<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
		<div class="huge"> <?php echo $penalty_amount; ?> </div>
		<div>Penalty</div>
		
		</div><!-- col-xs-9 text-right Ends -->
	</div><!-- panel-heading row Ends -->
</div><!-- panel-heading Ends -->

	<a href="index.php?view_penalty=1">
		<div class="panel-footer"><!-- panel-footer Starts -->
			<span class="pull-left"> View Details </span>
			<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

				<div class="clearfix"></div>
			</div><!-- panel-footer Ends -->
		</a>
	</div><!-- panel panel-primary Ends -->
</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
	<div class="panel panel-green"><!-- panel panel-green Starts -->
		<div class="panel-heading"><!-- panel-heading Starts -->
			<div class="row"><!-- panel-heading row Starts -->
				<div class="col-xs-3"><!-- col-xs-3 Starts -->
					<i class="fa fa-comments fa-5x"> </i>
</div><!-- col-xs-3 Ends -->

<?php 
		$query=$con->query("SELECT count(complaint_id) as number_complaint
		FROM complaint");
		foreach($query as $data)
		{
			$number_complaint= $data['number_complaint'];
		}
?>
<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
	<div class="huge"> <?php echo $number_complaint; ?> </div>
		<div>Complaint</div>
		
		</div><!-- col-xs-9 text-right Ends -->
	</div><!-- panel-heading row Ends -->
</div><!-- panel-heading Ends -->

	<a href="index.php?view_complaint=1">
		<div class="panel-footer"><!-- panel-footer Starts -->
			<span class="pull-left"> View Details </span>
			<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
				<div class="clearfix"></div>

			</div><!-- panel-footer Ends -->
		</a>
	</div><!-- panel panel-green Ends -->
</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
	<div class="panel panel-yellow"><!-- panel panel-yellow Starts -->
		<div class="panel-heading"><!-- panel-heading Starts -->
			<div class="row"><!-- panel-heading row Starts -->
				<div class="col-xs-3"><!-- col-xs-3 Starts -->
					<i class="fa fa-percent fa-5x"> </i>
</div><!-- col-xs-3 Ends -->

<?php 
		$query=$con->query("SELECT 
		sum(f_w_percent_b) as f_w_percent_b, 
		sum(f_w_percent_l) as f_w_percent_l,
		sum(f_w_percent_ht) as f_w_percent_ht,
		sum(f_w_percent_d) as f_w_percent_d, 
		count(f_w_id) as total_f_w
		FROM food_wastage");
		foreach($query as $data)
		{
			$total_f_w = $data['total_f_w'];
			$f_w_percent_b= $data['f_w_percent_b'];
			$f_w_percent_l= $data['f_w_percent_l'];
			$f_w_percent_ht= $data['f_w_percent_ht'];
			$f_w_percent_d= $data['f_w_percent_d'];
		}
		$total_f_W = ($total_f_w);
		$sum_food_wastage= ($f_w_percent_b+$f_w_percent_l+$f_w_percent_ht+$f_w_percent_d);
		$average_f_w_percent = ($sum_food_wastage/$total_f_w);
		$num_format = round($average_f_w_percent, 2);
		?>
<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
	<div class="huge"><?php echo $num_format; ?> </div>
		<div>Food Wastage</div>

		</div><!-- col-xs-9 text-right Ends -->
	</div><!-- panel-heading row Ends -->
</div><!-- panel-heading Ends -->

<a href="index.php?view_food_wastage=1">
	<div class="panel-footer"><!-- panel-footer Starts -->
		<span class="pull-left"> View Details </span>
		<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
			<div class="clearfix"></div>

			</div><!-- panel-footer Ends -->
		</a>
	</div><!-- panel panel-yellow Ends -->
</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
	<div class="panel panel-red"><!-- panel panel-red Starts -->
		<div class="panel-heading"><!-- panel-heading Starts -->
			<div class="row"><!-- panel-heading row Starts -->
				<div class="col-xs-3"><!-- col-xs-3 Starts -->
					<i class="fa fa-user fa-5x"> </i>
			</div><!-- col-xs-3 Ends -->

		<?php 
		$query=$con->query("SELECT count(patient_id) as number_patients
		FROM patient_details");
		foreach($query as $data)
		{
			$number_patients= $data['number_patients'];
		}
        ?>		
<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
	<div class="huge"> <?php echo $number_patients; ?> </div>
		<div>Patients</div>

		</div><!-- col-xs-9 text-right Ends -->
	</div><!-- panel-heading row Ends -->
</div><!-- panel-heading Ends -->

	<a href="index.php?view_patient_details=1">
		<div class="panel-footer"><!-- panel-footer Starts -->
			<span class="pull-left"> View Details </span>
			<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
				<div class="clearfix"></div>

				</div><!-- panel-footer Ends -->
			</a>
		</div><!-- panel panel-red Ends -->
	</div><!-- col-lg-3 col-md-6 Ends -->
</div><!-- 2 row Ends -->

<br>

		<!-- To create stacked area sales line chart -->
	<div id="chartContainer1" style="height: 370px; width: 100%; display: inline-block;">
	<?php
		include ("includes/db.php");

		$query_1 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='01' and year(f_w_date)='2022'";
		$result_1 = mysqli_query($con, $query_1);
		$row_1 = mysqli_fetch_assoc($result_1);
		$sum_1 = $row_1['sum_food_wastage'];
		
		$query_2 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='02' and year(f_w_date)='2022'";
		$result_2 = mysqli_query($con, $query_2);
		$row_2 = mysqli_fetch_assoc($result_2);
		$sum_2 = $row_2['sum_food_wastage'];
		
		$query_3 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='03' and year(f_w_date)='2022'";
		$result_3 = mysqli_query($con, $query_3);
		$row_3 = mysqli_fetch_assoc($result_3);
		$sum_3 = $row_3['sum_food_wastage'];
		
		$query_4 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='04' and year(f_w_date)='2022'";
		$result_4 = mysqli_query($con, $query_4);
		$row_4 = mysqli_fetch_assoc($result_4);
		$sum_4 = $row_4['sum_food_wastage'];
		
		$query_5 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='05' and year(f_w_date)='2022'";
		$result_5 = mysqli_query($con, $query_5);
		$row_5 = mysqli_fetch_assoc($result_5);
		$sum_5 = $row_5['sum_food_wastage'];
		
		$query_6 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='06' and year(f_w_date)='2022'";
		$result_6 = mysqli_query($con, $query_6);
		$row_6 = mysqli_fetch_assoc($result_6);
		$sum_6 = $row_6['sum_food_wastage'];
		
		$query_7 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='07' and year(f_w_date)='2022'";
		$result_7 = mysqli_query($con, $query_7);
		$row_7 = mysqli_fetch_assoc($result_7);
		$sum_7 = $row_7['sum_food_wastage'];
		
		$query_8 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='08' and year(f_w_date)='2022'";
		$result_8 = mysqli_query($con, $query_8);
		$row_8 = mysqli_fetch_assoc($result_8);
		$sum_8 = $row_8['sum_food_wastage'];
		
		$query_9 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='09' and year(f_w_date)='2022'";
		$result_9 = mysqli_query($con, $query_9);
		$row_9 = mysqli_fetch_assoc($result_9);
		$sum_9 = $row_9['sum_food_wastage'];
		
		$query_10 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='10' and year(f_w_date)='2022'";
		$result_10 = mysqli_query($con, $query_10);
		$row_10 = mysqli_fetch_assoc($result_10);
		$sum_10 = $row_10['sum_food_wastage'];
		
		$query_11 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='11' and year(f_w_date)='2022'";
		$result_11 = mysqli_query($con, $query_11);
		$row_11 = mysqli_fetch_assoc($result_11);
		$sum_11 = $row_11['sum_food_wastage'];
		
		$query_12 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='12' and year(f_w_date)='2022'";
		$result_12 = mysqli_query($con, $query_12);
		$row_12 = mysqli_fetch_assoc($result_12);
		$sum_12 = $row_12['sum_food_wastage'];
		
	$dataPoints2022 = array(
		array("y" => $sum_1, "label" => "Jan"),
		array("y" => $sum_2, "label" => "Feb"),
		array("y" => $sum_3, "label" => "Mac"),
		array("y" => $sum_4, "label" => "Apr"),
		array("y" => $sum_5, "label" => "May"),
		array("y" => $sum_6, "label" => "June"),
		array("y" => $sum_7, "label" => "July"),
		array("y" => $sum_8, "label" => "Aug"),
		array("y" => $sum_9, "label" => "Sept"),
		array("y" => $sum_10, "label" => "Oct"),
		array("y" => $sum_11, "label" => "Nov"),
		array("y" => $sum_12, "label" => "Dec"),
	);

	$query_1 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='01' and year(f_w_date)='2023'";
	$result_1 = mysqli_query($con, $query_1);
	$row_1 = mysqli_fetch_assoc($result_1);
	$sum_1 = $row_1['sum_food_wastage'];
	
	$query_2 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='02' and year(f_w_date)='2023'";
	$result_2 = mysqli_query($con, $query_2);
	$row_2 = mysqli_fetch_assoc($result_2);
	$sum_2 = $row_2['sum_food_wastage'];
	
	$query_3 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='03' and year(f_w_date)='2023'";
	$result_3 = mysqli_query($con, $query_3);
	$row_3 = mysqli_fetch_assoc($result_3);
	$sum_3 = $row_3['sum_food_wastage'];
	
	$query_4 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='04' and year(f_w_date)='2023'";
	$result_4 = mysqli_query($con, $query_4);
	$row_4 = mysqli_fetch_assoc($result_4);
	$sum_4 = $row_4['sum_food_wastage'];
	
	$query_5 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='05' and year(f_w_date)='2023'";
	$result_5 = mysqli_query($con, $query_5);
	$row_5 = mysqli_fetch_assoc($result_5);
	$sum_5 = $row_5['sum_food_wastage'];
	
	$query_6 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='06' and year(f_w_date)='2023'";
	$result_6 = mysqli_query($con, $query_6);
	$row_6 = mysqli_fetch_assoc($result_6);
	$sum_6 = $row_6['sum_food_wastage'];
	
	$query_7 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='07' and year(f_w_date)='2023'";
	$result_7 = mysqli_query($con, $query_7);
	$row_7 = mysqli_fetch_assoc($result_7);
	$sum_7 = $row_7['sum_food_wastage'];
	
	$query_8 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='08' and year(f_w_date)='2023'";
	$result_8 = mysqli_query($con, $query_8);
	$row_8 = mysqli_fetch_assoc($result_8);
	$sum_8 = $row_8['sum_food_wastage'];
	
	$query_9 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='09' and year(f_w_date)='2023'";
	$result_9 = mysqli_query($con, $query_9);
	$row_9 = mysqli_fetch_assoc($result_9);
	$sum_9 = $row_9['sum_food_wastage'];
	
	$query_10 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='10' and year(f_w_date)='2023'";
	$result_10 = mysqli_query($con, $query_10);
	$row_10 = mysqli_fetch_assoc($result_10);
	$sum_10 = $row_10['sum_food_wastage'];
	
	$query_11 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='11' and year(f_w_date)='2023'";
	$result_11 = mysqli_query($con, $query_11);
	$row_11 = mysqli_fetch_assoc($result_11);
	$sum_11 = $row_11['sum_food_wastage'];
	
	$query_12 = "SELECT MONTHNAME (f_w_date) as month, YEAR (f_w_date) as year, sum(f_w_cost_b) as f_w_cost_b, sum(f_w_cost_l) as f_w_cost_l, sum(f_w_cost_ht) as f_w_cost_ht, sum(f_w_cost_d) as f_w_cost_d, sum(f_w_cost_d+f_w_cost_l+f_w_cost_ht+f_w_cost_l) as sum_food_wastage FROM food_wastage WHERE month(f_w_date)='12' and year(f_w_date)='2023'";
	$result_12 = mysqli_query($con, $query_12);
	$row_12 = mysqli_fetch_assoc($result_12);
	$sum_12 = $row_12['sum_food_wastage'];
	
$dataPoints2023 = array(
	array("y" => $sum_1, "label" => "Jan"),
	array("y" => $sum_2, "label" => "Feb"),
	array("y" => $sum_3, "label" => "Mac"),
	array("y" => $sum_4, "label" => "Apr"),
	array("y" => $sum_5, "label" => "May"),
	array("y" => $sum_6, "label" => "June"),
	array("y" => $sum_7, "label" => "July"),
	array("y" => $sum_8, "label" => "Aug"),
	array("y" => $sum_9, "label" => "Sept"),
	array("y" => $sum_10, "label" => "Oct"),
	array("y" => $sum_11, "label" => "Nov"),
	array("y" => $sum_12, "label" => "Dec"),
	);
?>

		</div>

	<!--To create bar chart orders chart -->
	<div id="chartContainer2" style="height: 370px; width: 100%; display: inline-block;">
	<?php
		include ("includes/db.php");

		$query_1 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='01' and year(penalty_date)='2022'";
		$result_1 = mysqli_query($con, $query_1);
		$row_1 = mysqli_fetch_assoc($result_1);
		$sum_1 = $row_1['penalty_amount'];
		
		$query_2 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='02' and year(penalty_date)='2022'";
		$result_2 = mysqli_query($con, $query_2);
		$row_2 = mysqli_fetch_assoc($result_2);
		$sum_2 = $row_2['penalty_amount'];
		
		$query_3 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='03' and year(penalty_date)='2022'";
		$result_3 = mysqli_query($con, $query_3);
		$row_3 = mysqli_fetch_assoc($result_3);
		$sum_3 = $row_3['penalty_amount'];
		
		$query_4 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='04' and year(penalty_date)='2022'";
		$result_4 = mysqli_query($con, $query_4);
		$row_4 = mysqli_fetch_assoc($result_4);
		$sum_4 = $row_4['penalty_amount'];
		
		$query_5 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='05' and year(penalty_date)='2022'";
		$result_5 = mysqli_query($con, $query_5);
		$row_5 = mysqli_fetch_assoc($result_5);
		$sum_5 = $row_5['penalty_amount'];
		
		$query_6 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='06' and year(penalty_date)='2022'";
		$result_6 = mysqli_query($con, $query_6);
		$row_6 = mysqli_fetch_assoc($result_6);
		$sum_6 = $row_6['penalty_amount'];
		
		$query_7 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='07' and year(penalty_date)='2022'";
		$result_7 = mysqli_query($con, $query_7);
		$row_7 = mysqli_fetch_assoc($result_7);
		$sum_7 = $row_7['penalty_amount'];
		
		$query_8 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='08' and year(penalty_date)='2022'";
		$result_8 = mysqli_query($con, $query_8);
		$row_8 = mysqli_fetch_assoc($result_8);
		$sum_8 = $row_8['penalty_amount'];
		
		$query_9 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='09' and year(penalty_date)='2022'";
		$result_9 = mysqli_query($con, $query_9);
		$row_9 = mysqli_fetch_assoc($result_9);
		$sum_9 = $row_9['penalty_amount'];
		
		$query_10 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='10' and year(penalty_date)='2022'";
		$result_10 = mysqli_query($con, $query_10);
		$row_10 = mysqli_fetch_assoc($result_10);
		$sum_10 = $row_10['penalty_amount'];
		
		$query_11 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='11' and year(penalty_date)='2022'";
		$result_11 = mysqli_query($con, $query_11);
		$row_11 = mysqli_fetch_assoc($result_11);
		$sum_11 = $row_11['penalty_amount'];
		
		$query_12 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='12' and year(penalty_date)='2022'";
		$result_12 = mysqli_query($con, $query_12);
		$row_12 = mysqli_fetch_assoc($result_12);
		$sum_12 = $row_12['penalty_amount'];
		
	$dataPointsorder2022 = array(
		array("y" => $sum_1, "label" => "Jan"),
		array("y" => $sum_2, "label" => "Feb"),
		array("y" => $sum_3, "label" => "Mac"),
		array("y" => $sum_4, "label" => "Apr"),
		array("y" => $sum_5, "label" => "May"),
		array("y" => $sum_6, "label" => "June"),
		array("y" => $sum_7, "label" => "July"),
		array("y" => $sum_8, "label" => "Aug"),
		array("y" => $sum_9, "label" => "Sept"),
		array("y" => $sum_10, "label" => "Oct"),
		array("y" => $sum_11, "label" => "Nov"),
		array("y" => $sum_12, "label" => "Dec"),
	);

		$query_1 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='01' and year(penalty_date)='2023'";
		$result_1 = mysqli_query($con, $query_1);
		$row_1 = mysqli_fetch_assoc($result_1);
		$sum_1 = $row_1['value_sum'];
		
		$query_2 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='02' and year(penalty_date)='2023'";
		$result_2 = mysqli_query($con, $query_2);
		$row_2 = mysqli_fetch_assoc($result_2);
		$sum_2 = $row_2['value_sum'];
		
		$query_3 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='03' and year(penalty_date)='2023'";
		$result_3 = mysqli_query($con, $query_3);
		$row_3 = mysqli_fetch_assoc($result_3);
		$sum_3 = $row_3['value_sum'];
		
		$query_4 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='04' and year(penalty_date)='2023'";
		$result_4 = mysqli_query($con, $query_4);
		$row_4 = mysqli_fetch_assoc($result_4);
		$sum_4 = $row_4['value_sum'];
		
		$query_5 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='05' and year(penalty_date)='2023'";
		$result_5 = mysqli_query($con, $query_5);
		$row_5 = mysqli_fetch_assoc($result_5);
		$sum_5 = $row_5['value_sum'];
		
		$query_6 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='06' and year(penalty_date)='2023'";
		$result_6 = mysqli_query($con, $query_6);
		$row_6 = mysqli_fetch_assoc($result_6);
		$sum_6 = $row_6['value_sum'];
		
		$query_7 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='07' and year(penalty_date)='2023'";
		$result_7 = mysqli_query($con, $query_7);
		$row_7 = mysqli_fetch_assoc($result_7);
		$sum_7 = $row_7['value_sum'];
		
		$query_8 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='08' and year(penalty_date)='2023'";
		$result_8 = mysqli_query($con, $query_8);
		$row_8 = mysqli_fetch_assoc($result_8);
		$sum_8 = $row_8['value_sum'];
		
		$query_9 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='09' and year(penalty_date)='2023'";
		$result_9 = mysqli_query($con, $query_9);
		$row_9 = mysqli_fetch_assoc($result_9);
		$sum_9 = $row_9['value_sum'];
		
		$query_10 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='10' and year(penalty_date)='2023'";
		$result_10 = mysqli_query($con, $query_10);
		$row_10 = mysqli_fetch_assoc($result_10);
		$sum_10 = $row_10['value_sum'];
		
		$query_11 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='11' and year(penalty_date)='2023'";
		$result_11 = mysqli_query($con, $query_11);
		$row_11 = mysqli_fetch_assoc($result_11);
		$sum_11 = $row_11['value_sum'];
		
		$query_12 = "select MONTHNAME (penalty_date) as month, YEAR (penalty_date) as year, sum(penalty_amount) as penalty_amount FROM penalty where month(penalty_date)='12' and year(penalty_date)='2023'";
		$result_12 = mysqli_query($con, $query_12);
		$row_12 = mysqli_fetch_assoc($result_12);
		$sum_12 = $row_12['value_sum'];
		
	$dataPointsorder2023 = array(
		array("y" => $sum_1, "label" => "Jan"),
		array("y" => $sum_2, "label" => "Feb"),
		array("y" => $sum_3, "label" => "Mac"),
		array("y" => $sum_4, "label" => "Apr"),
		array("y" => $sum_5, "label" => "May"),
		array("y" => $sum_6, "label" => "June"),
		array("y" => $sum_7, "label" => "July"),
		array("y" => $sum_8, "label" => "Aug"),
		array("y" => $sum_9, "label" => "Sept"),
		array("y" => $sum_10, "label" => "Oct"),
		array("y" => $sum_11, "label" => "Nov"),
		array("y" => $sum_12, "label" => "Dec"),
	);

	?>
	</div>

	<script>
		window.onload = function () {
		
		var chart = new CanvasJS.Chart("chartContainer1", { 
			theme: "light2",
			title: {
				text: "Monthly Food Wastage"
			},
			axisY: {
				title: "Total Food Wastage (RM)"
			},
			
			legend:{
				cursor: "pointer",
				itemclick: toggleDataSeries
			},
			toolTip: {
				shared: true
			},
			data: [{
				type: "stackedArea",
				name: "2022",
				showInLegend: true,
				visible: true,
				yValueFormatString: "RM ,##0",
				dataPoints: <?php echo json_encode($dataPoints2022, JSON_NUMERIC_CHECK); ?>
			},
			{
				type: "stackedArea",
				name: "2023",
				showInLegend: true,
				yValueFormatString: "RM ,##0",
				dataPoints: <?php echo json_encode($dataPoints2023, JSON_NUMERIC_CHECK); ?>
			}]
		});
		
		chart.render();
		
		function toggleDataSeries(e){
			if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
				e.dataSeries.visible = false;
			}
			else{
				e.dataSeries.visible = true;
			}
			chart.render();
		}

		//To create orders chart
		
		var chart = new CanvasJS.Chart("chartContainer2", {
		animationEnabled: true,
		title:{
			text: "Monthly Penalty Charged"
			},
			axisY: {
				title: "Amount of Penalty",
				includeZero: true,
			},
			data: [{
				type: "bar",
				yValueFormatString: "#,##0",
				indexLabel: "{y}",
				indexLabelPlacement: "inside",
				indexLabelFontWeight: "bolder",
				indexLabelFontColor: "white",
				dataPoints: <?php echo json_encode($dataPointsorder2022, JSON_NUMERIC_CHECK); ?>
			},
			{
				type: "bar",
				yValueFormatString: "#,##0",
				indexLabel: "{y}",
				indexLabelPlacement: "inside",
				indexLabelFontWeight: "bolder",
				indexLabelFontColor: "white",
				dataPoints: <?php echo json_encode($dataPointsorder2023, JSON_NUMERIC_CHECK); ?>
			}]
		});
		chart.render();
		
		}
	</script>

	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	
	<br><br>



<?php 
	} 
?>