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

    <!-- Login -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- End - Login -->

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--                   client                     -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/detail.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/doitra.css') }}" rel="stylesheet" type="text/css" />
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
    {{--<script src="{{ asset('js/simpleCart.min.js') }}"></script>--}}
            {{--Cái lỗi nó ko thay đổi số tiền khi xóa sản phẩm thì xóa đi cái file js đó - chính js đó nó gây ra--}}
    <link href="{{ asset('css/memenu.css') }}" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{ asset('js/memenu.js') }}"></script>
    <script>$(document).ready(function(){$(".memenu").memenu();});</script>
    <!--dropdown-->
    <script src="{{ asset('js/jquery.easydropdown.js') }}"></script>

    @yield('css')

</head>
<body>


<!--top-header-->
<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-6 top-header-left">
                {{--<div class="drop">
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
                </div>--}}
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
                                            <?php /*$total += $item->price; */?>
                                            <?php $total += ($item->price * $item->qty) ; ?>
                                    @endforeach
                                @endif
                                {{ number_format($total) }} VNĐ
                            </span>
                        </div>
                        <a  href="{{ url('cart') }}"><img src="{{ url('images/cart-1.png') }}" alt="" /></a>
                    </a>

                    <p><a href="{{ url('cart') }}" class="simpleCart_empty">Cart Detail</a></p>

                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->

<!--Login-->
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            &nbsp;
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();" style="color: white;">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
<!--end - login-->
<!--start-logo-->
<div class="logo">
    <a href="{{ url('home') }}">
        <h1 style="color: red;"><img src="{{ url('images/cud.png') }}" style="width: 250px; height: 59px;"></h1>
    </a>
</div>
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom" style="    border-bottom: 3px solid #e05b5b; margin-bottom: 20px;">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
                <div class="top-nav">
                    <ul class="memenu skyblue"><li class="active"><a href="{{ url('home') }}">Home</a></li>
                        <li class="grid"  style="color: #100802;"><a href="#">Nam</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4 >Giày Nam</h4>
                                        <ul>

                                            @foreach(Helper::category() as $item)
                                                <li><a href="{{ url('category/'. $item->id) }}">{{ $item->title }}</a></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Dép nam</h4>
                                        <ul>
                                            @foreach(Helper::category2() as $item)
                                                <li><a href="{{ url('category/'. $item->id) }}">{{ $item->title }}</a></li>
                                            @endforeach

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
                                            @foreach(Helper::category3() as $item)
                                                <li><a href="{{ url('category/'. $item->id) }}">{{ $item->title }}</a></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Dép nữ</h4>
                                        <ul>
                                            @foreach(Helper::category4() as $item)
                                                <li><a href="{{ url('category/'. $item->id) }}">{{ $item->title }}</a></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="{{ url('discount') }}">Khuyến mại</a></li>
                        <li class="grid"><a href="{{ url('banchay') }}">Bán chạy</a></li>
                        <li class="grid"><a href="{{ url('blog') }}">Blog</a></li>
                        <li class="grid"><a href="{{ url('contact/create') }}">Contact</a> </li>

                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>

            <div class="col-md-3 header-right">
                <div class="search-bar" style="border: 1px solid #e05b5b;">
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
<div class="information" style=" background: #efefef;">
    <div class="container">
        <div class="infor-top">
            <div class="col-md-3 infor-left">
                <h3 style="    color: #1bccf7;">Follow Us</h3>
                <ul>
                    <li><a href="https://www.facebook.com"><span class="fb"></span><h6>Facebook</h6></a></li>
                    <li><a href="https://twitter.com/"><span class="twit"></span><h6>Twitter</h6></a></li>
                    <li><a href="https://plus.google.com/"><span class="google"></span><h6>Google+</h6></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3 style="    color: #1bccf7;">Information</h3>
                <ul>
                    <li><a href="{{ url('all') }}"><p>New Products</p></a></li>
                    <li><a href="{{ url('introduce') }}"><p>Our Stores</p></a></li>
                    <li><a href="{{ url('contact/create') }}"><p>Contact Us</p></a></li>
                    <li><a href="{{ url('discount') }}"><p>Top Sellers</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3 style="    color: #1bccf7;">My Account</h3>
                <ul>
                    @if(isset(Auth::user()->id))
                        <li><a href="{{ url('account/detail/' . Auth::user()->id) }}"><p>My Account</p></a></li>
                        <li><a href="{{ url('account/' . Auth::user()->id . '/edit') }}"><p>My Credit slips</p></a></li>
                    @endif

                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3 style="    color: #1bccf7;">Store Information</h3>
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
<div class="footer" style="background: #573c27;">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-6 footer-left">
                <form>
                    <input type="text" style="color: white; border: 1px solid white" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
                    <input type="submit" value="Subscribe" style="color: white; border: 1px solid white">
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

@yield('js')
{{--@yield('js')--}}
</body>
</html>
