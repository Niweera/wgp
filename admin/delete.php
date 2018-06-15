<?php
    include 'header.php';
?>

		<style>
			html, body {
				height: 100%;
				margin: 0;
			}
			.content {
				min-height: 100%;
			}
			.content-inside {
				padding: 0px;
				padding-bottom: 50px;
			}
			.stickyfooter {
				height: 50px;
				margin-top: -50px;
			}
			body {
				font: 16px Sans-Serif;
			}
			h1 {
				margin: 0 0 20px 0;
			}
			p {
				margin: 20px 0 0 0;
			}
			footer {
				background: #42A5F5;
				color: white;
				line-height: 50px;
				padding: 0 20px;
			}

			button {
				background-color: #333333; 
				border: none;
				color: white;
				padding: 15px 15px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				margin: 20px 20px 15px 20px;
			}
			.center {
				margin: auto ;
				margin-top: 15px;
				margin-bottom: 15px;
				width: 50%;
				padding: 10px 90px 10px 10px;
				text-align: center;
				border: 2px solid grey;
				background-color: #c6cbd3;
			}
			button:hover {
				background-color: #111111;
				color: white; 
			}
			.rest {
				margin: auto ;
				margin-top: 15px;
				width: 60%;
				padding: 10px 10px 10px 50px;
				text-align: center;
				background-color: #cbd1db;
			}
		</style>
		
		<div class="content">
			<div class="content-inside">
				<?php
					include 'userheader.php';
				?>
				<h1>Search & Delete</h1>
				<form method="post" action="delete.php" class="center">
					<p style="font-size:18px;display: inline">Enter username:</p> 
					<input type="text" name="uname"><br><br>
					<button type="submit" name="sub">Search Customer</button>
					<button type="submit" name="sub2">Search Technician</button><br><br>
				</form>

				<?php 
					if (null !==(filter_input(INPUT_POST, 'sub'))){
						$uname=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'uname'));
						$sql = "SELECT CustID, ContactNo, Email FROM Customer WHERE CustID='$uname';";
						$result=mysqli_query($conn,$sql);
						$queryResult=mysqli_num_rows($result);
						if ($queryResult > 0){
							echo "<br/><p style=\"font-size:18px;text-align:center\">User is available</p>";
							echo "<div class = \"rest\">";
							echo "<table style=\"width:100%\">";
							echo "<tr><th>Username</th><th>Contact No</th><th>Email</th></tr>";
							while ($row=mysqli_fetch_assoc($result)){
								$uname = $row['CustID'];
								$cont = $row['ContactNo'];
								$email = $row['Email'];
								echo "<tr><td>".$uname."</td><td>".$cont."</td><td>".$email."</td></tr>";    
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
							echo "<br/><p style=\"font-size:18px;text-align:center\">User is available</p><br/><br/>";
							echo "<div class = \"rest\">";
							echo "<table style=\"width:50%\">";
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

				<hr><br>

				<form action="delete.php" method="post" class="center">
					<p style="font-size:18px;display: inline">Enter username to delete: </p>
					<input type="text" name="dname"><br><br>
					<button type="submit" name="del">Delete Customer</button>
					<button type="submit" name="del2" onclick=myfunction()>Delete Technician</button>
				</form>

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

<?php
	if (null !==(filter_input(INPUT_POST, 'del'))){
        $dname=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'dname'));
        $sql1 = "DELETE FROM Customer WHERE CustID='$dname';";
        $result2 = mysqli_query($conn,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully deleted!\");</script>";
        }
    }

    if (null !==(filter_input(INPUT_POST, 'del2'))){
        $dname=mysqli_real_escape_string($conn,filter_input(INPUT_POST, 'dname'));
        $sql1 = "DELETE FROM Technician WHERE TechID='$dname';";
        $result2 = mysqli_query($conn,$sql1);
        if (!$result2){
            echo "<script>alert(\"Error Occured!\");</script>";
        }else {
            echo "<script>alert(\"Successfully deleted!\");</script>";
        }
    }
	$mysqli_close = mysqli_close($conn);
?>

		
