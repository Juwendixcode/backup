<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kuali') }} - Store Page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<meta name="keywords" content="Kuali Store Page" />
	<!--css-->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/jquery.countdown.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
	<!--/css-->
	<!--js-->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/jquery.countdown.js') }}"></script>
	<script src="{{ asset('js/script.js') }}"></script>
	<!--js-->
	<!-- webfonts -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	@yield('content')
</body>
</html>