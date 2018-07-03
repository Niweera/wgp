<?php
	session_start();
    include './dbconf/dbh.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Find Lanka</title>
		<link rel="stylesheet" type="text/css" href="./main.css">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<style>
			.one{
				margin-left: 20px;
				margin-top: 10px
			}
			.size{
				width: 400px;
				//height: 1000px;
			}
			.btn {
			padding: 10px;
			font-size: 15px;
			color: white;
			background: #5F9EA0;
			border: none;
			border-radius: 5px;
			}	
			.form{
				border-style: solid;
				border-width: 25px;
				border-color: 	#008B8B;
			}
			.p{

				font-family: Times New Roman;
				font-size: 30px;
				color: grey;
			}
			.stickyfooter {
				background: #333333;
				color: white;
				line-height: 50px;
				padding: 0 20px;
				height: 50px;
				margin-top: -50px;
			}
			.content {
				min-height: 100%;
			}
			.content-inside {
				padding: 0px;
				padding-bottom: 50px;
			}
		</style>
	</head>
	<body>
		<div class="content">
			<div class="content-inside" style="text-align:center">
				<header>
						<div class="navbar">
							<a href="./" class="logo">FIND LANKA</a>
							<div class="rightnav">
								<a class="active" href="./">Home</a>
								<div class="dropdown">
									<button class="dropbtn"><a href="./about">About Us</a> 
									</button>
									<div class="dropdown-content">
										<a href="./about/company profile.php">Company Profile</a>
										<a href="./about/our story.php">Our Story</a>
										<a href="./about/leadership & management.php">Leadership & Management</a>
									</div>
								</div> 
								<div class="dropdown">
									<button class="dropbtn"><a href="./about/contact us.php">Contact Us</a> 
									</button>
									<div class="dropdown-content">
										<a href="./about/contact support.php">Contact Support</a>
									</div>
								</div> 
								<a href="./services">Services</a>
								<a href="./help">Help</a>
								<?php
									if(!isset($_SESSION['user_id'])){
										echo '<a href="./login">Log in</a>';
										echo '<a href="./signup">Sign Up</a>';
									}else{
										echo '<a href="./logout">Log out</a>';
									}			
								?>
							</div>
						</div>
				</header>
				<!--this page will include company details of the Find Lanka-->
				<div class="one size style">
					<p>This is a web platform as a solution for  day to day domestic issue we all come across in our busy lives.<br><br><br> In the city of Colombo and suburban areas , finding a plumber to fix a plumbing issue in your house is as hard as finding a needle in a haystack.<br><br><br> And this scarcity extends to all types of skilled workers such as carpenters, electricians and etc.<br><br><br>People who look for services of skilled workers can not find them easily.<br><br><br>  And skilled workers who provide these services can not find work. And we are here to build up a bridge to satisfy the requirements of the both parties.<hr>
						
					</p>

					<p class="form">Here we provide you an online technical support system to search for best service providers in need, indeed.</p>
				</div>
				<div class="one size style">
					<p>This is a web platform as a solution for  day to day domestic issue we all come across in our busy lives.<br><br><br> In the city of Colombo and suburban areas , finding a plumber to fix a plumbing issue in your house is as hard as finding a needle in a haystack.<br><br><br> And this scarcity extends to all types of skilled workers such as carpenters, electricians and etc.<br><br><br>People who look for services of skilled workers can not find them easily.<br><br><br>  And skilled workers who provide these services can not find work. And we are here to build up a bridge to satisfy the requirements of the both parties.<hr>
						
					</p>

					<p class="form">Here we provide you an online technical support system to search for best service providers in need, indeed.</p>
				</div>
			</div>
		</div>
		<footer class="stickyfooter">
			<p class="footerleft" style="margin-top:0px;margin-bottom:0px"> &copy; Find Lanka Incorporated. 2018 | All Rights Reserved.</p>
			<div class="footerright">
				<a href="#home">Link 1</a>
				<a href="#about">Link 2</a>
				<a href="#contact">Link 2</a>
			</div>
			<div style="clear: both"></div>
		</footer>

	</body>
</html>