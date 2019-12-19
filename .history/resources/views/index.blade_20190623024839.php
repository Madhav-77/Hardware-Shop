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
<style>
#gallery {
  padding-top: 0.7rem;
}

</style>
<body>
    <div class="navbar-fixed">
  <nav class="white" role="navigation">
    <div class="nav nav-wrapper container" id="menu">
        <i class="black material-icons">menu</i>
      <a id="logo-container" href="#" class="center brand-logo">Driver</a>
      
      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Driver</a></li>
        <li class="active"><a class="a" href="#home">Home</a></li>
        <li><a class="a" href="#gallery">Gallery</a></li>
        <li><a class="a" href="#aboutUs">About Us</a></li>
        <li><a class="a" href="#contactUs">Contact Us</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
    </div>
  <div id="index-banner" class="parallax-container">
    {{--<div class="section no-pad-bot">
      <div class="container">
         <br><br>
        <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>
      </div>
    </div>
    --}}
    <div class="parallax"><img src="{{url('background1.jpg')}}" alt="Unsplashed background img 1"></div>
  </div>

  <div id="gallery" class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
          <h3 align="center" style="color:rgba(0, 0, 0, 0.87);">Our Products</h3>
          
  <div class="row">
    
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <a href="#"><img src="{{url('background1.jpg')}}"></a>
          <span class="card-title">Door Handle</span>
        </div>
        <div class="card-content">
          <p>Content about Door Handle</p>
        </div>
        <div class="card-action">
          <a href="#">View more</a>
        </div>
      </div>
    </div>

    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <a href="#"><img src="{{url('background2.jpg')}}"></a>
          <span class="card-title">Furniture Handle</span>
        </div>
        <div class="card-content">
          <p>Content about Furniture Handle</p>
        </div>
        <div class="card-action">
          <a href="#">View more</a>
        </div>
      </div>
    </div>

    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <a href="#"><img src="{{url('background3.jpg')}}"></a>
          <span class="card-title">Other Hardware</span>
        </div>
        <div class="card-content">
          <p>Content about other hardware</p>
        </div>
        <div class="card-action">
          <a href="#">View more</a>
        </div>
      </div>
    </div>
    
  </div>
            
          
          
      </div>

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
    <div class="parallax"><img src="{{url('background2.jpg')}}" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>About Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

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
    <div class="parallax"><img src="{{url('background3.jpg')}}" alt="Unsplashed background img 3"></div>
  </div>

  <footer id="contactUs" class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Contact Us</h5>
          <p class="grey-text text-lighten-4">
              <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
                  <iframe 
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60532.572656792436!2d73.81509!3d18.515983!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x771e89770c4697a3!2sMIT+School+of+Management!5e0!3m2!1sen!2sin!4v1561132760347!5m2!1sen!2sin" 
                  width="450" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </p>

        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Address</h5>
          <p><address>Keas 69 Str.
            15234, Chalandri
            Athens,
            Greece</address></p>
          </div>
          
          <div class="col l3 s12">
            <h5 class="white-text">Contact</h5>
            <ul>
              <li><a class="white-text" href="madhavtrivedi.77@gmail.com">madhavtrivedi.77@gmail.com</a></li>
              <li><a class="white-text" href="tel:+091 9106655362">+091 9106655362</a></li>
            </ul>
          </div>
          
          <div class="col l6 s12">
          <h5 class="white-text">For inquiry:</h5>
          <input class="white-text" type="text" placeholder="Name" name="name">
          <input class="white-text" type="text" placeholder="Email" name="email">
          <input class="white-text" type="text" placeholder="Contact" name="phone">
          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
        </div>

      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{URL::asset('js/materialize.js')}}"></script>
  <script src="{{URL::asset('js/init.js')}}"></script>
  <script>
     
$(document).ready(function () {
    $(document).on("scroll", onScroll);
    
    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#menu a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menu ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}
$(".nav li").click(function() {
    if ($(".nav li").removeClass("active")) {
        $(this).removeClass("active");
    }
    $(this).addClass("active");
});
</script>
  </body>
</html>
