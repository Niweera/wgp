<?php
    include 'header.php';
?>

<?php
    include 'userheader.php';
?>  
<style>
	button {
		background-color: #333333; 
		border: none;
		color: white;
		padding: 15px 80px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		margin: 20px 20px 15px 20px;
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
	button:hover {
		 background-color: #111111;
		color: white; }
</style>

      <div class ="center">
	<h1>User authentication</h1>
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
