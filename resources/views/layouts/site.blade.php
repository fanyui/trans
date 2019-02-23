<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="desktop landscape">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'OmniNuance Translations') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}" ></script>
    
    <script src="{{ asset('js/jquery-migrate-1.2.1.js') }}" ></script>

    <script src="{{ asset('js/device.min.js') }}" ></script>

    <script src="js/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
  <!-- <script src="js/4o300efCt-CXoq1JEC-sVReFz48.js"></script> -->

    <script src="{{ asset('js/jnm.js') }}" ></script>
    <script src="{{ asset('js/gtm.js') }}" ></script>
    <script src="{{ asset('js/cdn-cgi.js') }}" ></script>
    <script src="{{ asset('js/ec.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/grid.css') }}" rel="stylesheet">
    <link href="{{ asset('css/camera.css') }}" rel="stylesheet">
    <link href="{{ asset('css/google-map.css') }}" rel="stylesheet">
    <link href="{{ asset('css/linecons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mailform.css') }}" rel="stylesheet">

<!-- favicon -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">


</head>
<body>
    <div class="page">
        <!--========================================================
                                    HEADER
        =========================================================-->
        <header class=" {{ Request::is('/') ? 'abs' : 'header-bg'  }}">
            <div id="stuck_container" class="stuck_container">
              <div class="container">
                <div class="brand">
                  <h1 class="brand_name">
                    <a href="./">
                      <img class="logo" width="200" src="{{ asset('images/omninuance.png') }}" alt="OmniNuance">
                    </a>
                  </h1>
                </div>

                <nav class="nav">
                  <ul class="sf-menu" data-type="navbar">
                    <li class="{{ Request::is('/about') ? 'active' : ''  }}">
                      <a href="{{route('about')}} ">About</a>
                    </li>

                    <li class="{{ Request::is('/services') ? 'active' : ''  }}">
                      <a href="{{route
                      ('services')}}">Services</a>
                      <ul>
                        <li class="{{ Request::is('/') ? 'active' : ''  }}">
                        <a href="./">Multilingual</a>
                        <ul>
                          <li>
                            <a href="#">Advertising/Marketing Translation</a>
                          </li>
                          <li>
                            <a href="#">Technical Translation</a>
                          </li>
                          <li>
                            <a href="#">Scientific and Medical Translation</a>
                          </li>
                          <li>
                            <a href="#">Financial, Economical and Legal</a>
                          </li>
                          <li>
                            <a href="#">Sworn Translation</a>
                          </li>
                          <li>
                            <a href="#">Website Translation</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    </li>

                    
                    <li >
                      <a href="./">Interpreting</a>
                      <ul>
                        <li>
                          <a href="#"> Simultaneous Interpreting</a>
                        </li>
                        <li>
                          <a href="#">Whispered Interpreting</a>
                        </li>
                        <li>
                          <a href="#">Consecutive Interpreting</a>
                        </li>
                      </ul>
                    </li>
                    <li class="{{ Request::is('/language') ? 'active' : ''  }}">
                      <a href="{{route('language')}}">Languages</a>
                    </li>
                    <li>
                      <a href="index-1.html">Industries</a>
                    </li>


                    <li class="{{ Request::is('/contact-us') ? 'active' : ''  }}">
                      <a href="{{route('contact')}}">Contact Us</a>
                    </li>

                    <li class="{{ Request::is('/login') ? 'active' : ''  }}">
                      <a href="{{route('login')}} ">Login</a>
                      <ul>
                        <li> <a href="{{route('login')}}" > Client Portal </a></li>
                        <li> <a href="{{route('login')}}">  Provider Portal </a></li>
                      </ul>
                    </li>
                  <li>
              <select class="form-control" name="lang">
                <option> EN</option>
                <option> FR</option>
                <option> DE</option>
              </select>
            </li>
                  </ul>
                </nav>
              </div>
            </div>
        </header>
       

        <main>
            @yield('content')
        </main>
        <!--========================================================
                            FOOTER
        =========================================================-->
        <footer>
            <div class="container tc">

              <ul class="social-list">

                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                <li><a href="#"><span class="fa fa-rss"></span></a></li>
              </ul>
              <p class="copy"><span>OmniNuance Translations</span> © <span id="copyright-year"></span> • <a href="index-5.html">Privacy Policy</a></p>
            </div>
        </footer>
    </div>


    @yield('footerScript')
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c6f59643341d22d9ce583a7/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!--     @yield('script')
 --></body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
