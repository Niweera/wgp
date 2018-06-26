<?php
    include 'header.php';
?>
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

</style>
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
            <a href="#help">Reports</a>
            <a href="#login">Log out</a>
        </div>
    </div>
</header>

<!--the page views the customer database-->
		<h1 style="text-align:center;">Customer Database</h1>
		<?php
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