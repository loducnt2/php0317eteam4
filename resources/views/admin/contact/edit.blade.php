@extends('layouts.admin')

@section('title'){{ $contact->name }} @endsection

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
                        <p style="color: red;">{{ $contact->name }}</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {{--{!! Form::open(['method' => 'PATCH', 'url' => 'admin/contact/' . $contact->id, 'role' => 'form']) !!}--}}
                                {!! Form::open(['method' => 'PATCH', 'url' => 'admin/contact/' . $contact->id, 'role' => 'form']) !!}

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $contact->name }}" >
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" value="{{ $contact->phone }}" >
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{ $contact->email }}" >
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <input type="text" class="form-control" name="message" value="{{ $contact->message }}" >
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