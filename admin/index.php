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
    <title>Welcome <?php echo $_SESSION['user_id'];?></title>
    <link rel="stylesheet" type="text/css" href="./main.css">
    <link rel="stylesheet" type="text/css" href="./style.css">
  </head>
  <body>
    <div class="content">
      <div class="content-inside" style="text-align:center">
        <header>
          <div class="navbar">
              <a href="../" class="logo">FIND LANKA</a>
              <div class="rightnav">
                <a class="active" href="./">Home</a>
                <a href="./users.php">User Administration</a>
                <a href="./customer.php">Customers</a>
                <a href="./technician.php">Technicians</a>
                <a href="./reports.php">Reports</a>
                <a href="../logout">Log out</a>
              </div>
          </div>
        </header>
        <!--this is the admin's homepage this homepage should contain details of admin-->
        <div style="text-align:left">
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
          <p> this is some sample text!</p>
        </div>
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
