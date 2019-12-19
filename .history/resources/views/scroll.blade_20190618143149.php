<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>jQuery Smart Smooth Scroll Demo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans';
        }

        nav {
            position: fixed;
            width: 100%;
            height: 64px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #222;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        nav ul li a {
            display: block;
            margin: 0 15px;
            text-decoration: none;
            color: dodgerblue;
            font-size: 18px;
            text-transform: uppercase
        }

        nav ul li.active {
            border-bottom: 2px solid #fff
        }

        div {
            height: 500px;
            width: 100%;
            background: dodgerblue;
            text-align: center;
            line-height: 500px;
            text-transform: uppercase;
            color: #FFF;
            font-size: 35px;
            border-bottom: 10px solid #222
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <!-- link added to parent(li) -->
            <li><a href="#!" data-scroll="page1">page1</a></li>
            <li><a href="#!" data-scroll="#page2">page2</a></li><!-- u can use # or not -->
            <li><a href="#!" data-scroll="page3">page3</a></li>
            <li><a href="#!" data-scroll="#page4">page4</a></li>
            <li><a href="#!" data-scroll="page5">page5</a></li>
        </ul>
    </nav>
    <div id="page1" class="carousel slide carouselExampleIndicators" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target=".carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target=".carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target=".carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://jpeg.org/images/jpeg2000-home.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://jpeg.org/images/jpeg2000-home.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://jpeg.org/images/jpeg2000-home.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href=".carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href=".carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    <div id="page2">page2</div>
    <div id="page3">page3</div>
    <div id="page4">page4</div>
    <div id="page5">page5</div>
    <script src="{{ URL::asset('https://code.jquery.com/jquery-3.3.1.min.js')}}"  integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <script>/*
        Creator: Mohamed Rabie Rabie Elmdary
        About:  Mean stack developer
        github: https://github.com/MohamedElmdary
        codepen: https://codepen.io/mohamed9714/
        License: MIT
    */
    var smartScroll = (function ($, $w) {
        "use strict";
        var w       =   $($w),
            links   =   $("*[data-scroll]");
         // helper function to select element with jquery from dom
        // accepts [data-scroll] starts with # or without eg. #id || id
        function selectEelement(link) {
            return $("#" + link.data("scroll").replace(/^#+/, ""));
        }
         /* 
            main plugin function
            uses animation (jQuery function)
            provide error in case of couldn't find the specific [id] in dom
            id = [data-scroll] => value
        */
        function smartScroll(options, cb) {        
            if (links.length <= 0) throw new Error("data-scroll attr must be added");
            links.each(function () {
                var link = $(this);
                link.on("click", function (e) {
                    e.preventDefault(); 
                    var scrollTo = selectEelement(link);
                    try {
                        $("body, html").animate({
                            scrollTop: scrollTo.offset().top - options.offset
                        }, options.speed);
                    } catch (err) {
                        throw new Error("id:" +  link.data("scroll") + " cannot be found please make sure to add [data-scroll] attr value as id for an elemet");
                    }
                });
            });
            cb();
        }
         /*
            using window event api
            check which element should have active class
            byDefault it's enabled
        */
        function navItemsChooser(options) {
            links.each(function () {
                var link = selectEelement($(this));
                if (w.scrollTop() >= $(link).offset().top - options.offset - 10) {
                    $(this).parent().addClass(options.activeClass).siblings().removeClass(options.activeClass);
                }
            });
        }
           /* 
            main plugin function
            uses animation (jQuery function)
            provide error in case of couldn't find the specific [id] in dom
            id = [data-scroll] => value
            @param {object} options - smart scroll options
            @param {number} options.speed - smart scroll speed default is 500
            @param {number} options.offset - smart scroll elements offset
            @param {string} options.activeClass - active class name
        */
        function init(options, cb) {
            cb = typeof(cb) === "function"? cb : function () {return null;};
            if (typeof(options) === "function") {
                cb = options;
            }
            options = typeof(options) === "object"? options : {};
             var defaultOptions = {
                speed: options.speed|| 500,
                addActive: options.addActive|| true,
                activeClass: options.activeClass || "active",
                offset: options.offset || 100
            };
             smartScroll(defaultOptions, cb);
             if (defaultOptions.addActive) {
                navItemsChooser(defaultOptions);
                w.on("scroll", function () {
                    navItemsChooser(defaultOptions);
                });
            }
        }
         return {init: init};
    })(jQuery, window); 
    </script>
    <script>
        (function ($) {
            "use strict";
            // all parameters are optional
            smartScroll.init({
                speed: 700, // default 500
                addActive: true, // default true
                activeClass: "active", // default active
                offset: 150 // default 100
            }, function () {
                console.log("callback");
            });
        })(jQuery);
    </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
