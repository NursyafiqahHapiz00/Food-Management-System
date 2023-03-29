<div class="row" ><!-- 2 row Starts -->
		<div class="col-lg-12" ><!-- col-lg-12 Starts -->
			<div class="panel panel-default" ><!-- panel panel-default Starts -->
				<div class="panel-heading" ><!-- panel-heading Starts -->
					<h3 class="panel-title" ><!-- panel-title Starts -->

<center><!-- center Starts -->
	<h1> View Patient Details </h1>
</center><!-- center Ends -->
</h3><!-- panel-title Ends -->
</div><!-- panel-heading Ends -->


<div class="panel-body" ><!-- panel-body Starts -->

<!-- To create table -->
<div class="table-responsive"><!-- table-responsive Starts -->
	<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover Starts -->
		<thead>

			<tr>

				<th>No.</th>
					<th>Patient ID</th>
                    <th>Name</th>
					<th>Age</th>
                    <th>Ward/Room</th>
					<th>Diseases</th>
                    <th>Bed No</th>
					<th>Allergic</th>
                    <th>MAC</th>
                    <th>Admit Date</th>
					<th>Edit</th>
					<th>Delete</th>

			</tr>
			
		</thead>

<tbody>

				<?php
					$i = 0;
					$get_patient_details = "select * from patient_details";
					$run_patient_details = mysqli_query($con,$get_patient_details);
					while($row_patient_details=mysqli_fetch_array($run_patient_details)){

					$patient_id = $row_patient_details['patient_id'];
					$patient_fname = $row_patient_details['patient_fname'];
					$patient_lname = $row_patient_details['patient_lname'];
					$patient_age = $row_patient_details['patient_age'];
					$ward_id = $row_patient_details['ward_id'];
					$diseases_id = $row_patient_details['diseases_id'];
					$patient_bed = $row_patient_details['patient_bed'];
					$patient_allergic = $row_patient_details['patient_allergic'];
					$patient_MAC = $row_patient_details['patient_MAC'];					
					$patient_admit_date = $row_patient_details['patient_admit_date'];

					$get_ward = "select * from ward where ward_id='$ward_id'";
					$run_ward = mysqli_query($con,$get_ward);
					$row_ward = mysqli_fetch_array($run_ward);
					$patient_ward = $row_ward['patient_ward'];

					$get_diseases = "select * from diseases where diseases_id='$diseases_id'";
					$run_diseases = mysqli_query($con,$get_diseases);
					$row_diseases = mysqli_fetch_array($run_diseases);
					$diseases_name = $row_diseases['diseases_name'];

					$i++;
				?>

	<tr>

		<td width="100"> <?php echo $i; ?> </td>

		<td><?php echo $patient_id; ?></td>
					<td><?php echo $patient_fname. ' ' .$patient_lname; ?></td>
					<td><?php echo $patient_age; ?></td>
					<td><?php echo $patient_ward; ?></td>
					<td><?php echo $diseases_name; ?></td>
					<td><?php echo $patient_bed; ?></td>
					<td><?php echo $patient_allergic; ?></td>
					<td><?php echo $patient_MAC; ?></td>					
					<td><?php echo $patient_admit_date; ?></td>	

					<td> 
						<?php $patient_id=$row_patient_details["patient_id"] ?>
						<a href="my_account.php?edit_patient=<?php echo $patient_id; ?>">
						<button class="btn btn-success"><i class="fa fa-pencil"></i> Edit</button>
						</a>
					</td>

					<td> 
						<?php $patient_id=$row_patient_details["patient_id"] ?>
						<a href="my_account.php?delete_patient=<?php echo $patient_id; ?>">
						<button class="btn btn-danger"><i class="fa fa-trash-o" ></i> Delete</button>
						</a>
					</td>

	</tr>

<?php 
	} 
?>

						</tbody>
					</table><!-- table table-bordered table-hover Ends -->
				</div><!-- table-responsive Ends -->
			</div><!-- panel-body Ends -->
		</div><!-- panel panel-default Ends -->
	</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
