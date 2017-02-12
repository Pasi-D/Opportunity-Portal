<?php	

	$DBHOST = "localhost";
 	$DBUSER = "root";
 	$DBPASS = "123";
 	$DBNAME = "optest";
	//database connection info
	$connect = mysql_connect($DBHOST,$DBUSER,$DBPASS);
	$dbconnect = mysql_select_db($DBNAME); 

	if(!$connect){
		die("Connection Failed: " . mysql_error());
	}

	if (!$dbconnect) {
		die("Database Connection failed : " . mysql_error());
	}
?>