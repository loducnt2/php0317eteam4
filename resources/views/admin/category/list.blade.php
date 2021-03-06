@extends('layouts.admin')

@section('title') List Category @endsection

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <!--  page header -->
            <div class="col-lg-12">
                <h1 class="page-header">Tables</h1>
            </div>
            <!-- end  page header -->
            @if(Session::has('success'))
                <div class="col-lg-12">
                    <h1 class="page-header" style="background-color: #09a80f; color: white">
                        {{ Session::get('success') }}
                    </h1>
                </div>
            @endif
        </div>


        <div class="row">
            <div class="col-lg-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                        <div class="panel-heading">
                            List Category
                        </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <div class="row">
                                    <div class="col-sm-6">

                                        <a href="{{ url('admin/category/create') }}">Create New</a>

                                        {{--{{ Form::open(['method' => 'GET', 'url' => 'admin/category']) }}
                                            <input type="text" name="keyword"
                                                   @if(Request::has('keyword'))
                                                        value="{{ Request::get('keyword') }}"
                                                   @endif
                                                   placeholder="Tìm kiếm..." />
                                            <input type="submit" value="Search" />
                                        {{ Form::close() }}--}}
                                    </div>
                                    <div class="col-sm-6">
                                        <div id="dataTables-example_filter" class="dataTables_filter">
                                            {{ Form::open(['method' => 'GET', 'url' => 'admin/category']) }}
                                            <label>
                                                <input type="search" name="keyword" class="form-control input-sm" aria-controls="dataTables-example"
                                                       @if(Request::has('keyword'))
                                                       value="{{ Request::get('keyword') }}"
                                                       @endif
                                                       placeholder="Tìm kiếm..." />
                                                <input type="submit" value="Search" style="width: 80px" />
                                            </label>
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-striped table-bordered table-hover dataTable no-footer"
                                       id="dataTables-example" aria-describedby="dataTables-example_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column ascending"
                                            style="width: 178px;">ID
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending"
                                            style="width: 245px;">Title
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                            style="width: 226px;">Status
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending"
                                            style="width: 153px;">Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @if(isset($categories))
                                            @foreach($categories as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->title }}</td>
                                                    <td>{{ $item->status }}</td>
                                                    <td>
                                                        {{ Form::open(['method' => 'DELETE', 'url' => 'admin/category/' . $item->id]) }}

                                                            <a href="{{ url('admin/category/' . $item->id . '/edit') }}" class="btn">Edit</a> |
                                                            {{--<a href="{{ url('admin/category/' . $item->id ) }}" class="btn">Delete</a>--}}
                                                            <button type="submit" class="btn" onclick="return confirm('Bạn có chắc muốn xóa không');">Delete</button>

                                                        {{ Form::close() }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-sm-6">

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                             id="dataTables-example_paginate">
                                            {{ $categories->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>
@endsection
