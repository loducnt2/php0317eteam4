@extends('layouts.admin')

@section('title') Create User @endsection

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
                        <p style="color: red;">Create New User</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {!! Form::open(['type' => 'POST', 'url' => 'admin/user', 'role' => 'form']) !!}

                                <div class="form-group">
                                    <label>Name</label>
                                    {!! Form::text('name', null, ['class' => 'form-control', 'name' => 'name']) !!}
                                </div>
                                {!!  $errors->first('name', '<span id="name-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

                                <div class="form-group">
                                    <label>Email</label>
                                    {!! Form::text('email', null, ['class' => 'form-control', 'name' => 'email']) !!}
                                </div>
                                {!!  $errors->first('email', '<span id="email-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

                                <div class="form-group">
                                    <label>Password</label>
                                    {!! Form::text('password', null, ['class' => 'form-control', 'name' => 'password']) !!}
                                </div>
                                {!!  $errors->first('password', '<span id="password-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

                                <div class="form-group">
                                    <label>Group_id</label>
                                    <select name="product_id" class="form-control">
                                        @foreach($group as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Last Name</label>
                                    {!! Form::text('last_name', null, ['class' => 'form-control', 'name' => 'last_name']) !!}
                                </div>
                                {!!  $errors->first('last_name', '<span id="last_name-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

                                <div class="form-group">
                                    <label>First Name</label>
                                    {!! Form::text('first_name', null, ['class' => 'form-control', 'name' => 'first_name']) !!}
                                </div>
                                {!!  $errors->first('first_name', '<span id="first_name-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

                                <div class="form-group">
                                    <label>Phone</label>
                                    {!! Form::text('phone', null, ['class' => 'form-control', 'name' => 'phone']) !!}
                                </div>
                                {!!  $errors->first('phone', '<span id="phone-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

                                <div class="form-group">
                                    <label>Address</label>
                                    {!! Form::text('address', null, ['class' => 'form-control', 'name' => 'address']) !!}
                                </div>
                                {!!  $errors->first('address', '<span id="address-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

                                <div class="form-group">
                                    <label>Gender</label>
                                    {!! Form::text('gender', null, ['class' => 'form-control', 'name' => 'gender']) !!}
                                </div>
                                {!!  $errors->first('gender', '<span id="gender-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}



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