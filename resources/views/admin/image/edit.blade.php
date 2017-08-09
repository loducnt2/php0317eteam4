@extends('layouts.admin')

@section('title') Edit " {{ $image->name }} " Create Image @endsection

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
                        <p style="color: red;">Edit " {{ $image->name }} " Image</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">

                                {!! Form::model($image, ['method' => 'PATCH', 'url' => ['admin/image', $image->id],'files' => true, 'role' => 'form']) !!}

                                <div class="form-group">
                                    <label>Product</label>
                                    {!! Form::select('product_id', $product, null, ["class" => "form-control"]) !!}

                                    <p class="help-block">Loại mặt hàng</p>
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    {!! Form::file('name', null, ['class' => 'form-control']) !!}
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-success">Reset</button>

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