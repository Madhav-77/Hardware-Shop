{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <style>
      section { 
        display: block;
        height: 300px;
      }
      .column.side {
        width: 25%;
      }
      .column.middle {
        width: 50%;
      }
      .column {
        float: left;
        padding: 10px;
      }
     
      </style>
  </head>
  <body >
    
    
    <section id="home">
    <section class="col-lg-4 coulmn side" style="background-color: blueviolet"> 
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <h1 class="display-3" align="center">Home</h1>
          </div>
        </div>
      </div>
    </section>
    <label class="coulmn middle">
      <h1>Hello</h1>
    </label>
  </section>



    

    

  </body>
</html>
 --}}

<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>
   section { 
        display: block;
        height: 300px;
      }
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 25%;
}

/* Middle column */
.column.middle {
  width: 75%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}
</style>
</head>
<body style="background: #F0F0F0;">

<div class="header">
  <h1>Header</h1>
  <p>Resize the browser window to see the responsive effect.</p>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">HdWare</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        </ul>
        <ul class="col-lg-4 navbar-nav mr-auto">
          <li class="nav-item  active">
            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li style="margin-left: 20px;" class="nav-item ">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li style="margin-left: 20px;" class="nav-item ">
            <a class="nav-link" href="#aboutUs">About Us</a>
          </li>
          <li style="margin-left: 20px;" class="nav-item ">
            <a class="nav-link" href="#contactUs">Contact Us</a>
          </li>
        </ul>
      {{--  <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button  style="background:none; color:ghostwhite;" class="btn btn-outline my-2 my-sm-0" type="submit">Search</button>
      </form> --}}
    </div>
  </nav>
  
  
  <div class="row">
    
    <div class="column side">
      <section id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="display-3" align="left">Gallery</h1>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="column middle">
      <h2>Main Content</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
    </div>


      
      <div class="column middle">
        <h2>Main Content</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
      </div>
      <div class="column side">
        <section id="aboutUs">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h1 class="display-3" align="right">About Us</h1>
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class="column side">
      <section id="contactUs">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1 class="display-3" align="left">Contact Us</h1>
            </div>
          </div>
        </div>
      </section>
      </div>
  
  
</div>
  
</body>
</html>
