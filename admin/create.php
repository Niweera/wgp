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
			footer {
				background: #42A5F5;
				color: white;
				line-height: 50px;
				padding: 0 20px;
			}
			.center {
				margin: auto ;
				margin-top: 15px;
				margin-bottom: 15px;
				width: 50%;
				padding: 10px 10px 10px 10px;
				text-align: center;
				border: 2px solid grey;
				background-color: #c6cbd3;
			}
		</style>
	</head>
	<body>
		<div class="content">
			<div class="content-inside" style="text-align:center">
				<?php
					include 'userheader.php';
				?>
				<!--this form should be broken into two forms, since it is bad practice to add two kinds of users in one form-->
				<form action="create.php" method="post">
					<div class="center" style="text-align:center">
						<h1 style="text-align:center;">Registration Details</h1>
						User Name: <input type="text" name="uname" value="" style="margin-left:50px" required/><br><br>
						First Name: <input type="text" name="fname" value="" style="margin-left:50px" required/><br><br>
						Last Name: <input type="text" name="lname" value="" style="margin-left:50px" required/><br><br>
						Contact Number: <input type="text" name="cont" value="" required/><br><br>
						Email: <input type="text" name="email" value="" style="margin-left:90px" required/><br><br>
						Password: <input type="password" name="pw" value="" style="margin-left:60px" required/><br><br>
						City: 
						<!--added php support to add infinite no of select options-->
						<?php 
							$result = $conn->query("select cityname from city");	
							echo "<select name=\"city\" style=\"margin-left:102px\">";
							echo '<option value="">Leave empty for a customer</option>';
							while ($row = $result->fetch_assoc()) {
								unset($id, $name);
								$name = $row['cityname']; 
								echo '<option value="'.$name.'">'.$name.'</option>'; 
							}
							echo "</select><br><br>";
						?>
						<!--<select name="city" style="margin-left:102px">
								<option value="">Leave empty for a customer</option>
								<option value="Colombo">Colombo</option>
								<option value="Kalutara">Kalutara</option>
								<option value="Galle">Galle</option>
								<option value="Matara">Matara</option>
								<option value="Kandy">Kandy</option>
								<option value="Kurunegala">Kurunegala</option>	
							</select><br><br>-->
						Occupation:
						<?php 
							$result = $conn->query("select typename from techtype");	
							echo "<select name=\"ocp\" style=\"margin-left:48px\">";
							echo '<option value="">Leave empty for a customer</option>';
							while ($row = $result->fetch_assoc()) {
								unset($id, $name);
								$name = $row['typename']; 
								echo '<option value="'.$name.'">'.$name.'</option>'; 
							}
							echo "</select><br><br>";
						?>
						<!--
						<select name="ocp" style="margin-left:48px">
							<option value="">Leave empty for a customer</option>
							<option value="IT Technician">IT Technician</option>
							<option value="Carpenter">Carpenter</option>
							<option value="Electrician">Electrician</option>
							<option value="Mechanic">Mechanic</option>
							<option value="Plumber">Plumber</option>
							<option value="Welder">Welder</option>	
						</select><br><br>-->
						Skill:
						<?php 
							$result = $conn->query("select SkID, SkillName from skill");	
							echo "<select name=\"skid\" style=\"margin-left:100px\">";
							echo '<option value="">Leave empty for a customer</option>';
							while ($row = $result->fetch_assoc()) {
								unset($id, $name);
								$id = $row['SkID'];
								$name = $row['SkillName']; 
								echo '<option value="'.$id.'">'.$name.'</option>'; 
							}
							echo "</select><br><br>";
						?>
						<!--
						<select name="skid" style="margin-left:100px">
							<option value="">Leave empty for a customer</option>
							<option value="Ittc001">PC Troubleshooting</option>
							<option value="Ittc002">Virus Removing</option>
							<option value="Elec001">Wiring</option>
							<option value="Plum001">Pipelining</option>
							<option value="Mech001">Tinkering</option>
							<option value="Carp001">Wood works</option>	
						</select><br><br>-->
						Rate: <input type="text" name="rate" placeholder="Leave empty for a customer" value="" style="margin-left:98px" required/><br><br>
						<button type="submit" name="submit" style="width:210px">Create Customer Account</button>
						<button type="submit" name="submit2" style="width:210px">Create Technician Account</button>
						
					</div>
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
	if (null !==(filter_input(INPUT_POST, 'submit'))){
        $uname = filter_input(INPUT_POST,'uname');
        $fname = filter_input(INPUT_POST,'fname');
        $lname = filter_input(INPUT_POST,'lname');
        $cont = filter_input(INPUT_POST,'cont');
        $email = filter_input(INPUT_POST,'email');
        $password = filter_input(INPUT_POST,'pw');
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO Customer (CustID,FirstName,LastName,Email,ContactNo,Password) VALUES ('$uname','$fname','$lname','$email','$cont','$hashed_password');";

        $mysqli_query = mysqli_query($conn, $sql);
       
        if (!$mysqli_query){
                    echo "<script>alert(\"Error Occured!\");</script>";
                }else {
                    $tvidr = mysqli_insert_id($conn); 
                    echo "<script>alert(\"Successfully registered!\");</script>";
                }
    }
    
    if (null !==(filter_input(INPUT_POST, 'submit2'))){
        $uname = filter_input(INPUT_POST,'uname');
        $fname = filter_input(INPUT_POST,'fname');
        $lname = filter_input(INPUT_POST,'lname');
        $cont = filter_input(INPUT_POST,'cont');
        $email = filter_input(INPUT_POST,'email');
        $password = filter_input(INPUT_POST,'pw');
        $ocp = filter_input(INPUT_POST,'ocp');
        $city = filter_input(INPUT_POST,'city');
		$skill = filter_input(INPUT_POST,'skid');
		$rate = filter_input(INPUT_POST,'rate');
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      
		$sql2 = "INSERT INTO Technician (TechID,FirstName,LastName,Email,ContactNo,Password,Occupation,City,Rate) VALUES ('$uname','$fname','$lname','$email','$cont','$hashed_password','$ocp','$city','$rate');";
		$sql2 .= "INSERT INTO techskill (TechID,SkID) VALUES ('$uname','$skill');";
		$mysqli_query = mysqli_multi_query($conn, $sql2);
     
		if (!$mysqli_query){
					echo "<script>alert(\"Error Occured!\");</script>";
				}else {
					echo "<script>alert(\"Successfully registered!\");</script>";
				}
  	}
    $mysqli_close = mysqli_close($conn);
?>   
