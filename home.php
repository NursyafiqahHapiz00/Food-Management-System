<?php
	session_start();
	include("includes/db.php");
	include("includes/header.php");
	include("functions/functions.php");
	include("includes/main.php");
	include ("slider.php");
?>


	
    <!-- Main -->
    <div class="wrapper">
        <h1><h1>          
    </div>

    <div id="content" class="container"><!-- container Starts -->
		<div class="row"><!-- row Starts -->
			<?php
				getPro();
			?>
		</div><!-- row Ends -->
    </div><!-- container Ends -->
	
    <!-- FOOTER -->
    <footer class="page-footer">

	<div class="footer-nav">
	<div class="container clearfix">
						<a href="nurse/about.php" class="footer-nav__link">About us</a>
						<br>
						<a href="faqs.php" class="footer-nav__link">FAQs</a>
					
		 
		</address>
			
		</div>
	</div>
</div>

	<div class="page-footer__subline">
		<div class="container clearfix">

			<div class="copyright">
				&copy; 2023 e-Dietary &trade;
				All rights reserved.
			</div>

			<div class="developer">
				Developed by AIS Allure
			</div>

			<div class="designby">
				Design by AIS Allure
			</div>
		</div>
	</div>
</footer>

<html>
	<body>

	</body>
</html>
