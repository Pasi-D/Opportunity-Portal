<?php 
	session_start();

	if (isset($_SESSION["UName"])) {
		unset($_SESSION["UName"]);		
	}
	header("Location: ./User_Login.html");
 ?>