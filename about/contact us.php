<?php
    include '../dbconf/dbh.php';
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="./main.css">
	<link rel="stylesheet" type="text/css" href="./style.css">
	</head>
	<body>

		<div class="content">
			<div class="content-inside">
				<header>
					<div class="navbar">
						<a href="../" class="logo">FIND LANKA</a>
						<div class="rightnav">
							<a href="../">Home</a>
							<div class="dropdown">
								<button class="dropbtn"><a href="./">About Us</a> 
								</button>
								<div class="dropdown-content">
									<a href="company profile.php">Company Profile</a>
									<a href="our story.php">Our Story</a>
									<a href="leadership & management.php">Leadership & Management</a>
								</div>
							</div> 
							<div class="dropdown">
								<button class="dropbtn"><a class="active" href="./contact us.php">Contact Us</a> 
								</button>
								<div class="dropdown-content">
									<a href="contact support.php">Contact Support</a>
								</div>
							</div> 
							<a href="../services">Services</a>
							<a href="../help">Help</a>
							<a href="../login">Log in</a>
							<a href="../login#signup">Sign Up</a>
						</div>
					</div>
				</header>


				<div class = "wrapper">
					<!--edit from here-->
					<div class = "table2">
						<div class = "table-call">
							<img src = "image/call.png" alt="Image">
							<h2>Still not listed on our site?</h2>
							<p><b>If you are interestered in listing on Find Lanka's services,<br>
							Call us and give your info to one of our team.</b></p>
							<h3>011 210 0000</h3>
						</div><!--table-call-->
						<div class = "table-support" style="width:600px">
							<img src = "image/text.jpg" alt="Image">
							<h2 style="width:600px">Contact customer support</h2>
							<p><b>Sometimes you need a little help.<br> Don't worry...... we're here for you.</b></p>
							<form action = "contact support.php">
								<button><b>Contact Support</b></button>
							</form>
						</div><!--table-support-->
					</div><!--table2-->
					<div class = "contact">
						<h1 style="margin-left: 270px">Contact one of our staff at any day any time @ our office</h1>
					</div><!--contact-->
					<div class = "table3">
						<!--<div class = "office-image">
							<img src = "image/office.jpg" alt = "image" title = "Sri Lanka">
						</div>--><!--office-image-->
						<div class = "office-text">
							<h2>Address:</h2>
								<p>20/3, First Street, Colombo 07, Sri Lanka.</p>
							<h2>Phone:</h2>
								<p>+11 210 0000<br> +11 220 0000</p>
							<h2>Fax:</h2>
								<p>+11 230 0000</p>
						</div><!--office-text-->
					</div><!--table3-->	
				<!--end edit from here-->
				</div><!--wrapper-->

				<div style="padding:400px">
				<br><br>
				</div>
			</div>
		</div>
			
		<footer class="stickyfooter">
			<p class="footerleft" style="margin-top:0"> &copy; Find Lanka Incorporated. 2018 | All Rights Reserved.</p>
			<div class="footerright">
				<a href="#home">Link 1</a>
				<a href="#about">Link 2</a>
				<a href="#contact">Link 2</a>
			</div>
			<div style="clear: both"></div>
		</footer>
	</body>
</html>
		
					
