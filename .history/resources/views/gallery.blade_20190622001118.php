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
      <a id="logo-container" href="#" class="brand-logo">Driver</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="a" href="#">Home</a></li>
      <li class="active"><a class="a" href="#gallery">Gallery</a></li>
      <li><a class="a" href="#aboutUs">About Us</a></li>
      <li><a class="a" href="#contactUs">Contact Us</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Driver</a></li>
        <li class=""><a class="a" href="#home">Home</a></li>
        <li><a class="active" href="#gallery">Gallery</a></li>
        <li><a class="a" href="#aboutUs">About Us</a></li>
        <li><a class="a" href="#contactUs">Contact Us</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
    </div>

    <div class="container">
        <div class="section">
            <div class="row">
                <h4 align="left" style="color:rgba(0, 0, 0, 0.87);">Door Handle</h4>
                <div class="divider"></div><br>
                    <div class="row">
                            <div class="carousel">
                            <div class="carousel-item col s12 m4">
                                    <div class="card">
                                      <div class="card-image">
                                        <a href="#"><img src="{{url('background2.jpg')}}"></a>
                                        </div>
                                      <div class="card-action">
                                        <a href="#">Door Pull</a>
                                      </div>
                                    </div>
                                  </div>
                            <div class="carousel-item col s12 m4">
                                    <div class="card">
                                      <div class="card-image">
                                        <a href="#"><img src="{{url('background2.jpg')}}"></a>
                                       </div>
                                      <div class="card-action">
                                        <a href="#">Rose Handle</a>
                                      </div>
                                    </div>
                                  </div></div>
                    </div>
                </div>
            <div class="row">
                <h4 align="left" style="color:rgba(0, 0, 0, 0.87);">Furniture Handle</h4>
                <div class="divider"></div><br>
                    <div class="row">
                            <div class="col s12 m4">
                                    <div class="card">
                                      <div class="card-image">
                                        <a href="#"><img src="{{url('background2.jpg')}}"></a>
                                        </div>
                                      <div class="card-action">
                                        <a href="#">Cabinate Handles</a>
                                      </div>
                                    </div>
                                  </div>
                            <div class="col s12 m4">
                                    <div class="card">
                                      <div class="card-image">
                                        <a href="#"><img src="{{url('background2.jpg')}}"></a>
                                       </div>
                                      <div class="card-action">
                                        <a href="#">Conceal</a>
                                      </div>
                                    </div>
                                  </div>
                            <div class="col s12 m4">
                                    <div class="card">
                                      <div class="card-image">
                                        <a href="#"><img src="{{url('background2.jpg')}}"></a>
                                       </div>
                                      <div class="card-action">
                                        <a href="#">Knobs</a>
                                      </div>
                                    </div>
                                  </div>
                    </div>
                </div>
            <div class="row">
                <h4 align="left" style="color:rgba(0, 0, 0, 0.87);">Other Hardware</h4>
                <div class="divider"></div><br>
                    <div class="row">
                            <div class="col s12 m4">
                                    <div class="card">
                                      <div class="card-image">
                                        <a href="#"><img src="{{url('background2.jpg')}}"></a>
                                        </div>
                                      <div class="card-action">
                                        <a href="#">Door Cloer</a>
                                      </div>
                                    </div>
                                  </div>
                            <div class="col s12 m4">
                                    <div class="card">
                                      <div class="card-image">
                                        <a href="#"><img src="{{url('background2.jpg')}}"></a>
                                       </div>
                                      <div class="card-action">
                                        <a href="#">L-Brackets</a>
                                      </div>
                                    </div>
                                  </div>
                            <div class="col s12 m4">
                                    <div class="card">
                                      <div class="card-image">
                                        <a href="#"><img src="{{url('background2.jpg')}}"></a>
                                       </div>
                                      <div class="card-action">
                                        <a href="#">Coat Hooks</a>
                                      </div>
                                    </div>
                                  </div>
                            <div class="col s12 m4">
                                    <div class="card">
                                      <div class="card-image">
                                        <a href="#"><img src="{{url('background2.jpg')}}"></a>
                                       </div>
                                      <div class="card-action">
                                        <a href="#">Table Wire Manager</a>
                                      </div>
                                    </div>
                                  </div>
                    </div>
                </div>
        </div>
    </div>
          



  <footer id="contactUs" class="page-footer teal">
    
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
