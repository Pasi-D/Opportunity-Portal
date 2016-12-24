<?php 
  session_start();
  if (!isset($_SESSION["UName"])) {
    header("Location: ../Error.html");
    exit();
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Login Panel</title>

    <style>
      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
      @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

    .body{
        position: fixed; 
        overflow-y: scroll;
        width: 100%;
        top: -20px;
        left: -20px;
        right: -40px;
        bottom: -40px;
        width: auto;
        height: auto;
        background-image: url(../../img/River.jpg);
        background-size: cover;
        -webkit-filter: blur(1.1px);
      
      } 

    .header {  
        color: white;
        text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;  
        color: #000;
        font-family: 'Exo', sans-serif;
        font-size: 60px;
        font-weight: 400;
      }

    .subheader{
        color: white;
        text-shadow: 1px 1px 2px white, 0 0 25px blue, 0 0 5px darkblue;  
        color: #000;
        font-family: 'Exo', sans-serif;
        font-size: 30px;
        font-weight: 400;

    }

    .edits{
      color: #0557cd;
      text-shadow: 1px 1px 1px #00054d, 0 0 25px #000, 1px 1px 5px #00054d;
      color: #00054d;
      font-family: 'Exo', sans-serif;
      font-size: 32px;
      font-weight: 400;
    }

    
    </style>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="body"></div>

    <div style="align-items: center; position: relative; top: 100px">
      <h6 style="text-align: center;" class="subheader">
        <?php 
            echo "Hello ".$_SESSION['UName'];
         ?>
      </h6>
    </div>
    
    
    <div style="align-items: center; position: relative; top: 105px">
      <h1 style="text-align: center;" class="header">
        <span style="letter-spacing:0.04em;">
           <span style="color: #FFFFFF;">Welcome to the Opportunity Portal</span>           
        </span>
      </h1>
    </div>

    <div style="text-align: center; position: relative; top: 220px; ">

      <div class="btn-group btn-group-lg">
        <button class="btn btn-default" onclick="window.location.href='../Opportunity_details.php'">
          <span class="glyphicon glyphicon-th" aria-hidden="true" style="font-size: 2em; letter-spacing: 0.05cm"></span>
          <p>View Opportunities</p>
        </button>
      </div>

      <br>
      <br>
      <h6 class="edits">
        <?php 
          echo "<a href='./edit_user_details.php?uname=".$_SESSION['UName']."'>Edit My Details</a>";
         ?>
      </h6>

    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>