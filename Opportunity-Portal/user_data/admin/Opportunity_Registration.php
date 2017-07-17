<?php 
  require 'Cloudinary.php';
  require 'Uploader.php';
  require 'Api.php';

  \Cloudinary::config(array(
    "cloud_name" => "dmcxtajr1",
    "api_key" => "844387894658348",
    "api_secret" => "mIXUIyAY4Ot7vSyX6QqS1AmtmVA"
  ));

  include_once '../DB/connector.php';
  
  if (isset($_POST["submit"])) {
    $cloudUpload = \Cloudinary\Uploader::upload($_FILES["filename"]['tmp_name']);

    $Opponame = $_POST['opponame'];
    $oppdesc = $_POST['oppodesc'];
    $version = $cloudUpload[version];
    $public_id = $cloudUpload[public_id];
    //Edit this to customize the image preview 
    //$url = "http://res.cloudinary.com/dmcxtajr1/image/upload/w_400,h_400,c_crop,g_face,r_max/w_200/v".$version."/".$public_id.".jpg";
    $url = $cloudUpload[secure_url];
  
    //Upload images to a cloud storage get the image url and add it to the database.

    $sql = "INSERT INTO opportunity (opportunity_name,opportunity_description,img_url) VALUES ('$Opponame','$oppdesc','$url')";
    mysqli_query($con,$sql) or die("Query failed".mysql_error());

      
      header("refresh:3; url=./Admin_Panel.php");/*On success redirects to the admin panel after 3 seconds*/
    }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Opportunity Registration</title>

    <!-- CSS for page Background -->
    <link href="../../css/Opportunity_Registration.css" rel="stylesheet">

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

  <div class="body"></div>

  <div class="container-fluid" style="margin-top: 15px">
    <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="page-header">
                <div class="header" style="margin-top: 5px">
                  <div><b>OPPORTUNITY </b><span><b> REGISTRATION</b></span></div>
                </div>
              </div>

              <div class="container-fluid" style="margin-top: 100px">
                  <form enctype="multipart/form-data" method="POST" autocomplete="off">
                    <div class="form-group">
                      <label for="Opname">Opportunity Name</label>
                      <input type="text" class="form-control" id="Opname" name="opponame" placeholder="Opportunity Name">
                    </div>
                    <div class="form-group">
                      <label for="Opdesc">Description</label>
                      <!--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">-->
                      <textarea class="form-control" rows="3" id="Opdesc" name="oppodesc" placeholder="Add Description"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="inputImage">File input</label>
                      <!--<input type="file" name="filename" id="inputImage" accept="image/gif, image/jpeg, image/png">-->

                      <input type='file' name="filename" id="filename" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);"/>
                      <br>
                      <center><img id="opimage" src="#" alt="----Your Image Here----" /></center>

                      
                    </div>
                    
                    <button type="submit" class="btn btn-success" name="submit">Submit</button>
                  </form>  
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script>
        function readURL(input) {
              if (input.files && input.files[0]) {
                  var reader = new FileReader();

                  reader.onload = function (e) {
                      $('#opimage')
                          .attr('src', e.target.result)
                          .width(300)
                          .height(300);
                  };

                  reader.readAsDataURL(input.files[0]);
              }
        }
    </script>

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>