<!DOCTYPE html>

	<html>
		<head>
			<title>Contact Support</title>
			<link rel = "stylesheet" type ="text/css" href = "main.css">
		</head>
		
		<body>
			<div class = "wrapper">
				<div class = "top-bar clearfix">
					<div class = "top-bar-links">
						<ul>
							<li><a href = "home.php">Home</a></li>
							<li><a href = "facilities.php">Facilities</a></li>
							<li><a href = "help.php">Help</a></li>
							<li><a href = "about us.php">About Us</a></li>
							<li><a href = "contact us.php">Contact Us</a></li>
							<li><a href = "login.php">Sing In</a></li>
						</ul>
					</div><!--top-bar-links-->
					<div class = "name">
						<b><i>TechGuru</b></i>
					</div><!--name-->
				</div><!--top-bar-->
				<header class = "clearfix">
					<div class = "topic">
							<b><u><h1>CONTACT SUPPORT</h1></b></u>
					</div><!--topic-->
				</header>
				<nav>
					<ul>
						<li><a href = "contact us.php">Contact Us</a></li>
						<li><a href = "contact support.php">Contact Support</a></li>
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
								Please write your note hear
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
				<footer>
					<div class = "copyright">
						Copyrights &copy; Domain Name. All Right Reserved
					</div><!--copyrights-->
				</footer>
			</div><!--wrapper-->
		</body>
	</html>
		
					