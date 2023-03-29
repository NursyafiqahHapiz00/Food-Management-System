<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");

?>

<br><br><br><br><br><br><br><br><br>

<div id="content" ><!-- content Starts -->
	<div class="container" ><!-- container Starts -->
		<div class="col-md-12" ><!-- col-md-12 Starts -->

			<div class="box" ><!-- box Starts -->

				<div class="box-header" ><!-- box-header Starts -->
					<center>
						<h3>Enter Your Email Below , We Will Send You , Your Password </h3>
					</center>
				</div><!-- box-header Ends -->

        <!-- To create forgot password form -->
        <form action="" method="post"><!-- form Starts -->
          <input type="text" class="form-control" name="nurse_email" placeholder="Enter Your Email">
            <br>
          <input type="submit" name="forgot_pass" class="btn btn-primary" value="Send My Password">
            <div class="col-md-5">
              <a href="./nurse_login.php" class="btn btn-primary"> Back </a>
            </div>
        </form><!-- form Ends -->
			</div><!-- box Ends -->
		</div><!-- col-md-12 Ends -->
	</div><!-- container Ends -->
</div><!-- content Ends -->

<script src="js/jquery.min.js"> </script>
  <script src="js/bootstrap.min.js"></script>

  </body>
</html>

<?php

  if(isset($_POST['forgot_pass'])){

  $nurse_email = $_POST['nurse_email'];
  $select_nurse = "select * from nurse where nurse_email='$nurse_email'";
  $run_nurse = mysqli_query($con,$select_nurse);
  $count_nurse = mysqli_num_rows($run_nurse);
  $row_nurse = mysqli_fetch_array($run_nurse);
  $nurse_fname = $row_nurse['nurse_fname'];
  $nurse_pass = $row_nurse['nurse_pass'];

    if($count_nurse == 0){
      echo "<script> alert('Sorry, We do not have your email') </script>";
      exit();
    }

    else{
      echo "<script> alert('Your Password has been sent to you, check your inbox ') </script>";
      echo "<script>window.open('nurse_login.php','_self')</script>";
    }
  }
?>

