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
  
<div class="container" >
  <div class="card">
    
    <div class="row">
      <div class="col s1">1</div>
      <div class="col s1">2</div>
      <div class="col s1">3</div>
      <div class="col s1">4</div>
      <div class="col s1">5</div>
      <div class="col s1">6</div>
      <div class="col s1">7</div>
      <div class="col s1">8</div>
      <div class="col s1">9</div>
      <div class="col s1">10</div>
      <div class="col s1">11</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
      <div class="col s1">12</div>
    </div>
          
  </div>
</div>

<script>
</script>
    
</body>
</html>
