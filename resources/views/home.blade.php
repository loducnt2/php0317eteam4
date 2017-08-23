@extends('layouts.app')

@section('title')  Shop DHQ  @endsection
@section('content')
    <div class="bnr" id="home">
        <div  id="top" class="callbacks_container" >
            <ul class="rslides" id="slider4">
                <li>
                    <img style="width: 1230px; height: 350px;" src="{{ url('images/bnr-4.jpg') }}" alt=""/>
                </li>
                <li>
                    <img style="width: 1230px; height: 350px;" src="{{ url('images/bnr-5.jpg') }}" alt=""/>
                </li>
                    <img style="width: 1230px; height: 350px;" src="{{ url('images/bnr-6.jpg') }}" alt=""/>
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
    <h2 style="color: #583d28;
                font: 700 30px/30px 'Raleway', sans-serif;
                margin-left: 118px;
                border: 1px solid red;
                border-width: 5px;
                padding: 5px;
                background: #f6eddc;">
        * All Products
    </h2>

    <div class="product">
        <div class="container">
            <div class="product-top">

                <div class="product-one">
                    @if(isset($products))
                        @foreach($products as $item)
                            <div class="col-md-3 product-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="{{ url('product/detail/' . $item->id) }}" class="mask">
                                        <img class="img-responsive zoom-img" style="width: 150px; height: 150px;" src="{{ asset('uploads/product/'.$item->thumbnail) }}" alt="{{ $item->title }}"  />
                                    </a>
                                    <div class="product-bottom">
                                        <h3>{{ $item->name }}</h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add" href="{{ url('cart/add/'. $item->id ) }}"><i></i></a> <span class=" item_price">{{ number_format($item->price) }} VNĐ</span></h4>
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


    <h2 style="color: #583d28;
                font: 700 30px/30px 'Raleway', sans-serif;
                margin-left: 118px;
                border: 1px solid red;
                border-width: 5px;
                padding: 5px;
                background: #f6eddc;">
        * Best Sellers
    </h2>

    <div class="product">
        <div class="container">
            <div class="product-top">

                <div class="product-one">
                    @if(isset($pro))
                        @foreach($pro as $it)
                            <div class="col-md-3 product-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="{{ url('product/detail/' . $it->id) }}" class="mask">
                                        <img class="img-responsive zoom-img" style="width: 150px; height: 150px;" src="{{ asset('uploads/product/'.$it->thumbnail) }}" alt="{{ $it->title }}"  />
                                    </a>
                                    <div class="product-bottom">
                                        <h3>{{ $it->name }}</h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add" href="{{ url('cart/add/'. $it->id ) }}"><i></i></a> <span class=" item_price">{{ number_format($it->price) }} VNĐ</span></h4>
                                    </div>
                                    <div class="srch">
                                        <span>- {{ $it->discount }}%</span>
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
