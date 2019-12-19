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
@font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: local('Material Icons'), local('MaterialIcons-Regular'), url(https://fonts.gstatic.com/s/materialicons/v18/2fcrYFNaTjcS6g4U3t-Y5ZjZjT5FdEJ140U2DJYC3mY.woff2) format('woff2');
}

.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -moz-font-feature-settings: 'liga';
  -moz-osx-font-smoothing: grayscale;
}

.middle-indicator{
   position:absolute;
   top:45%;
   }
  .middle-indicator-text{
   font-size: 4.2rem;
  }
  a.middle-indicator-text{
    color:white !important;
  }
.content-indicator{
    width: 64px;
    height: 64px;
    background: none;
    -moz-border-radius: 50px;
    -webkit-border-radius: 50px;
    border-radius: 50px; 
  }
    .indicators{
  	visibility: hidden;
   }
 .carousel { 
    max-height: 600px;
  }
  .img { 
  height: 600px 
}
.overlay { 
  color:#fff;
  position:absolute;
  z-index:12;
  top:50%;
  left:0;
  width:100%;
  text-align:center;
}


/* CUSTOMIZE THE NAVBAR
-------------------------------------------------- */

/* Special class on .container surrounding .navbar, used for positioning it into place. */
.navbar-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 10;
}
nav a.sidenav-trigger{
  display: inline !important;
}
.dropdown-content{
    overflow: visible !important;
}
#door_handles, #furniture_handles, #other_hardware{
  position: inherit;
}
</style>
<body>
    <section id="slide-out" class="sidenav sidenav">
        <ul>
            <li>
                <div class="user-view">
                    <div class="background">
                        <img src="{{URL::asset('background1.jpg')}}">
                    </div>
                    <a href="#name"><span class="white-text name">John Doe</span></a>
                    <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div>
            </li>
        </ul>
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
    </section>
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
    
       <div class="carousel carousel-slider center" data-indicators="true">
      <div class="carousel-fixed-item center middle-indicator">
        <div class="left">
            <a href="Previo" class="movePrevCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons left  middle-indicator-text">chevron_left</i></a>
           </div>
           <div class="right">
           <a href="Siguiente" class=" moveNextCarousel middle-indicator-text waves-effect waves-light content-indicator"><i class="material-icons right middle-indicator-text">chevron_right</i></a>
          </div>
        </div>
            <div class="carousel-item" href="#two!">
              <img class="img" src="{{url('background2.jpg')}}">
            </div>
          <div class="carousel-item" href="#three!">
            <img class="img" src="{{url('background3.jpg')}}">
          </div>
        </div>
      
      
    <div id="gallery" class="container">
        <div class="section">
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
                    <p>
                      <address>Keas 69 Str.
                      15234, Chalandri
                      Athens,
                      Greece</address>
                    </p>
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
        $(document).ready(function(){
                    $('.collapsible').collapsible();
                  });
                  $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: false,
      height:500.5,// define your height here
        transition:500,
        interval:6000
   });


   // move next carousel
   $('.moveNextCarousel').click(function(e){
      e.preventDefault();
      e.stopPropagation();
      $('.carousel').carousel('next');
   });

   // move prev carousel
   $('.movePrevCarousel').click(function(e){
      e.preventDefault();
      e.stopPropagation();
      $('.carousel').carousel('prev');
   });
   
   $('.dropdown-trigger').dropdown();

    </script>
  </body>
</html>
