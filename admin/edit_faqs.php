<?php
	if(!isset($_SESSION['admin_email'])){
		echo "<script>window.open('login.php','_self')</script>";
	}

		else {
?>

  
<!-- To create format style text area -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<script>tinymce.init(
		{selector:'textarea',  plugins: 'lists', toolbar: 'numlist bullist'});
	</script>
  
<?php
	$get_faqs = "select * from faqs";
	$run_faqs = mysqli_query($con,$get_faqs);
	$row_faqs = mysqli_fetch_array($run_faqs);

	$faqs_title1 = $row_faqs['faqs_title1'];
	$faqs_title1_sub1 = $row_faqs['faqs_title1_sub1'];
	$faqs_title1_sub1_details = $row_faqs['faqs_title1_sub1_details'];
	$faqs_title1_sub2 = $row_faqs['faqs_title1_sub2'];
	$faqs_title1_sub2_details = $row_faqs['faqs_title1_sub2_details'];
	$faqs_title1_sub3 = $row_faqs['faqs_title1_sub3'];
	$faqs_title1_sub3_details = $row_faqs['faqs_title1_sub3_details'];
	$faqs_title2 = $row_faqs['faqs_title2'];
	$faqs_title2_sub1 = $row_faqs['faqs_title2_sub1'];
	$faqs_title2_sub1_details = $row_faqs['faqs_title2_sub1_details'];
	$faqs_title2_sub2 = $row_faqs['faqs_title2_sub2'];
	$faqs_title2_sub2_details = $row_faqs['faqs_title2_sub2_details'];
	$faqs_title3 = $row_faqs['faqs_title3'];
	$faqs_title3_sub1 = $row_faqs['faqs_title3_sub1'];
	$faqs_title3_sub1_details = $row_faqs['faqs_title3_sub1_details'];
	$faqs_title3_sub2 = $row_faqs['faqs_title3_sub2'];
	$faqs_title3_sub2_details = $row_faqs['faqs_title3_sub2_details'];
	$faqs_title4 = $row_faqs['faqs_title4'];
	$faqs_title4_sub1 = $row_faqs['faqs_title4_sub1'];
	$faqs_title4_sub1_details = $row_faqs['faqs_title4_sub1_details'];
	$faqs_title4_sub2 = $row_faqs['faqs_title4_sub2'];
	$faqs_title4_sub2_details = $row_faqs['faqs_title4_sub2_details'];
	$faqs_title4_sub3 = $row_faqs['faqs_title4_sub3'];
	$faqs_title4_sub3_details = $row_faqs['faqs_title4_sub3_details'];
	$faqs_title4_sub4 = $row_faqs['faqs_title4_sub4'];
	$faqs_title4_sub4_details = $row_faqs['faqs_title4_sub4_details'];
	$faqs_title4_sub5 = $row_faqs['faqs_title4_sub5'];
	$faqs_title4_sub5_details = $row_faqs['faqs_title4_sub5_details'];
?> 

	<div class="row" >
		<div class="col-lg-12" >
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-dashboard" ></i> Dashboard / Edit FAQs
				</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<i class="fa fa-edit"></i> Edit FAQs
					</h3>
				</div>

							<div class="panel-body"><!-- panel-body Starts -->

							<!-- To create form -->
							<form method="post" class="form-horizontal">
							
								<br><br>
								<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
									<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
										<b>First FAQs</b>
									</span>
								</div>
								<br><br>
								
								<div class="form-group">
									<label class="col-md-3 control-label"> First Title: </label>
										<div class="col-md-8">
											<input type="text" name="faqs_title1" class="form-control" value="<?php echo $faqs_title1; ?>">
										</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label"> First Subtitle: </label>
										<div class="col-md-8">
											<input type="text" name="faqs_title1_sub1" class="form-control" value="<?php echo $faqs_title1_sub1; ?>">
										</div>
								</div>								

								<div class="form-group">
									<label class="col-md-3 control-label"> Details: </label>
										<div class="col-md-8">
											<textarea name="faqs_title1_sub1_details" id="faqs_title1_sub1_details" class="form-control" rows="10">
												<?php echo $faqs_title1_sub1_details; ?>
											</textarea>
										</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label"> Second Subtitle: </label>
										<div class="col-md-8">
											<input type="text" name="faqs_title1_sub2" class="form-control" value="<?php echo $faqs_title1_sub2; ?>">
										</div>
								</div>		

								<div class="form-group">
									<label class="col-md-3 control-label"> Details: </label>
										<div class="col-md-8">
											<textarea name="faqs_title1_sub2_details" id="faqs_title1_sub2_details" class="form-control" rows="10">
												<?php echo $faqs_title1_sub2_details; ?>
											</textarea>
										</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label"> Third Subtitle: </label>
										<div class="col-md-8">
											<input type="text" name="faqs_title1_sub3" class="form-control" value="<?php echo $faqs_title1_sub3; ?>">
										</div>
								</div>		

								<div class="form-group">
									<label class="col-md-3 control-label"> Details: </label>
										<div class="col-md-8">
											<textarea name="faqs_title1_sub3_details" id="faqs_title1_sub3_details" class="form-control" rows="10">
												<?php echo $faqs_title1_sub3_details; ?>
											</textarea>
										</div>
								</div>
								
								<br><br>
								<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
									<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
										<b>Second FAQs</b>
									</span>
								</div>
								<br><br>
								
								<div class="form-group">
									<label class="col-md-3 control-label"> Second Title: </label>
										<div class="col-md-8">
											<input type="text" name="faqs_title2" class="form-control" value="<?php echo $faqs_title2; ?>">
										</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label"> First Subtitle: </label>
										<div class="col-md-8">
											<input type="text" name="faqs_title2_sub1" class="form-control" value="<?php echo $faqs_title2_sub1; ?>">
										</div>
								</div>								

								<div class="form-group">
									<label class="col-md-3 control-label"> Details: </label>
										<div class="col-md-8">
											<textarea name="faqs_title2_sub1_details" id="faqs_title2_sub1_details" class="form-control" rows="10">
												<?php echo $faqs_title2_sub1_details; ?>
											</textarea>
										</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label"> Second Subtitle: </label>
										<div class="col-md-8">
											<input type="text" name="faqs_title2_sub2" class="form-control" value="<?php echo $faqs_title2_sub2; ?>">
										</div>
								</div>	

								<div class="form-group">
									<label class="col-md-3 control-label"> Details: </label>
										<div class="col-md-8">
											<textarea name="faqs_title2_sub2_details" id="faqs_title2_sub2_details" class="form-control" rows="10">
												<?php echo $faqs_title2_sub2_details; ?>
											</textarea>
										</div>
								</div>								

								<br><br>
								<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
									<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
										<b>Third FAQs</b>
									</span>
								</div>								
								<br><br>
								
								<div class="form-group">
									<label class="col-md-3 control-label"> Third Title: </label>
										<div class="col-md-8">
											<input type="text" name="faqs_title3" class="form-control" value="<?php echo $faqs_title3; ?>">
										</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label"> First Subtitle: </label>
										<div class="col-md-8">
											<input type="text" name="faqs_title3_sub1" class="form-control" value="<?php echo $faqs_title3_sub1; ?>">
										</div>
								</div>								

								<div class="form-group">
									<label class="col-md-3 control-label"> Details: </label>
										<div class="col-md-8">
											<textarea name="faqs_title3_sub1_details" id="faqs_title3_sub1_details" class="form-control" rows="10">
												<?php echo $faqs_title3_sub1_details; ?>
											</textarea>
										</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label"> Second Subtitle: </label>
										<div class="col-md-8">
											<input type="text" name="faqs_title3_sub2" class="form-control" value="<?php echo $faqs_title3_sub2; ?>">
										</div>
								</div>	

								<div class="form-group">
									<label class="col-md-3 control-label"> Details: </label>
										<div class="col-md-8">
											<textarea name="faqs_title3_sub2_details" id="faqs_title3_sub2_details" class="form-control" rows="10">
												<?php echo $faqs_title3_sub2_details; ?>
											</textarea>
										</div>
								</div>					

								<br><br>
								<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
									<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
										<b>Fourth FAQs</b>
									</span>
								</div>								
								<br><br>
								
								<div class="form-group">
									<label class="col-md-3 control-label"> Fourth Title: </label>
										<div class="col-md-8">
											<input type="text" name="faqs_title4" class="form-control" value="<?php echo $faqs_title4; ?>">
										</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label"> First Subtitle: </label>
										<div class="col-md-8">
											<input type="text" name="faqs_title4_sub1" class="form-control" value="<?php echo $faqs_title4_sub1; ?>">
										</div>
								</div>								

								<div class="form-group">
									<label class="col-md-3 control-label"> Details: </label>
										<div class="col-md-8">
											<textarea name="faqs_title4_sub1_details" id="faqs_title3_sub1_details" class="form-control" rows="10">
												<?php echo $faqs_title4_sub1_details; ?>
											</textarea>
										</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label"> Second Subtitle: </label>
										<div class="col-md-8">
											<input type="text" name="faqs_title4_sub2" class="form-control" value="<?php echo $faqs_title4_sub2; ?>">
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> Details: </label>
										<div class="col-md-8">
											<textarea name="faqs_title4_sub2_details" id="faqs_title4_sub2_details" class="form-control" rows="10">
												<?php echo $faqs_title4_sub2_details; ?>
											</textarea>
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> Third Subtitle: </label>
										<div class="col-md-8">
											<input type="text" name="faqs_title4_sub3" class="form-control" value="<?php echo $faqs_title4_sub3; ?>">
										</div>
								</div>								

								<div class="form-group">
									<label class="col-md-3 control-label"> Details: </label>
										<div class="col-md-8">
											<textarea name="faqs_title4_sub3_details" id="faqs_title4_sub3_details" class="form-control" rows="10">
												<?php echo $faqs_title4_sub3_details; ?>
											</textarea>
										</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-3 control-label"> Fourth Subtitle: </label>
										<div class="col-md-8">
											<input type="text" name="faqs_title4_sub4" class="form-control" value="<?php echo $faqs_title4_sub4; ?>">
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> Details: </label>
										<div class="col-md-8">
											<textarea name="faqs_title4_sub4_details" id="faqs_title4_sub4_details" class="form-control" rows="10">
												<?php echo $faqs_title4_sub4_details; ?>
											</textarea>
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> Fifth Subtitle: </label>
										<div class="col-md-8">
											<input type="text" name="faqs_title4_sub5" class="form-control" value="<?php echo $faqs_title4_sub5; ?>">
										</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label"> Details: </label>
										<div class="col-md-8">
											<textarea name="faqs_title4_sub5_details" id="faqs_title4_sub5_details" class="form-control" rows="10">
												<?php echo $faqs_title4_sub5_details; ?>
											</textarea>
										</div>
								</div>									

								<div class="form-group">
									<label class="col-md-3 control-label"> </label>
										<div class="col-md-8">
											<input type="submit" name="submit" value="Update FAQs" class="btn btn-primary form-control">
								</div>
								</div>

					</form>
				</div>
			</div>
		</div>
	</div>

<?php
	if(isset($_POST['submit'])){
		$faqs_title1 = $_POST['faqs_title1'];
		$faqs_title1_sub1 = $_POST['faqs_title1_sub1'];
		$faqs_title1_sub1_details = $_POST['faqs_title1_sub1_details'];
		$faqs_title1_sub2 = $_POST['faqs_title1_sub2'];
		$faqs_title1_sub2_details = $_POST['faqs_title1_sub2_details'];
		$faqs_title1_sub3 = $_POST['faqs_title1_sub3'];
		$faqs_title1_sub3_details = $_POST['faqs_title1_sub3_details'];
		$faqs_title2 = $_POST['faqs_title2'];
		$faqs_title2_sub1 = $_POST['faqs_title2_sub1'];
		$faqs_title2_sub1_details = $_POST['faqs_title2_sub1_details'];
		$faqs_title2_sub2 = $_POST['faqs_title2_sub2'];
		$faqs_title2_sub2_details = $_POST['faqs_title2_sub2_details'];
		$faqs_title3 = $_POST['faqs_title3'];
		$faqs_title3_sub1 = $_POST['faqs_title3_sub1'];
		$faqs_title3_sub1_details = $_POST['faqs_title3_sub1_details'];
		$faqs_title3_sub2 = $_POST['faqs_title3_sub2'];
		$faqs_title3_sub2_details = $_POST['faqs_title3_sub2_details'];
		$faqs_title4 = $_POST['faqs_title4'];
		$faqs_title4_sub1 = $_POST['faqs_title4_sub1'];
		$faqs_title4_sub1_details = $_POST['faqs_title4_sub1_details'];
		$faqs_title4_sub2 = $_POST['faqs_title4_sub2'];
		$faqs_title4_sub2_details = $_POST['faqs_title4_sub2_details'];
		$faqs_title4_sub3 = $_POST['faqs_title4_sub3'];
		$faqs_title4_sub3_details = $_POST['faqs_title4_sub3_details'];
		$faqs_title4_sub4 = $_POST['faqs_title4_sub4'];
		$faqs_title4_sub4_details = $_POST['faqs_title4_sub4_details'];
		$faqs_title4_sub5 = $_POST['faqs_title4_sub5'];
		$faqs_title4_sub5_details = $_POST['faqs_title4_sub5_details'];

	$update_faqs = "update faqs set faqs_title1='$faqs_title1',faqs_title1_sub1='$faqs_title1_sub1',faqs_title1_sub1_details='$faqs_title1_sub1_details',faqs_title1_sub2='$faqs_title1_sub2',faqs_title1_sub2_details='$faqs_title1_sub2_details',faqs_title1_sub3='$faqs_title1_sub3',faqs_title1_sub3_details='$faqs_title1_sub3_details',faqs_title2='$faqs_title2',faqs_title2_sub1='$faqs_title2_sub1',faqs_title2_sub1_details='$faqs_title2_sub1_details',faqs_title2_sub2='$faqs_title2_sub2',faqs_title2_sub2_details='$faqs_title2_sub2_details',
	faqs_title3='$faqs_title3',faqs_title3_sub1='$faqs_title3_sub1',faqs_title3_sub1_details='$faqs_title3_sub1_details',faqs_title3_sub2='$faqs_title3_sub2',faqs_title3_sub2_details='$faqs_title3_sub2_details',
	faqs_title4='$faqs_title4',faqs_title4_sub1='$faqs_title4_sub1',faqs_title4_sub1_details='$faqs_title4_sub1_details',faqs_title4_sub2='$faqs_title4_sub2',faqs_title4_sub2_details='$faqs_title4_sub2_details',
	faqs_title4_sub3='$faqs_title4_sub3',faqs_title4_sub3_details='$faqs_title4_sub3_details',faqs_title4_sub4='$faqs_title4_sub4',faqs_title4_sub4_details='$faqs_title4_sub4_details',faqs_title4_sub5='$faqs_title4_sub5',faqs_title4_sub5_details='$faqs_title4_sub5_details'";
	$run_faqs = mysqli_query($con,$update_faqs);

		if($run_faqs){
			echo "<script>alert('FAQs page has been updated')</script>";
			echo "<script>window.open('index.php?edit_faqs','_self')</script>";
		}
	}
?>


<?php 
	} 
?>