<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appease</title>

    
    <!-- Bootstrap -->
    <link href="mybootstrap/css/my.bootstrap.css" rel="stylesheet">

    <!-- Fonts from google -->
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>

    <script src="lib/jquery-1.11.1.min.js"></script>

    <script src="mybootstrap/js/bootstrap.min.js"></script>

    <style type="text/css">

      html, body{

        background-color: #0277bd;
        font-family: 'Roboto',sans-serif;
        margin: 0;
        padding: 0;
      }

      .center{
        text-align: center;
      }

      #mainHeader h1{
        color: white;
        font-family: 'Roboto', sans-serif;
        font-size: 5em;
      }

      #formArea{
        background-color: #b3e5fc;
        width: 100%;
        margin: 3em 0 3em 0;
        padding: 1em 1em 1em 1em;
        box-shadow: 5px 5px 10px #000;
        font-family: 'Open Sans',sans-serif;
        font-weight: 300;
      }

      .container-fluid{
        margin: 0em;
        padding: 0;
      }

      .marginTop{

        margin: 0.7em;
      }

      .navButton{
        width: 8em;
        height: 3em;
        background-color: #03a9f4;
        color: #fff;
        border: none;
        border-radius: 3px;
        box-shadow: 1px 1px 1px #000;
        font-size: 1.2em;
      }
      
      .floatRight{
        float: right;
      }

      .floatLeft{
        float: left;
      }


    	
    </style>
  </head>


  <body>

    <div class="container-fluid">

      <div id="mainHeader" class="center">

        <h1> The Survey </h1>
        <p  class="lead" style="color:white;">Your first step in helping million dreams</p>

      </div>

      <div id="formArea" style="width:100%">

        <div class="row" >
          <div class="col-md-10 col-md-offset-1">
            
            <form class="form-inline" role="form">

              <div class="input-group marginTop" style="width:100%">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" name="userName" placeholder="Enter your name" class="form-control"/>
              </div>

              <div class="input-group marginTop" style="width:100%">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                <input type="email" name="userMail" placeholder="Enter your email address" class="form-control"/>
              </div>

              <div class="input-group marginTop" style="width:100%">
                <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                <input type="text" name="userUgUniv" placeholder="Enter your Under Graduate University" class="form-control"/>
              </div>

              <div class="input-group marginTop" style="width:100%">
                <span class="input-group-addon"><span class="glyphicon glyphicon-cog"></span></span>
                <input type="text" name="userUgMajor" placeholder="Enter your Under Graduate Major/Department" class="form-control"/>
              </div>

              <div class="input-group marginTop" style="width:100%">
                <span class="input-group-addon "><span class="glyphicon glyphicon-star"></span></span>
                <input type="text" name="userUgGpa" placeholder="Enter your Under Graduate GPA" class="form-control"/>
              </div>

            </form>
          </div>
        </div>

      </div>

      <div class="buttonContainer">
        <button class="navButton floatRight">Next</button>
        <button class="navButton floatLeft">Previous</button>
      </div>

    </div>
    


  </body>



</html>
