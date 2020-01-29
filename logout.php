<?php 
	
	session_start();

	if(isset($_SESSION['login']))
	{
		unset($_SESSION['login']);
		unset($_SESSION['currentUser']);
		unset($_SESSION['loginTime']);
	}

	header("location: ./home.php");

 ?>