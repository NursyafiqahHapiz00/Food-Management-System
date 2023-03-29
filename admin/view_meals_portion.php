<?php
	if(!isset($_SESSION['admin_email'])){
	echo "<script>window.open('login.php','_self')</script>";
	}

	else {
		if(isset($_GET['view_meals_portion'])){
			$page = $_GET['view_meals_portion'];
		}
	else {
		$page = 1;
	}
?>

<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard / View Meals Portion
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading"><!-- panel-heading Starts -->
				<h3 class="panel-title"><!-- panel-title Starts -->
					<i class="fa fa-apple"> </i> View Meals Portion
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->

						<div class="panel-body"><!-- panel-body Starts -->

						<form class="form-inline" method="POST" action="">
									<div class="input-group col-md-3">
										<a href="index.php?insert_meals_portion" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Insert Meals Portion</a>			
									</div>
						</form>

						<br>

						<!-- To create table -->
						<div class="table-responsive"><!-- table-responsive Starts -->
							<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->
								<thead><!-- thead Starts -->

									<tr>

										<th>No.</th>
										<th>Meals Portion</th>
										<th>Action</th>
										<th>Action</th>

									</tr>

								</thead><!-- thead Ends -->
								
								<tbody><!-- tbody Starts -->

								<?php
									$num_per_page = 5;
									$start_from = ($page - 1)*05;

									$i= $start_from;
									$get_meals_portion = "select * from meals_portion order by meals_portion_id desc limit $start_from, $num_per_page";
									$run_meals_portion = mysqli_query($con,$get_meals_portion);
										while($row_meals_portion = mysqli_fetch_array($run_meals_portion)){

									$meals_portion_id = $row_meals_portion['meals_portion_id'];
									$meals_portion = $row_meals_portion['meals_portion'];
									$i++;
								?>

								<tr>

									<td> <?php echo $i; ?> </td>

									<td> <?php echo $meals_portion; ?> </td>

									<td> 
										<a href="index.php?edit_meals_portion=<?php echo $meals_portion_id; ?>">
										<button class="btn btn-success"><i class="fa fa-pencil"></i> Edit</button>
										</a>
									</td>

									<td> 
										<a href="index.php?delete_meals_portion=<?php echo $meals_portion_id; ?>">
										<button class="btn btn-danger"><i class="fa fa-trash-o" ></i> Delete</button>
										</a>
									</td>
									
								</tr>

								<?php 
									} 
								?>

						</tbody><!-- tbody Ends -->
					</table><!-- table table-bordered table-hover table-striped Ends -->

					<?php
							$get_page = "select * from meals_portion";
							$run_page = mysqli_query($con,$get_page);
							$total_record = mysqli_num_rows($run_page);
							$total_page = ceil($total_record/$num_per_page);

							if ($page>1){
								echo "<a href='index.php?view_meals_portion=".($page - 1)."'class='btn btn-danger'>Previous</a>";
								}
										
								for ($i=1;$i<$total_page;$i++){
									echo "<a href='index.php?view_meals_portion=".$i."'class='btn btn-primary'>$i</a>";
									}

								if ($i>$page){
									echo "<a href='index.php?view_meals_portion=".($page + 1)."'class='btn btn-danger'>Next</a>";
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