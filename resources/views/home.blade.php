@extends('layouts.app')

@section('title')  Shop DHQ  @endsection
@section('content')
    <div class="bnr" id="home">
        <div  id="top" class="callbacks_container" >
            <ul class="rslides" id="slider4">
                <li>
                    <img style="width: 100%; height: 350px;" src="{{ url('images/ban4.jpg') }}" alt=""/>
                </li>
                <li>
                    <img style="width: 100%; height: 350px;" src="{{ url('images/ban2.jpg') }}" alt=""/>
                </li>
                    <img style="width: 100%; height: 350px;" src="{{ url('images/bnr-6.jpg') }}" alt=""/>
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

        {{--Báo phần đặt hàng xong--}}
    @if(Session::has('success'))
        <div class="col-lg-12">
            <h1 class="page-header" style="background-color: #09a80f; color: white">
                {{ Session::get('success') }}
            </h1>
        </div>
    @endif

    <img src="{{ url('images/all.png') }}" style="margin-left: 118px;
                   margin-left: 118px;
                    border: 1px solid red;
                    border-width: 4px;
                    padding: 5px;
                    width: 199px;
                    height: 45px;
                ">


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


    <img src="{{ url('images/discount.png') }}" style="margin-left: 118px;
                   margin-left: 118px;
                    border: 1px solid red;
                    border-width: 4px;
                    padding: 5px;
                    width: 199px;
                    height: 45px;
                ">

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
