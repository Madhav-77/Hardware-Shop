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
        
        <section id="slide-out" class="sidenav sidenav-fixed">
                <ul>
                        <li><div class="user-view">
                          <div class="background">
                            <img src="{{URL::asset('background1.jpg')}}">
                          </div>
                          <a href="#name"><span class="white-text name">John Doe</span></a>
                          <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                        </div></li></ul>
            <div class="container">
                <div class="row" style="float:right">
                    <a href="#"style="float:right">Home</a><br>
                    <a href="#"style="float:right">Gallery</a><br>
                    <a href="#"style="float:right">About Us</a><br>
                    <a href="#">Contact Us</a>
                </div>
            </div>
        </section>
        
</body>
</html>
    