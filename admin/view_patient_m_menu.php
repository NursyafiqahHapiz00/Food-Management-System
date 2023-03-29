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
					<i class="fa fa-dashboard"></i> Dashboard / Patient Meals Menu
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12"> 
			<div class="panel panel-default"> <!-- To colour the style of the panel  -->
				<div class="panel-heading"> <!-- To create a padding box around the heading of the coupon panel -->
					<h3 class="panel-title">
						<i class="fa fa-cutlery"></i> Patient Meals Menu
					</h3>
				</div>	
											
							<div class="panel-body" >
							<br>		
                            <!--To create date picker -->
                            <form class="form-group" method="POST" action="">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-4"> <!-- Create date picker 1 -->
                                            <div class="form-group">                                   
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <label>From Date:</label>
                                                    </div>                          
                                                        <input type="date" class="form-control pull-right" name="from_date" value="<?php echo isset($_POST['from_date']) ? $_POST['from_date'] : '' ?>" data-date-format="yyyy-mm-dd">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4"> <!-- Create date picker 2 -->
                                            <div class="form-group">                                            
                                                <div class="input-group date">
                                                    <div class="input-group-addon">
                                                        <label>To Date:</label>
                                                    </div>
                                                        <input type="date" class="form-control pull-right" name="to_date" value="<?php echo isset($_POST['to_date']) ? $_POST['to_date'] : '' ?>" data-date-format="yyyy-mm-dd">
                                                </div>
                                            </div>
                                        </div>                                    

                                        <div class="col-md-4">
                                            <button class="btn btn-primary" name="filter">Search</button> 
                                            <a href="index.php?view_patient_m_menu" type="button" class="btn btn-success">Refresh</a>
											<a href="index.php?view_patient_details" class="btn btn-primary"><i class="fa fa-eye"></i> View Patient Details </a>
                                        </div>
                                        <br>                              
                                    </div>
                            </form>
                                <br>

                                <center>
                                <div class="input-group col-md-6">
                                   <div class="box-title"><b>From :</b> <?php echo isset($_POST['from_date']) ? $_POST['from_date'] : '' ?> - <b>To:</b> <?php echo isset($_POST['to_date']) ? $_POST['to_date'] : '' ?></div>
						    	</div>
                                <br>				
						
							<!-- To create table -->	
							<div class="table-responsive" > 
								<table id="patient_meals" class="table table-bordered table-hover table-striped" > <!-- To create table striped -->
									<thead>

										<tr>

											<th>No.</th>
											<th>Admit Date</th>
											<th>Patient ID</th>
											<th>Meals Portion</th>
											<th>Breakfast Menu</th>
											<th>Lunch Menu</th>
											<th>Hi-Tea Menu</th>
											<th>Dinner Menu</th>
											
										</tr>

									</thead>
				
									<tbody id="patient_meals">
									<!-- To create date picker function -->
                                    <?php
                                        if(isset ($_POST['filter'])){
                                            $from_date = date("Y-m-d", strtotime($_POST['from_date']));
                                            $to_date = date("Y-m-d", strtotime($_POST['to_date']));

                                            $i=0;
                                            $query=mysqli_query($con, "select * from `patient_m_menu`  t1 inner join patient_details t2 on t1.patient_id=t2.patient_id inner join meals_portion t3 on t1.meals_portion_id=t3.meals_portion_id inner join meals_menu_b t4 on t1.meals_menu_b_id=t4.meals_menu_b_id inner join meals_menu_l t5 on t1.meals_menu_l_id=t5.meals_menu_l_id inner join meals_menu_ht t6 on t1.meals_menu_ht_id=t6.meals_menu_ht_id inner join meals_menu_d t7 on t1.meals_menu_d_id=t7.meals_menu_d_id WHERE date(`patient_admit_date`) between '$from_date' and '$to_date' order by patient_admit_date asc");
                                            $row=mysqli_num_rows($query);
                                                if($row>0){
                                                    while($fetch=mysqli_fetch_array($query)){

                                                        $i++;
                                    ?>							
									
                                        <tr>

											<td><?php echo $i; ?></td>
											<td><?php echo $fetch['patient_admit_date']?></td>
											<td><?php echo $fetch['patient_id']?></td>
											<td><?php echo $fetch['meals_portion']?></td>
											<td><?php echo $fetch['meals_menu_b'];?></td>										
											<td><?php echo $fetch['meals_menu_l'];?></td>							
											<td><?php echo $fetch['meals_menu_ht'];?></td>											
											<td><?php echo $fetch['meals_menu_d'];?></td>							
                                        </tr>
                                    
									<?php
											}
                                    ?>
									
									<!-- To create row total number of patient meals for breakfast-->
									<tr>
										<th colspan = "7">Breakfast</th>
										<th>Quantity</th>
									</tr>

									<?php
										$query=mysqli_query($con, "select *, sum(meals_quantity_b) as sum from `patient_m_menu`  t1 inner join patient_details t2 on t1.patient_id=t2.patient_id inner join meals_portion t3 on t1.meals_portion_id=t3.meals_portion_id inner join meals_menu_b t4 on t1.meals_menu_b_id=t4.meals_menu_b_id inner join meals_menu_l t5 on t1.meals_menu_l_id=t5.meals_menu_l_id inner join meals_menu_ht t6 on t1.meals_menu_ht_id=t6.meals_menu_ht_id inner join meals_menu_d t7 on t1.meals_menu_d_id=t7.meals_menu_d_id WHERE date(`patient_admit_date`) between '$from_date' and '$to_date' group by meals_menu_b order by patient_admit_date asc");
                                            $row=mysqli_num_rows($query);
                                                if($row>0){
                                                    while($fetch=mysqli_fetch_array($query)){
									?>												

									<tr>											   
										<td colspan = "7"> 
											<?php echo $fetch['meals_menu_b'];?> 
										</td>

										<td><?php echo $fetch['sum']?> gram</td>
									</tr>																	

									<?php
											}
										}
									?>	
									</tr> 

									<!-- To create row total number of patient meals for lunch-->
									<tr>
										<th colspan = "7">Lunch</th>
										<th>Quantity</th>
									</tr>

									<?php
										$query=mysqli_query($con, "select *, sum(meals_quantity_l) as sum from `patient_m_menu` t1 inner join patient_details t2 on t1.patient_id=t2.patient_id inner join meals_portion t3 on t1.meals_portion_id=t3.meals_portion_id inner join meals_menu_b t4 on t1.meals_menu_b_id=t4.meals_menu_b_id inner join meals_menu_l t5 on t1.meals_menu_l_id=t5.meals_menu_l_id inner join meals_menu_ht t6 on t1.meals_menu_ht_id=t6.meals_menu_ht_id inner join meals_menu_d t7 on t1.meals_menu_d_id=t7.meals_menu_d_id WHERE date(`patient_admit_date`) between '$from_date' and '$to_date' group by meals_menu_l order by patient_admit_date asc");
                                            $row=mysqli_num_rows($query);
                                                if($row>0){
                                                    while($fetch=mysqli_fetch_array($query)){
									?>												

									<tr>											   
										<td colspan = "7"> 
											<?php echo $fetch['meals_menu_l'];?> 
										</td>

										<td><?php echo $fetch['sum']?> gram</td>
									</tr>														

									<?php
											}
										}
									?>	
									</tr>
									
									<!-- To create row total number of patient meals for hi-tea-->
									<tr>
										<th colspan = "7">Hi-Tea</th>
										<th>Quantity</th>
									</tr>

									<?php
										$query=mysqli_query($con, "select *, sum(meals_quantity_ht) as sum from `patient_m_menu` t1 inner join patient_details t2 on t1.patient_id=t2.patient_id inner join meals_portion t3 on t1.meals_portion_id=t3.meals_portion_id inner join meals_menu_b t4 on t1.meals_menu_b_id=t4.meals_menu_b_id inner join meals_menu_l t5 on t1.meals_menu_l_id=t5.meals_menu_l_id inner join meals_menu_ht t6 on t1.meals_menu_ht_id=t6.meals_menu_ht_id inner join meals_menu_d t7 on t1.meals_menu_d_id=t7.meals_menu_d_id WHERE date(`patient_admit_date`) between '$from_date' and '$to_date' group by meals_menu_ht order by patient_admit_date asc");
                                            $row=mysqli_num_rows($query);
                                                if($row>0){
                                                    while($fetch=mysqli_fetch_array($query)){
									?>												

									<tr>											   
										<td colspan = "7"> 
											<?php echo $fetch['meals_menu_ht'];?> 
										</td>

										<td><?php echo $fetch['sum']?> gram</td>
									</tr>														

									<?php
											}
										}
									?>	
									</tr>

									<!-- To create row total number of patient meals for dinner-->
									<tr>
										<th colspan = "7">Dinner</th>
										<th>Quantity</th>
									</tr>

									<?php
										$query=mysqli_query($con, "select *, sum(meals_quantity_d) as sum from `patient_m_menu` t1 inner join patient_details t2 on t1.patient_id=t2.patient_id inner join meals_portion t3 on t1.meals_portion_id=t3.meals_portion_id inner join meals_menu_b t4 on t1.meals_menu_b_id=t4.meals_menu_b_id inner join meals_menu_l t5 on t1.meals_menu_l_id=t5.meals_menu_l_id inner join meals_menu_ht t6 on t1.meals_menu_ht_id=t6.meals_menu_ht_id inner join meals_menu_d t7 on t1.meals_menu_d_id=t7.meals_menu_d_id WHERE date(`patient_admit_date`) between '$from_date' and '$to_date' group by meals_menu_d order by patient_admit_date asc");
                                            $row=mysqli_num_rows($query);
                                                if($row>0){
                                                    while($fetch=mysqli_fetch_array($query)){
									?>												

									<tr>											   
										<td colspan = "7"> 
											<?php echo $fetch['meals_menu_d'];?> 
										</td>

										<td><?php echo $fetch['sum']?> gram</td>
									</tr>														

									<?php
											}
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
												$get_patient_m_menu = "select * from patient_m_menu";
												$run_patient_m_menu = mysqli_query($con,$get_patient_m_menu);
													while($row_patient_m_menu=mysqli_fetch_array($run_patient_m_menu)){

												$patient_m_menu_id = $row_patient_m_menu['patient_m_menu_id'];
												$patient_id = $row_patient_m_menu['patient_id'];
												$meals_portion_id = $row_patient_m_menu['meals_portion_id'];
												$meals_menu_b_id = $row_patient_m_menu['meals_menu_b_id'];
												$meals_menu_l_id = $row_patient_m_menu['meals_menu_l_id'];
												$meals_menu_ht_id = $row_patient_m_menu['meals_menu_ht_id'];
												$meals_menu_d_id = $row_patient_m_menu['meals_menu_d_id'];

												$get_patient = "select * from patient_details where patient_id='$patient_id'";
												$run_patient = mysqli_query($con,$get_patient);
												$row_patient = mysqli_fetch_array($run_patient);
												$patient_admit_date = $row_patient['patient_admit_date'];
												
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
											<td><?php echo $i; ?></td>
											<td><?php echo $patient_admit_date; ?></td>
											<td><?php echo $patient_id; ?></td>
											<td><?php echo $meals_portion; ?></td>
											<td><?php echo $meals_menu_b; ?></td>
											<td><?php echo $meals_menu_l; ?></td>
											<td><?php echo $meals_menu_ht; ?></td>
											<td><?php echo $meals_menu_d; ?></td>										

                                        </tr>
									
									<?php

											}
                                    ?>
                                            
                                        <!-- To create row total number of patients meals menu-->
                                        <tr>
                                            <?php
                                                $query=mysqli_query($con, "select count(patient_m_menu_id) as sum from `patient_m_menu` t1 inner join patient_details t2 on t1.patient_id=t2.patient_id inner join meals_portion t3 on t1.meals_portion_id=t3.meals_portion_id inner join meals_menu_b t4 on t1.meals_menu_b_id=t4.meals_menu_b_id inner join meals_menu_l t5 on t1.meals_menu_l_id=t5.meals_menu_l_id inner join meals_menu_ht t6 on t1.meals_menu_ht_id=t6.meals_menu_ht_id inner join meals_menu_d t7 on t1.meals_menu_d_id=t7.meals_menu_d_id");
                                                    while($fetch=mysqli_fetch_array($query)){
                                            ?>

                                            <td colspan = "7"> <b><?php echo "Number of Patients Meals Menu";?></b> </td>
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