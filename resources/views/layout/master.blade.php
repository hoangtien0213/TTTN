<!DOCTYPE html>

<html>

<head lang="en">
    <meta charset="utf-8">
    <!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{URL('/')}}/css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{URL('/')}}/css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="{{URL('/')}}/css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{URL('/')}}/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{URL('/')}}/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{URL('/')}}/css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    @yield('pageCss')
</head>
<body>
@include('layout.header')

@yield('content')


@include('layout.footer')


@section('pageJs')
<script src="{{URL('/')}}/js/jquery.min.js"></script>
		<script src="{{URL('/')}}/js/bootstrap.min.js"></script>
		<script src="{{URL('/')}}/js/slick.min.js"></script>
		<script src="{{URL('/')}}/js/nouislider.min.js"></script>
		<script src="{{URL('/')}}/js/jquery.zoom.min.js"></script>
		<script src="{{URL('/')}}/js/main.js"></script>
@show
</body>
</html>