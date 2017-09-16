@extends('layouts.app')

@section('title') Cart Page @endsection

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}" style="color: red;">Home</a></li>
                    <li class="active" style="color: #17bf08;">Checkout</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->
    <!--start-ckeckout-->
    <div class="ckeckout">
        <div class="container">
            <div class="ckeck-top heading">
                <h2 style="color: #17bf08;">CHECKOUT</h2>
            </div>
            <div class="ckeckout-top">
                <div class="cart-items">
                    <h3 style="color: #17bf08;">My Shopping Bag</h3>
                    <script>$(document).ready(function(c) {
                            $('.close1').on('click', function(c){
                                $('.cart-header').fadeOut('slow', function(c){
                                    $('.cart-header').remove();
                                });
                            });
                        });
                    </script>
                    <script>$(document).ready(function(c) {
                            $('.close2').on('click', function(c){
                                $('.cart-header1').fadeOut('slow', function(c){
                                    $('.cart-header1').remove();
                                });
                            });
                        });
                    </script>
                    <script>$(document).ready(function(c) {
                            $('.close3').on('click', function(c){
                                $('.cart-header2').fadeOut('slow', function(c){
                                    $('.cart-header2').remove();
                                });
                            });
                        });
                    </script>

                    <div class="in-check" >
                        <ul class="unit">
                            <li><span style="color: orangered">Item</span></li>
                            <li><span style="color: orangered">Product Name</span></li>
                            <li><span style="color: orangered">Unit Price</span></li>
                            <li><span style="color: orangered">Quantity</span></li>

                            {{--<li style="color: orangered">Action</li>--}}
                            <div class="clearfix"> </div>
                        </ul>

                        <?php $totalAmount = 0; ?>
                        @foreach(Cart::content() as $item)
                            <ul class="cart-header">
                                {{--<div class="close1"><a href="#"></a></div>--}}

                                    <li class="ring-in"><a href="single.html" ><img style="width: 100px; height: 100px;" src="{{ url('uploads/product/'. $item->options->thumbnail) }}" class="img-responsive" alt=""></a>
                                    </li>
                                    <li><span class="name">{{ $item->name }}</span></li>
                                    <li><span class="cost">{{ number_format($item->price) }}</span></li>
                                    <li>{{ $item->qty }}</li>
                                    <li>
                                        {{ number_format($item->price * $item->qty) }}
                                        <?php $totalAmount += ($item->price * $item->qty) ; ?>
                                    </li>
                                    <li><span class="cost">
                                        <a href="{{ url('cart/remove/'. $item->id) }}"><img src="{{ url('images/close.png') }}" /></a></span>
                                    </li>

                                <div class="clearfix"> </div>
                            </ul>
                        @endforeach





                        <ul class="cart-header2">
                            <li><a href="{{ url('home')  }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></li>
                            <li class="hidden-xs text-center"><strong>Total {{ number_format($totalAmount) }} VND</strong></li>
                            <li><a href="{{ url('cart/checkout') }}" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection