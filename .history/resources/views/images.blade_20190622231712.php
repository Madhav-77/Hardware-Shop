<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{URL::asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{URL::asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="{{URL::asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">


</head>
<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

</style>

<body>
  <div class="navbar-static">
    <nav class="white" role="navigation">
      <div class="nav nav-wrapper container" id="menu">
        <a id="logo-container" href="#" class="brand-logo">Driver</a>
        <ul class="right hide-on-med-and-down">
          <li><a class="a" href="#">Home</a></li>
        <li class="active"><a class="a" href="#gallery">Gallery</a></li>
        <li><a class="a" href="#aboutUs">About Us</a></li>
        <li><a class="a" href="#contactUs">Contact Us</a></li>
        </ul>
  
        <ul id="nav-mobile" class="sidenav">
          <li><a href="#">Driver</a></li>
          <li class=""><a class="a" href="#home">Home</a></li>
          <li><a class="active" href="#gallery">Gallery</a></li>
          <li><a class="a" href="#aboutUs">About Us</a></li>
          <li><a class="a" href="#contactUs">Contact Us</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav>
      </div>
  
<div class="container" style="width:70%;  padding-top: 0.7rem; float:left; margin-left: 0.7rem;">
    <div class="mySlides">
      <div class="numbertext" style=" padding-top: 1.5rem;">1 / 3</div>
      <img src="{{url('background1.jpg')}}" style="width:100%">
    </div>

  <div class="mySlides">
    <div class="numbertext" style="padding-top: 1.5rem;">2 / 3</div>
    <img src="{{url('background2.jpg')}}" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext" style="padding-top: 1.5rem;">3 / 3</div>
    <img src="{{url('background3.jpg')}}" style="width:100%">
  </div>
  
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
</div>
  
  <div class="container" style="width:100%;  padding-top: 0.7rem; float:left; margin-left: 0.7rem;">
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="{{url('background1.jpg')}}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('background2.jpg')}}" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('background3.jpg')}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('background3.jpg')}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('background3.jpg')}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('background3.jpg')}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('background3.jpg')}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
   
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>
