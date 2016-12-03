
<?php 
	

	include_once './DB/connector.php';
		

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$nic = $_POST['nic'];
	$gender = $_POST['sex'];
	$district = $_POST['district'];
	$email = $_POST['email'];
	//$emailnoti = $_POST['emailnoti'];
	$uname = $_POST['uname'];
	$upass = $_POST['upass'];
		
	

	$statement = "SELECT * FROM user_data WHERE nic='$uname'"; //Check if there is a similar username 
	$stmtres = mysql_query($statement);
	$count = mysql_num_rows($stmtres);

	if ($count == 0) {
		$sql = "INSERT INTO user_data (	first_name,last_name,nic,gender,district,email_address,user_name,user_pwd)  
    					VALUES ('$fname','$lname','$nic','$gender','$district','$email','$uname','$upass')"; 
    	mysql_query($sql) or die("Query failed".mysql_error());
    	echo "Registerd Successfully";
	}else{
    	echo "Username exist";
    }			
		

	
?>


