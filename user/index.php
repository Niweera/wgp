<?php
    session_start();
		
	if(!isset($_SESSION))
	{
		header('location: ../login');
		exit;
	}
    
?>


