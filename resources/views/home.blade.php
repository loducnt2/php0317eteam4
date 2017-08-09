@extends('layouts.app')
@section('content')
    <div class="bnr" id="home">
        <div  id="top" class="callbacks_container">
            <ul class="rslides" id="slider4">
                <li>
                    <img src="images/bnr-4.jpg" alt=""/>
                </li>
                <li>
                    <img src="images/bnr-5.jpg" alt=""/>
                </li>
                <li>
                    <img src="images/bnr-6.jpg" alt=""/>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--banner-ends-->
    <!--Slider-Starts-Here-->
    <script src="{{ url('js/responsiveslides.min.js') }}"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!--End-slider-script-->
    <!--about-starts-->

    <div class="about">
        <div class="container">
            <div class="about-top grid-1">
                <div class="col-md-4 about-left">
                    <figure class="effect-bubba">
                        <img class="img-responsive" src="images/abt-11.jpg" alt=""/>
                        <figcaption>
                            <h2>Nulla maximus nunc</h2>
                            <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 about-left">
                    <figure class="effect-bubba">
                        <img class="img-responsive" src="images/abt-22.jpg" alt=""/>
                        <figcaption>
                            <h4>Mauris erat augue</h4>
                            <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4 about-left">
                    <figure class="effect-bubba">
                        <img class="img-responsive" src="images/abt-33.jpg" alt=""/>
                        <figcaption>
                            <h4>Cras elit mauris</h4>
                            <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--about-end-->
    <!--product-starts-->

    <div class="product">
        <div class="container">
            <div class="product-top">

                <div class="product-one">
                    @if(isset($products))
                        @foreach($products as $item)
                            <div class="col-md-3 product-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="{{ url('client.product.single') }}" class="mask"><img class="img-responsive zoom-img" src="{{ asset('uploads/product/'.$item->thumbnail) }}" alt="{{ $item->title }}" width="125px" height="200px" /></a>
                                    <div class="product-bottom">
                                        <h3>{{ $item->name }}</h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">{{ number_format($item->price) }} VNĐ</span></h4>
                                    </div>
                                    <div class="srch">
                                        <span>- {{ $item->discount }}%</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
    </div>

@endsection
