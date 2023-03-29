<?php
	if(!isset($_SESSION['admin_email'])){
	echo "<script>window.open('login.php','_self')</script>";
	}

	else {
		if(isset($_GET['view_ward'])){
			$page = $_GET['view_ward'];
		}
	else {
		$page = 1;
	}
?>

<div class="row"><!-- 1 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<ol class="breadcrumb"><!-- breadcrumb Starts -->
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard / View Ward/Room
			</li>
		</ol><!-- breadcrumb Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->
	<div class="col-lg-12"><!-- col-lg-12 Starts -->
		<div class="panel panel-default"><!-- panel panel-default Starts -->
			<div class="panel-heading"><!-- panel-heading Starts -->
				<h3 class="panel-title"><!-- panel-title Starts -->
					<i class="fa fa-hospital-o"> </i> View Ward/Room
				</h3><!-- panel-title Ends -->
			</div><!-- panel-heading Ends -->

						<div class="panel-body"><!-- panel-body Starts -->

						<form class="form-inline" method="POST" action="">
									<div class="input-group col-md-3">
										<a href="index.php?insert_ward" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Insert Ward</a>			
									</div>
						</form>

						<br>

						<!-- To create table -->
						<div class="table-responsive"><!-- table-responsive Starts -->
							<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->
								<thead><!-- thead Starts -->

									<tr>

										<th>No.</th>
										<th>Ward/Room Name</th>
										<th>Number of bed</th>
										<th>Action</th>
										<th>Action</th>

									</tr>

								</thead><!-- thead Ends -->
								
								<tbody><!-- tbody Starts -->

								<?php
									$num_per_page = 5;
									$start_from = ($page - 1)*05;

									$i= $start_from;
									$get_ward = "select * from ward order by ward_id desc limit $start_from, $num_per_page";
									$run_ward = mysqli_query($con,$get_ward);
										while($row_ward = mysqli_fetch_array($run_ward)){

									$ward_id = $row_ward['ward_id'];
									$patient_ward = $row_ward['patient_ward'];
									$no_beds = $row_ward['no_beds'];
									$i++;
								?>

								<tr>

									<td> <?php echo $i; ?> </td>

									<td> <?php echo $patient_ward; ?> </td>

									<td> <?php echo $no_beds; ?> </td>

									<td> 
										<a href="index.php?edit_ward=<?php echo $ward_id; ?>">
										<button class="btn btn-success"><i class="fa fa-pencil"></i> Edit</button>
										</a>
									</td>

									<td> 
										<a href="index.php?delete_ward=<?php echo $ward_id; ?>">
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
							$get_page = "select * from ward";
							$run_page = mysqli_query($con,$get_page);
							$total_record = mysqli_num_rows($run_page);
							$total_page = ceil($total_record/$num_per_page);

							if ($page>1){
								echo "<a href='index.php?view_ward=".($page - 1)."'class='btn btn-danger'>Previous</a>";
								}
										
								for ($i=1;$i<$total_page;$i++){
									echo "<a href='index.php?view_ward=".$i."'class='btn btn-primary'>$i</a>";
									}

								if ($i>$page){
									echo "<a href='index.php?view_ward=".($page + 1)."'class='btn btn-danger'>Next</a>";
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