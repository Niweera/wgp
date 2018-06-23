<?php
    include 'header.php';
?>
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
<!--the page views the customer database-->
		<h1 style="text-align:center;">Customer Database</h1>
		<?php
		$sql = "SELECT CustID, FirstName, LastName, Email, ContactNo FROM Customer;";
						$result=mysqli_query($conn,$sql);
						$queryResult=mysqli_num_rows($result);
						if ($queryResult > 0){
							echo "<table>";
							echo "<tr><th>Username</th><th>FirstName</th><th>LastName</th><th>Email</th><th>ContactNo</th></tr>";
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