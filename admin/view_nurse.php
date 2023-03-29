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
					<i class="fa fa-dashboard"></i> Dashboard / Nurse Details
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12"> 
			<div class="panel panel-default"> <!-- To colour the style of the panel  -->
				<div class="panel-heading"> <!-- To create a padding box around the heading of the coupon panel -->
					<h3 class="panel-title">
						<i class="fa fa-users"></i> Nurse Details
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
											<a href="index.php?view_nurse" type="button" class="btn btn-success">Refresh</a>
										</div>
								</div>				
							</form>

							<!-- To create table -->	
							<div class="table-responsive" > 
								<table id="patient_data" class="table table-bordered table-hover table-striped" > <!-- To create table striped -->
									<thead>

										<tr>

											<th>No.</th>
											<th>Nurse ID</th>
											<th>Ward/Room ID</th>
											<th>Name</th>
											<th>Contact Number</th>
											<th>Image</th>
											<th>Action</th>
											
										</tr>

									</thead>
				
									<tbody id="patient_data">

									<!-- To create search function -->
									<?php 	
										if(isset($_POST['search'])) {
											$filtervalues = $_POST['search'];
											$i=0;
											$query = "select * from nurse where CONCAT(nurse_id,ward_id,nurse_fname,nurse_lname,nurse_contact) like '%$filtervalues%' ";
											$query_run = mysqli_query($con, $query);

											if(mysqli_num_rows($query_run) > 0) {
												foreach($query_run as $row_nurse) {
													$nurse_id = $row_nurse['nurse_id'];
													$i++;
									?>
									
                                        <tr>

											<td><?php echo $i; ?></td>
											<td><?= $row_nurse['nurse_id']; ?></td>
											<td><?= $row_nurse['ward_id']; ?></td>
                                            <td><?= $row_nurse['nurse_fname']. '  ' .$row_nurse['nurse_lname']; ?></td>
											<td><?= $row_nurse['nurse_contact']; ?></td>
											<td><img src="../nurse/nurse_images/<?= $row_nurse['nurse_image']; ?>" width="60" height="60" ></td>	
											<td>
												<a href="index.php?delete_nurse=<?php echo $nurse_id; ?>" >
													<button class="btn btn-danger"><i class="fa fa-trash-o" ></i> Delete</button>
												</a>
											</td>
                                        </tr>
                                    
									<?php
											}
                                    ?>

                                        <!-- To create row total number of nurses -->
                                        <tr>
                                            <?php
                                                $query=mysqli_query($con, "select count(nurse_id) as sum from `nurse`");
                                                    while($fetch=mysqli_fetch_array($query)){
                                            ?>

                                            <td colspan = "6"> <b><?php echo "Number of Nurses";?></b> </td>
                                            <td colspan = "6" > <b><?php echo $fetch['sum']?></b> </td>

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
                                                        <td colspan = "12"><center>No Record Found</center></td>
                                                    </tr>';
											}
										}

											//Refresh page
											else {
												$i=0;
												$query = "select * from nurse ";
												$query_run = mysqli_query($con, $query);

												if(mysqli_num_rows($query_run) > 0) {
													foreach($query_run as $row_nurse) { 
														$nurse_id = $row_nurse['nurse_id'];                                                      
														$i++;
									?>
									
                                        <tr>

											<td><?php echo $i; ?></td>
												<td><?= $row_nurse['nurse_id']; ?></td>
												<td><?= $row_nurse['ward_id']; ?></td>
												<td><?= $row_nurse['nurse_fname']. '  ' .$row_nurse['nurse_lname']; ?></td>
												<td><?= $row_nurse['nurse_contact']; ?></td>
												<td><img src="../nurse/nurse_images/<?= $row_nurse['nurse_image']; ?>" width="60" height="60" ></td>												
												<td>
													<a href="index.php?delete_nurse=<?php echo $nurse_id; ?>" >
														<button class="btn btn-danger"><i class="fa fa-trash-o" ></i> Delete</button>
													</a>
												</td>

                                        </tr>
									
									<?php
													}
												}
                                    ?>
                                            
                                        <!-- To create row total number of nurses -->
                                        <tr>
                                            <?php
                                                $query=mysqli_query($con, "select count(nurse_id) as sum from `nurse`");
                                                    while($fetch=mysqli_fetch_array($query)){
                                            ?>

                                            <td colspan = "6"> <b><?php echo "Number of Nurses";?></b> </td>
                                            <td colspan = "6" > <b><?php echo $fetch['sum']?></b> </td>

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