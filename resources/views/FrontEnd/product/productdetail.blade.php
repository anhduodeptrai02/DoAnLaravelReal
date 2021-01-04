                
                @extends('FrontEnd.master')
@section('title', 'Product')
@section('header')
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
                    <a href="" class="login-panel"><i class="fas fa-user"></i>Login</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="{!! asset('img/flag-1.jpg')!!}" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="{!! asset('img/flag-2.jpg')!!}" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
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
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">Tất cả sản phẩm</button>
                            <form action="#" class="input-group">
                                <input type="text" placeholder="Bạn cần gì?">
                                <button type="button"><i class="ti-search"></i></button>
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
                                                        <i class="ti-close"></i>
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
@endsection

@section('slider')
	<div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fas fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('left')
<div class="filter-widget">
                        <h4 class="fw-title">Loại sản phẩm</h4>
                        <ul class="filter-catagories">
                            <li><a href="#">Ô tô</a></li>
                            <li><a href="#">Điện thoại</a></li>
                            <li><a href="#">Quần áo</a></li>
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Price</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="98">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <a href="#" class="filter-btn">Filter</a>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Color</h4>
                        <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" id="cs-black">
                                <label class="cs-black" for="cs-black">Black</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-violet">
                                <label class="cs-violet" for="cs-violet">Violet</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-blue">
                                <label class="cs-blue" for="cs-blue">Blue</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-yellow">
                                <label class="cs-yellow" for="cs-yellow">Yellow</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-red">
                                <label class="cs-red" for="cs-red">Red</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-green">
                                <label class="cs-green" for="cs-green">Green</label>
                            </div>
                        </div>
                    </div>

    
@endsection
       
@section('right')
<div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom" style="position: relative; overflow: hidden;">
                                <img class="product-big-img" src="{{asset('images/'. $productdetail->image)}}" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            <img role="presentation" alt="" src="{{asset('images/'. $productdetail->image)}}" class="zoomImg" style="position: absolute; top: -4.51152px; left: -31.078px; opacity: 0; width: 440px; height: 520px; border: none; max-width: none; max-height: none;"></div>
                            <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel owl-loaded owl-drag">
                                    
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-139px, 0px, 0px); transition: all 1.2s ease 0s; width: 559px;"><div class="owl-item" style="width: 129.583px; margin-right: 10px;"><div class="pt active" data-imgbigurl="../img/product-single/product-1.jpg"><img src="../img/product-single/product-1.jpg" alt=""></div></div><div class="owl-item active" style="width: 129.583px; margin-right: 10px;"><div class="pt" data-imgbigurl="../img/product-single/product-2.jpg"><img src="../img/product-single/product-2.jpg" alt=""></div></div><div class="owl-item active" style="width: 129.583px; margin-right: 10px;"><div class="pt" data-imgbigurl="../img/product-single/product-3.jpg"><img src="../img/product-single/product-3.jpg" alt=""></div></div><div class="owl-item active" style="width: 129.583px; margin-right: 10px;"><div class="pt" data-imgbigurl="../img/product-single/product-3.jpg"><img src="../img/product-single/product-3.jpg" alt=""></div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next disabled"><i class="fa fa-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <h3><?php echo $productdetail->name ?></h3>
                                    <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                <div class="pd-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>(5)</span>
                                </div>
                                <div class="pd-desc">
                                    <p><?php echo $productdetail->content ?></p>
                                    <h4>{{ number_format($productdetail['price']) }}</h4>
                                </div>
                                <div class="pd-color">
                                    <h6>Color</h6>
                                    <div class="pd-color-choose">
                                        <div class="cc-item">
                                            <input type="radio" id="cc-black">
                                            <label for="cc-black"></label>
                                        </div>
                                        <div class="cc-item">
                                            <input type="radio" id="cc-yellow">
                                            <label for="cc-yellow" class="cc-yellow"></label>
                                        </div>
                                        <div class="cc-item">
                                            <input type="radio" id="cc-violet">
                                            <label for="cc-violet" class="cc-violet"></label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="quantity">
                                    <div class="pro-qty"><span class="dec qtybtn">-</span>
                                        <input type="text" value="1">
                                    <span class="inc qtybtn">+</span></div>
                                    <a href="{{ url('product/add-to-cart/'.$productdetail->id) }}" class="primary-btn pd-cart">Add To Cart</a>
                                </div>
                                <ul class="pd-tags">
                                </ul>
                               
                            </div>
                        </div>
                    </div>
                   
                </div>
                    </div>
                    
@endsection