<?php
	if(!isset($_SESSION['admin_email'])){
	echo "<script>window.open('login.php','_self')</script>";
	}

	else {
		if(isset($_GET['view_complaint'])){
			$page = $_GET['view_complaint'];
		}
	else {
		$page = 1;
	}
?>

	<div class="row"> 
		<div class="col-lg-12"> 
			<ol class="breadcrumb"> 
				<li class="active">
					<i class="fa fa-dashboard"></i> Dashboard / Complaint
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-list"></i> Complaint
					</h3>
				</div>

							<div class="panel-body"><!-- panel-body Starts -->

							<!-- To create table -->
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped">
									<thead>

										<tr>

											<th>No.</th>
											<th>Nurse ID</th>
											<th>Patient ID</th>
											<th>Ward/Room</th>
											<th>Complaint</th>
										</tr>

									</thead>


									<tbody>

									<?php
										$num_per_page = 5;
										$start_from = ($page - 1)*05;
	
										$i= $start_from;
										$get_complaint = "select * from complaint order by complaint_id desc limit $start_from, $num_per_page";
										$run_complaint = mysqli_query($con,$get_complaint);
										while ($row_complaint = mysqli_fetch_array($run_complaint)) {
					
											$nurse_id = $row_complaint['nurse_id'];
											$patient_id = $row_complaint['patient_id'];
											$ward_id = $row_complaint['ward_id'];
											$complaint_reason = $row_complaint['complaint_reason'];
											
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
											<td><?php echo $complaint_reason; ?></td>
										</tr>


									<?php 
										} 
									?>

							</tbody>
						</table>

						<?php
							$get_page = "select * from complaint";
							$run_page = mysqli_query($con,$get_page);
							$total_record = mysqli_num_rows($run_page);
							$total_page = ceil($total_record/$num_per_page);

							if ($page>1){
								echo "<a href='index.php?view_complaint=".($page - 1)."'class='btn btn-danger'>Previous</a>";
								}
										
								for ($i=1;$i<$total_page;$i++){
									echo "<a href='index.php?view_food_complaint=".$i."'class='btn btn-primary'>$i</a>";
									}

								if ($i>$page){
									echo "<a href='index.php?view_food_complaint=".($page + 1)."'class='btn btn-danger'>Next</a>";
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