@extends('layouts.app')

@section('title') {{ $product->name }}  @endsection


@section('js')
    <script type="text/javascript">
        $(function() {

            var menu_ul = $('.menu_drop > li > ul'),
                menu_a  = $('.menu_drop > li > a');

            menu_ul.hide();

            menu_a.click(function(e) {
                e.preventDefault();
                if(!$(this).hasClass('active')) {
                    menu_a.removeClass('active');
                    menu_ul.filter(':visible').slideUp('normal');
                    $(this).addClass('active').next().stop(true,true).slideDown('normal');
                } else {
                    $(this).removeClass('active');
                    $(this).next().stop(true,true).slideUp('normal');
                }
            });

        });
    </script>
@endsection

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}" style="color: red;">Home</a></li>
                    <li class="active" style="color: #17bf08;">Single</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->
    <!--start-single-->
    <div class="single contact">
        <div class="container">
            <div class="single-main">
                <div class="col-md-9 single-main-left">
                    <div class="sngl-top">
                        <div class="col-md-5 single-top-left">
                            <div class="flexslider">
                                <ul class="slides">
                                    @if($product->image->count() > 0)
                                        @foreach($product->image as $it)
                                            <li data-thumb="{{ url('uploads/product/'. $it->name) }}" >
                                                <div class="thumb-image"> <img src="{{ url('uploads/product/'. $it->name) }}" data-imagezoom="true" class="img-responsive" alt=""/> </div>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>

                            </div>
                            <!-- FlexSlider -->
                            <script src="{{ asset('js/imagezoom.js') }}"></script>
                            <script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
                            <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />

                            <script>
                                // Can also be used with $(document).ready()
                                $(window).load(function() {
                                    $('.flexslider').flexslider({
                                        animation: "slide",
                                        controlNav: "thumbnails"
                                    });
                                });
                            </script>
                        </div>

                        <div class="col-md-7 single-top-right">
                            <div class="single-para simpleCart_shelfItem">
                                <h2>{{ $product->name }}</h2>
                                <div class="star-on">
                                    <ul class="star-footer">
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#"> 1 customer review </a>

                                    </div>
                                    <div class="clearfix"> </div>
                                </div>

                                <h5 class="item_price">{{ number_format($product->price) }} VND</h5>
                                <p>
                                    {{ $product->description }}
                                </p>



                                <a href="{{ url('cart/add/'. $product->id) }}" class="add-cart item_add">ADD TO CART</a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <div class="tabs">
                        <ul class="menu_drop">
                            <li class="item1"><a href="#"><img src="{{ url('images/arrow.png') }}" alt="">Description</a>
                                <ul>
                                    <li class="subitem1"><a href="#">{{ $product->description }}</a></li>
                                </ul>
                            </li>

                            <li class="item2"><a href="#"><img src="{{ url('images/arrow.png') }}" alt="">Supplier information</a>
                                <ul>
                                    <li class="subitem2" style="color: white">Sản phẩm được sản xuất bởi công ty</li>
                                    {{--@if(isset($product))
                                        @foreach($product as $it)
                                            <li class="subitem2" style="color: white"><a href="{{ url('supplier/detail/' . $it->id) }}" style="color: green; text-align: center">{{ $it->supplier->name }}</a></li>
                                        @endforeach
                                    @endif--}}
                                    {{--<li class="subitem2" style="color: white">
                                        <a href="{{ url('supplier/detail/' . $supplier->id) }}" style="color: green; text-align: center">
                                            {{ $product->supplier->name }}
                                        </a>
                                    </li>--}}
                                </ul>
                            </li>

                        </ul>
                    </div>

                    <div class="latestproducts">
                        <div class="product-one">
                            @if(isset($related))
                                @foreach($related as $item)
                                    <div class="col-md-4 product-left p-left">
                                        <div class="product-main simpleCart_shelfItem">
                                            <a href="{{ url('product/detail/' . $item->id) }}" class="mask"><img style="width: 150px; height: 150px;" class="img-responsive zoom-img" src="{{ url('uploads/product/'. $item->thumbnail) }}" alt="" /></a>
                                            <div class="product-bottom">
                                                <h3>{{ $item->name }}</h3>
                                                <p>Explore Now</p>
                                                <h4><a class="item_add" href="{{ url('cart/add/'. $item->id ) }}"><i></i></a> <span class=" item_price">{{ number_format($item->price) }}</span></h4>
                                            </div>
                                            <div class="srch">
                                                <span>{{ $item->discount }}%</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="clearfix"></div>

                            <div class="page">
                                {{ $related->links() }}
                            </div>
                        </div>
                    </div>

                    <div class="tabs">
                            <h3 style="color: #17bf08;">1. Chi tiết sản phẩm</h3>
                            {{ $product->description }}

                            <h3 style="color: #17bf08;">2. Đánh giá phản hồi</h3>

                            <table border="1px" width="80%">
                                <tr style="background: #cccccc">
                                    <td >Người mua</td>
                                    <td >Phản hồi</td>
                                </tr>

                                @if(isset($comment))
                                    @foreach($comment as $ite)
                                        <tr>
                                            <td>{{ $ite->content }}</td>
                                            <td>{{ $ite->content }}</td>
                                        </tr>
                                    @endforeach
                                @endif

                            </table>

                            <b>Bạn có câu hỏi với sản phẩm này? Đặt câu hỏi với shop.</b><br>
                            <form>
                                <textarea rows="3" cols="100"></textarea>
                                <input type="submit" name="btnsubmit" value="Gửi">
                            </form>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection