<?php
	session_start();
        
    if(!isset($_SESSION['user_id']))
    {
      header('location: ../login');
      exit;
    }
    include '../dbconf/dbh.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Welcome <?php echo $_SESSION['user_id'];?></title>
		<link rel="stylesheet" type="text/css" href="./main.css">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<style>
			table {
				border-collapse: collapse;
				border-spacing: 0;
				width: 90%;
				border: 1px solid #ddd;
				margin-left: 50px;
			}

			th, td {
				text-align: left;
				padding: 16px;
			}

			tr:nth-child(even) {
				background-color: #caccce;
			}
			.center {
				margin: auto ;
				margin-top: 15px;
				margin-bottom: 15px;
				width: 50%;
				padding: auto;
				padding-top: 15px;
				padding-bottom: 15px;
				padding-right: 0;
				border: 1px solid grey;
			}
		</style>
	</head>
	<body>
		<div class="content">
			<div class="content-inside" style="text-align:center">
				<header>
					<div class="navbar">
						<a href="../" class="logo">FIND LANKA</a>
						<div class="rightnav">
							<a class="active" href="../user">Home</a>
							<div class="dropdown">
								<button class="dropbtn"><a href="../about">About Us</a> 
								</button>
								<div class="dropdown-content">
									<a href="../about/company profile.php">Company Profile</a>
									<a href="../about/our story.php">Our Story</a>
									<a href="../about/leadership & management.php">Leadership & Management</a>
								</div>
							</div> 
							<div class="dropdown">
								<button class="dropbtn"><a href="../about/contact us.php">Contact Us</a> 
								</button>
								<div class="dropdown-content">
									<a href="../about/contact support.php">Contact Support</a>
								</div>
							</div> 
							<a href="../services">Services</a>
							<a href="../help">Help</a>
							<a href="../logout">Log Out</a>
						</div>
					</div>
				</header>

				<!--this is the landing page of the customer-->

				<h1 style="text-align:center;">This is the customer's homepage</h1>
				<h1 style="text-align:center;">The following is just a filler, it needs to be changed</h1>
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



