<?php

session_start();

include("includes/db.php");
include("includes/header.php");

?>

<head>
			<link rel="stylesheet" href="css/bootstrap.min.css" >
			<link rel="stylesheet" href="css/login.css" >
	</head>

	<div class="container" ><!-- container Starts -->

        <!-- To create forgot password form -->
        <form class="form-login" action="" method="post" >
			<h3 class="form-login-heading" >Enter Your Email Below, We Will Send You, Your Password</h3>
      <br>
          <input type="text" class="form-control" name="admin_email" placeholder="Enter Your Email">
          <br>
          <center><!-- center Starts -->
          <input type="submit" name="forgot_pass" class="btn btn-primary btn-block" value="Send My Password">
          </center><!-- center Ends -->
          <br>
          <center><!-- center Starts -->
              <a href="./login.php" class="btn btn-danger btn-block"> Back </a>
          </center><!-- center Ends -->
              </h6>
            </form>
	</div>
</body>
</html>

<?php

  if(isset($_POST['forgot_pass'])){

  $admin_email = $_POST['admin_email'];
  $select_admin = "select * from admin where admin_email='$admin_email'";
  $run_admin = mysqli_query($con,$select_admin);
  $count_admin = mysqli_num_rows($run_admin);
  $row_admin = mysqli_fetch_array($run_admin);
  $admin_fname = $row_admin['admin_fname'];
  $admin_pass = $row_admin['admin_pass'];

    if($count_admin == 0){
      echo "<script> alert('Sorry, We do not have your email') </script>";
      exit();
    }

    else{
      echo "<script> alert('Your Password has been sent to you, check your inbox ') </script>";
      echo "<script>window.open('login.php','_self')</script>";
    }
  }
?>

