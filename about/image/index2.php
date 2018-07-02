<?php
    include '../dbconf/dbh.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Find Lanka</title>
		<link rel="stylesheet" type="text/css" href="../about/main.css">
		<link rel="stylesheet" type="text/css" href="../about/style.css">
		<link rel="stylesheet" type="text/css" href="./styleregister.css">
		<style>
			
			form {
				float: none;
				}
			form button{
					font-size: 20px;
					margin-bottom: 10px;
				}
			.one{
				margin-left: 20px;
				margin-top: 10px
			}
			.size{
				width: 400px;
				//height: 1000px;
			}
			.btn {
				padding: 10px;
				font-size: 15px;
				color: white;
				background: #5F9EA0;
				border: none;
				border-radius: 5px;
			}	
			.form{
				border-style: solid;
				border-width: 25px;
				border-color: 	#008B8B;
			}
			.p{

				font-family: Times New Roman;
				font-size: 30px;
				color: grey;
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
							<a  href="../">Home</a>
							<div class="dropdown">
								<button class="dropbtn"><a href="../about">About Us</a> 
								</button>
								<div class="dropdown-content">
									<a href="../about/company profile.php">Company Profile</a>
									<a href="../about/our story.php">Our Story</a>
									<a href="../about/leadership & management.php">Leadership & Management</a>
								</div>
							</div> 
							<div class="dropdown">
								<button class="dropbtn"><a href="./about/contact us.php">Contact Us</a> 
								</button>
								<div class="dropdown-content">
									<a href="../about/contact support.php">Contact Support</a>
								</div>
							</div> 
							<a href="../services">Services</a>
							<a href="../help">Help</a>
							<a  href="../login">Log in</a>
							<a class="active" href="../login">Sign Up</a>
						</div>
					</div>
				</header>



				<div class="base">
					<div class="sub_base" style="height:115%">
						<div class="header">
							<h1>Sign Up</h1>
							<hr>
						</div><!--header-->
						<div class="content">
							<form action="./index.php" method="post">
								<label for="user_name"><b>User Name</b></label><br>
								<input type="text" name="custid" placeholder="Enter User Name.." required autofocus><br>
								<label for="first_name"><b>First Name</b></label><br>
								<input type="text" name="fname" placeholder="Enter First Name.." required><br>
								<label for="last_name"><b>Last Name</b></label><br>
								<input type="text" name="lname" placeholder="Enter Last Name.." required><br>
								<label for="email"><b>Email Address</b></label><br>
								<input type="email" name="email" placeholder="Enter your email address.." required><br>
								<label for="contact_no"><b>Contact No</b></label><br>
								<input type="text" name="contact" placeholder="Enter your contact number.." required><br>
								<label for="password"><b>Password</b></label><br>
								<input type="password" name="password" placeholder="Enter password.." required><br>
								<label for="confirm"><b>Confirm Password</b></label><br>
								<input type="password" name="confirm" placeholder="Confirm your password.." required><br><br>
								<button type="submit" name="submit" class="signup">Sign Up</button>
							</form>
						</div><!--content-->
					</div><!--sub_base-->	
				</div><!--base-->
			</div>
		</div>	 
		<footer class="stickyfooter">
			<p class="footerleft" style="margin-top:0;color:white;margin-bottom:0px"> &copy; Find Lanka Incorporated. 2018 | All Rights Reserved.</p>
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
        $uname = filter_input(INPUT_POST,'custid');
        $fname = filter_input(INPUT_POST,'fname');
        $lname = filter_input(INPUT_POST,'lname');
        $cont = filter_input(INPUT_POST,'contact');
        $email = filter_input(INPUT_POST,'email');
        $password = filter_input(INPUT_POST,'password');
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



	$mysqli_close = mysqli_close($conn);

?>