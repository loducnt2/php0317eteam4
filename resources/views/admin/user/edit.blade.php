@extends('layouts.admin')

@section('title') Edit " {{ $user->name }} " User @endsection

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
                        <p style="color: red;">Edit " {{ $user->name }} " User</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {{--{!! Form::open(['method' => 'PATCH', 'url' => 'admin/user/' . $cate->id, 'role' => 'form']) !!}--}}
                                {!! Form::model($user, ['method' => 'PATCH', 'url' => 'admin/user/' . $user->id, 'role' => 'form']) !!}

                                <div class="form-group">
                                    <label>Name</label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    <label>Group</label>
                                    {!! Form::select('group_id',$group, null, ['class' => 'form-control']) !!}
                                    <p class="help-block">Loại mặt hàng</p>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    <label>Last Name</label>
                                    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    <label>First Name</label>
                                    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    {!! Form::text('address', null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
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