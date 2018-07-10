<?php
	session_start();
        
    if(!isset($_SESSION['user_id']))
    {
      header('location: ../login');
      exit;
    }
    include '../dbconf/dbh.php';
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Administration</title>
		<link rel="stylesheet" type="text/css" href="./main.css">
		<link rel="stylesheet" type="text/css" href="./style.css">
		<style>
			button {
				background-color: #acb4c1; 
				border: none;
				color: black;
				padding: 15px 0px;
				text-decoration: none;
				font-weight: bold;
				display: inline-block;
				font-size: 16px;
				margin: 10px 10px 10px 10px;
				border-radius: 12px;
				width: 140px;
				height: 140px;
			}
			.cen {
				margin: auto ;
				margin-top: 15px;
				width: 50%;
				padding: 10px;
				text-align: center;
				
			}
			img {
				height: 50px;
				width: 50px;
				display: block;
				margin-left: auto;
				margin-right: auto;
			}
		</style>
	</head>
	<body>

		<?php
			include 'userheader.php';
		?>  

		<!--the page contain the links to other admin functions Create, Update and Delete-->
      	<div class ="cen">
			<h1>User Authentication</h1>
			<a href="create.php"><button type="button"><img src="../homefiles/create.png">Create profile</button></a>
			<a href="delete.php"><button type="button"><img src="../homefiles/delete-user-512.png">Delete profile</button></a>
			<a href="edit.php"><button type="button"><img src="../homefiles/edit.png">Edit profile</button></a>
		</div>
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
