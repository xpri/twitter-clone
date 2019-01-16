<?php
	
	session_start();

	if(isset($_SESSION["username"])){
		header("location: modules/dashboard/");
	}
	else{
		header("location: modules/authentication/login.php");
	}

?>