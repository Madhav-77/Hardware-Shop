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
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}" />
  <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}" />
  
  <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" />

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
  top: 55%;
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
    <section id="slide-out" class="sidenav sidenav-fixed">
        <ul>
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="{{URL::asset('background1.jpg')}}">
                    </div>
                    <a href="#name"><span class="white-text name">John Doe</span></a>
                    <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div>
            </li>
        </ul>
        <ul class="collapsible">
            <li class="bold"><a class="collapsible-header waves-effect waves-grey">Home</a></li>
            <li class="bold"><a class="collapsible-header waves-effect waves-grey">Gallery</a>
                <div class="collapsible-body">
                    <ul>
                        <li><a class='dropdown-trigger' data-target='door_handles' href="#">Door Handles</a></li>
                          <ul id='door_handles' class='dropdown-content'>
                            <li><a href="#!">Door Pull</a></li>
                            <li><a href="#!">Rose Handle</a></li>
                          </ul>
                        <li><a class='dropdown-trigger' data-target='furniture_handles' href="#">Furniture Handles</a></li>
                          <ul id='furniture_handles' class='dropdown-content'>
                            <li><a href="#!">Cabinate Handle</a></li>
                            <li><a href="#!">Conceal</a></li>
                            <li><a href="#!">Knobs</a></li>
                          </ul>
                        <li><a class='dropdown-trigger' data-target='other_hardware' href="#">Other Hardwares</a></li>
                          <ul id='other_hardware' class='dropdown-content'>
                            <li><a href="#!">Door Cloer</a></li>
                            <li><a href="#!">L-Bracket</a></li>
                            <li><a href="#!">Coat Hooks</a></li>
                            <li><a href="#!">Table Wire Manager</a></li>
                          </ul>
                    </ul>
                </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-grey">About Us</a></li>
            <li class="bold"><a class="collapsible-header waves-effect waves-grey">Contact Us</a></li>
        </ul>
    </section>
{{-- <div class="container" style="width:50%;  padding-top: 0.7rem; float:left; margin-left: 22rem;">
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
  
  <div class="container" style="width:100%;  padding-top: 0.7rem; float:left; margin-left: 22rem;">
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
   
  </div>
</div> --}}
<div class="page-section gallery-single-page">
    <div class="gallery-single-warp">
    <div class="row">
    <div class="col-xl-6 p-0">
    <div class="gallery-single-slider owl-carousel">
    <img src="img/gallery-single/1.jpg" alt="">
    <img src="img/gallery-single/2.jpg" alt="">
    </div>
    </div>
    <div class="col-xl-6 p-0">
    <div class="gallery-single-text">
    <span>Photography</span>
    <h2>Puppy Eyes</h2>
    <ul>
    <li><span>Client:</span>Company Name</li>
    <li><span>Date:</span>August 25, 2018</li>
    <li><span>Categorie:</span>Animal Photography</li>
    <li><span>Tags:</span>animals, dogs, photography</li>
    </ul>
    <p>Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesua-da fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui. Curabitur et mattis ex, a ultrices. Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui. Curabitur et mattis ex, a ultrices.</p>
    <p>Ut pellentesque auctor lorem, at maximus lacus faucibus nec. Interdum et malesua-da fames ac ante ipsum primis in faucibus. Mauris auctor nunc non nulla euismod consequat. Pellentesque non mattis nulla. Fusce quis tempor risus, non elemen tum dui. Curabitur et mattis ex, a ultrices.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    </div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{URL::asset('js/materialize.js')}}"></script>
<script src="{{URL::asset('js/init.js')}}"></script>
  
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
