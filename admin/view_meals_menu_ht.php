<?php 
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}
	
		else {
			if(isset($_GET['view_meals_menu_ht'])){
				$page = $_GET['view_meals_menu_ht'];
			}
		else {
			$page = 1;
		}


?>

	<!-- To create bootstrap elements -->
	<div class="row"> <!-- Row 1 starts -->
		<div class="col-lg-12"> <!-- To make website responsive -->
			<ol class="breadcrumb"> <!-- To create horizontal navigation bar -->
				<li class="active">
					<i class="fa fa-dashboard"></i> Dashboard / Views Meals Menu for Hi-Tea
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12"> 
			<div class="panel panel-default"> <!-- To colour the style of the panel  -->
				<div class="panel-heading"> <!-- To create a padding box around the heading of the coupon panel -->
					<h3 class="panel-title">
						<i class="fa fa-edit"></i> Meals Menu for Hi-Tea
					</h3>
				</div>	
				
							<!-- To create filter option -->
							<div class="panel-body" >
							
							<form class="form-inline" method="POST" action="">
									<div class="input-group col-md-3">
										<a href="index.php?insert_meals_menu" type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Insert Meals Menu</a>			
									</div>
									<div class="input-group col-md-6">
										<a href="index.php?view_meals_menu" type="button" class="btn btn-danger"> Back</a>
									</div>
							</form>

							<br>
							
							<!-- To create table carrier -->
								<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped"> <!-- To create table striped -->
									<thead><!-- thead Starts -->

										<tr>

											<th>No.</th>
											<th>Meals Portion</th>
											<th>Menu</th>
											<th>Quantity</th>
											<th>Cost of Meals</th>
											<th>Action</th>
											<th>Action</th>
										</tr>

										</thead><!-- thead Ends -->

										<tbody><!-- tbody Starts -->

										<?php
										$num_per_page = 5;
										$start_from = ($page - 1)*05;

										$i= $start_from;
										$get_meals_menu_ht = "select * from meals_menu_ht order by meals_menu_ht_id desc limit $start_from, $num_per_page";
										$run_meals_menu_ht = mysqli_query($con,$get_meals_menu_ht);
										while($row_meals_menu_ht = mysqli_fetch_array($run_meals_menu_ht)){
											
											$meals_portion_id=$row_meals_menu_ht["meals_portion_id"];
											$get_meals_portion = "select * from meals_portion where meals_portion_id='$meals_portion_id'";
											$run_meals_portion = mysqli_query($con,$get_meals_portion);
											$row_meals_portion = mysqli_fetch_array($run_meals_portion);
											$meals_portion = $row_meals_portion['meals_portion'];
											$i++;
										?>
										<tr>
											<td><?php echo $i; ?></td>
											<td> <?php echo $row_meals_portion["meals_portion"] ?></td>
											<td> <?php echo $row_meals_menu_ht["meals_menu_ht"] ?></td>
											<td> <?php echo $row_meals_menu_ht["meals_quantity_ht"] ?> gram</td>
											<td> RM <?php echo $row_meals_menu_ht["meals_cost"] ?></td>

											<td> 
											<?php $meals_menu_ht_id=$row_meals_menu_ht["meals_menu_ht_id"] ?>
												<a href="index.php?edit_meals_menu_ht=<?php echo $meals_menu_ht_id; ?>">
												<button class="btn btn-success"><i class="fa fa-pencil"></i> Edit</button>
												</a>
											</td>

											<td> 
											<?php $meals_menu_ht_id=$row_meals_menu_ht["meals_menu_ht_id"] ?>
												<a href="index.php?delete_meals_menu_ht=<?php echo $meals_menu_ht_id; ?>">
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
										$get_page = "select * from meals_menu_ht";
										$run_page = mysqli_query($con,$get_page);
										$total_record = mysqli_num_rows($run_page);
										$total_page = ceil($total_record/$num_per_page);

										if ($page>1){
											echo "<a href='index.php?view_meals_menu_ht=".($page - 1)."'class='btn btn-danger'>Previous</a>";
										}
										
										for ($i=1;$i<$total_page;$i++){
											echo "<a href='index.php?view_meals_menu_ht=".$i."'class='btn btn-primary'>$i</a>";
										}

										if ($i>$page){
											echo "<a href='index.php?view_meals_menu_ht=".($page + 1)."'class='btn btn-danger'>Next</a>";
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