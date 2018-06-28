<?php
    include '../dbconf/dbh.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Company Profile</title>
    <link rel="stylesheet" type="text/css" href="./main.css">
    <link rel="stylesheet" type="text/css" href="./style.css">
  </head>
  <body> 
	<div class="content">
		<div class="content-inside" style="text-align:center">
			<header>
			<div class="navbar">
				<a href="../" class="logo">FIND LANKA</a>
				<div class="rightnav">
					<a href="../">Home</a>
					<div class="dropdown">
						<button class="dropbtn"><a class="active" href="./">About Us</a> 
						</button>
						<div class="dropdown-content">
							<a class="active" href="company profile.php">Company Profile</a>
							<a href="our story.php">Our Story</a>
							<a href="leadership & management.php">Leadership & Management</a>
						</div>
					</div> 
					<div class="dropdown">
						<button class="dropbtn"><a href="./contact us.php">Contact Us</a> 
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
				
				<!--edit from here--><!--methanin edit karanna patan ganna-->
				<div class = "text">
					<h1 style="margin-top:5px">Company Profile</h1>
					<ul type = "disc">		
						<!--me thiyena <b> <u> <i> tag dan pawichchi wenne ne ewa css walin thamay dan hadanne-->
						<b><u><li>Our Purpose</li></u></b>
							<h2><u>High levels customer satisfaction</u></h2>
								<p>TechGuru offers incident based services for Home Solution, Business Solution and Enterprise Solution.
								Our delivery has remote teach support. It offers a comprehensive suite of service offering including optimization, diagnosis and repair, setup & install, virus removal, usability training, networking and managed services.
								Customers can choose from various channels to contact us, including web based support, real time phone, chat and e-mail or ground technicions.
								The customer satisfaction scores of TechGuru are amongest highest in the technical support industry.</p>
						<b><u><li>Our Goal</li></u></b>
							<p>To build good reputation in the field of real estate and property management and become a key player in the industry.</p>
						<b><u><li>Our Vision</li></u></b>
							<p>To provide quality services that exceeds the expectations of our esteemed customers.</p>
						<b><u><li>Our Mission</li></u></b>
							<p>To built long term relationship with our customers and provide exceptional customer services by innovation and advance technology.</p>
						<b><u><li>Core Value</li></u></b>
							<p>We believe in treating our customers with respect and faith. We grow through creativity invention and innovation.</p>
					</ul>
				</div><!--text-->
			</div><!--wrapper-->
			<!--end edit from here--><!--methanin nathara karanna-->
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
