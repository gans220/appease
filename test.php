<!DOCTYPE html>
<html>
<head>
   <title>Try v1.2 Bootstrap Online</title>
   <link href="mybootstrap/css/my.bootstrap.css" rel="stylesheet">
   <script src="lib/jquery-1.11.1.min.js"></script>
   <script src="mybootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div id="myCarousel" class="carousel slide">
   
   <!-- Carousel items -->
   <div class="carousel-inner">
      <div class="item active">
         <img src="/bootstrap/images/slide1.png" alt="First slide">
      </div>
      <div class="item">
         <img src="/bootstrap/images/slide2.png" alt="Second slide">
      </div>
      <div class="item">
         <img src="/bootstrap/images/slide3.png" alt="Third slide">
      </div>
   </div>
   <!-- Carousel nav -->
   <a class="left btn-lg btn-success" href="#myCarousel" 
      data-slide="prev">Previous</a>
   <a class="right btn-lg btn-success" href="#myCarousel" 
      data-slide="next">Next</a>
</div> 

</body>
</html>