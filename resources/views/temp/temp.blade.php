<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
       
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="/css/style.css" rel="stylesheet" />    
  <!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
<title>{{ config('app.name') }} - {{ config('app.subtitle') }}</title>
<!-- app.name which save as BICT and subtitle save as Institute portal--> 
	
	</head>
<body >

@yield('content')


<!--  Jquery Core Script -->
    <script src="/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="/js/custom.js"></script>

</body>
</html>