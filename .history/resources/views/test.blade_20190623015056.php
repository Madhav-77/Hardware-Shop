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
<div class="row">
        <div class="container">
        <nav class="side-nav">
            <ul id="slide-out" class="side-nav">
                <li><div class="user-view">
                  <div class="background">
                    <img src="../images/footer_bg.jpg">
                  </div>
                  <a href="#!user"><img class="circle" src="https://pbs.twimg.com/profile_images/877063380720173057/cTzoJiZ2_400x400.jpg"></a>
                  <a href="#!name"><span class="white-text name">Free Time Learn</span></a>
                  <a href="#!email"><span class="white-text email">freetimelearn@gmail.com</span></a>
                </div></li>
                
                <li><a class="waves-effect" href="#!"><i class="material-icons">code</i>HTML5</a></li>
                <li><a class="waves-effect" href="#!"><i class="material-icons">flare</i>CSS3</a></li>
                <li><a class="waves-effect" href="#!"><i class="material-icons">desktop_mac</i>Bootstrap 3</a></li>
                <li><a class="waves-effect" href="#!"><i class="material-icons">laptop_mac</i>Bootstrap 4</a></li>
                <li><a class="waves-effect" href="#!"><i class="material-icons">dvr</i>Materialize CSS</a></li>
                <li><div class="divider"></div></li>
                <li><a class="subheader">Scripts</a></li>
                <li><a class="waves-effect" href="#!"><i class="material-icons">input</i>JavaScript</a></li>
                <li><a class="waves-effect" href="#!"><i class="material-icons">show_chart</i>jQuery</a></li>
                <li><a class="waves-effect" href="#!"><i class="material-icons">local_grocery_store</i>Ajax</a></li>
                <li><a class="waves-effect" href="#!"><i class="material-icons">local_library</i>AngularJS</a></li>
            </ul>
        </nav>
           <a href="#" data-activates="slide-out" class="btn button-collapse blue hoverable">SIDE NAV</a>
        
        </div>
    </div>
        
    <script type="text/javascript">
        $(".button-collapse").sideNav();
    </script>
    </body>
</html>
    