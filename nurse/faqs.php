<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.accordion {
  background-color: #0077b6;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
  color : black;
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>
</head>
<body>

<?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
?>

<div id="contact-page" class="container">
           

		<!-- Customer/Cust refers to User -->

			<div class="row">   
                <div class="col-sm-12" style="background-color:#ddedf5; padding: 0 5px;">
				<div class="panel-body" ><!-- panel-body Starts -->
                    <div class="contact-form"><br><br><br>
						<!-- To make text between horizontal line -->
			<div style="width: 100%; height: 10px; border-bottom: 1px solid black; text-align: center">
							<span style="font-size: 20px; background-color: #ddedf5; padding: 0 5px;">
								<b>Frequently Asked Questions</b>
							</span>
						</div>
						<br><br>	
						
<?php
	$get_faqs="select * from faqs";
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

<h4>1. <?php echo $faqs_title1 ?></h4>

<button class="accordion"><?php echo $faqs_title1_sub1 ?></button>
<div class="panel">
  <p><?php echo $faqs_title1_sub1_details ?>
</p>
</div>

<button class="accordion"><?php echo $faqs_title1_sub2 ?></button>
<div class="panel">
  <p><?php echo $faqs_title1_sub2_details ?>
</p>
</div>

<button class="accordion"><?php echo $faqs_title1_sub3 ?></button>
<div class="panel">
  <p><?php echo $faqs_title1_sub3_details ?>
</p>
</div>

<br><br>
<h4>2. <?php echo $faqs_title2 ?></h4>

<button class="accordion"><?php echo $faqs_title2_sub1 ?></button>
<div class="panel">
  <p><?php echo $faqs_title2_sub1_details ?>
</p>
</div>

<button class="accordion"><?php echo $faqs_title2_sub2 ?></button>
<div class="panel">
  <p><?php echo $faqs_title2_sub2_details ?>
</p>
</div>

<br><br>
<h4>3. <?php echo $faqs_title3 ?></h4>

<button class="accordion"><?php echo $faqs_title3_sub1 ?></button>
<div class="panel">
  <p><?php echo $faqs_title3_sub1_details ?>
</p>
</div>

<button class="accordion"><?php echo $faqs_title3_sub2 ?></button>
<div class="panel">
  <p><?php echo $faqs_title3_sub2_details ?>
</p>
</div>

<br><br>
<h4>4. <?php echo $faqs_title4 ?></h4>

<button class="accordion"><?php echo $faqs_title4_sub1 ?></button>
<div class="panel">
  <p><?php echo $faqs_title4_sub1_details ?>
</p>
</div>

<button class="accordion"><?php echo $faqs_title4_sub2 ?></button>
<div class="panel">
  <p><?php echo $faqs_title4_sub2_details ?>
</p>
</div>

<button class="accordion"><?php echo $faqs_title4_sub3 ?></button>
<div class="panel">
  <p><?php echo $faqs_title4_sub3_details ?>
</p>
</div>

<button class="accordion"><?php echo $faqs_title4_sub4 ?></button>
<div class="panel">
  <p><?php echo $faqs_title4_sub4_details ?>
</p>
</div>

<button class="accordion"><?php echo $faqs_title4_sub5 ?></button>
<div class="panel">
  <p><?php echo $faqs_title4_sub5_details ?>
</p>
</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
</div>
<br>


						</div>
					</div>
				</div>
			</div>
<br><br>
<?php
	include("includes/footer.php");
?>

<script src="js/jquery.min.js"> </script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>