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
    .img-carousel, .carousel{
        height: 650px !important;
    }
    .navbar-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 10;
    }
    .nav{
        padding-left: 15px;
        padding-right: 15px;
    }
    .dropdown-content{
    overflow: visible !important;
}
  </style>
</head>
<body>
    {{-- Navbar --}}
    <div class="navbar-wrapper">
        <div class="navbar-static">
            <nav class="nav" style="background:transparent; -webkit-box-shadow:0 0px 0px 0 rgba(0, 0, 0, 0), 0 0px 0px 0px rgba(0, 0, 0, 0), 0 0px 0px 0 rgba(0, 0, 0, 0); 
            box-shadow:0 0px 0px 0 rgba(0, 0, 0, 0), 0 0px 0px 0px rgba(0, 0, 0, 0), 0 0px 0px 0 rgba(0, 0, 0, 0);">
                <a href="#" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#home">Home</a></li>
                    <li><a class='dropdown-trigger' href='#' data-target='products_list'>Gallery</a></li>
                        <ul id='products_list' class='dropdown-content grey'>
                            <li><a class="white-text" href="#!">Door Handles</a></li>
                            <li><a class="white-text" href="#!">Furniture Handles</a></li>
                            <li><a class="white-text dropdown-button2 d" href="#!" data-target='#dropdown2'>Other Hardwares</a></li>
                        </ul>
                        <ul id='dropdown2' class='dropdown-content'>
                                <li><a href="#!">one</a></li>
                                <li><a href="#!">two</a></li>
                                <li class="divider"></li>
                                <li><a href="#!">three</a></li>
                            </ul>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
    {{-- Carousel --}}
    <div class="carousel carousel-slider">
        <a class="carousel-item" href="#one!"><img class="img-carousel" src="{{URL::asset('images\02d4d344336067481a8445d1eb75437a.jpg')}}"></a>
        <a class="carousel-item" href="#two!"><img class="img-carousel" src="{{URL::asset('images\3908c6607770cc1d78e02ac57a76f4c9.jpg')}}"></a>
        <a class="carousel-item" href="#three!"><img class="img-carousel" src="{{URL::asset('images\western-crystal-glass-knobs-mini-square-cupboard-cabinet-knob-drawer-pulls-modern-wardrobe-shoe-box-handles-33.jpg')}}"></a>
        <a class="carousel-item" href="#four!"><img class="img-carousel" src="{{URL::asset('images\786a00601a7b36ccf847f1e7a06de77b.jpg')}}"></a>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{URL::asset('js/materialize.js')}}"></script>
    <script src="{{URL::asset('js/init.js')}}"></script>
    <script>
    $(".nav li").click(function() {
            if ($(".nav li").removeClass("active")) {
                $(this).removeClass("active");
            }
            $(this).addClass("active");
        });
    /* carousel initialization */
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true,
        duration: 200
    });
    $('.dropdown-trigger').dropdown({
        coverTrigger: false,
        constrainWidth: false
    });
    $('.dropdown-button2').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: ($('.dropdown-content').width()*3)/2.5 + 5, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );
    </script>
</body>
</html>