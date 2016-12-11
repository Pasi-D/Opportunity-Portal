<?php	


	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db_name = "optest";

	mysql_connect($dbhost,$dbuser,$dbpass);
	mysql_select_db($db_name);
	
	//Get values passed from User_Login.html
	$usrname = $_POST['Username'];
	$pwd = $_POST['password'];

		//To prevent mysql injection
		$usrname = stripcslashes($usrname);
		$pwd = stripcslashes($pwd);
		$usrname = mysql_real_escape_string($usrname);
		$pwd = mysql_real_escape_string($pwd);

	if (empty($usrname)) {		
		exit();
	}else{
		

		$sql = "select * from user_data where user_name ='$usrname' and user_pwd ='$pwd' ";

		$result = mysql_query($sql) or die("Failed to query database".mysql_error());

		if ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
			$Uname = $row["1"];
			$_SESSION['UName'] = $Uname;
			
			header("Location: UserPanel.html");				
			exit;	
		}else{
			echo "Username or password is incorrect";
		}

		

	}

	
		
?>