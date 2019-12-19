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

<style>
  .gallery:hover {
    webkit-filter: blur(4px); /* Chrome, Safari, Opera */
    filter: blur(4px);
    position: absolute;
}
.title{
  border: 2px solid black;
  color: black;
}
</style>
</head>
<body>

  {{-- <ul id="slide-out" class="sidenav sidenav-fixed">
    <li><div class="user-view">
      <div class="background">
        <img src="{{URL::asset('images\02d4d344336067481a8445d1eb75437a.jpg')}}">
      </div>
      <a href="#user"><img class="circle" src="{{URL::asset('images\02d4d344336067481a8445d1eb75437a.jpg')}}"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <ul class="collapsible">
        <li class="bold"><a class="collapsible-header">Home</a></li>
        <li class="bold"><a class="collapsible-header">Gallery</a>
          <div class="collapsible-body">
            <ul>
              <li><a href="#">Door Handles</a></li>
              <li><a href="#">Furniture Handles</a></li>
              <li><a href="#">Other Hardwares</a></li>
            </ul>
          </div>
          <li class="bold"><a class="collapsible-header">About Us</a></li>
          <li class="bold"><a class="collapsible-header">Contact Us</a></li>
          </li>
    </ul>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  </ul> --}}
  <div class="navbar-wrapper">
      <div class="navbar navbar-fixed">
          <nav class="nav black">
              <a href="#" class="brand-logo white-text">Logo</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a class="white-text"  href="#home">Home</a></li>
                  <li><a class='white-text dropdown-trigger' href='#' data-target='products_list'>Gallery</a></li>
                      <ul id='products_list' class='dropdown-content grey'>
                          <li><a class="white-text" href="#!">Door Handles</a></li>
                          <li><a class="white-text" href="#!">Furniture Handles</a></li>
                          <li><a class="white-text dropdown-button2 d" href="#!" data-target='other'>Other Hardwares</a></li>
                      </ul>
                      {{-- submenus --}}
                      <ul id='other' class='dropdown-content'>
                          <li><a class="black-text " href="#!">Coat Hooks</a></li>
                          <li class="divider"></li>
                          <li><a class="black-text " href="#!">Door Closer</a></li>
                          <li class="divider"></li>
                          <li><a class="black-text " href="#!">L-Bracket</a></li>
                          <li class="divider"></li>
                          <li><a class="black-text " href="#!">Table Wire Manager</a></li>
                      </ul>
                  <li><a class="white-text" href="#about_us">About Us</a></li>
                  <li><a class="white-text" href="#contact_us">Contact Us</a></li>
              </ul>
          </nav>
      </div>
  </div>
  <div class="container" float:right;">
    <div class="row">
      <span class="center"><h4><b>Door Handles</b></h4></span>
      <span class="center">
        <h6>
          <a class="title" style="padding-right: 10px;" href="#">Door Pull</a>
          <a class="title" style="padding-left: 10px;" href="#">Rose Handle</a>
        </h6>
      </span>
    </div></div>

        <div class="row center" style="padding:5px;">

          <div class="col s2">
              <div class="row">
                  <div class="col s12">
                    <div class="card">
                      <div class="card-image">
                        <img class="gallery" src="{{URL::asset('images\02d4d344336067481a8445d1eb75437a.jpg')}}">
                      </div>
                      <div class="card-action">
                        <a href="#">This is a link</a>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <div class="col s2">
              <div class="row">
                  <div class="col s12">
                    <div class="card">
                      <div class="card-image">
                        <img class="gallery" src="{{URL::asset('images\02d4d344336067481a8445d1eb75437a.jpg')}}">
                      </div>
                      <div class="card-action">
                        <a href="#">This is a link</a>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <div class="col s2">
              <div class="row">
                  <div class="col s12">
                    <div class="card">
                      <div class="card-image">
                        <img class="gallery" src="{{URL::asset('images\02d4d344336067481a8445d1eb75437a.jpg')}}">
                      </div>
                     <div class="card-action">
                        <a href="#">This is a link</a>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <div class="col s2"><div class="row">
              <div class="col s12">
                <div class="card">
                  <div class="card-image">
                    <img class="gallery" src="{{URL::asset('images\02d4d344336067481a8445d1eb75437a.jpg')}}">
                  </div>
                  <div class="card-action">
                    <a href="#">This is a link</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col s2">
              <div class="row">
                  <div class="col s12">
                    <div class="card">
                      <div class="card-image">
                        <img class="gallery" src="{{URL::asset('images\02d4d344336067481a8445d1eb75437a.jpg')}}">
                      </div>
                      <div class="card-action">
                        <a href="#">This is a link</a>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <div class="col s2">
              <div class="row">
                  <div class="col s12">
                    <div class="card">
                      <div class="card-image">
                        <img class="gallery" src="{{URL::asset('images\02d4d344336067481a8445d1eb75437a.jpg')}}">
                      </div>
                      <div class="card-action">
                        <a href="#">This is a link</a>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <div class="col s2">
              <div class="row">
                  <div class="col s12">
                    <div class="card">
                      <div class="card-image">
                        <img class="gallery" src="{{URL::asset('images\02d4d344336067481a8445d1eb75437a.jpg')}}">
                      </div>
                     <div class="card-action">
                        <a href="#">This is a link</a>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <div class="col s2"><div class="row">
              <div class="col s12">
                <div class="card">
                  <div class="card-image">
                    <img class="gallery" src="{{URL::asset('images\02d4d344336067481a8445d1eb75437a.jpg')}}">
                  </div>
                  <div class="card-action">
                    <a href="#">This is a link</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{URL::asset('js/materialize.js')}}"></script>
  <script src="{{URL::asset('js/init.js')}}"></script>
  <script type = "text/javascript"  
  src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>             
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">  
  </script>   
  <script>
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
  $('.dropdown-trigger').dropdown({
            coverTrigger: false,
            constrainWidth: false
        });
        $('.dropdown-button2').dropdown({
            coverTrigger: false,
            inDuration: 300,
            outDuration: 225,
            constrain_width: false, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: ($('.dropdown-content').width()*3)/2.5 + 5, // Spacing from edge
            alignment: 'right' // Displays dropdown with edge aligned to the left of button
            }
        );
  </script>
</body>
</html>