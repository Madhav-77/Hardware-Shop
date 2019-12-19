<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
.a{
  width: 100px;
  text-align: center;
  color: whitesmoke;
}
h1{
  color: grey; 
  margin-top: 50px;
}

</style>
<body>
  <nav class="navbar navbar-fixed-top" style="background:transparent;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand a" href="#">Hardware</a>
      </div>
    <ul class="nav navbar-nav">
      <li class="active"><a class="a" href="#">Home</a></li>
      <li><a class="a" href="#">Gallery</a></li>
      <li><a class="a" href="#">About Us</a></li>
      <li><a class="a" href="#">Contact Us</a></li>
    </ul>
  </div>
</nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="{{url('la.jpg')}}" alt="Los Angeles" style="width:100%;">
        </div>
  
        <div class="item">
          <img src="{{url('chicago.jpg')}}" alt="Chicago" style="width:100%;">
        </div>
      
        <div class="item">
          <img src="{{url('ny.jpg')}}" alt="New york" style="width:100%;">
        </div>
      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  <section style="height:350px;">
    <h1 align="center">Gallery</h1>
    <div class="carousel">
      <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
      <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
      <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
      <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
      <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
    </div>
  </section>
  <section>
    <section style="float:left; width:25%; background:black; height:350px;"><h1 style="float:right;">About Us</h1></section>
    <section style="float:right; width:75%; height:350px;"></section>
  </section>
  <section>
    <section style="float:right; width:25%; background:black; height:350px;"><h1 style="float:left;">Contact Us</h1></section>
    <section style="float:left; width:75%; height:350px;"></section>
  </section>
<!-- Footer -->
<footer class="page-footer font-small cyan darken-3">

    <!-- Footer Elements -->
    <div class="container">
  
      <!-- Grid row-->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-12 py-5">
          <div class="mb-5 flex-center">
  
            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <!--Pinterest-->
            <a class="pin-ic">
              <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
          </div>
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row-->
  
    </div>
    <!-- Footer Elements -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
</body>
</html>
