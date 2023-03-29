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
					<i class="fa fa-dashboard"></i> Dashboard / Patient Details
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12"> 
			<div class="panel panel-default"> <!-- To colour the style of the panel  -->
				<div class="panel-heading"> <!-- To create a padding box around the heading of the coupon panel -->
					<h3 class="panel-title">
						<i class="fa fa-users"></i> Patient Details
					</h3>
				</div>	
											
							<div class="panel-body" >
							<!-- To create search box-->
							<form class="form-inline" method="POST" action="">
								<div class="input-group col-md-4">
									<input type="text" class="form-control" placeholder="Search here..." name="search"  value="<?php if(isset($_POST['search'])){echo $_POST['search']; } ?>"/>
										<span class="input-group-btn">
											<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
										</span>
											<div class="col-md-2">
												<a href="index.php?view_patient_details" type="button" class="btn btn-success">Refresh</a>
											</div>
								</div>

								<div class="col-md-6"> 	
									<a href="index.php?view_patient_m_menu" class="btn btn-primary"><i class="fa fa-eye"></i> View Patient Meals Menu </a>
								</div>					
							</form>

							<!-- To create table -->	
							<div class="table-responsive" > 
								<table id="patient_data" class="table table-bordered table-hover table-striped" > <!-- To create table striped -->
									<thead>

										<tr>

											<th>No.</th>
											<th>Patient ID</th>
											<th>Name</th>
											<th>Age</th>
											<th>Ward/Room</th>
											<th>Diseases</th>
											<th>Bed No.</th>
											<th>Allergic</th>
											<th>MAC</th>
											<th>Admit Date</th>
											
										</tr>

									</thead>
				
									<tbody id="patient_data">

									<!-- To create search function -->
									<?php 	
										if(isset($_POST['search'])) {
											$filtervalues = $_POST['search'];
											$i=0;
											$query = "select * from patient_details t1 inner join ward t2 on t1.ward_id=t2.ward_id inner join diseases t3 on t1.diseases_id=t3.diseases_id where CONCAT(patient_id,patient_ward,diseases_name,patient_fname,patient_lname,patient_bed) like '%$filtervalues%' ";
											$query_run = mysqli_query($con, $query);

											if(mysqli_num_rows($query_run) > 0) {
												foreach($query_run as $row_patient_details) {
													$patient_id = $row_patient_details['patient_id'];
													$i++;
									?>
									
                                        <tr>

											<td><?php echo $i; ?></td>
											<td><?= $row_patient_details['patient_id']; ?></td>
                                            <td><?= $row_patient_details['patient_fname']. '  ' .$row_patient_details['patient_lname']; ?></td>
											<td><?= $row_patient_details['patient_age']; ?></td>
											<td><?= $row_patient_details['patient_ward']; ?></td>
											<td><?= $row_patient_details['diseases_name']; ?></td>
											<td><?= $row_patient_details['patient_bed']; ?></td>
											<td><?= $row_patient_details['patient_allergic']; ?></td>
											<td><?= $row_patient_details['patient_MAC']; ?></td>
											<td><?= $row_patient_details['patient_admit_date']; ?></td>
                                        </tr>
                                    
									<?php
											}
                                    ?>

                                        <!-- To create row total number of patients -->
                                        <tr>
                                            <?php
                                                $query=mysqli_query($con, "select count(patient_id) as sum from `patient_details` t1 inner join ward t2 on t1.ward_id=t2.ward_id inner join diseases t3 on t1.diseases_id=t3.diseases_id where CONCAT(patient_id,patient_ward,diseases_name,patient_fname,patient_lname,patient_bed) like '%$filtervalues%'");
                                                    while($fetch=mysqli_fetch_array($query)){
                                            ?>

                                            <td colspan = "9"> <b><?php echo "Number of Patients";?></b> </td>
                                            <td colspan = "1" > <b><?php echo $fetch['sum']?></b> </td>

                                            <?php
                                                    }
                                            ?>
                                        </tr> 
                                    
                                    <?php
										}

											else {

										//If no record match with search data -->
										echo '
                                                    <tr>
                                                        <td colspan = "10"><center>No Record Found</center></td>
                                                    </tr>';
											}
										}

											//Refresh page
											else {
												$i=0;
												$query = "select * from patient_details t1 inner join ward t2 on t1.ward_id=t2.ward_id inner join diseases t3 on t1.diseases_id=t3.diseases_id order by patient_admit_date asc";
												$query_run = mysqli_query($con, $query);

												if(mysqli_num_rows($query_run) > 0) {
													foreach($query_run as $row_patient_details) { 
														$patient_id = $row_patient_details['patient_id'];                                                      
														$i++;
									?>
									
                                        <tr>

											<td><?php echo $i; ?></td>
												<td><?= $row_patient_details['patient_id']; ?></td>
												<td><?= $row_patient_details['patient_fname']. '  ' .$row_patient_details['patient_lname']; ?></td>
												<td><?= $row_patient_details['patient_age']; ?></td>
												<td><?= $row_patient_details['patient_ward']; ?></td>
												<td><?= $row_patient_details['diseases_name']; ?></td>
												<td><?= $row_patient_details['patient_bed']; ?></td>
												<td><?= $row_patient_details['patient_allergic']; ?></td>
												<td><?= $row_patient_details['patient_MAC']; ?></td>
												<td><?= $row_patient_details['patient_admit_date']; ?></td>							

                                        </tr>
									
									<?php
													}
												}
                                    ?>
                                            
                                        <!-- To create row total number of patients -->
                                        <tr>
                                            <?php
                                                $query=mysqli_query($con, "select count(patient_id) as sum from `patient_details`");
                                                    while($fetch=mysqli_fetch_array($query)){
                                            ?>

                                            <td colspan = "9"> <b><?php echo "Number of Patients";?></b> </td>
                                            <td colspan = "1" > <b><?php echo $fetch['sum']?></b> </td>

                                            <?php
                                                    }
												}
                                            ?>
                                        </tr>                                    
										<br><br>
										                                
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	
<?php 
	}
?>