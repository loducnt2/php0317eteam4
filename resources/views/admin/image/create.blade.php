@extends('layouts.admin')

@section('title') Create Image @endsection

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
                        <p style="color: red;">Create New Image</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {{--{!! Form::open(['type' => 'POST', 'url' => 'admin/image', 'role' => 'form']) !!}--}}
                                {!! Form::open(['type' => 'POST', 'url' => 'admin/image','files' =>true, 'role' => 'form']) !!}

                                <div class="form-group">
                                    <label>Product</label>
                                    {{--{!! Form::select('product_id',$products , null, ['class' => 'form-control']) !!}--}}
                                    <select name="product_id" class="form-control">
                                        @foreach($products as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <p class="help-block">Loại mặt hàng</p>
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    {!! Form::file('name', null, ['class' => 'form-control', 'name' => 'phone']) !!}
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