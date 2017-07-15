<?php 
  session_start();

  
  //Admin Username = admin
  //Admin Password = admin
  include_once '../DB/connector.php';
  
  $username=$_POST['inputUserName'];
  $password=$_POST['inputPassword'];    
    
  
  $sql = "SELECT Admin_Id FROM administrators WHERE Admin_User_Name = '$username' AND Admin_Password='$password'";

  $result = mysqli_query($con, $sql);

  while($row=mysqli_fetch_array($result)) {
      $adminId=$row["0"];
  }

  if (mysqli_affected_rows($con)==0) {
      echo "Username or password is incorrect";        
  }else{
      $_SESSION['AdminId'] = $adminId;
      
      header("Location: Admin_Panel.php");        
      exit;
    }
  
 ?>