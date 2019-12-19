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
  width: fit-content;
}
/** TIPS: 
1. The carousel shouldn't be in any other div, like for example div with class container. 
2. You can align image position in classes bg1, bg2, bg3 using css background-position.
*/

/* Carousel 100% Fullscreen */
html, body {
height:100%;
margin:0;
padding:0;
}
.carousel, .item, .active {
height:100%;
}
.carousel-inner {
height:100%;
}
.carousel {
margin-bottom: 60px;
}
.carousel-caption {
z-index: 10;
}
.carousel .item {
background-color: #777;
}
.carousel .carousel-inner .bg {
background-repeat:no-repeat;
background-size:cover;
}
.carousel .carousel-inner .bg1 {
background-image:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/spiderweb.jpg');
background-position: center top;
}
.carousel .carousel-inner .bg2 {
background-image:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/hearthand.jpg');
background-position: center center;
}
.carousel .carousel-inner .bg3 {
background-image:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/woman-camera.jpg');
background-position: center bottom;
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

<div class="container-fluid px-0">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner bg-info" role="listbox">
            <div class="carousel-item active">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <h1 class="display-1">ONE</h1>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <h1 class="display-1">TWO</h1>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <h1 class="display-1">THREE</h1>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

</body>
</html>
