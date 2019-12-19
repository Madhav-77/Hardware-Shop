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
<body>
  <nav> <!-- navbar content here  --> </nav>

  <ul id="slide-out" class="sidenav sidenav-fixed">
    <li><div class="user-view">
      <div class="background">
        <img src="{{URL::asset('images\02d4d344336067481a8445d1eb75437a.jpg')}}">
      </div>
      <a href="#user"><img class="circle" src="{{URL::asset('images\02d4d344336067481a8445d1eb75437a.jpg')}}"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    {{-- <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li> --}}
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
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  
  <ul class="collapsible s6" style="float:right;">
      <li>
        <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
      </li>
    </ul>

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
  $('.dropdown-trigger').dropdown();
  </script>
</body>
</html>