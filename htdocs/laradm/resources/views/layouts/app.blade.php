<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kuali') }} - Home Page</title>
    
    <!-- Mobile Specifics --> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320"/>   

    <!-- Mobile Internet Explorer ClearType Technology -->
    <!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- Supersized -->
    <link href="{{ asset('css/supersized.css') }}" rel="stylesheet">
    <link href="{{ asset('css/supersized.shutter.css') }}" rel="stylesheet">

    <!-- FancyBox -->
    <link href="{{ asset('css/fancybox/jquery.fancybox.css') }}" rel="stylesheet">

    <!-- Font Icons -->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">

    <!-- Shortcodes -->
    <link href="{{ asset('css/shortcodes.css') }}" rel="stylesheet">

    <!-- Responsive -->
    <link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <!-- Supersized -->
    <link href="{{ asset('css/supersized.css') }}" rel="stylesheet">
    <link href="{{ asset('css/supersized.shutter.css') }}" rel="stylesheet">

    <!-- Google Font -->
    <link href="{{ asset('css/font-titilium.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="#">

    <link rel="apple-touch-icon" href="#">
    <link rel="apple-touch-icon" sizes="114x114" href="#">
    <link rel="apple-touch-icon" sizes="72x72" href="#">
    <link rel="apple-touch-icon" sizes="144x144" href="#">

    <meta name="description" content="Kuali Portofolio &amp; Project">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

</head>
<body>

    <div class="ole">
        <section id="jSplash">
            <div id="circle"></div>
        </section>
    </div>
    
    <header>
        <div class="sticky-nav">
            <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
            
            <div id="logo">
                <a id="goUp" href="#workone" title="Kuali | Portofolio One-Page">Kuali</a>
            </div>
            
            <nav id="menu">

                <ul class="goStore">
                    <li class="store">
                        <a href="{{url('/store')}}"><strong>Store</strong>&nbsp; <sup class="store">cs</sup></a>
                    </li>
                </ul>
                <ul id="menu-nav">
                    <li class="current"><a href="#workone">Portofolio</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                
            </nav>
            
        </div>
    </header>

    @yield('content')
    
    <!-- Scripts -->
    <!-- Modernizr -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/isotope.js') }}" type="text/javascript"></script>
    <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>

    <!-- Analytics -->
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'Insert Your Code']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
    <!-- End Analytics -->

    <!-- Js -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js') }}"></script> <!-- jQuery Core -->
    <script src="{{ asset('js/jquery1.9.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> <!-- Bootstrap -->
    <script src="{{ asset('js/supersized.3.2.7.min.js') }}"></script> <!-- Slider -->
    <script src="{{ asset('js/waypoints.js') }}"></script> <!-- WayPoints -->
    <script src="{{ asset('js/waypoints-sticky.js') }}"></script> <!-- Waypoints for Header -->
    <script src="{{ asset('js/jquery.isotope.js') }}"></script> <!-- Isotope Filter -->
    <script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script> <!-- Fancybox -->
    <script src="{{ asset('js/jquery.fancybox-media.js') }}"></script> <!-- Fancybox for Media -->
    <script src="{{ asset('js/jquery.tweet.js') }}"></script> <!-- Tweet -->
    <script src="{{ asset('js/plugins.js') }}"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
    <script src="{{ asset('js/main.js') }}"></script> <!-- Default JS -->
    <!-- End Js -->
</body>
</html>
