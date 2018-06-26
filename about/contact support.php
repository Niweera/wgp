<?php
    include 'header.php';
?> 
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
							<a  class="active" href="contact support.php">Contact Support</a>
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
					<form action = "contact support.php" method = "post">
						<div class = "table-design">
						<table align=center border= 1>
						<tr>
							<body font color="black">
							<th colspan=2>Send Us a Message</th>
						</tr>
						<tr>
							<td>Your Name  *</td>
							<td><input type="text" size="100" maxlength="40" placeholder = "Name" required></td>
						</tr>
						<tr>
							<td>Email Address *</td>
							<td><input type="email" name = "useemail" placeholder = "Email" required></td>
						</tr>
						<tr>
							<td>Subject  *</td>
							<td><input type="subject" name = "subject" placeholder = "Subject" required></td>
						</tr>
						
						<tr>
							<td>Note*</td>
							<td>
								<textarea name="message" rows="10" cols="100" required>
								</textarea>
							</td>
						</tr>
						<tr>
							<td colspan=2 align="center">
							
							<div class = "button">
								<input type=submit value=Submit name="submit"> 
								<input type=reset value=Cancel>
							</div><!--button-->
							
							</td>
						</tr>
					</table>
						</div><!--table-design-->
					</form>
				<!--end edit from here-->
			</div><!--wrapper-->
			<footer>
				<div class="footer" style="position:fixed">
				<p class="footerleft" style="padding-top:15px"> &copy; Find Lanka Incorporated. 2018 | All Rights Reserved.</p>
				<div class="footerright">
					<a href="#home">Link 1</a>
					<a href="#about">Link 2</a>
					<a href="#contact">Link 2</a>
				</div>
				<div style="clear: both;"></div>
				</div>
			</footer>
		</body>
	</html>
		

<?php
	if (null !==(filter_input(INPUT_POST, 'submit'))){
		//write the php code here to send the message to the db 
		//the info will be read by the admin by retrieving from the db
	}				
?>