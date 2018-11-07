<?php
	session_start();
	unset($_SESSION["username"]);
	if(!isset($_SESSION['username']))
	{
		  header("location:index.php");
	}
?>
