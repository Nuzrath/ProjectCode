<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Institute Management System	</title>
	
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
</head>

<body>
@yield('content')


@include('inc.footer')

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
