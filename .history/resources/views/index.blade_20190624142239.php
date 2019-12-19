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
</style>
</head>
<body>

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
        <li class="bold"><a  style="height:30px; line-height: 30px;" class="collapsible-header">Home</a></li>
        <li class="bold"><a  style="height:30px; line-height: 30px;" class="collapsible-header">Gallery</a>
            <div class="collapsible-body">
                <ul>
                    <li><a  style="height:30px; line-height: 30px;" href="#">Door Handles</a></li>
                    <li><a  style="height:30px; line-height: 30px;" href="#">Furniture Handles</a></li>
                    <li><a  style="height:30px; line-height: 30px;" href="#">Other Hardwares</a></li>
                </ul>
            </div>
          </li>
    </ul>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
  
  <div class="container" style="width:78%; float:right;">
    <div class="row">
      <span class="center"><h4><b>Door Handles</b></h4></span>
      <span class="center"><h6><a style="padding-right: 10px;" href="#">Door Pull</a>
      <a style="padding-left: 10px;" href="#">Rose Handle</a></h6></span>
    </div>

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
  $('.dropdown-trigger').dropdown();
  </script>
</body>
</html>