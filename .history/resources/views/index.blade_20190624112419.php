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
                    <li><a href="#">Door Handles</a></li>
                    <li><a href="#">Furniture Handles</a></li>
                    <li><a href="#">Other Hardwares</a></li>
                </ul>
            </div>
          </li>
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