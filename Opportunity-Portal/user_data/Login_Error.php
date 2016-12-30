<?php 
	echo "<font color='blue'><b>You must Log in to the system first.</b></font>"."<br>";

	echo "<font color='blue'><b>Redirecting to the main menu.</b></font>";	
	header("refresh:3; url=../index.html"); //Redirects to the main page after 3 second delay
 ?>