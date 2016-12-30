
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

    <style>


      @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
      @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

        article, aside, figure, footer, header, hgroup, 
        menu, nav, section { display: block; }

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
        background-image: url(../../img/valley.jpg);
        background-size: 100% 100%;
        -webkit-filter: blur(1.5px);
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
                  <form name="opreg" action="Op_Reg_stat.php" method="POST" autocomplete="off">
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

                      <input type='file' name="filename" id="inputImage" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);"/>
                      <br>
                      <center><img id="opimage" src="#" alt="----Your Image Here----" /></center>

                      
                    </div>
                    
                    <button type="submit" class="btn btn-success">Submit</button>
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