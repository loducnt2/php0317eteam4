@extends('layouts.app')

@section('title') {{ $product->name }}  @endsection

{{--@section('css')
    <link href="{{ asset('css/detail.css') }}" rel="stylesheet" type="text/css" />
@endsection--}}


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
                                        <a href="#"> 100% đánh giá tích cực </a>

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



                    <h3 style="margin-top: 10px;">Sản phẩm liên quan</h3>

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
                            <div class="detail">
                                <h3 class="h3_detail">2. Chi tiết sản phẩm</h3>

                                <p align="justify" class="pText">
                                    <em class="do">Cud Shop</em> xin kính chào quý khách. Khi mua hàng của chúng tôi quý khách sẽ được:
                                    <br>
                                    Cam kết hàng giống như hình <em class="do">100%</em>. <br>
                                    Hàng hóa được đóng hộp chu đáo trước khi giao <br>
                                    Hàng giao tận nơi quý khách hàng ở <br>
                                    Khách hàng nhận hàng, kiểm tra hàng mới thanh toán <br>
                                    <em class="do">Đổi trả hàng trong vòng 7 ngày</em> nếu không ưng ý sản phẩm <br>
                                    Xem quy định đổi trả <a href="{{ url('doitra') }}">Tại đây</a> <br>
                                    Được <em class="do">hoàn tiền 100%</em> nếu sản phẩm không giống mô tả <br>
                                </p>

                                <p class="pName">
                                    <b>{{ $product->name }}</b>

                                </p>
                                <p>
                                    {{ $product->content }}
                                </p>
                                <img  src="{{ asset('uploads/product/'.$product->thumbnail) }}" alt="{{ $it->title }}"  />

                                <p class="pText">
                                    Sản phẩm được phân phối chính thức ở <a href="{{ url('supplier/detail/' . $product->supplier_id) }}">{{ $product->supplier->name }}</a>

                                </p>
                            </div>

                            <h3 class="h3_detail">3. Đánh giá phản hồi</h3>

                            <p class="pText" style="color: black;">Bạn có câu hỏi với sản phẩm này? Đặt câu hỏi với shop.</p>

                        <div class="fb-comments" data-href="http://localhost/team4/public/product/detail/{{ $id }}" data-numposts="5"></div>

                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=498738317157262";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>


                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection