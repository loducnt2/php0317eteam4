@extends('layouts.admin')

@section('title') List Warrantydetail @endsection

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
                        List Warrantydetail
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <div class="row">
                                    <div class="col-sm-6">

                                        {{--<a href="{{ url('admin/warrantydetail/create') }}">Create New</a>--}}

                                    </div>
                                    <div class="col-sm-6">
                                        <div id="dataTables-example_filter" class="dataTables_filter">
                                            {{ Form::open(['method' => 'GET', 'url' => 'admin/warrantydetail']) }}
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
                                            style="width: 245px;">Product
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending"
                                            style="width: 245px;">Warranty*
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending"
                                            style="width: 245px;">Content
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending"
                                            style="width: 245px;">Price
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending"
                                            style="width: 245px;">Quantity
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending"
                                            style="width: 153px;">Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($warr))
                                        @foreach($warr as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->product->name }}</td>
                                                <td>{{ $item->warranty_id }}</td>
                                                <td>{{ $item->content }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>
                                                    {{ Form::open(['method' => 'DELETE', 'url' => 'admin/warrantydetail/' . $item->id]) }}

                                                    {{--<a href="{{ url('admin/warrantydetail/' . $item->id . '/edit') }}" --}}{{--class="btn"--}}{{-->Edit</a> --}}|
                                                    <button type="submit" {{--class="btn"--}} onclick="return confirm('Bạn có chắc muốn xóa không');">Delete</button>

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
                                            {{ $warr->links() }}
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
