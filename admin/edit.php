<?php
    include 'header.php';
?>

<?php
    include 'userheader.php';
?>
		<style>
			.center {
				margin: auto ;
				margin-top: 15px;
				margin-bottom: 15px;
				width: 50%;
				padding: 10px;
				text-align: center;
				border: 2px solid grey;
				background-color: #c6cbd3;
			}
		</style>
		

		<h1 style="text-align:center">Change User Details</h1>
		<div class ="center">
		<form method="post" action="edit.php">
			Enter username: <input type="text" name="uname"><br><br>
			<button type="submit" name="sub">Search Customer</button>
			<button type="submit" name="sub2">Search Technician</button><br>
		</form>
		</div>
		<?php
			if (null !==(filter_input(INPUT_POST, 'sub'))){
					$uname=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'uname'));
					$sql = "SELECT CustID, FirstName, LastName, ContactNo, Email FROM Customer WHERE CustID='$uname';";
					$result=mysqli_query($conn,$sql);
					$queryResult=mysqli_num_rows($result);
					if ($queryResult > 0){
						echo "<p style=\"font-size:18px;text-align:center\">User is available</p>";
						echo "<div class=\"rest\">";
						echo "<table style=\"width:100%\">";
						echo "<tr><th>Username</th><th>First Name</th><th>Last Name</th><th>Contact No</th><th>Email</th></tr>";
						while ($row=mysqli_fetch_assoc($result)){
							$uname = $row['CustID'];
							$fname = $row['FirstName'];
							$lname = $row['LastName'];
							$cont = $row['ContactNo'];
							$email = $row['Email'];
							echo "<tr><td>".$uname."</td><td>".$fname."</td><td>".$lname."</td><td>".$cont."</td><td>".$email."</td></tr>";    
							}
						echo "</table>";
						echo "</div>";
					}else {
						echo "<p style=\"text-align:center\">User not available</p>";
					}
				}

			if (null !==(filter_input(INPUT_POST, 'sub2'))){
				$uname=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'uname'));
				$sql = "SELECT TechID, FirstName, LastName, ContactNo, Email, Occupation, City FROM Technician WHERE TechID='$uname';";
				$result=mysqli_query($conn,$sql);
				$queryResult=mysqli_num_rows($result);
				if ($queryResult > 0){
					echo "<p style=\"font-size:18px;text-align:center\">User is available</p>";
					echo "<div class=\"rest\">";
					echo "<table style=\"width:100%\">";
					echo "<tr><th>Username</th><th>First Name</th><th>Last Name</th><th>Contact No</th><th>Email</th><th>Occupation</th><th>City</th></tr>";
					while ($row=mysqli_fetch_assoc($result)){
						$uname = $row['TechID'];
						$fname = $row['FirstName'];
						$lname = $row['LastName'];
						$cont = $row['ContactNo'];
						$email = $row['Email'];
						$ocp = $row['Occupation'];
						$city = $row['City'];
						echo "<tr><td>".$uname."</td><td>".$fname."</td><td>".$lname."</td><td>".$cont."</td><td>".$email."</td><td>".$ocp."</td><td>".$city."</td></tr>";    
					}
					echo "</table>";
					echo "</div>";
					
				}else {
					echo "<p style=\"text-align:center\">User not available</p>";
				}
			}
		?>

		<hr>
			
		<form action="edit.php" method="post">
			<div class="center" style="text-align:center">
				<h3 style="text-align:center;">Enter Details to change</h3>
				User Name: <input type="text" name="uname" value="" style="margin-left:50px" required/><br><br>
				First Name: <input type="text" name="fname" value="" style="margin-left:50px" required/><br><br>
				Last Name: <input type="text" name="lname" value="" style="margin-left:50px" required/><br><br>
				Contact Number: <input type="text" name="cont" value="" required/><br><br>
				Email: <input type="text" name="email" value="" style="margin-left:90px" required/><br><br>
				Password: <input type="password" name="pw" value="" style="margin-left:60px" required/><br><br>
				City: 
				<!--these kinds of select statements should be changed into php to auto populate-->
				<select name="city" style="margin-left:102px">
						<option value="">Leave empty for a customer</option>
						<option value="Colombo">Colombo</option>
						<option value="Kalutara">Kalutara</option>
						<option value="Galle">Galle</option>
						<option value="Matara">Matara</option>
						<option value="Kandy">Kandy</option>
						<option value="Kurunegala">Kurunegala</option>	
					</select><br><br>
				Occupation:
				<select name="ocp" style="margin-left:48px">
					<option value="">Leave empty for a customer</option>
					<option value="IT Technician">IT Technician</option>
					<option value="Carpenter">Carpenter</option>
					<option value="Electrician">Electrician</option>
					<option value="Mechanic">Mechanic</option>
					<option value="Plumber">Plumber</option>
					<option value="Welder">Welder</option>	
				</select><br><br>
				Skill:
				<select name="skid" style="margin-left:100px">
					<option value="">Leave empty for a customer</option>
					<option value="Ittc001">PC Troubleshooting</option>
					<option value="Ittc002">Virus Removing</option>
					<option value="Elec001">Wiring</option>
					<option value="Plum001">Pipelining</option>
					<option value="Mech001">Tinkering</option>
					<option value="Carp001">Wood works</option>	
				</select><br><br>
				
				<button type="submit" name="edit" style="width:210px">Change Customer Details</button>
				<button type="submit" name="edit2" style="width:210px">Change Technician Details</button>
				
			</div>
		</form>

		<footer>
		<div class="footer" style="position:relative">
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

<?php
	if (null !==(filter_input(INPUT_POST, 'edit'))){
		$uname = filter_input(INPUT_POST,'uname');
		$fname = filter_input(INPUT_POST,'fname');
		$lname = filter_input(INPUT_POST,'lname');
		$cont = filter_input(INPUT_POST,'cont');
		$email = filter_input(INPUT_POST,'email');
		
		$sql = "UPDATE customer SET FirstName='$fname', LastName='$lname',Email='$email',ContactNo='$cont' WHERE CustID='$uname';";

		$mysqli_query = mysqli_query($conn, $sql);
	
		if (!$mysqli_query){
					echo "<script>alert(\"Error Occured!\");</script>";
				}else {
					$tvidr = mysqli_insert_id($conn); 
					echo "<script>alert(\"Successfully updated!\");</script>";
				}
	}

	if (null !==(filter_input(INPUT_POST, 'edit2'))){
		$uname = filter_input(INPUT_POST,'uname');
		$fname = filter_input(INPUT_POST,'fname');
		$lname = filter_input(INPUT_POST,'lname');
		$cont = filter_input(INPUT_POST,'cont');
		$email = filter_input(INPUT_POST,'email');
		$ocp = filter_input(INPUT_POST,'ocp');
        $city = filter_input(INPUT_POST,'city');
        $skill = filter_input(INPUT_POST,'skid');

		
		$sql = "UPDATE Technician SET FirstName='$fname', LastName='$lname', Email='$email', ContactNo='$cont',Occupation='$ocp', City='$city'  WHERE TechID='$uname';";
		$sql .= "INSERT INTO techskill (TechID,SkID) VALUES ('$uname','$skill');";
		
		$mysqli_query = mysqli_multi_query($conn, $sql);
	
		if (!$mysqli_query){
					echo "<script>alert(\"Error Occured!\");</script>";
				}else {
					$tvidr = mysqli_insert_id($conn); 
					echo "<script>alert(\"Successfully updated!\");</script>";
				}
	}

	$mysqli_close = mysqli_close($conn);
?>
