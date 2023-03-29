<header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="../home.php">
		  		  <img class="logo__img" src="images/favicon-32x32.png" alt="e-dietary logotype" width="35" height="35">
				<?php
					if(!isset($_SESSION['nurse_email'])){
						echo "Welcome!"; 
					} 
					
						else { 
						
						$nurse_session = $_SESSION['nurse_email'];
						$get_nurse = "select * from nurse where nurse_email='$nurse_session'";
						$run_nurse = mysqli_query($con,$get_nurse);
						$row_nurse = mysqli_fetch_array($run_nurse);
						
						$nurse_fname = $row_nurse['nurse_fname'];
							echo "Welcome, " .$nurse_fname. "!";
						}
				?>
          </a>
        </div>
       
       <ul class="login">
		<!-- To move the logout word to the right, so need to create many2 login item to move it-->
		<li class="login__item">		 
		</li>

		<li class="login__item">		 
		</li>

		<li class="login__item">		 
		</li>

		<li class="login__item">
			<?php
				if(!isset($_SESSION['nurse_email'])){
				  echo '<a href="nurse_login.php" class="login__link">Sign In</a>';
				} 
				  else { 
					  echo '<a href="./logout.php" class="login__link">Logout</a>';
				  }   
			?>  		 
		</li>
	</ul> 
    
    </div>
</div>

    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="../home.php">
            <img class="logo__img" src="images/long_logo.png" alt="e-dietary logotype" width="200" height="100">
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">  
		  
			<li class="categories__item">
              <a class="categories__link" href="../home.php">
                Home               
              </a>
            </li>
			
            <li class="categories__item">
              <a class="categories__link categories__link--active" href="patient_details.php">
                Patient Details
              </a>
            </li>
			
            <li class="categories__item">
              <a class="categories__link" href="penalty.php">
                Penalty
              </a>
            </li>

			<li class="categories__item">
              <a class="categories__link" href="complaint.php">
                Complaint
              </a>
            </li>

          <li class="categories__item">
              <a class="categories__link" href="my_account.php?edit_account">
                My Account
                <i class="icon-down-open-1"></i>
              </a>
			  
              <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading">Account Settings</div>
						<ul class="dropdown__items">
						  <li class="dropdown__item">
							<a href="my_account.php?edit_account" class="dropdown__link">Edit Your Account</a>
						  </li>

              <li class="dropdown__item">
							<a href="my_account.php?view_patient_details" class="dropdown__link">View Patient Details</a>
						  </li>

              <li class="dropdown__item">
							<a href="my_account.php?view_patient_menu" class="dropdown__link">View Patient Menu</a>
						  </li>
						  
						  <li class="dropdown__item">
							<a href="my_account.php?change_pass" class="dropdown__link">Change Password</a>
						  </li>
						
						</ul>
                  </div>
                </div>
             
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>