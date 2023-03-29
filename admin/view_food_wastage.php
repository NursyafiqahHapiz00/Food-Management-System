<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	
	else {
		if(isset($_GET['view_food_wastage'])){
			$page = $_GET['view_food_wastage'];
		}
	else {
		$page = 1;
	}
?>

	<!--To create bootstrap elements-->
	<div class="row"> <!-- Row 1 starts -->
		<div class="col-lg-12">
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-dashboard"></i> Dashboard / View Food Wastage
				</li>
			</ol>
		</div>
	</div>

	<div class="row" >
		<div class="col-lg-12" >
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-ticket"></i> View Food Wastage
					</h3>
				</div>

							<div class="panel-body"><!-- panel-body Starts -->

							<form class="form-inline" method="POST" action="">
									<div class="input-group col-md-3">
										<a href="index.php?insert_food_wastage" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Calculate Food Wastage</a>			
									</div>
							</form>

							<br>

							<!-- To create food wastage table-->
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped"> <!-- To create table striped -->
									<thead><!-- thead Starts -->

										<tr>
											<th rowspan = "2">No.</th>
											<th rowspan = "2">Date</th>
											<th colspan = "2">Breakfast</th>
											<th colspan = "2">Lunch</th>
											<th colspan = "2">Hi-Tea</th>
											<th colspan = "2">Dinner</th>
											<th rowspan = "2">Action</th>
										</tr>

										<tr>
											<th>Percentage</th>
											<th>Cost</th>
											<th>Percentage</th>
											<th>Cost</th>
											<th>Percentage</th>
											<th>Cost</th>
											<th>Percentage</th>
											<th>Cost</th>
										</tr>

									</thead>
								
									<tbody>

									<?php
									$num_per_page = 5;
									$start_from = ($page - 1)*05;

									$i= $start_from;
									$get_f_w = "select * from food_wastage order by f_w_id desc limit $start_from, $num_per_page";
									$run_f_w = mysqli_query($con,$get_f_w);
										while($row_f_w = mysqli_fetch_array($run_f_w)){

										$f_w_id = $row_f_w['f_w_id'];
										$f_w_date = $row_f_w['f_w_date'];
										$f_w_percent_b = $row_f_w['f_w_percent_b'];
										$f_w_cost_b = $row_f_w['f_w_cost_b'];
										$f_w_percent_l = $row_f_w['f_w_percent_l'];
										$f_w_cost_l = $row_f_w['f_w_cost_l'];
										$f_w_percent_ht = $row_f_w['f_w_percent_ht'];
										$f_w_cost_ht = $row_f_w['f_w_cost_ht'];
										$f_w_percent_d = $row_f_w['f_w_percent_d'];
										$f_w_cost_d = $row_f_w['f_w_cost_d'];
										$i++;
									?>

										<tr>

										<td><?php echo $i; ?></td>
										<td><?php echo $f_w_date; ?></td>
										<td><?php echo $f_w_percent_b; ?>%</td>
										<td>RM <?php echo $f_w_cost_b; ?></td>
										<td><?php echo $f_w_percent_l; ?>%</td>
										<td>RM <?php echo $f_w_cost_l; ?></td>
										<td><?php echo $f_w_percent_ht; ?>%</td>
										<td>RM <?php echo $f_w_cost_ht; ?></td>
										<td><?php echo $f_w_percent_d; ?>%</td>
										<td>RM <?php echo $f_w_cost_d; ?></td>
										
										<td>
										<a href="index.php?delete_food_wastage=<?php echo $f_w_id; ?>">
										<button class="btn btn-danger"><i class="fa fa-trash-o" ></i> Delete</button>
										</a>
										</td>
										
										</tr>

									<?php 
										} 
									?>

							</tbody>
						</table>

						<?php
							$get_page = "select * from food_wastage";
							$run_page = mysqli_query($con,$get_page);
							$total_record = mysqli_num_rows($run_page);
							$total_page = ceil($total_record/$num_per_page);

							if ($page>1){
								echo "<a href='index.php?view_food_wastage=".($page - 1)."'class='btn btn-danger'>Previous</a>";
								}
										
								for ($i=1;$i<$total_page;$i++){
									echo "<a href='index.php?view_food_wastage=".$i."'class='btn btn-primary'>$i</a>";
									}

								if ($i>$page){
									echo "<a href='index.php?view_food_wastage=".($page + 1)."'class='btn btn-danger'>Next</a>";
								}

						?>

					</div>
				</div>
			</div>
		</div>
	</div>

<?php 
	} 
?>