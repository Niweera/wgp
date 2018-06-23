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
					<a href="#services">Services</a>
					<a href="#help">Help</a>
					<a href="#login">Log in</a>
				</div>
			</div>
		</header>
			<div class = "wrapper">
				<!--edit from here-->
					<form>
						<div class = "table-design">
						<table align=center border= 1>
						<tr>
							<body font color="black">
							<th colspan=2>Send Us a Message</th>
						</tr>
						<tr>
							<td>Your Name  *</td>
							<td><input type="text" size="100" maxlength="40" placeholder = "Name"></td>
						</tr>
						<tr>
							<td>Email Address *</td>
							<td><input type="email" name = "useemail" placeholder = "Email"></td>
						</tr>
						<tr>
							<td>Subject  *</td>
							<td>
								<select>
									<option></option>
									<option>Home Solution</option>
									<option>Business Solution</option>
									<option>Enterprise Solution</option>
									<option>Other Services</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>If Other Services</td>
							<td>
								<select>
									<option></option>
									<option>Optimization</option>
									<option>Diagnosis & Repair</option>
									<option>Setup & Install</option>
									<option>Virus Removal</option>
									<option>Usability Training</option>
									<option>Networking</option>
									<option>Manage services</option>
									<option>Other Services</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><Note</td>
							<td>
								<textarea name="message" rows="10" cols="50">
								Please write your note here
								</textarea>
							</td>
						</tr>
						<tr>
							<td colspan=2 align="center">
							<form action = "admin page.php" method = "post">
							<div class = "button">
								<input type=submit value=submit>
								<input type=reset value=cancel>
							</div><!--button-->
							</form>
							</td>
						</tr>
					</table>
						</div><!--table-design-->
					</form>
				<!--end edit from here-->
			</div><!--wrapper-->
			<footer>
				<div class="footer" style="position:fixed">
				<p class="footerleft"> &copy; Find Lanka Incorporated. 2018 | All Rights Reserved.</p>
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
		
					
