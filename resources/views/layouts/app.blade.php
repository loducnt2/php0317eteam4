<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--                   client                     -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <!--Custom-Theme-files-->
    <!--theme-style-->

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />

    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--start-menu-->
    <script src="{{ asset('js/simpleCart.min.js') }}"> </script>
    <link href="{{ asset('css/memenu.css') }}" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{ asset('js/memenu.js') }}"></script>
    <script>$(document).ready(function(){$(".memenu").memenu();});</script>
    <!--dropdown-->
    <script src="{{ asset('js/jquery.easydropdown.js') }}"></script>

    @yield('css')

    @yield('js')


</head>
<body>


<!--top-header-->
<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-6 top-header-left">
                <div class="drop">
                    <div class="box">
                        <select tabindex="4" class="dropdown drop">
                            <option value="" class="label">Dollar :</option>
                            <option value="1">Dollar</option>
                            <option value="2">Euro</option>
                        </select>
                    </div>
                    <div class="box1">
                        <select tabindex="4" class="dropdown">
                            <option value="" class="label">English :</option>
                            <option value="1">English</option>
                            <option value="2">French</option>
                            <option value="3">German</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 top-header-left">
                <div class="cart box_1">
                    {{--<a href="{{ Cart::total() }}">--}}
                    <a href="{{ url('cart') }}">
                        <div class="total">
                            <span class="simpleCart_total">
                                <?php $total = 0; ?>
                                @if(Cart::content())
                                    @foreach(Cart::content() as $item)
                                        <?php $total += $item->price; ?>
                                    @endforeach
                                @endif
                                {{ number_format($total) }}
                            </span>
                        </div>
                        <a  href="{{ url('cart') }}"><img src="{{ url('images/cart-1.png') }}" alt="" /></a>
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->
<!--start-logo-->
<div class="logo">
    <a href="{{ url('home') }}">
        <h1 style="color: red;">ĐHQ Shop</h1>
    </a>
</div>
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
                <div class="top-nav">
                    <ul class="memenu skyblue"><li class="active"><a href="{{ url('home') }}">Home</a></li>
                        <li class="grid"><a href="#">Nam</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Giày Nam</h4>
                                        <ul>
                                            <li><a href="products.html">Giày tây</a></li>
                                            <li><a href="products.html">Giày sandal nam</a></li>
                                            <li><a href="products.html">Giày bốt nam</a></li>
                                            <li><a href="products.html">Giày thể thao nam</a></li>
                                            <li><a href="products.html">Giày nam khác</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Dép nam</h4>
                                        <ul>
                                            <li><a href="products.html">Dép xỏ ngón nam</a></li>
                                            <li><a href="products.html">Dép quai hậu nam</a></li>
                                            <li><a href="products.html">Dép nhựa nam</a></li>
                                            <li><a href="products.html">Dép nam khác</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="#">Nữ</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Giày nữ</h4>
                                        <ul>
                                            <li><a href="products.html">Giày cao gót nữ</a></li>
                                            <li><a href="products.html">Giày sandal nữ</a></li>
                                            <li><a href="products.html">Giày bốt nữ</a></li>
                                            <li><a href="products.html">Giày thể thao nữ</a></li>
                                            <li><a href="products.html">Giày nữ khác</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Dép nữ</h4>
                                        <ul>
                                            <li><a href="products.html">Dép xỏ ngón nữ</a></li>
                                            <li><a href="products.html">Dép mang trong nhà</a></li>
                                            <li><a href="products.html">Dép nhựa nữ</a></li>
                                            <li><a href="products.html">Dép nữ khác</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="{{ url('discount') }}">Khuyến mại</a>

                        </li>
                        <li class="grid"><a href="#">Bán chạy</a>

                        </li>
                        <li class="grid"><a href="typo.html">Blog</a>
                        </li>
                        <li class="grid"><a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>

            <div class="col-md-3 header-right">
                <div class="search-bar">
                    {!! Form::open(['method' => 'GET', 'url' => 'product']) !!}
                        <input type="text" name="keyword"
                               value="@if(Request::has('keyword')) {{ Request::get('keyword') }} @else Search  @endif"
                               onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                        <input type="submit" value="" />
                    {!! Form::close() !!}
                </div>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--bottom-header-->
<!--banner-starts-->

@yield('content')

<!--product-end-->
<!--information-starts-->
<div class="information">
    <div class="container">
        <div class="infor-top">
            <div class="col-md-3 infor-left">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
                    <li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
                    <li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Information</h3>
                <ul>
                    <li><a href="#"><p>Specials</p></a></li>
                    <li><a href="#"><p>New Products</p></a></li>
                    <li><a href="#"><p>Our Stores</p></a></li>
                    <li><a href="contact.html"><p>Contact Us</p></a></li>
                    <li><a href="#"><p>Top Sellers</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>My Account</h3>
                <ul>
                    <li><a href="account.html"><p>My Account</p></a></li>
                    <li><a href="#"><p>My Credit slips</p></a></li>
                    <li><a href="#"><p>My Merchandise returns</p></a></li>
                    <li><a href="#"><p>My Personal info</p></a></li>
                    <li><a href="#"><p>My Addresses</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Store Information</h3>
                <h4>The company name,
                    <span>Lorem ipsum dolor,</span>
                    Glasglow Dr 40 Fe 72.</h4>
                <h5>+955 123 4567</h5>
                <p><a href="mailto:example@email.com">contact@example.com</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--information-end-->
<!--footer-starts-->
<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-6 footer-left">
                <form>
                    <input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
            <div class="col-md-6 footer-right">
                <p>© 2015 Luxury Watches. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--footer-end-->

{{--@yield('js')--}}
</body>
</html>
