<?php
    include 'header.php';
?>
 <header>
    <div class="navbar">
        <a href="../" class="logo">FIND LANKA</a>
        <div class="rightnav">
            <a href="./">Home</a>
            <a href="./users.php">User Administration</a>
            <a href="./customer.php">Customers</a>
            <a class="active" href="./technician.php">Technicians</a>
            <a href="#help">Reports</a>
            <a href="#login">Log out</a>
        </div>
    </div>
</header>
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
<!--the page views the technician database-->
	    <!--ALSO THIS CODE CAN BE SIMPLIFIED-->
		<h1 style="text-align:center;">Technician Database</h1>
		<form action="newtech.php" method="post" class="center">
			<input type="radio" name="radio" <?php if (isset($_POST['radio']) && ($_POST['radio'])=="car") {echo "checked";}?> value="car" >Carpenter
			<input type="radio" name="radio" <?php if (isset($_POST['radio']) && ($_POST['radio'])=="elec") {echo "checked";}?> value="elec">Electrician
			<input type="radio" name="radio" <?php if (isset($_POST['radio']) && ($_POST['radio'])=="it") {echo "checked";}?> value="it">IT Technician
			<input type="radio" name="radio" <?php if (isset($_POST['radio']) && ($_POST['radio'])=="all") {echo "checked";}?> value="all">All
			<input type="submit" name="Search" value="Search" style="width:80px;height:30px;margin-left:150px;"><br>
		</form>

		<?php
if (isset($_POST['Search'])) {
	 $occupation=$_POST['radio']; 
if(isset($occupation) && $occupation=="car")

{
	
	$sql = "SELECT TechID, FirstName, LastName, Email, ContactNo FROM technician WHERE Occupation='Carpenter';";
						$result=mysqli_query($conn,$sql);
						$queryResult=mysqli_num_rows($result);
						if ($queryResult > 0){
							echo "<table>";
							echo "<tr><th>TechID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>ContactNo</th></tr>";
							while ($row=mysqli_fetch_assoc($result)){
								$uname = $row['TechID'];
								$first = $row['FirstName'];
								$last = $row['LastName'];
								$email = $row['Email'];
								$cont = $row['ContactNo'];
								echo "<tr><td>".$uname."</td><td>".$first."</td><td>".$last."</td><td>".$email."</td><td>".$cont."</td></tr>";    
								}
						echo "</table>";}
	}
if(isset($occupation) && $occupation=="elec")
{
	$sql = "SELECT TechID, FirstName, LastName, Email, ContactNo FROM technician WHERE Occupation='Electrician';";
						$result=mysqli_query($conn,$sql);
						$queryResult=mysqli_num_rows($result);
						if ($queryResult > 0){
							echo "<table>";
							echo "<tr><th>TechID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>ContactNo</th></tr>";
							while ($row=mysqli_fetch_assoc($result)){
								$uname = $row['TechID'];
								$first = $row['FirstName'];
								$last = $row['LastName'];
								$email = $row['Email'];
								$cont = $row['ContactNo'];
								echo "<tr><td>".$uname."</td><td>".$first."</td><td>".$last."</td><td>".$email."</td><td>".$cont."</td></tr>";    
								}
						echo "</table>";}
	}
if(isset($occupation) && $occupation=="it")
{
	$sql = "SELECT TechID, FirstName, LastName, Email, ContactNo FROM technician WHERE Occupation='IT Technician';";
						$result=mysqli_query($conn,$sql);
						$queryResult=mysqli_num_rows($result);
						if ($queryResult > 0){
							echo "<table>";
							echo "<tr><th>TechID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>ContactNo</th></tr>";
							while ($row=mysqli_fetch_assoc($result)){
								$uname = $row['TechID'];
								$first = $row['FirstName'];
								$last = $row['LastName'];
								$email = $row['Email'];
								$cont = $row['ContactNo'];
								echo "<tr><td>".$uname."</td><td>".$first."</td><td>".$last."</td><td>".$email."</td><td>".$cont."</td></tr>";    
								}
						echo "</table>";}
	}
	
if(isset($occupation) && $occupation=="all")
{
	$sql = "SELECT TechID, FirstName, LastName, Email, ContactNo, Occupation FROM technician;";
						$result=mysqli_query($conn,$sql);
						$queryResult=mysqli_num_rows($result);
						if ($queryResult > 0){
							echo "<table>";
							echo "<tr><th>TechID</th><th>FirstName</th><th>LastName</th><th>Email</th><th>ContactNo</th><th>Occupation</th></tr>";
							while ($row=mysqli_fetch_assoc($result)){
								$uname = $row['TechID'];
								$first = $row['FirstName'];
								$last = $row['LastName'];
								$email = $row['Email'];
								$cont = $row['ContactNo'];
								$occ = $row['Occupation'];
								echo "<tr><td>".$uname."</td><td>".$first."</td><td>".$last."</td><td>".$email."</td><td>".$cont."</td><td>".$occ."</td></tr>";    
								}
						echo "</table>";}
	}
}				
		?>
		
			
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
