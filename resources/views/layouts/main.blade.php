<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
    <link href="{{ asset('template1/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('template1/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('template1/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('template1/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-4">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								@guest
									<li><a href="{{ route('login') }}"><i class="fa fa-crosshairs"></i> Login</a></li>
									<li><a href="{{ route('register') }}"><i class="fa fa-crosshairs"></i> Register</a></li>
								@else
									<li><a href="{{ url('/') }}"><i class="fa fa-crosshairs"></i> Nearby Shops</a></li>
									<li><a href="{{ url('/preferred-shop') }}"><i class="fa fa-star"></i> my preferred shops</a></li>
									<li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
								@endguest
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		
	</header><!--/header-->
	
	@yield('content')
	
</body>
</html>