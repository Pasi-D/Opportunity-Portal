<?php 
	include_once '../DB/connector.php';

	$Opponame = $_POST['opponame'];
	$oppdesc = $_POST['oppodesc'];
	
	//Upload images to a cloud storage get the image url and add it to the database.

	$sql = "INSERT INTO opportunity (opportunity_name,opportunity_description) VALUES ('$Opponame','$oppdesc')";
	mysql_query($sql) or die("Query failed".mysql_error());

    echo "Opportunity Registered Successfully";
    header("refresh:3; url=./Admin_Panel.php");/*On success redirects to the admin panel after 3 seconds*/
 ?>