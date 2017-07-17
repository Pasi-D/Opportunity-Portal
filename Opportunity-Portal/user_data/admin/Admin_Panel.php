<?php 
  session_start();
  if (!isset($_SESSION["AdminId"])) {
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
    <title>Welcome to Admin Panel</title>

    <!-- CSS for page Background -->
    <link href="../../css/Admin_Panel.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body oncontextmenu="return false">
  
  

   
      <div class="jumbotron" id="jumbotron-one">
        <div class="container">
          <center><div class="header">Welcome to the Administration Panel</div></center>
        </div>
      </div>   
    <div class="container" id="container-one">

      <center><br>
          <div class="row">                    
              <div class="btn-group btn-group-lg" role="group" aria-label="...">
                <button type="button" class="btn btn-default" id="adduserbtn" style="width: 16em;height: 5em" onclick="window.location.href='../Reg_Form.html'">
                  <span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size: 2em"></span> 
                  <p class="btntext" "><b>ADD USER</b></p>
                </button>
              </div>            
          </div>
          <br>
          <div class="row">        
              <div class="btn-group btn-group-lg" role="group" aria-label="...">
                <button type="button" class="btn btn-default" style="width: 16em;height: 5em" onclick="window.location.href='./user_details.php'">
                  <span class="glyphicon glyphicon-list-alt" aria-hidden="true" style="font-size: 2em"></span>
                  <p class="btntext"><b>VIEW USERS</b></p>
                </button>
              </div> 
          </div>
          <br>
          <div class="row">
            <div class="btn-group btn-group-lg" role="group" aria-label="...">
              <button type="button" class="btn btn-default" style="width: 16em;height: 5em" onclick="window.location.href='./Opportunity_Registration.php'">
                <span class="glyphicon glyphicon-file" aria-hidden="true" style="font-size: 2em"></span>
                <p class="btntext"><b>ADD OPPORTUNITIES</b></p>
              </button>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="btn-group btn-group-lg" role="group" aria-label="...">
              <button type="button" class="btn btn-default" style="width: 16em;height: 5em" onclick="window.location.href='../Opportunity_details.php'">
                <span class="glyphicon glyphicon-list" aria-hidden="true" style="font-size: 2em"></span>
                <p class="btntext"><b>VIEW OPPURTUNITIES</b></p>
              </button>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="btn-group btn-group-lg" role="group" aria-label="...">
              <button type="button" class="btn btn-default" style="width: 16em;height: 5em" onclick="window.location.href=''">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true" style="font-size: 2em"></span>
                <p class="btntext"><b>EDIT OPPURTUNITIES</b></p>
              </button>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="btn-group btn-group-lg" role="group" aria-label="...">
              <button type="button" class="btn btn-default" style="width: 16em;height: 5em" onclick="window.location.href=''">
                <span class="glyphicon glyphicon-trash" aria-hidden="true" style="font-size: 2em"></span>
                <p class="btntext"><b>DELETE OPPURTUNITIES</b></p>
              </button>
            </div>
          </div> 
          <!-- Add Button to update password
          <br>
          <div class="row">
            <div class="btn-group btn-group-lg" role="group" aria-label="...">
              <button type="button" class="btn btn-default" style="width: 16em;height: 5em" onclick="window.location.href=''">
                <span class="glyphicon glyphicon-cog" aria-hidden="true" style="font-size: 2em"></span>
                <p class="btntext"><b>UPDATE PASSWORD</b></p>
              </button>
            </div>
          </div>
          -->
          <br>
          <div class="row">
            <div class="btn-group btn-group-lg" role="group" aria-label="...">
              <button type="button" class="btn btn-default" style="width: 16em;height: 5em" onclick="window.location.href='./Logoff.php'">
                <span class="glyphicon glyphicon-off" aria-hidden="true" style="font-size: 2em"></span>
                <p class="btntext"><b>LOGOFF</b></p>
              </button>
            </div>
          </div>
          <br>
          <br>
          <br>

      </center>

      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>