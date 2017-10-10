@extends('layouts.admin')

@section('title') Cud Shop @endsection
@section('content')
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <!--End Page Header -->
        </div>

        <div class="row">
            <!-- Welcome -->
            <div class="col-lg-12">
                <div class="alert alert-info">
                    <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome to <b> Cud Shop </b>
                    <i class="fa  fa-pencil"></i><b> </b>Support Tickets Pending to Answere. ;
                </div>
            </div>
            <!--end  Welcome -->
        </div>


        <div class="row">
            <!--quick info section -->
            <div class="col-lg-3">
                <div class="alert alert-danger text-center">
                    <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>{{ number_format($dem) }}</b> <br/>
                        Người đăng ký hệ thống
                </div>
            </div>
            <div class="col-lg-3">
                <div class="alert alert-success text-center">
                    <i class="fa  fa-beer fa-3x"></i>&nbsp;<b>{{ number_format($order) }} </b><br/>
                        Hóa đơn đã được đặt
                </div>
            </div>
            <div class="col-lg-3">
                <div class="alert alert-info text-center">
                    <i class="fa fa-rss fa-3x"></i>&nbsp;<b>{{ number_format($contact) }}</b> <br/>
                        Phản hồi từ khác hàng
                </div>
            </div>

            {{--<div class="col-lg-3">
                <div class="alert alert-warning text-center">
                    <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>2,000 $ </b>Payment Dues For Rejected Items
                </div>
            </div>--}}
            <!--end quick info section -->
        </div>

        <div class="row">
            <div class="col-lg-9">
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
                            style="width: 245px;">User
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                            colspan="1" aria-label="Browser: activate to sort column ascending"
                            style="width: 245px;">Phone
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                            colspan="1" aria-label="Platform(s): activate to sort column ascending"
                            style="width: 226px;">Address
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                            colspan="1" aria-label="Engine version: activate to sort column ascending"
                            style="width: 153px;">Amount
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                            colspan="1" aria-label="Engine version: activate to sort column ascending"
                            style="width: 153px;">Status
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                            colspan="1" aria-label="Engine version: activate to sort column ascending"
                            style="width: 153px;">Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($orders))
                        @foreach($orders as $item)
                            <tr>
                                <td>{{ $item->id }}</td>

                                {{--<td>{{ $item->user->name }}</td>
                                <td>{{ $item->user->phone }}</td>
                                <td>{{ $item->user->address }}</td>--}}

                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>

                                <td>
                                    <?php $totalAmount = 0; ?>
                                    @foreach($item->orderdetail as $dItem)
                                        <?php $totalAmount += $dItem->price; ?>
                                    @endforeach
                                    {{ number_format($totalAmount) }}
                                </td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    {{ Form::open(['method' => 'DELETE', 'url' => 'admin/order/' . $item->id]) }}

                                    {{--<a href="{{ url('admin/order/' . $item->id . '/edit') }}" class="btn">Edit</a> |--}}

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
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-3">
                <div class="panel panel-primary text-center no-boder">
                    <div class="panel-body yellow">
                        <i class="fa fa-bar-chart-o fa-3x"></i>
                        <h3>20,741 </h3>
                    </div>
                    <div class="panel-footer">
                            <span class="panel-eyecandy-title">Daily User Visits
                            </span>
                    </div>
                </div>
                <div class="panel panel-primary text-center no-boder">
                    <div class="panel-body blue">
                        <i class="fa fa-pencil-square-o fa-3x"></i>
                        <h3>2,060 </h3>
                    </div>
                    <div class="panel-footer">
                            <span class="panel-eyecandy-title">Pending Orders Found
                            </span>
                    </div>
                </div>
                <div class="panel panel-primary text-center no-boder">
                    <div class="panel-body green">
                        <i class="fa fa fa-floppy-o fa-3x"></i>
                        <h3>20 GB</h3>
                    </div>
                    <div class="panel-footer">
                            <span class="panel-eyecandy-title">New Data Uploaded
                            </span>
                    </div>
                </div>
                <div class="panel panel-primary text-center no-boder">
                    <div class="panel-body red">
                        <i class="fa fa-thumbs-up fa-3x"></i>
                        <h3>2,700 </h3>
                    </div>
                    <div class="panel-footer">
                            <span class="panel-eyecandy-title">New User Registered
                            </span>
                    </div>
                </div>
            </div>

        </div>

        {{--<div class="row">
            <div class="col-lg-4">
                <!-- Notifications-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-bell fa-fw"></i>Notifications Panel
                    </div>

                    <div class="panel-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item">
                                <i class="fa fa-comment fa-fw"></i>New Comment
                                <span class="pull-right text-muted small"><em>4 minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-envelope fa-fw"></i>Message Sent
                                <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-tasks fa-fw"></i>New Task
                                <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-bolt fa-fw"></i>Server Crashed!
                                <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-warning fa-fw"></i>Server Not Responding
                                <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="fa fa-shopping-cart fa-fw"></i>New Order Placed
                                <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                            </a>

                        </div>
                        <!-- /.list-group -->
                        <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                    </div>

                </div>
                <!--End Notifications-->
            </div>
            <div class="col-lg-4">
                <!-- Donut Example-->
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i>Donut Chart Example
                    </div>
                    <div class="panel-body">
                        <div id="morris-donut-chart"></div>
                        <a href="#" class="btn btn-default btn-block">View Details</a>
                    </div>

                </div>
                <!--End Donut Example-->
            </div>
            <div class="col-lg-4">
                <!-- Chat Panel Example-->
                <div class="chat-panel panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-comments fa-fw"></i>
                        Chat
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu slidedown">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-refresh fa-fw"></i>Refresh
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-check-circle fa-fw"></i>Available
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-times fa-fw"></i>Busy
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-clock-o fa-fw"></i>Away
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-sign-out fa-fw"></i>Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <ul class="chat">
                            <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <strong class="primary-font">Jack Sparrow</strong>
                                        <small class="pull-right text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i>12 mins ago
                                        </small>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                            <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <small class=" text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i>13 mins ago</small>
                                        <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                            <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <strong class="primary-font">Jack Sparrow</strong>
                                        <small class="pull-right text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i>14 mins ago</small>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                            <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <small class=" text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i>15 mins ago</small>
                                        <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="panel-footer">
                        <div class="input-group">
                            <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                            <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                        </div>
                    </div>

                </div>
                <!--End Chat Panel Example-->
            </div>
        </div>--}}




    </div>
@endsection
