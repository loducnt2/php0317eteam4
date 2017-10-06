<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{ asset('assets/plugins/bootstrap/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/pace/pace-theme-big-counter.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/main-style.css') }}" rel="stylesheet" />

    <!-- Page-Level CSS -->
    <link href="{{ asset('assets/plugins/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />


</head>
<body>
<!--  wrapper -->
<div id="wrapper">
    <!-- navbar top -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
        <!-- navbar-header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('admin') }}">
                <span style="font-size: 29px;font-weight: bold;line-height: 1.5;color: red">
                    <marquee behavior="slide">
                        <img src="{{ url('images/cud-shop.png') }}" style="width: 250px; height: 59px;">
                    </marquee>
                </span>
            </a>
        </div>
        <!-- end navbar-header -->
        <!-- navbar-top-links -->
        <ul class="nav navbar-top-links navbar-right">
            <!-- main dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="top-label label label-danger">{{--{{ number_format($contact) }} --}}</span><i class="fa fa-envelope fa-3x"></i>
                </a>
                <!-- dropdown-messages -->
                <ul class="dropdown-menu dropdown-messages">
                    {{--@if(isset($cmt))
                        @foreach($cmt as $item)
                        <li>

                            <a href="#">
                                <div>
                                    <strong><span class=" label label-info">Jonney Depp </span></strong>
                                    <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                </div>
                                <div>{{ $item->email }}</div>
                            </a>
                        </li>
                        @endforeach
                    @endif
                        <li class="divider"></li>
                        --}}

                    <li>
                        <a class="text-center" href="{{ url('admin/contact') }}">
                            <strong>Read All Messages</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- end dropdown-messages -->
            </li>






            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-3x"></i>
                </a>
                <!-- dropdown user-->

                        <ul class="dropdown-menu dropdown-user">

                            <li><a href="{{ url('admin/user/detail/' . Auth::user()->id) }}"><i class="fa fa-user fa-fw"></i>User Profile</a>
                            </li>

                            <li><a href="{{ url('admin/user/' . Auth::user()->id . '/edit') }}"><i class="fa fa-gear fa-fw"></i>Settings</a>
                            </li>

                            <li class="divider"></li>

                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();" style="color: black;">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </li>

                        </ul>

                <!-- end dropdown-user -->
            </li>
            <!-- end main dropdown -->
        </ul>
        <!-- end navbar-top-links -->

    </nav>
    <!-- end navbar top -->


    <!-- navbar side -->
        @include('patials.admin-menu')
    <!-- end navbar side -->


    <!--  page-wrapper -->
        @yield('content')
    <!-- end page-wrapper -->


</div>
<!-- end wrapper -->

<!-- Core Scripts - Include with every page -->
<script src="{{ asset('assets/plugins/jquery-1.10.2.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('assets/plugins/pace/pace.js') }}"></script>
<script src="{{  asset('assets/scripts/siminta.js') }}"></script>

<!-- Page-Level Plugin Scripts-->
<script src="{{ asset('assets/plugins/morris/raphael-2.1.0.min.js') }}"></script>
<script src="{{ asset('assets/plugins/morris/morris.js') }}"></script>
<script src="{{ asset('assets/scripts/dashboard-demo.js') }}"></script>


</body>

</html>
