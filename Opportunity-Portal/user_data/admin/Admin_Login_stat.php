<?php 
  session_start();

  
  //Admin Username = admin
  //Admin Password = admin
  
  
  $username=$_POST['inputUserName'];
  $password=$_POST['inputPassword'];    
    if($username=="admin" && $password=="admin") {     
      $_SESSION["Username"]=$username;
      header("Location:./Admin_Panel.html");
      exit;   
    } else { 
      echo "Wrong Username or password";
    }
  
 ?>