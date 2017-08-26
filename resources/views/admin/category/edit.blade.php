@extends('layouts.admin')

@section('title') Edit " {{ $cate->title }} " Create Category @endsection

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
                        <p style="color: red;">Edit " {{ $cate->title }} " Category</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {{--{!! Form::open(['method' => 'PATCH', 'url' => 'admin/category/' . $cate->id, 'role' => 'form']) !!}--}}
                                {!! Form::model($cate ,['method' => 'PATCH', 'url' => 'admin/category/' . $cate->id, 'role' => 'form']) !!}

                                <div class="form-group">
                                    <label>Name</label>
                                    {!! Form::text('title', null,  ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="enable" @if($cate->status == "enable") selected @endif>Enable</option>
                                        <option value="disable" @if($cate->status == "disable") selected @endif>Disable</option>
                                    </select>
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