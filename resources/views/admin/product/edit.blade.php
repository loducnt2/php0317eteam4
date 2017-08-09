@extends('layouts.admin')

@section('title') Edit " {{ $product->name }} " Create Product @endsection

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <!-- page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Forms</h1>
            </div>
            <!--end page header -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p style="color: red;">Edit " {{ $product->name }} " Category</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {{--{!! Form::open(['method' => 'PATCH', 'url' => 'admin/product/' . $cate->id, 'role' => 'form']) !!}--}}
                                {!! Form::model($product, ['method' => 'PATCH', 'url' => 'admin/product/' . $product->id, 'files' => true, 'role' => 'form']) !!}
                                    @include('admin.product.form')
                                {!! Form::close() !!}
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Form Elements -->
            </div>
        </div>
    </div>
@endsection