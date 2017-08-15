@extends('layouts.admin')

@section('title') Create Category @endsection

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
                        <p style="color: red;">Create New Category</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {!! Form::open(['type' => 'POST', 'url' => 'admin/category', 'role' => 'form']) !!}

                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title" >
                                        <p class="help-block">Loại mặt hàng</p>
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option value="enable">Enable</option>
                                            <option value="disable">Disable</option>
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