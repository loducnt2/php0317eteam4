@extends('layouts.admin')

@section('title') Create Order @endsection

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
                        <p style="color: red;">Create New Order</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {!! Form::open(['type' => 'POST', 'url' => 'admin/order', 'role' => 'form']) !!}


                                <div class="form-group">
                                    <label>Name</label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                    {!!  $errors->first('name', '<span id="name-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                    {!!  $errors->first('email', '<span id="email-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

                                </div>
                                <div class="form-group">
                                    <label>Note</label>
                                    {!! Form::text('note', null, ['class' => 'form-control']) !!}
                                    {!!  $errors->first('note', '<span id="note-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                                    {!!  $errors->first('phone', '<span id="phone-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    {!! Form::text('address', null, ['class' => 'form-control']) !!}
                                    {!!  $errors->first('address', '<span id="address-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

                                </div>
                                <div class="form-group">
                                    <label>Amount</label>
                                    {!! Form::text('amount', null, ['class' => 'form-control']) !!}
                                    {!!  $errors->first('amount', '<span id="amount-error" style="color: red;" class="help-block help-block-error">:message</span>') !!}

                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
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