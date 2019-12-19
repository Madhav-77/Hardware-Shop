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
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{URL::asset('js/materialize.js')}}"></script>
  <script src="{{URL::asset('js/init.js')}}"></script>
  

</head>
<body>
        
        <section id="slide-out" class="sidenav sidenav">
                <ul>
                        <li><div class="user-view">
                          <div class="background">
                            <img src="{{URL::asset('background1.jpg')}}">
                          </div>
                          <a href="#name"><span class="white-text name">John Doe</span></a>
                          <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                        </div></li></ul>
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
                        <li class="bold"><a class="collapsible-header waves-effect waves-grey">About Us</a></li>
                        <li class="bold"><a class="collapsible-header waves-effect waves-grey">Contact Us</a></li>
                    </ul>
            
        </section>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <script>document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.collapsible');
            var instances = M.Collapsible.init(elems, options);
          });
        
          // Or with jQuery
        
          $(document).ready(function(){
            $('.collapsible').collapsible();
          });</script>
</body>
</html>
    