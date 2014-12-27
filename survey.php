<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Appease</title>


  <!-- Fonts from google -->
  <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>



  <!--JQuery Plugin-->
  <script src="lib/jquery-1.11.1.min.js"></script>

  <!--jquery ui for auto select-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

  <!-- Bootstrap -->
  <link href="mybootstrap/css/my.bootstrap.css" rel="stylesheet">
  <script src="mybootstrap/js/bootstrap.min.js"></script>

  <!--select2 css aand js-->
  <link rel="stylesheet" type="text/css" href="mycss/select2.css">
  <script src="myjs/select2.min.js"></script>




  <!--All JavaScript event Handling on the page ready-->
  <script type="text/javascript" src="myjs/onreadyjs.js"></script>




  <style type="text/css">

  html, body{

    background-color: #DDD;

    margin: 0;
    padding: 0;


  }

  #mainHeader{

    color:#333; 
    font-family: 'Yanone Kaffeesatz', sans-serif;
    font-size: 7em;
    margin-top: 0.1em;
  }

  .center{

    text-align: center;
  }

  .marginTop{

    margin-top: 1em;
  }

  .rightAlign{

    float: right;
  }

  .container-fluid{
    margin: 0;
    padding: 0;
  }

  .carouselContainer{
    background-color: #fff;
    padding: 1em 0 1em 0;
    width: 100%;
    height:20em;
  }

  .buttons{

    margin: 1em 0.6em;
    width: 6em;

  }

  .progress{
    width: 100%;
    margin-right: 1em;
  }

  .row{
    padding: 0;
    margin: 0;
  }

  #userUgGpaGroup{
    margin-bottom: 1em;
  }

  #prevButton{
    visibility: hidden;
  }


  </style>
</head>

<body>

 <div class="container-fluid">

  <div class="row">

    <div class="col-md-6 col-md-offset-3">

      <div id="mainHeader" class="center"> Survey </div>

      <div class="lead center">Your first step to change a million lives</div> 

    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-md-offset-3">

      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
      </div>
    </div>          
  </div>


  <div class="carousel slide" id="myCarousel">

    <div class="carousel-inner">
      <div class="item">
        <div class="container-fluid carouselContainer">

          <div class="row">


            <div class="col-md-6 col-md-offset-3">

              <form id="form1" method="post">

                <div class="form-group" id="userNameGroup">
                  <div class="input-group marginTop" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" id="userName" name="userName" placeholder="Enter your name" class="form-control" />
                  </div>
                </div>                      

                <div class="form-group" id="userMailGroup">
                  <div class="input-group marginTop" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>

                    <input type="email" id="userMail" name="userMail" placeholder="Enter your email address" class="form-control" />
                  </div>
                </div>

                <div class="form-group" id="userUgUnivGroup">
                  <div class="input-group marginTop" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                    <input id="e1" class="form-control" style="width:100%; padding:0; border-radius: 0 4px 4px 0;"/>
                    <!--<input type="text" id="userUgUniv" name="userUgUniv" placeholder="Enter your Under Graduate University" class="form-control" />-->
                  </div>
                </div>

                <div class="form-group" id="userUgMajorGroup">
                  <div class="input-group marginTop">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-cog"></span></span>
                    <input type="text" id="userUgMajor" name="userUgMajor" placeholder="Enter your Under Graduate Major/Department" class="form-control" />
                  </div>
                </div>

                <div class="form-group" id="userUgGpaGroup">
                  <div class="input-group marginTop" >
                    <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                    <input type="number" step="0.01" id="userUgGpa" name="userUgGpa" placeholder="Enter your Under Graduate GPA" class="form-control"  />
                  </div>
                </div>


              </form>
            </div>


          </div>

        </div>
      </div>

      <div class="item active">

        <div class="container carouselContainer">

          <div class="row">
            <div class="col-md-6 col-md-offset-3">
             <form id="form2" method="post">

              <div class="form-group" id="GreGroup">
                <div class="input-group marginTop" >
                  <span class="input-group-addon"><span style="padding: 0 0.2em 0 0.2em;">G</span></span>
                  <input type="number" id="gre" name="gre" placeholder="Enter your GRE Score" class="form-control" />
                </div>
              </div>

              <div class="form-group" id="toeflGroup">
                <div class="input-group marginTop" >
                  <span class="input-group-addon"><span style="padding: 0 0.2em 0 0.2em;">T</span></span>
                  <input type="number" id="toefl" name="toefl" placeholder="Enter your TOEFL Score" class="form-control" />
                </div>
              </div>

              <div class="form-group" id="userPgUnivGroup">
                <div class="input-group marginTop" >
                  <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                  <input id="pgUniv" class="form-control" style="width:100%; padding:0; border-radius: 0 4px 4px 0;"/>
                </div>
              </div>

              <div class="form-group" id="gradDegreeUnivGroup">
                <div class="input-group marginTop" >
                  <span class="input-group-addon"><span class="glyphicon glyphicon-file"></span></span>
                  <select id="gradDegree" class="form-control" style="width:100%; padding:0; border-radius: 0 4px 4px 0;">
                    <option>Choose your Graduate degree</option>
                    <option>MS</option>
                    <option>M. Eng</option>
                    <option>PhD</option>
                  </select>
                </div>
              </div>

              <div class="form-group" id="userPgMajorGroup">
                <div class="input-group marginTop">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-cog"></span></span>
                  <input type="text" id="userPgMajor" name="userPgMajor" placeholder="Enter your Graduate Major/Department" class="form-control" />
                </div>
              </div>



            </form>
          </div>
        </div>
      </div>

    </div> 

    <div class="item">

      <div class="container carouselContainer">

        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <form id="form3" method="post">


              <div class="form-group" id="userAppliedUnivGroup">

                <p class="center">Select the universities you <strong>applied</strong> to:</p>
                <div class="input-group marginTop">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-home" style="color:orange;"></span></span>
                  <input id="appliedUniv" class="form-control" style="width:100%; height:6em; padding:0; border-radius: 0 4px 4px 0;"/>
                </div>
              </div>

              <div class="form-group" id="userAdmittedUnivGroup">

                <p class="center">Select the universities you got <strong>admitted</strong> into:</p>
                <div class="input-group marginTop">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-home" style="color:green;"></span></span>
                  <input id="admittedUniv" class="form-control" style="width:100%; height:6.2em; padding:0; border-radius: 0 4px 4px 0;"/>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>

    </div>



  </div>



</div>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <button id="prevButton" class="btn btn-primary buttons"> Previous </button>
      <button id="nextButton" class="btn btn-primary rightAlign buttons"> Next </button>
    </div>
  </div>
</div>


</body>

<!-- JS with all indian univ list-->
<script src="myjs/univlist.js"></script>

<!-- JS with all US univ list-->
<script src="myjs/usunivlist.js"></script>


</html>
