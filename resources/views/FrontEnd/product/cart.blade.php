<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cart</title>
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
    <!-- Page Preloder -->
	<header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fas fa-envelope"></i>
                        hello.colorlib@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fas fa-phone"></i>
                        +65 11.188.888
                    </div>
                </div>
                <div class="ht-right">
                    <a href="{{route('product.index')}}" class="login-panel"><i class="fas fa-user"></i>Admin</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="{!! asset('img/flag-1.jpg')!!}" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="{!! asset('img/flag-2.jpg')!!}" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="{!! asset('img/logo.png')!!}" alt="">
                            </a>
                        </div>=
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <form action="#" class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon"><a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon"><a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="{!! asset('img/select-product-1.jpg')!!}" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic"><img src="{!! asset('img/select-product-2.jpg')!!}" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$60.00 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                    <i class="fas fa-times"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$120.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">$150.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="./index.html">Home</a></li>
                        <li><a href="./shop.html">Shop</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
	</header>


	<div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fas fa-home"></i> Home</a>
                        <span>Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class="fas fa-times"></i></i></th>
                                </tr>
                            </thead>
                            <tbody><?php $total = 0 ;?>

                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)

                            <?php $total += $details['price'] * $details['quantity'] ?>
                                <tr>
                                    <td class="cart-pic first-row" data-th="Product"><img src="{{ asset('images/'.$details['image']) }}" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>{{ $details['name'] }}</h5>
                                    </td>
                                    <td class="p-price first-row" data-th="Price">${{ $details['price'] }}</td>
                                    <td class="qua-col first-row" data-th="Quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="{{ $details['quantity'] }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Subtotal" class="text-center">{{ number_format($details['price'] * $details['quantity']) }}</td>
                                    <td class="actions" data-th="">
                                        <button class="btn btn-primary btn update-cart" data-id="{{ $id }}"><i class="fas fa-sync-alt"></i></button>
                                        <button class="btn btn-danger btn remove-from-cart" data-id="{{ $id }}"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>  @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="{{ url('/product') }}" class="primary-btn continue-shop">Continue shopping</a>
                                <button class="btn btn-primary btn update-cart" id="update-cart" data-id="{{ $id }}"><i class="fas fa-sync-alt"></i></button>    
                            </div>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>{{ number_format($total) }}đ</span></li>
                                    <li class="cart-total">Total <span>{{ number_format($total) }}đ</span></li>
                                </ul>
                                <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@section('scripts')
    <script type="text/javascript">

        $(".update-cart").click(function (e) {
           e.preventDefault();

           var ele = $(this);

            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>
    
@endsection
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