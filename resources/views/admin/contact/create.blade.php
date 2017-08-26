@extends('layouts.admin')

@section('title') Create Contact @endsection

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
                        <p style="color: red;">Create New Contact</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {!! Form::open(['type' => 'POST', 'url' => 'admin/contact', 'role' => 'form']) !!}

                                <div class="form-group">
                                    <label>Name</label>
                                    {!! Form::text('name', null, ['class' => 'form-control', 'name' => 'name']) !!}
                                </div>
                                {!!  $errors->first('name', '<span id="name-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

                                <div class="form-group">
                                    <label>Phone</label>
                                    {!! Form::text('phone', null, ['class' => 'form-control', 'name' => 'phone']) !!}
                                </div>
                                {!!  $errors->first('phone', '<span id="phone-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

                                <div class="form-group">
                                    <label>Email</label>
                                    {!! Form::text('email', null, ['class' => 'form-control', 'name' => 'email']) !!}
                                </div>
                                {!!  $errors->first('email', '<span id="eamil-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

                                <div class="form-group">
                                    <label>Message</label>
                                    {!! Form::text('message', null, ['class' => 'form-control', 'name' => 'message']) !!}
                                </div>
                                {!!  $errors->first('message', '<span id="message-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

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