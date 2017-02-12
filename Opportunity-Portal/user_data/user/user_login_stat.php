<?php	

	session_start();


	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "123";
	$db_name = "optest";

	$non=mysqli_connect($dbhost,$dbuser,$dbpass,$db_name) or die("Can't connect to server");
	
	//Get values passed from User_Login.html
	$usrname = $_POST['Username'];
	$pwd = $_POST['password'];

		/*To prevent mysql injection
		$usrname = stripcslashes($usrname);
		$pwd = stripcslashes($pwd);
		$usrname = mysql_real_escape_string($usrname);
		$pwd = mysql_real_escape_string($pwd);
		*/

	if (empty($usrname)) {		
		exit();
	}else{
		

		//Query to retrieve data from db
		$sql = "SELECT user_name FROM user_data WHERE user_name ='$usrname' AND user_pwd ='$pwd' ";

		$result = mysqli_query($non,$sql);

		while($row=mysqli_fetch_array($result)) {
		$name=$row["0"];
	}

		if (mysqli_affected_rows($non)==0) {
			echo "Username or password is incorrect";
				
		}else{
			$_SESSION['UName'] = $name;
			
			header("Location: UserPanel.php");				
			exit;
		}

		

	}

	
		
?>