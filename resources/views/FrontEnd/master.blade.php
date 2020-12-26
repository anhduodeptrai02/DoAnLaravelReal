<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">


	<!-- Css Styles -->
	<link rel="stylesheet" href="{!! asset('css/bootstrap.min.css')!!}" type="text/css">
	<link rel="stylesheet" href="{!! asset('css/font-awesome.min.css')!!}" type="text/css">
	<link rel="stylesheet" href="{!! asset('css/themify-icons.css')!!}" type="text/css">
	<link rel="stylesheet" href="{!! asset('css/elegant-icons.css')!!}" type="text/css">
	<link rel="stylesheet" href="{!! asset('css/owl.carousel.min.css')!!}" type="text/css">
	<link rel="stylesheet" href="{!! asset('css/nice-select.css')!!}" type="text/css">
	<link rel="stylesheet" href="{!! asset('css/jquery-ui.min.css')!!}" type="text/css">
	<link rel="stylesheet" href="{!! asset('css/slicknav.min.css')!!}" type="text/css">
	<link rel="stylesheet" href="{!! asset('css/style.css')!!}" type="text/css">
    <link href="{!! asset('frontend/css/bootstrap.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('frontend/css/font-awesome.min.css')!!}" rel="stylesheet">
    <link href="{!! asset('frontend/css/prettyPhoto.css')!!}" rel="stylesheet">
    <link href="{!! asset('frontend/css/price-range.css')!!}" rel="stylesheet">
    <link href="{!! asset('frontend/css/animate.css')!!}" rel="stylesheet">
	<link href="{!! asset('frontend/css/main.css')!!}" rel="stylesheet">
	<link href="{!! asset('frontend/css/responsive.css')!!}" rel="stylesheet">     
</head><!--/head-->
<body>
	<!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    @yield('header')
    @yield('slider')
	<section class="product-shop spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                @yield('left')
				</div>
				
				<div class="col-lg-9 order-1 order-lg-2">
                @yield('right')

				</div>
			</div>
		</div>
	</section>
    <footer id="footer"><!--Footer-->
	
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fas fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © Bùi Hải Đường</p></div>
			</div>
		</div>
		
	</footer><!--/Footer-->

    
	<script src="{!! asset('js/jquery-3.3.1.min.js')!!}"></script>
    <script src="{!! asset('js/bootstrap.min.js')!!}"></script>
    <script src="{!! asset('js/jquery-ui.min.js')!!}"></script>
    <script src="{!! asset('js/jquery.countdown.min.js')!!}"></script>
    <script src="{!! asset('js/jquery.nice-select.min.js')!!}"></script>
    <script src="{!! asset('js/jquery.zoom.min.js')!!}"></script>
    <script src="{!! asset('js/jquery.dd.min.js')!!}"></script>
    <script src="{!! asset('js/jquery.slicknav.js')!!}"></script>
    <script src="{!! asset('js/owl.carousel.min.js')!!}"></script>
	<script src="{!! asset('js/main.js')!!}"></script>
</body>
</html>