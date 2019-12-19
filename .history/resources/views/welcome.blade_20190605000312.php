<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        
        <!-- Styles -->
        <style>
html, body {
	background: rgb(20,20,20);
	text-align: center;
	height: 100%;
	overflow: hidden;
  }
  .svg-wrapper {
	position: relative;
	top: 50%;
	transform: translateY(-50%);
		margin: 0 auto;
	width: 320px;  
  }
  .shape {
	stroke-dasharray: 140 540;
	stroke-dashoffset: -474;
	stroke-width: 8px;
	fill: transparent;
	stroke: #19f6e8;
	border-bottom: 5px solid black;
	transition: stroke-width 1s, stroke-dashoffset 1s, stroke-dasharray 1s;
  }
  .text {
	font-family: 'Roboto Condensed';
	font-size: 22px;
	line-height: 32px;
	letter-spacing: 8px;
	color: #fff;
	top: -48px;
	position: relative;
  }
  .svg-wrapper:hover .shape {
	stroke-width: 2px;
	stroke-dashoffset: 0;
	stroke-dasharray: 760;
  }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

                <div class="svg-wrapper">
                      @svg class="shape" height="60" width="320" 
                    <div class="text" style="color:#fff;">ZACH SAUCIER</div>
                  </div>
                             </div>
    </body>
</html>
