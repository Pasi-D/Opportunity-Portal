<?php 
	session_start();

	if (isset($_SESSION["UName"])) {
		unset($_SESSION["UName"]);		
	}
	header("Location: ../../index.html");
 ?>