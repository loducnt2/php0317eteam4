@extends('layouts.app')

@section('title') Khuyến mại @endsection

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}" style="color: red;">Home</a></li>
                    <li class="active" style="color: #17bf08;">Discount  Product</li>
                </ol>
            </div>
        </div>
    </div>

    <h2 style="color: #17bf08; text-align: center; ">KHUYẾN MẠI</h2>

    <div class="product">
        <div class="container">
            <div class="product-top">

                <div class="product-one">
                    @if(isset($products))
                        @foreach($products as $key => $item)
                            <div class="col-md-3 product-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="{{ url('product/detail/' . $item->id) }}" class="mask">
                                        <img class="img-responsive zoom-img" style="width: 150px; height: 150px;" src="{{ asset('uploads/product/'.$item->thumbnail) }}" alt="{{ $item->name }}"  />
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

                            @if($key > 0 && (($key + 1) % 4) == 0)
                                <div class="clearfix"></div>
                </div>

                <div class="product-one">
                    @endif

                    @endforeach
                    @endif
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
    </div>
@endsection