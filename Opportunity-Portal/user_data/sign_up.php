
<?php 
	

	include_once './DB/connector.php';
		

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$nic = $_POST['nic'];
	$gender = $_POST['sex'];	
	$email = $_POST['email'];	
	$uname = $_POST['uname'];
	$upass = $_POST['upass'];
	

	$statement = "SELECT * FROM users WHERE User_Name='$uname'"; //Check if there is similar user name
	$stmtres = mysqli_query($con,$statement);
	$count = mysqli_num_rows($stmtres);

	if ($count == 0) {
		$Firstsql = "INSERT INTO users (User_Name, User_Pwd)
						VALUES ('$uname', '$upass')";
		
    	mysqli_query($con,$Firstsql) or die("First Query failed".mysqli_error($con));

    	//Get the user_id from users table
		$UIDSql = "SELECT MAX(User_Id) FROM users";

		$SearchUIDQuery = mysqli_query($con, $UIDSql);
		if($SearchUIDQuery == null){
			$UID = 1;
		}else{
			while($row=mysqli_fetch_array($SearchUIDQuery)) {
				$UID=$row["0"];
			}
		}		
		//Got the users_id

		$Secondsql = "INSERT INTO user_data (User_id,first_name,last_name,nic,gender,email_address) 		  VALUES ($UID,'$fname','$lname','$nic','$gender','$email')"; 

		mysqli_query($con,$Secondsql) or die("Second Query failed".mysqli_error($con));
				
		//All data inserted

    	echo "<font color='green'><b>Registerd Successfully</b></font>";
    	header("Refresh:2;url=./Admin_Panel.php"); //Displays the empty page and direct to Reg_Form in 2 Seconds

	}else{
    	echo "Username exist";
    }			
		

	
?>


