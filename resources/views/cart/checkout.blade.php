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

            @if(Session::has('error'))
                <div class="alert alert-warning">
                    <strong>Warning! </strong> {{ Session::get('error') }}
                </div>
            @endif

            <div class="ckeckout-top">
                <br class="cart-items">
                    <h3 style="color: greenyellow;">1. My Shopping Bag</h3>
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
                            {{--<li><span>Action</span></li>--}}
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
                                <li><span class="name">
                                        <a href="{{ url('cart/remove/'. $item->id) }}"><img src="{{ url('images/close.png') }}" /></a></span>
                                </li>
                                <div class="clearfix"> </div>
                            </ul>
                        @endforeach

                        <ul class="cart-header2">
                            <li><a href="{{ url('home')  }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></li>
                            <li class="hidden-xs text-center"><strong>Total  : {{ number_format($totalAmount) }} VND</strong></li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>


                    <h3 style="color: greenyellow; font-family: FontAwesome; font-weight: bold">2. Thông tin người nhận</h3>
                    {!! Form::open(['method' => 'POST', 'url' => 'cart/checkout']) !!}

                        <div class="form-group">
                            <label class="control-label col-md-12" for="name">Họ tên</label>
                            <div class="col-md-5">
                                {!! Form::text('name', null, ["class" => "form-control", "id" => "name", "placeholder" => "Enter name"]) !!}
                                {!! $errors->first('name', '<span id="name-error" style="color:red;" class="help-block help-block-error">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-12" for="email">Email</label>
                            <div class="col-md-5">
                                {!! Form::text('email', null, ["class" => "form-control", "id" => "email", "placeholder" => "Enter email"]) !!}
                                {!! $errors->first('email', '<span id="email-error" style="color:red;" class="help-block help-block-error">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-12"  for="phone">Số điện thoại</label>
                            <div class="col-md-5">
                                {!! Form::text('phone', null, ["class" => "form-control", "id" => "phone", "placeholder" => "Enter phone"]) !!}
                                {!! $errors->first('phone', '<span id="phone-error" style="color:red;" class="help-block help-block-error">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-12"  for="address">Địa chỉ</label>
                            <div class="col-md-5">
                                {!! Form::text('address', null, ["class" => "form-control", "id" => "address", "placeholder" => "Enter address"]) !!}
                                {!! $errors->first('address', '<span id="address-error" style="color:red;" class="help-block help-block-error">:message</span>') !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-12"  for="note">Ghi chú</label>
                            <div class="col-md-10">
                                {!! Form::textarea('note', null, ['rows' => 5, 'cols' => '150', "class" => "form-control", "id" => "note", "placeholder" => "Enter note"]) !!}
                                {!! $errors->first('note', '<span id="note-error" style="color:red;" class="help-block help-block-error">:message</span>') !!}
                            </div>
                        </div>

                        <button class="control-label col-md-1"  type="submit" class="btn btn-default">Đặt hàng</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection