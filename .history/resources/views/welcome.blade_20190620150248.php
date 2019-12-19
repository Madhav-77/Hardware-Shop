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
.container{
  width: auto;
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

<div class="container">
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
  </div>


</body>
</html>
