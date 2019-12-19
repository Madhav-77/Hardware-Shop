<!DOCTYPE html>
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
      .main { 
        display: block;
        height: 300px;
      }
     
      </style>
  </head>
  <body style="background: #F0F0F0;">
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
    
    <section id="home" class="main">
    <section class="col-lg-4 main" style="background-color: blueviolet"> 
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <h1 class="display-3" align="center">Home</h1>
          </div>
        </div>
      </div>
    </section>
    <section>
      <h1>Hello</h1>
    </section>
  </section>

    <section id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="display-3" align="left">Gallery</h1>
          </div>
        </div>
      </div>
    </section>

    <section id="aboutUs">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="display-3" align="right">About Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section id="contactUs">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="display-3" align="left">Contact Us</h1>
          </div>
        </div>
      </div>
    </section>

  </body>
</html>