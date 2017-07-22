<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#92e434">
    <title>Arep Nandur</title>
    <link href="{{url()}}/img/logo.png" rel="shortcut icon">
    <!-- CSS  -->
    <link href="{{url()}}/min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="{{url()}}/min/custom-min.css" type="text/css" rel="stylesheet" >
    <link href="{{url()}}/css/materialize.css" type="text/css" rel="stylesheet" >

    <script src="jquery.min.js"></script>

</head>
<body id="top" class="scrollspy">
	<!-- Pre Loader -->
	<div id="loader-wrapper">
	    <div id="loader"></div>
	 
	    <div class="loader-section section-left"></div>
	    <div class="loader-section section-right"></div>
	 
	</div>

	<!--Navigation-->
	 <div class="navbar-fixed">
	    <nav id="nav_f" class="default_color" role="navigation">
	        <div class="container">
	            <div class="nav-wrapper">
	            <a href="/" id="logo-container" class="brand-logo"><img class="activator" src="{{url()}}/img/logo2.png"></a>
	                <ul class="right hide-on-med-and-down">
	                    
	                    <li><a href="/simulasi">Simulasi</a></li>
	                    <li><a href="/pupuk">PupukPedia</a></li>
	                    
	                </ul>
	                <ul id="nav-mobile" class="side-nav">
	                    
	                    <li><a href="/simulasi">Simulasi</a></li>
	                    <li><a href="/pupuk">PupukPedia</a></li>
	                </ul>
	            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
	            </div>
	        </div>
	    </nav>
	</div>
	@yield('content')

	<!--Footer-->
	<footer id="contact" class="page-footer default_color scrollspy">
	    <div class="footer-copyright default_color">
	        <div class="container">
	            @2015 RPL-SI-C Kelompok7 
	        </div>
	    </div>
	</footer>

    <!--  Scripts-->
    <script src="{{url()}}/min/plugin-min.js"></script>
    <script src="{{url()}}/min/custom-min.js"></script>
    <script src="{{url()}}/js/jquery-1.11.2.min.js"></script>
    <script src="{{url()}}/js/bootstrap.min.js"></script>

</body>