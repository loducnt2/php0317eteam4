@extends('layouts.admin')

@section('title') Create Group @endsection

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
                        <p style="color: red;">Create New Group</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {!! Form::open(['type' => 'POST', 'url' => 'admin/group', 'role' => 'form']) !!}

                                    {!! Form::text('name', null, ['class' => 'form-control', 'name' => 'name']) !!} <br/>
                                    {!!  $errors->first('name', '<span id="name-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

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