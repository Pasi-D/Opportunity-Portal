<?php 
  
  if (isset($_POST["submit"])) {
    Include("../DB/connector.php");

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $nic = $_POST["nic"];
    $gender = $_POST["sex"];
    $district = $_POST["district"];
    $email = $_POST["email"];

    $user_name = $_POST["user_name"];

    $upquery = "UPDATE user_data SET first_name='$fname', last_name='$lname', nic='$nic', gender='$gender', district='$district', email_address='$email' WHERE user_name='$user_name'";

    $upresult = mysql_query($upquery);

    if (!upresult) {
      $err = mysql_error();
      print($err);
      exit();
    }

    echo "<font color='blue'><b>Information has been updated.</b></font>";
    echo "<br>";
    echo "<a href='./UserPanel.php'>back</a>";

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
    <title>Edit my details</title>

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
          background-image: url(../../img/Reg.jpg);
          background-size: cover;
          -webkit-filter: blur(2px);
        
        }      

      .header{
          position: relative;
          /*top: calc(50% - 250px);
          left: calc(50% - 167px);*/

  
      }

      .header div{
        float: left;
        color: #000;
        font-family: 'Exo', sans-serif;
        font-size: 50px;
        font-weight: 400;
      }

      .header div span{
        color: #F29E20 !important;
      }



        /* Popover */
        .popover {
            border: 2px dotted red;
        }
        /* Popover Header */
        .popover-title {
            background-color: #73AD21; 
            color: #000; 
            font-size: 28px;
            text-align:center;
        }
        /* Popover Body */
        .popover-content {
            background-color: coral;
            color: #FFFFFF;
            padding: 25px;
        }
        /* Popover Arrow */
        .arrow {
            border-right-color: red !important;
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

    <?php 
        if (isset($_GET["uname"])) {
          
          include("../DB/connector.php");

          $UName = $_GET["uname"];

          
          $query="SELECT first_name, last_name, nic, gender, district, email_address FROM user_data WHERE user_name = '$UName'";

          $result = mysql_query($query);
          if (!$result) {
            print mysql_error();
            exit();
          }

          while ($row = mysql_fetch_array($result)) {
            $first_name = $row["first_name"];
            $last_name = $row["last_name"];
            $nic = $row["nic"];
            $gender = $row["gender"];
            $district = $row["district"];
            $email_address = $row["email_address"];

          }

        }

    ?>
    

     <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default">
              <div class="panel-body" style="">
                <div class="page-header">
                    <div class="header" style="margin-top: 5px">
                      <div><b>EDIT</b><span><b> DETAILS</b></span></div>
                    </div>

                   
                        <!-- Error message will be shown here -->
                  
                  
                </div>    
                
                  <form class="form-horizontal" name="edit_ulvl" style="margin-top: 100px" action="" method="POST" autocomplete="off">
                      <div class="form-group">
                        <label for="inputFN" class="col-sm-2 control-label" class="inform">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputFName" maxlength="20" value="<?php echo $first_name; ?>" name="fname" required class="inputfield">                                                   
                        </div>
                        
                      </div>
                       <div class="form-group">
                        <label for="inputLN" class="col-sm-2 control-label" class="inform">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputLName" maxlength="20" value="<?php echo $last_name; ?>" name="lname" required class="inputfield">
                        </div>
                        
                      </div>
                      <div class="form-group">
                        <label for="inputNIC" class="col-sm-2 control-label" class="inform">NIC</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputtxtNIC" maxlength="10" name="nic" value="<?php echo $nic ?>" required class="inputfield">
                        </div>
                        
                      </div>
                      <div class="form-group">
                        <label for="inputGender" class="col-sm-2 control-label">Gender</label>
                        <label class="radio-inline" style="margin-left: 15px">
                          <input type="radio" value="Male" name="sex" <?php if($gender == "Male") echo "CHECKED"; ?>> Male
                        </label>
                        <label class="radio-inline">
                          <input type="radio" value="Female" name="sex" <?php if($gender == "Female") echo "CHECKED"; ?>> Female
                        </label>                          
                      </div>
                      <div class="form-group">
                        <label for="inputDistrict" class="col-sm-2 control-label">Select District</label>
                        <select size="1" name="district" id="" class="col-sm-6" style="margin-top: 3px; margin-left: 18px">
                                <option value="Ampara" <?php if($district == "Ampara") echo "SELECTED"; ?>>Ampara</option>
                                <option value="Anuradhapura" <?php if($district == "Anuradhapura") echo "SELECTED"; ?>>Anuradhapura</option>
                                <option value="Badulla" <?php if($district == "Badulla") echo "SELECTED"; ?>>Badulla</option>
                                <option value="Batticaloa" <?php if($district == "Batticaloa") echo "SELECTED"; ?>>Batticaloa</option>
                                <option value="Colombo" <?php if($district == "Colombo") echo "SELECTED"; ?>>Colombo</option>
                                <option value="Galle" <?php if($district == "Galle") echo "SELECTED"; ?>>Galle</option>
                                <option value="Gampaha" <?php if($district == "Gampaha") echo "SELECTED"; ?>>Gampaha</option>
                                <option value="Hambantota" <?php if($district == "Hambantota") echo "SELECTED"; ?>>Hambantota</option>
                                <option value="Jaffna" <?php if($district == "Jaffna") echo "SELECTED"; ?>>Jaffna</option>
                                <option value="Kalutara" <?php if($district == "Kalutara") echo "SELECTED"; ?>>Kalutara</option>
                                <option value="Kandy" <?php if($district == "Kandy") echo "SELECTED"; ?>>Kandy</option>
                                <option value="Kegalle" <?php if($district == "Kegalle") echo "SELECTED"; ?>>Kegalle</option>
                                <option value="Kilinochchi" <?php if($district == "Kilinochchi") echo "SELECTED"; ?>>Kilinochchi</option>
                                <option value="Kurunegala" <?php if($district == "Kurunegala") echo "SELECTED"; ?>>Kurunegala</option>
                                <option value="Mannar" <?php if($district == "Mannar") echo "SELECTED"; ?>>Mannar</option>
                                <option value="Matale" <?php if($district == "Matale") echo "SELECTED"; ?>>Matale</option>
                                <option value="Matara" <?php if($district == "Matara") echo "SELECTED"; ?>>Matara</option>
                                <option value="Monragala" <?php if($district == "Monragala") echo "SELECTED"; ?>>Monragala</option>
                                <option value="Mullaitivu" <?php if($district == "Mullaitivu") echo "SELECTED"; ?>>Mullaitivu</option>
                                <option value="Nuwara Eliya" <?php if($district == "Nuwara Eliya") echo "SELECTED"; ?>>Nuwara Eliya</option>
                                <option value="Polonnaruwa" <?php if($district == "Polonnaruwa") echo "SELECTED"; ?>>Polonnaruwa</option>
                                <option value="Puttalam" <?php if($district == "Puttalam") echo "SELECTED"; ?>>Puttalam</option>
                                <option value="Ratnapura" <?php if($district == "Ratnapura") echo "SELECTED"; ?>>Ratnapura</option>
                                <option value="Trincomalee" <?php if($district == "Trincomalee") echo "SELECTED"; ?>>Trincomalee</option>
                                <option value="Vavuniya" <?php if($district == "Vavuniya") echo "SELECTED"; ?>>Vavuniya</option>
                      </select>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label" class="inform">Email Address</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" value="<?php echo $email_address; ?>" name="email" required class="inputfield">
                        </div>                        
                      </div>

                      <!--<div class="form-group" style="margin-left: 150px">
                        <div class="checkbox" >
                          <label>
                            <input type="checkbox" value="Y" name="emailnoti">
                            Send Email Notifications
                          </label>
                        </div>
                      </div>-->  
                      <input type="hidden" name="user_name" value="<?php echo $UName; ?>">

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            
                              <button type="submit" id="reg-btn" class="btn btn-success" name="submit">Submit</button>                           
                              <button type="reset" name="resetbut" class="btn btn-danger">Cancel</button>

                              <button type="button" class="btn btn-link" onclick="window.location.href='./UserPanel.php'">Back</button>

                            
                        </div>

                      </div>
                  </form>
  
              </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

    <!-- Popup Modal Files -->

    <div class="container">      

      <div class="modal fade" id="fillforms" role="dialog">
        <div class="modal-dialog">        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><b>Fill the missing sections</b></h5>
            </div>
            <div class="modal-body">
              <p>You missed a few things</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div> 
        </div>         
      </div>

      <div class="modal fade" id="invalidEmail" role="dialog">
        <div class="modal-dialog">        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h5 class="modal-title"><b>Invalid Email</b></h5>
            </div>
            <div class="modal-body">
              <p>Please recheck your Email Address</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div> 
        </div>         
      </div>

    </div>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
      <script>
      //Incomplete side show script
      $('input').blur(function(){
          if( !$(this).val() ) {
              $(this).popover({
                  title: 'Warning!',
                  content: 'Value can not be empty',
                  placement: 'right'
              }).popover('show');
          } else {
              $(this).popover('destroy');
          }
      })
      </script>
  </body>
</html>