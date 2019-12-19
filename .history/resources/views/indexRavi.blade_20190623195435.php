<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="{{URL::asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">
  <link href="{{URL::asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{URL::asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
  img, .carousel{
      height: 650px !important;
  }
  </style>
</head>
<body>
        <div class="navbar-wrapper">
                <div class="navbar-fixed">
                    <nav style="background:transparent; -webkit-box-shadow:0 0px 0px 0 rgba(0, 0, 0, 0), 0 0px 0px 0px rgba(0, 0, 0, 0), 0 0px 0px 0 rgba(0, 0, 0, 0); 
                    box-shadow:0 0px 0px 0 rgba(0, 0, 0, 0), 0 0px 0px 0px rgba(0, 0, 0, 0), 0 0px 0px 0 rgba(0, 0, 0, 0);">
                        <a href="#" data-target="slide-out" class="black-text sidenav-trigger"><i class="material-icons">menu</i></a>
                        <ul class="middle">
                          {{-- Logo  --}}
                        </ul>
                    </nav>
                  </div>
           </div>
    {{-- Carousel --}}
    <div class="carousel carousel-slider">
        <a class="carousel-item" href="#one!"><img src="{{URL::asset('images\02d4d344336067481a8445d1eb75437a.jpg')}}"></a>
        <a class="carousel-item" href="#two!"><img src="{{URL::asset('images\3908c6607770cc1d78e02ac57a76f4c9.jpg')}}"></a>
        <a class="carousel-item" href="#three!"><img src="{{URL::asset('images\western-crystal-glass-knobs-mini-square-cupboard-cabinet-knob-drawer-pulls-modern-wardrobe-shoe-box-handles-33.jpg')}}"></a>
        <a class="carousel-item" href="#four!"><img src="{{URL::asset('images\786a00601a7b36ccf847f1e7a06de77b.jpg')}}"></a>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{URL::asset('js/materialize.js')}}"></script>
    <script src="{{URL::asset('js/init.js')}}"></script>
    <script>
    $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true,
            duration: 200
          });
          </script>
</body>
</html>