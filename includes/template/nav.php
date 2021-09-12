<div class="topnav" id="myTopnav">
    <a href="index.php">HOME</a>
    <a href="aboutus.php">ABOUT US</a>
    <a href="gallery.php">GALLERY</a>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"> </i>

	  <?php
		//nese perdoruesi nuk eshte kycur ne sistem
		if(!isset($_SESSION['email'])){
			echo '<a href="login.php"> LOG IN </a>
                 <a href="signup.php"> SIGN UP </a>';
             }
        
		//nese perdoruesi eshte kycur ne sistem
		else {
			if(isset($_SESSION['roli'])){
				//administrator
				if($_SESSION['roli'] == 1){
                    echo '<a href="contact.php"> CONTACT </a>';
				}

				//klient
				else if($_SESSION['roli'] == 2){
                    echo '<a href="packages.php"> PACKAGES </a>
						  <a href="book.php"> BOOK </a>
                          <a href="contact.php"> CONTACT </a>';
                }

				//punetor
				else if($_SESSION['roli'] == 3){
                    echo '<a href="bookP.php"> BOOK </a>';

				}
			}

			echo '<a href = "includes/validate/logout.php"> LOG OUT </a>';
		}
	?>
   </div>
</div>