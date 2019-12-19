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


</head>
<body>
        <nav>
                <ul class="right hide-on-med-and-down">
                  <li><a href="#!">First Sidebar Link</a></li>
                  <li><a href="#!">Second Sidebar Link</a></li>
                </ul>
                <ul id="slide-out" class="side-nav">
                  <li><a href="#!">First Sidebar Link</a></li>
                  <li><a href="#!">Second Sidebar Link</a></li>
                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
              </nav>
                              
    <script type="text/javascript">
        $(".button-collapse").sideNav();
        
  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 240
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
  );
        
    </script>
    </body>
</html>
    