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
                    <ul class="collapsible">
                            <li class="bold"><a class="collapsible-header waves-effect waves-teal">Components</a>
                                <div class="collapsible-body">
                                  <ul>
                                    <li><a href="badges.html">Badges</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="breadcrumbs.html">Breadcrumbs</a></li>
                                    <li><a href="cards.html">Cards</a></li>
                                    <li><a href="collections.html">Collections</a></li>
                                    <li><a href="floating-action-button.html">Floating Action Button</a></li>
                                    <li><a href="footer.html">Footer</a></li>
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="navbar.html">Navbar</a></li>
                                    <li><a href="pagination.html">Pagination</a></li>
                                    <li><a href="preloader.html">Preloader</a></li>
                                  </ul>
                                </div>
                              </li>
                          </ul>
            
        </section>
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
    