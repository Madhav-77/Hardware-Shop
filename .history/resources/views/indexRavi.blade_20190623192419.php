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
</head>
<body>
        <div class="carousel carousel-slider">
                <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/800/400/food/1"></a>
                <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/800/400/food/2"></a>
                <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/800/400/food/3"></a>
                <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/800/400/food/4"></a>
              </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{URL::asset('js/materialize.js')}}"></script>
    <script src="{{URL::asset('js/init.js')}}"></script>
    <script>
    $('.carousel.carousel-slider').carousel({
            fullWidth: true
          });
          </script>
</body>
</html>