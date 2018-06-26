<?php
    include 'header.php';
?> 
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
	</style>
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
					<a href="./login">Log in</a>
					<a href="./login#signup">Sign Up</a>
				</div>
			</div>
	</header>
	<!--this page will include company details of the Find Lanka-->
    <div class="one size style">
	<p>This is a web platform as a solution for  day to day domestic issue we all come across in our busy lives.<br><br><br> In the city of Colombo and suburban areas , finding a plumber to fix a plumbing issue in your house is as hard as finding a needle in a haystack.<br><br><br> And this scarcity extends to all types of skilled workers such as carpenters, electricians and etc.<br><br><br>People who look for services of skilled workers can not find them easily.<br><br><br>  And skilled workers who provide these services can not find work. And we are here to build up a bridge to satisfy the requirements of the both parties.<hr>
		
 	</p>

 	<p class="form">Here we provide you an online technical support system to search for best service providers in need, indeed.</p>
	</div>

    <?php
        include 'footer.php';
    ?> 

</body>
</html>