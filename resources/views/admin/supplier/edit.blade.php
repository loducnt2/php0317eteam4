@extends('layouts.admin')

@section('title') Edit " {{ $supplier->name }} " Create Supplier @endsection

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
                        <p style="color: red;">Edit " {{ $supplier->name }} " Supplier</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {{--{!! Form::open(['method' => 'PATCH', 'url' => 'admin/supplier/' . $cate->id, 'role' => 'form']) !!}--}}
                                {!! Form::model($supplier, ['method' => 'PATCH', 'url' => 'admin/supplier/' . $supplier->id, 'role' => 'form']) !!}

                                <div class="form-group">
                                    <label>Name</label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    {{--<input type="text" class="form-control" name="name" value="{{ $supplier->name }}" >--}}
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    {!! Form::text('address', null, ['class' => 'form-control']) !!}
                                    {{--<input type="text" class="form-control" name="address" value="{{ $supplier->address }}" >--}}
                                </div>

                                <div class="form-group">
                                    <label>Website</label>
                                    {!! Form::text('website', null, ['class' => 'form-control']) !!}
                                    {{--<input type="text" class="form-control" name="website" value="{{ $supplier->website }}" >--}}
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                                    {{--<input type="text" class="form-control" name="phone" value="{{ $supplier->phone }}" >--}}
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                    {{--<input type="text" class="form-control" name="email" value="{{ $supplier->email }}" >--}}
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