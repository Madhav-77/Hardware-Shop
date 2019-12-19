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

  {{-- -------------------------------------------------------- --}}
  <link href="//cdn.shopify.com/s/files/1/2073/1511/t/14/assets/jquery-ui.css?0" rel="stylesheet" type="text/css" media="all" />
    <link href="//cdn.shopify.com/s/files/1/2073/1511/t/14/assets/bootstrap.min.css?0" rel="stylesheet" type="text/css" media="all" /> 
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    


<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Raleway:300,400,500,600,700,800|Lato:300,400,700,800" rel="stylesheet" type="text/css" media="all" />


    <link href="//cdn.shopify.com/s/files/1/2073/1511/t/14/assets/stylesheet.css?0" rel="stylesheet" type="text/css" media="all" />
    <link href="//cdn.shopify.com/s/files/1/2073/1511/t/14/assets/slideshow.css?0" rel="stylesheet" type="text/css" media="all" />
    <link href="//cdn.shopify.com/s/files/1/2073/1511/t/14/assets/animate.css?0" rel="stylesheet" type="text/css" media="all" />
    <link href="//cdn.shopify.com/s/files/1/2073/1511/t/14/assets/owl.carousel.css?0" rel="stylesheet" type="text/css" media="all" />
    <link href="//cdn.shopify.com/s/files/1/2073/1511/t/14/assets/testimonials.css?0" rel="stylesheet" type="text/css" media="all" />
    <link href="//cdn.shopify.com/s/files/1/2073/1511/t/14/assets/product.css?0" rel="stylesheet" type="text/css" media="all" />
    <link href="//cdn.shopify.com/s/files/1/2073/1511/t/14/assets/layerednavigation.css?0" rel="stylesheet" type="text/css" media="all" />    
    <link href="//cdn.shopify.com/s/files/1/2073/1511/t/14/assets/custommenu.css?0" rel="stylesheet" type="text/css" media="all" />
    
    <link href="//cdn.shopify.com/s/files/1/2073/1511/t/14/assets/owl.transitions.css?0" rel="stylesheet" type="text/css" media="all" />
    <link href="//cdn.shopify.com/s/files/1/2073/1511/t/14/assets/quickview.css?0" rel="stylesheet" type="text/css" media="all" />
    <link href="//cdn.shopify.com/s/files/1/2073/1511/t/14/assets/magnific-popup.css?0" rel="stylesheet" type="text/css" media="all" />
    <link href="//cdn.shopify.com/s/files/1/2073/1511/t/14/assets/custom.css?0" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.3/toastr.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet" type="text/css" media="all" />
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.9/jquery.bxslider.min.css" rel="stylesheet" type="text/css" media="all" />
    

</head>
<style>
#gallery {
  padding-top: 0.7rem;
}

</style>
<script type="text/javascript">
  $(document).ready(function() {
    $(".product-tabs-container-slider .tabs.1498658243921 li:first").addClass("active");
    $(".owl-demo-tabproduct.1498658243921").owlCarousel({
      items: 4,
      autoPlay: false,
      slideSpeed: 3000,
      navigation: true,
      paginationNumbers: true,
      pagination: false,
      stopOnHover: false,
      itemsDesktop: [1199, 4],
      itemsDesktopSmall: [991, 3],
      itemsTablet: [768, 2],
      itemsMobile: [480, 1],
      navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    });
  });
</script>
<body>
    <div class="navbar-static">
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
                        <div class="col s12 m4">
                            <div class="card">
                                <div class="card-image">
                                    <a href="#"><img src="{{url('background2.jpg')}}"></a>
                                </div>
                                <div class="card-action">
                                <a href="#">Door Pull</a>
                                </div>
                            </div>
                        </div>
                        <div class=" col s12 m4">
                            <div class="card">
                                <div class="card-image">
                                <a href="#"><img src="{{url('background2.jpg')}}"></a>
                                </div>
                                <div class="card-action">
                                <a href="#">Rose Handle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                
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
                
                  <div id="shopify-section-1498658243921" class="shopify-section index-section"><div class="row-1498658243921 ">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-12 col-md-12">
                          <script type="text/javascript">
                            $(document).ready(function() {
                              $(".tab_content.1498658243921").hide();
                              $(".tab_content.1498658243921:first").show();
                              $("ul.tabs.1498658243921 li").click(function() {
                                $("ul.tabs.1498658243921 li").removeClass("active");
                                $(this).addClass("active");
                                $(".tab_content.1498658243921").hide();
                                $(".tab_content.1498658243921").removeClass("animate1 wiggle");
                                var activeTab = $(this).attr("rel");
                                $("#" + activeTab).addClass("animate1 wiggle");
                                $("#" + activeTab).show();
                              });
                            });
                          </script>
                          <div class="product-tabs-container-slider quickview-added">
                            <div class="title-product-tabs">
                                
                              <div class="module-title">
                                <h2>Featured Products</h2>
                              </div>
                              
                              <ul class="tabs 1498658243921">
                                
                                
                                
                                
                                <li rel="tab_kids_product">
                                  Kids
                                </li>
                                
                                
                                <li rel="tab_men_product">
                                  Men
                                </li>
                                
                                
                                <li rel="tab_women_product">
                                  Women
                                </li>
                                
                              </ul>
                            </div>
                            <!-- tab-title -->
                            <div class="tab_container">
                              
                              
                              <div id="tab_kids_product" class="tab_content 1498658243921">
                                <div class="row">
                                  <div class="owl-demo-tabproduct 1498658243921">
                                    
                                    
                                    <div class="row_items">
                                      
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="product-layout product-grid" data-aos="fade-zoom-in"  data-aos-delay="0" data-aos-duration="600" data-aos-anchor-placement="top-top">
                    <div class="product-thumb">
                      <div class="image">
                        
                        
                        
                                  
                        
                        
                        
                        <div id="myCarousel1498658243921-9231534091" class="carousel slide img-other" data-ride="carousel" data-interval="false">
                          <!-- product inside carousel -->
                          <div class="carousel-inner" role="listbox">
                            
                            <div class="item active">
                              <a class="img1 image1" title="Dras neque ullam toncorper" href="/products/dras-neque-ullam-toncorper">
                                <img class="" src="//cdn.shopify.com/s/files/1/2073/1511/products/8-600x773_4c8f50eb-881f-4fbb-9d73-34d2dd74ff20_x800.jpg?v=1498334135" alt="">
                              </a>
                            </div>
                            
                            <div class="item ">
                              <a class="img1 image1" title="Dras neque ullam toncorper" href="/products/dras-neque-ullam-toncorper">
                                <img class="" src="//cdn.shopify.com/s/files/1/2073/1511/products/9-600x773_17221c50-ba26-419d-ac35-75456fb9c6a2_x800.jpg?v=1498334135" alt="">
                              </a>
                            </div>
                            
                            <div class="item ">
                              <a class="img1 image1" title="Dras neque ullam toncorper" href="/products/dras-neque-ullam-toncorper">
                                <img class="" src="//cdn.shopify.com/s/files/1/2073/1511/products/10-600x773_737cba61-31dd-4181-9923-b0f44e270147_x800.jpg?v=1498334135" alt="">
                              </a>
                            </div>
                            
                            <div class="item ">
                              <a class="img1 image1" title="Dras neque ullam toncorper" href="/products/dras-neque-ullam-toncorper">
                                <img class="" src="//cdn.shopify.com/s/files/1/2073/1511/products/13-600x773_0a2757f4-4e3d-4e61-a905-f892b68662a4_x800.jpg?v=1498334135" alt="">
                              </a>
                            </div>
                            
                            <div class="item ">
                              <a class="img1 image1" title="Dras neque ullam toncorper" href="/products/dras-neque-ullam-toncorper">
                                <img class="" src="//cdn.shopify.com/s/files/1/2073/1511/products/19-600x773_4a8759b3-af6b-43e7-98ad-539c19063258_x800.jpg?v=1498334135" alt="">
                              </a>
                            </div>
                            
                            <div class="item ">
                              <a class="img1 image1" title="Dras neque ullam toncorper" href="/products/dras-neque-ullam-toncorper">
                                <img class="" src="//cdn.shopify.com/s/files/1/2073/1511/products/3-600x773_6e6df0be-327b-4e14-ad85-c9cfce63f00f_x800.jpg?v=1498334135" alt="">
                              </a>
                            </div>
                            
                            <div class="item ">
                              <a class="img1 image1" title="Dras neque ullam toncorper" href="/products/dras-neque-ullam-toncorper">
                                <img class="" src="//cdn.shopify.com/s/files/1/2073/1511/products/4-600x773_52fe5b48-251d-47db-a98c-7fa3fba6dd6a_x800.jpg?v=1498334135" alt="">
                              </a>
                            </div>
                            
                          </div>
                          <!-- Left and right controls -->
                          <a class="left carousel-control" href="#myCarousel1498658243921-9231534091" role="button" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#myCarousel1498658243921-9231534091" role="button" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                        
                        <div class="actions-link">
                          <a class="btn-cart" data-toggle="tooltip" data-loading-text="Loading..." title="Add to Cart" onclick="cart.add('33122479435');"></a>
                          
                  <a class="btn-wishlist" title="Add to Wish List" data-original-title="Add to Wish List" data-toggle="tooltip" onclick="location.href='/account/login'"></a>
                  
                          <a class="btn-compare" title="View Details" data-toggle="tooltip" onclick="location.href='/products/dras-neque-ullam-toncorper';"></a>
                          <div class="qv-button-container">
                            <button class="btn-quickview quickview" type="button" title="" data-toggle="modal" data-target="#productModal" data-productinfo='{&quot;id&quot;:9231534091,&quot;title&quot;:&quot;Dras neque ullam toncorper&quot;,&quot;handle&quot;:&quot;dras-neque-ullam-toncorper&quot;,&quot;description&quot;:&quot;\u003cp\u003eRedefine your workday with the Palm Treo Pro smartphone. Perfectly balanced, you can respond to business and personal email, stay on top of appointments and contacts, and use Wi-Fi or GPS when you’re out and about. Then watch a video on YouTube, catch up with news and sports on the web, or listen to a few songs. Balance your work and play the way you like it, with the Palm Treo Pro.\u003c\/p\u003e\n\u003cp\u003e\u003cstrong\u003eFeatures\u003c\/strong\u003e\u003c\/p\u003e\n\u003cul\u003e\n\u003cli\u003eWindows Mobile® 6.1 Professional Edition\u003c\/li\u003e\n\u003cli\u003eQualcomm® MSM7201 400MHz Processor\u003c\/li\u003e\n\u003cli\u003e320x320 transflective colour TFT touchscreen\u003c\/li\u003e\n\u003cli\u003eHSDPA\/UMTS\/EDGE\/GPRS\/GSM radio\u003c\/li\u003e\n\u003cli\u003eTri-band UMTS — 850MHz, 1900MHz, 2100MHz\u003c\/li\u003e\n\u003cli\u003eQuad-band GSM — 850\/900\/1800\/1900\u003c\/li\u003e\n\u003cli\u003e802.11b\/g with WPA, WPA2, and 801.1x authentication\u003c\/li\u003e\n\u003cli\u003eBuilt-in GPS\u003c\/li\u003e\n\u003cli\u003eBluetooth Version: 2.0 + Enhanced Data Rate\u003c\/li\u003e\n\u003cli\u003e256MB storage (100MB user available), 128MB RAM\u003c\/li\u003e\n\u003cli\u003e2.0 megapixel camera, up to 8x digital zoom and video capture\u003c\/li\u003e\n\u003cli\u003eRemovable, rechargeable 1500mAh lithium-ion battery\u003c\/li\u003e\n\u003cli\u003eUp to 5.0 hours talk time and up to 250 hours standby\u003c\/li\u003e\n\u003cli\u003eMicroSDHC card expansion (up to 32GB supported)\u003c\/li\u003e\n\u003cli\u003eMicroUSB 2.0 for synchronization and charging\u003c\/li\u003e\n\u003cli\u003e3.5mm stereo headset jack\u003c\/li\u003e\n\u003cli\u003e60mm (W) x 114mm (L) x 13.5mm (D) \/ 133g\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003cp\u003e\u003cspan\u003e [video]https:\/\/www.youtube.com\/watch?v=Od8ZEmlDSn8[\/video]\u003c\/span\u003e\u003c\/p\u003e&quot;,&quot;published_at&quot;:&quot;2017-06-14T20:06:54-04:00&quot;,&quot;created_at&quot;:&quot;2017-06-24T15:55:33-04:00&quot;,&quot;vendor&quot;:&quot;Palm&quot;,&quot;type&quot;:&quot;&quot;,&quot;tags&quot;:[&quot;caps&quot;,&quot;color_blue&quot;,&quot;color_white&quot;,&quot;Fashion&quot;,&quot;men&quot;,&quot;mufflers&quot;,&quot;price_500&quot;,&quot;shirts&quot;,&quot;trousers&quot;],&quot;price&quot;:33799,&quot;price_min&quot;:33799,&quot;price_max&quot;:63799,&quot;available&quot;:true,&quot;price_varies&quot;:true,&quot;compare_at_price&quot;:null,&quot;compare_at_price_min&quot;:0,&quot;compare_at_price_max&quot;:0,&quot;compare_at_price_varies&quot;:false,&quot;variants&quot;:[{&quot;id&quot;:33122479435,&quot;title&quot;:&quot;S \/ White&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;White&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:18635667019,&quot;product_id&quot;:9231534091,&quot;position&quot;:6,&quot;created_at&quot;:&quot;2017-06-24T15:55:35-04:00&quot;,&quot;updated_at&quot;:&quot;2017-06-24T15:55:35-04:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:600,&quot;height&quot;:773,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/2073\/1511\/products\/3-600x773_6e6df0be-327b-4e14-ad85-c9cfce63f00f.jpg?v=1498334135&quot;,&quot;variant_ids&quot;:[33122479435]},&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - S \/ White&quot;,&quot;public_title&quot;:&quot;S \/ White&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;White&quot;],&quot;price&quot;:33799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122479499,&quot;title&quot;:&quot;S \/ Black&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:18635666763,&quot;product_id&quot;:9231534091,&quot;position&quot;:2,&quot;created_at&quot;:&quot;2017-06-24T15:55:35-04:00&quot;,&quot;updated_at&quot;:&quot;2017-06-24T15:55:35-04:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:600,&quot;height&quot;:773,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/2073\/1511\/products\/9-600x773_17221c50-ba26-419d-ac35-75456fb9c6a2.jpg?v=1498334135&quot;,&quot;variant_ids&quot;:[33122479499]},&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - S \/ Black&quot;,&quot;public_title&quot;:&quot;S \/ Black&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Black&quot;],&quot;price&quot;:33799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122479563,&quot;title&quot;:&quot;S \/ Green&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Green&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:18635666827,&quot;product_id&quot;:9231534091,&quot;position&quot;:3,&quot;created_at&quot;:&quot;2017-06-24T15:55:35-04:00&quot;,&quot;updated_at&quot;:&quot;2017-06-24T15:55:35-04:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:600,&quot;height&quot;:773,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/2073\/1511\/products\/10-600x773_737cba61-31dd-4181-9923-b0f44e270147.jpg?v=1498334135&quot;,&quot;variant_ids&quot;:[33122479563]},&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - S \/ Green&quot;,&quot;public_title&quot;:&quot;S \/ Green&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Green&quot;],&quot;price&quot;:33799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122479627,&quot;title&quot;:&quot;S \/ Red&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Red&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:18635666891,&quot;product_id&quot;:9231534091,&quot;position&quot;:4,&quot;created_at&quot;:&quot;2017-06-24T15:55:35-04:00&quot;,&quot;updated_at&quot;:&quot;2017-06-24T15:55:35-04:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:600,&quot;height&quot;:773,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/2073\/1511\/products\/13-600x773_0a2757f4-4e3d-4e61-a905-f892b68662a4.jpg?v=1498334135&quot;,&quot;variant_ids&quot;:[33122479627]},&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - S \/ Red&quot;,&quot;public_title&quot;:&quot;S \/ Red&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Red&quot;],&quot;price&quot;:33799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122479691,&quot;title&quot;:&quot;S \/ Blue&quot;,&quot;option1&quot;:&quot;S&quot;,&quot;option2&quot;:&quot;Blue&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:{&quot;id&quot;:18635666955,&quot;product_id&quot;:9231534091,&quot;position&quot;:5,&quot;created_at&quot;:&quot;2017-06-24T15:55:35-04:00&quot;,&quot;updated_at&quot;:&quot;2017-06-24T15:55:35-04:00&quot;,&quot;alt&quot;:null,&quot;width&quot;:600,&quot;height&quot;:773,&quot;src&quot;:&quot;https:\/\/cdn.shopify.com\/s\/files\/1\/2073\/1511\/products\/19-600x773_4a8759b3-af6b-43e7-98ad-539c19063258.jpg?v=1498334135&quot;,&quot;variant_ids&quot;:[33122479691]},&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - S \/ Blue&quot;,&quot;public_title&quot;:&quot;S \/ Blue&quot;,&quot;options&quot;:[&quot;S&quot;,&quot;Blue&quot;],&quot;price&quot;:33799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122479755,&quot;title&quot;:&quot;M \/ White&quot;,&quot;option1&quot;:&quot;M&quot;,&quot;option2&quot;:&quot;White&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - M \/ White&quot;,&quot;public_title&quot;:&quot;M \/ White&quot;,&quot;options&quot;:[&quot;M&quot;,&quot;White&quot;],&quot;price&quot;:43799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122479819,&quot;title&quot;:&quot;M \/ Black&quot;,&quot;option1&quot;:&quot;M&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - M \/ Black&quot;,&quot;public_title&quot;:&quot;M \/ Black&quot;,&quot;options&quot;:[&quot;M&quot;,&quot;Black&quot;],&quot;price&quot;:43799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122479883,&quot;title&quot;:&quot;M \/ Green&quot;,&quot;option1&quot;:&quot;M&quot;,&quot;option2&quot;:&quot;Green&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - M \/ Green&quot;,&quot;public_title&quot;:&quot;M \/ Green&quot;,&quot;options&quot;:[&quot;M&quot;,&quot;Green&quot;],&quot;price&quot;:43799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122479947,&quot;title&quot;:&quot;M \/ Red&quot;,&quot;option1&quot;:&quot;M&quot;,&quot;option2&quot;:&quot;Red&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - M \/ Red&quot;,&quot;public_title&quot;:&quot;M \/ Red&quot;,&quot;options&quot;:[&quot;M&quot;,&quot;Red&quot;],&quot;price&quot;:43799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122480011,&quot;title&quot;:&quot;M \/ Blue&quot;,&quot;option1&quot;:&quot;M&quot;,&quot;option2&quot;:&quot;Blue&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - M \/ Blue&quot;,&quot;public_title&quot;:&quot;M \/ Blue&quot;,&quot;options&quot;:[&quot;M&quot;,&quot;Blue&quot;],&quot;price&quot;:43799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122480075,&quot;title&quot;:&quot;L \/ White&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;White&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - L \/ White&quot;,&quot;public_title&quot;:&quot;L \/ White&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;White&quot;],&quot;price&quot;:53799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122480139,&quot;title&quot;:&quot;L \/ Black&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - L \/ Black&quot;,&quot;public_title&quot;:&quot;L \/ Black&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Black&quot;],&quot;price&quot;:53799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122480203,&quot;title&quot;:&quot;L \/ Green&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Green&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - L \/ Green&quot;,&quot;public_title&quot;:&quot;L \/ Green&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Green&quot;],&quot;price&quot;:53799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122480267,&quot;title&quot;:&quot;L \/ Red&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Red&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - L \/ Red&quot;,&quot;public_title&quot;:&quot;L \/ Red&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Red&quot;],&quot;price&quot;:53799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122480331,&quot;title&quot;:&quot;L \/ Blue&quot;,&quot;option1&quot;:&quot;L&quot;,&quot;option2&quot;:&quot;Blue&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - L \/ Blue&quot;,&quot;public_title&quot;:&quot;L \/ Blue&quot;,&quot;options&quot;:[&quot;L&quot;,&quot;Blue&quot;],&quot;price&quot;:53799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122480395,&quot;title&quot;:&quot;XL \/ White&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;White&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - XL \/ White&quot;,&quot;public_title&quot;:&quot;XL \/ White&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;White&quot;],&quot;price&quot;:63799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122480459,&quot;title&quot;:&quot;XL \/ Black&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Black&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - XL \/ Black&quot;,&quot;public_title&quot;:&quot;XL \/ Black&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Black&quot;],&quot;price&quot;:63799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122480523,&quot;title&quot;:&quot;XL \/ Green&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Green&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - XL \/ Green&quot;,&quot;public_title&quot;:&quot;XL \/ Green&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Green&quot;],&quot;price&quot;:63799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122480587,&quot;title&quot;:&quot;XL \/ Red&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Red&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - XL \/ Red&quot;,&quot;public_title&quot;:&quot;XL \/ Red&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Red&quot;],&quot;price&quot;:63799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;},{&quot;id&quot;:33122480651,&quot;title&quot;:&quot;XL \/ Blue&quot;,&quot;option1&quot;:&quot;XL&quot;,&quot;option2&quot;:&quot;Blue&quot;,&quot;option3&quot;:null,&quot;sku&quot;:&quot;&quot;,&quot;requires_shipping&quot;:true,&quot;taxable&quot;:true,&quot;featured_image&quot;:null,&quot;available&quot;:true,&quot;name&quot;:&quot;Dras neque ullam toncorper - XL \/ Blue&quot;,&quot;public_title&quot;:&quot;XL \/ Blue&quot;,&quot;options&quot;:[&quot;XL&quot;,&quot;Blue&quot;],&quot;price&quot;:63799,&quot;weight&quot;:0,&quot;compare_at_price&quot;:null,&quot;inventory_quantity&quot;:1,&quot;inventory_management&quot;:null,&quot;inventory_policy&quot;:&quot;deny&quot;,&quot;barcode&quot;:&quot;&quot;}],&quot;images&quot;:[&quot;\/\/cdn.shopify.com\/s\/files\/1\/2073\/1511\/products\/8-600x773_4c8f50eb-881f-4fbb-9d73-34d2dd74ff20.jpg?v=1498334135&quot;,&quot;\/\/cdn.shopify.com\/s\/files\/1\/2073\/1511\/products\/9-600x773_17221c50-ba26-419d-ac35-75456fb9c6a2.jpg?v=1498334135&quot;,&quot;\/\/cdn.shopify.com\/s\/files\/1\/2073\/1511\/products\/10-600x773_737cba61-31dd-4181-9923-b0f44e270147.jpg?v=1498334135&quot;,&quot;\/\/cdn.shopify.com\/s\/files\/1\/2073\/1511\/products\/13-600x773_0a2757f4-4e3d-4e61-a905-f892b68662a4.jpg?v=1498334135&quot;,&quot;\/\/cdn.shopify.com\/s\/files\/1\/2073\/1511\/products\/19-600x773_4a8759b3-af6b-43e7-98ad-539c19063258.jpg?v=1498334135&quot;,&quot;\/\/cdn.shopify.com\/s\/files\/1\/2073\/1511\/products\/3-600x773_6e6df0be-327b-4e14-ad85-c9cfce63f00f.jpg?v=1498334135&quot;,&quot;\/\/cdn.shopify.com\/s\/files\/1\/2073\/1511\/products\/4-600x773_52fe5b48-251d-47db-a98c-7fa3fba6dd6a.jpg?v=1498334135&quot;],&quot;featured_image&quot;:&quot;\/\/cdn.shopify.com\/s\/files\/1\/2073\/1511\/products\/8-600x773_4c8f50eb-881f-4fbb-9d73-34d2dd74ff20.jpg?v=1498334135&quot;,&quot;options&quot;:[&quot;Size&quot;,&quot;Color&quot;],&quot;content&quot;:&quot;\u003cp\u003eRedefine your workday with the Palm Treo Pro smartphone. Perfectly balanced, you can respond to business and personal email, stay on top of appointments and contacts, and use Wi-Fi or GPS when you’re out and about. Then watch a video on YouTube, catch up with news and sports on the web, or listen to a few songs. Balance your work and play the way you like it, with the Palm Treo Pro.\u003c\/p\u003e\n\u003cp\u003e\u003cstrong\u003eFeatures\u003c\/strong\u003e\u003c\/p\u003e\n\u003cul\u003e\n\u003cli\u003eWindows Mobile® 6.1 Professional Edition\u003c\/li\u003e\n\u003cli\u003eQualcomm® MSM7201 400MHz Processor\u003c\/li\u003e\n\u003cli\u003e320x320 transflective colour TFT touchscreen\u003c\/li\u003e\n\u003cli\u003eHSDPA\/UMTS\/EDGE\/GPRS\/GSM radio\u003c\/li\u003e\n\u003cli\u003eTri-band UMTS — 850MHz, 1900MHz, 2100MHz\u003c\/li\u003e\n\u003cli\u003eQuad-band GSM — 850\/900\/1800\/1900\u003c\/li\u003e\n\u003cli\u003e802.11b\/g with WPA, WPA2, and 801.1x authentication\u003c\/li\u003e\n\u003cli\u003eBuilt-in GPS\u003c\/li\u003e\n\u003cli\u003eBluetooth Version: 2.0 + Enhanced Data Rate\u003c\/li\u003e\n\u003cli\u003e256MB storage (100MB user available), 128MB RAM\u003c\/li\u003e\n\u003cli\u003e2.0 megapixel camera, up to 8x digital zoom and video capture\u003c\/li\u003e\n\u003cli\u003eRemovable, rechargeable 1500mAh lithium-ion battery\u003c\/li\u003e\n\u003cli\u003eUp to 5.0 hours talk time and up to 250 hours standby\u003c\/li\u003e\n\u003cli\u003eMicroSDHC card expansion (up to 32GB supported)\u003c\/li\u003e\n\u003cli\u003eMicroUSB 2.0 for synchronization and charging\u003c\/li\u003e\n\u003cli\u003e3.5mm stereo headset jack\u003c\/li\u003e\n\u003cli\u003e60mm (W) x 114mm (L) x 13.5mm (D) \/ 133g\u003c\/li\u003e\n\u003c\/ul\u003e\n\u003cp\u003e\u003cspan\u003e [video]https:\/\/www.youtube.com\/watch?v=Od8ZEmlDSn8[\/video]\u003c\/span\u003e\u003c\/p\u003e&quot;}' data-original-title="Quick view"></button>
                          </div>
                        </div>
                      </div>
                      <!-- images-container -->
                      <div class="product-inner">
                        <div class="product-caption">
                          <h2 class="product-name">
                            <a href="/products/dras-neque-ullam-toncorper">Dras neque ullam toncorper</a>
                          </h2>
                          <div class="ratings">
                            <div class="rating-box">
                              
                  <span class="shopify-product-reviews-badge" data-id="9231534091"></span>
                  
                            </div>
                          </div>
                          <p class="price">
                            
                            <span class=money>$337.99</span>
                            
                          </p>
                        </div>
                      </div>
                      <!--des-container-->
                    </div>
                    <!-- item-inner -->
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

  $(document).ready(function(){
      $('.carousel').carousel({
            dist:0,
            shift:0,
            padding:20,

      });
    });
        
</script>
  </body>
</html>
