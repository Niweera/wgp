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

		<?php
			include 'userheader.php';
		?>  

		<!--the page contain the links to other admin functions Create, Update and Delete-->
      	<div class ="center">
			<h1>User Authentication</h1>
			<a href="create.php"><button type="button">Create profile</button></a><br><br>
			<a href="delete.php"><button type="button">Delete profile</button></a><br><br>
			<a href="edit.php"><button type="button">Edit profile</button></a>
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
