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

    <div class="section">
            <div class="container" style="width:70%; float:left; margin-top: 80px; padding-right:70px; padding-left:140px;">
                <p style="text-align:justify;">Rajesh engineering work is creative furniture hardware manufacturing company based in rajkot (gujarat).
                        Founded in 1994 REW has worked on creating various designer products. 
                        From the choice of steel, zamak or alluminium of the highest quality to the packaging of the finished handle, 
                        the entire production is followed with the utmost care and dedication.
                        Over the years we have established a range of products manufactured on inhouse facility to maintain quality at it's peak.</p>
            </div>
            <div class="container" style="width:30%; float:right; margin-top:30px;">
                <h1><span style="float:left">Why</span><br><span style="float:left">Choose</span><br><span style="float:left">Us?</span></h1>
            </div>
        </div>
    
            <div class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row center">
                        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                    </div>
                </div>
            </div>
            <div class="parallax"><img src="{{URL::asset('images\786a00601a7b36ccf847f1e7a06de77b.jpg')}}" alt="Unsplashed background img 3"></div>
        </div>
    <div class="section">
        <div class="container" style="width:30%; float:left; margin-top:30px;">
            <h1><span style="float:right">Why</span><br><span style="float:right">Choose</span><br><span style="float:right">Us?</span></h1>
        </div>
        <div class="container" style="width:70%; float:right; margin-top: 80px; padding-left:70px; padding-right:140px;">
            <p style="text-align:justify;">Rajesh engineering work is creative furniture hardware manufacturing company based in rajkot (gujarat).
                    Founded in 1994 REW has worked on creating various designer products. 
                    From the choice of steel, zamak or alluminium of the highest quality to the packaging of the finished handle, 
                    the entire production is followed with the utmost care and dedication.
                    Over the years we have established a range of products manufactured on inhouse facility to maintain quality at it's peak.</p>
        </div>
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
        coverTrigger: false,
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: ($('.dropdown-content').width()*3)/2.5 + 5, // Spacing from edge
      alignment: 'right' // Displays dropdown with edge aligned to the left of button
    }
  );
    $(document).ready(function(){
    $('.parallax').parallax();
  });
    </script>
</body>
</html>