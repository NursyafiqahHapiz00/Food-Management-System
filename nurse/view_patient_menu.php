<div class="row" ><!-- 2 row Starts -->
		<div class="col-lg-12" ><!-- col-lg-12 Starts -->
			<div class="panel panel-default" ><!-- panel panel-default Starts -->
				<div class="panel-heading" ><!-- panel-heading Starts -->
					<h3 class="panel-title" ><!-- panel-title Starts -->

<center><!-- center Starts -->
	<h1> View Patient Menu </h1>
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
					<th>Meals Portion</th>
                    <th>Breakfast</th>
					<th>Lunch</th>
                    <th>Hi-Tea</th>
					<th>Dinner</th>
					<th>Edit</th>
					<th>Delete</th>

			</tr>
			
		</thead>

<tbody>

				<?php
					$i = 0;
					$get_patient_menu = "select * from patient_m_menu";
					$run_patient_menu = mysqli_query($con,$get_patient_menu);
					while($row_patient_menu=mysqli_fetch_array($run_patient_menu)){

					$patient_m_menu_id = $row_patient_menu['patient_m_menu_id'];
					$patient_id = $row_patient_menu['patient_id'];
					$meals_portion_id = $row_patient_menu['meals_portion_id'];
					$meals_menu_b_id = $row_patient_menu['meals_menu_b_id'];
					$meals_menu_l_id = $row_patient_menu['meals_menu_l_id'];
					$meals_menu_ht_id = $row_patient_menu['meals_menu_ht_id'];
					$meals_menu_d_id = $row_patient_menu['meals_menu_d_id'];
					
					$get_meals_portion = "select * from meals_portion where meals_portion_id='$meals_portion_id'";
					$run_meals_portion = mysqli_query($con,$get_meals_portion);
					$row_meals_portion = mysqli_fetch_array($run_meals_portion);
					$meals_portion = $row_meals_portion['meals_portion'];
					
					$get_meals_menu_b = "select * from meals_menu_b where meals_menu_b_id='$meals_menu_b_id'";
					$run_meals_menu_b = mysqli_query($con,$get_meals_menu_b);
					$row_meals_menu_b = mysqli_fetch_array($run_meals_menu_b);
					$meals_menu_b = $row_meals_menu_b['meals_menu_b'];

					$get_meals_menu_l = "select * from meals_menu_l where meals_menu_l_id='$meals_menu_l_id'";
					$run_meals_menu_l = mysqli_query($con,$get_meals_menu_l);
					$row_meals_menu_l = mysqli_fetch_array($run_meals_menu_l);
					$meals_menu_l = $row_meals_menu_l['meals_menu_l'];
					
					$get_meals_menu_ht = "select * from meals_menu_ht where meals_menu_ht_id='$meals_menu_ht_id'";
					$run_meals_menu_ht = mysqli_query($con,$get_meals_menu_ht);
					$row_meals_menu_ht = mysqli_fetch_array($run_meals_menu_ht);
					$meals_menu_ht = $row_meals_menu_ht['meals_menu_ht'];
					
					$get_meals_menu_d = "select * from meals_menu_d where meals_menu_d_id='$meals_menu_d_id'";
					$run_meals_menu_d = mysqli_query($con,$get_meals_menu_d);
					$row_meals_menu_d = mysqli_fetch_array($run_meals_menu_d);
					$meals_menu_d = $row_meals_menu_d['meals_menu_d'];

					$i++;
				?>

	<tr>

					<td width="100"> <?php echo $i; ?> </td>
					<td><?php echo $patient_id; ?></td>
					<td><?php echo $meals_portion; ?></td>
					<td><?php echo $meals_menu_b; ?></td>
					<td><?php echo $meals_menu_l; ?></td>
					<td><?php echo $meals_menu_ht; ?></td>
					<td><?php echo $meals_menu_d; ?></td>					

					<td> 
						<?php $patient_m_menu_id = $row_patient_menu['patient_m_menu_id'] ?>
						<a href="my_account.php?edit_patient_menu=<?php echo $patient_m_menu_id; ?>">
						<button class="btn btn-success"><i class="fa fa-pencil"></i> Edit</button>
						</a>
					</td>

					<td> 
						<?php $patient_m_menu_id=$row_patient_menu["patient_m_menu_id"] ?>
						<a href="my_account.php?delete_patient_menu=<?php echo $patient_m_menu_id; ?>">
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