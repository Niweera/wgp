<?php
    include '../dbconf/dbh.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Administration</title>
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

			button {
				background-color: #333333; 
				border: none;
				color: white;
				padding: 15px 0px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 10px 10px 10px 10px;
				border-radius:5px;
				width: 140px;
			}
			.center {
				margin: auto ;
				margin-top: 15px;
				width: 50%;
				padding: 10px;
				text-align: center;
				border: 2px solid grey;
				background-color: #c6cbd3;
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
							<a href="./">Home</a>
							<a href="./users.php">User Administration</a>
							<a class="active" href="./customer.php">Customers</a>
							<a href="./technician.php">Technicians</a>
							<a href="./reports.php">Reports</a>
							<a href="../logout">Log out</a>
						</div>
					</div>
				</header>

				<!--the page views the customer database-->
				<h1 style="text-align:center;">Customer Database</h1>
				<div class ="center" style="padding-right:0px">
					<form method="post" action="customer.php">
						<button type="submit" name="sub">View Customers</button>
						<button type="submit" name="sub2">View Messages</button><br>
					</form>
				</div>
				<br><br>
				<?php
					if (null !==(filter_input(INPUT_POST, 'sub'))){
						$sql = "SELECT CustID, FirstName, LastName, Email, ContactNo FROM Customer;";
						$result=mysqli_query($conn,$sql);
						$queryResult=mysqli_num_rows($result);
						if ($queryResult > 0){
							echo "<table>";
							echo "<tr><th>Username</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Contact No</th></tr>";
							while ($row=mysqli_fetch_assoc($result)){
								$uname = $row['CustID'];
								$first = $row['FirstName'];
								$last = $row['LastName'];
								$email = $row['Email'];
								$cont = $row['ContactNo'];
								echo "<tr><td>".$uname."</td><td>".$first."</td><td>".$last."</td><td>".$email."</td><td>".$cont."</td></tr>";    
								}
						echo "</table>";}
					}

					if (null !==(filter_input(INPUT_POST, 'sub2'))){
						$sql = "SELECT name, subject, email, note FROM custcontact;";
						$result=mysqli_query($conn,$sql);
						$queryResult=mysqli_num_rows($result);
						if ($queryResult > 0){
							echo "<table>";
							echo "<tr><th>Name</th><th>Subject</th><th>Email</th><th>Note</th></tr>";
							while ($row=mysqli_fetch_assoc($result)){
								$name = $row['name'];
								$subject = $row['subject'];
								$email = $row['email'];
								$note = $row['note'];
								echo "<tr><td>".$name."</td><td>".$subject."</td><td>".$email."</td><td>".$note."</td></tr>";    
								}
						echo "</table>";}				
					}			
				?>		
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