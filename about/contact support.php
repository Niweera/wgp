<?php
    include 'header.php';
?> 
		<header>
			<div class="navbar">
				<a href="../" class="logo">FIND LANKA</a>
				<div class="rightnav">
					<a href="../">Home</a>
					<a href="./">About Us</a>
					<a class="active" href="./contact us.php">Contact Us</a>
					<a href="#services">Services</a>
					<a href="#help">Help</a>
					<a href="#login">Log in</a>
				</div>
			</div>
		</header>
			<div class = "wrapper">
				<nav>
					<ul>
						<li><a href = "contact us.php">Contact Us</a></li>
						<li><a class="active" href = "contact support.php">Contact Support</a></li>
					</ul>
				</nav>
					<form>
						<div class = "table-design">
						<table align=center border= 1>
						<tr>
							<body font color="black">
							<th colspan=2>Send Us Message</th>
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
		
					