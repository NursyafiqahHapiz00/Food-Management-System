<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

	else {
		if(isset($_GET['view_penalty'])){
			$page = $_GET['view_penalty'];
		}
	else {
		$page = 1;
	}
?>

<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard / Penalty
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading"><!-- panel-heading Starts -->
				<h3 class="panel-title"><!-- panel-title Starts -->
					<i class="fa fa-money fa-fw"> </i> Penalty (20%)
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->

						<div class="panel-body"><!-- panel-body Starts -->

						<!-- To create table -->
						<div class="table-responsive"><!-- table-responsive Starts -->
							<table class="table table-hover table-bordered table-striped"><!-- table table-hover table-bordered table-striped Starts -->

								<thead><!-- thead Starts -->

									<tr>

										<th>No.</th>
										<th>Nurse ID</th>
										<th>Patient ID</th>
										<th>Ward/Room</th>
										<th>Reason</th>
										<th>Amount</th>
										<th>Penalty Date</th>

									</tr>

								</thead><!-- thead Ends -->

								<tbody><!-- tbody Starts -->

								<?php
									$num_per_page = 5;
									$start_from = ($page - 1)*05;

									$i= $start_from;
									$get_penalty = "select * from penalty order by penalty_id desc limit $start_from, $num_per_page";
									$run_penalty = mysqli_query($con,$get_penalty);
									while($row_penalty = mysqli_fetch_array($run_penalty)){

									$nurse_id = $row_penalty['nurse_id'];
									$patient_id = $row_penalty['patient_id'];
									$ward_id = $row_penalty['ward_id'];
									$penalty_reason = $row_penalty['penalty_reason'];
									$penalty_amount = $row_penalty['penalty_amount'];
									$penalty_date = $row_penalty['penalty_date'];

									$get_ward = "select * from ward where ward_id='$ward_id'";
									$run_ward = mysqli_query($con,$get_ward);
									$row_ward = mysqli_fetch_array($run_ward);
									$patient_ward = $row_ward['patient_ward'];
									$i++;
								?>

									<tr>

										<td><?php echo $i; ?></td>
										<td><?php echo $nurse_id; ?></td>
										<td><?php echo $patient_id; ?></td>
										<td><?php echo $patient_ward; ?></td>
										<td><?php echo $penalty_reason; ?></td>
										<td>RM <?php echo $penalty_amount; ?></td>
										<td> <?php echo $penalty_date; ?></td>
									</tr>

<?php 
	} 
?>

						</tbody><!-- tbody Ends -->
					</table><!-- table table-hover table-bordered table-striped Ends -->

					<?php
						$get_page = "select * from penalty";
						$run_page = mysqli_query($con,$get_page);
						$total_record = mysqli_num_rows($run_page);
						$total_page = ceil($total_record/$num_per_page);

						if ($page>1){
							echo "<a href='index.php?view_penalty=".($page - 1)."'class='btn btn-danger'>Previous</a>";
								}
										
							for ($i=1;$i<$total_page;$i++){
								echo "<a href='index.php?view_penalty=".$i."'class='btn btn-primary'>$i</a>";
									}

							if ($i>$page){
								echo "<a href='index.php?view_penalty=".($page + 1)."'class='btn btn-danger'>Next</a>";
								}

					?>
				</div><!-- table-responsive Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->

<?php 
	} 
?>