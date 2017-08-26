<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                <div class="user-section">
                    <div class="user-section-inner">
                        <img src="{{ url('assets/img/user.jpg') }}" alt="">
                    </div>
                    <div class="user-info">
                        <div> <strong>{{ Auth::User()->name }}</strong></div>
                        <div class="user-text-online">
                            <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                        </div>
                    </div>
                </div>
                <!--end user image section-->
            </li>

            <li class="sidebar-search">
                <!-- search section-->
                {{--<div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>--}}
                <!--end search section-->
            </li>

            <li class="selected">
                <a href="{{ url('admin') }}"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
            </li>
            <li>
                <a href="{{ url('admin/category') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Category</a>
            </li>
            <li>
                <a href="{{ url('admin/product') }}"><i class="fa fa-flask fa-fw"></i>Product</a>
            </li>
            <li>
                <a href="{{ url('admin/user') }}"><i class="fa fa-table fa-fw"></i>User</a>
            </li>
            <li>
                <a href="{{ url('admin/orderdetail') }}"><i class="fa fa-edit fa-fw"></i>OrderDetail</a>
            </li>
            <li>
                <a href="{{ url('admin/order') }}"><i class="fa fa-wrench fa-fw"></i>Order</a>
            </li>

            <li>
                <a href="{{ url('admin/supplier') }}"><i class="fa fa-wrench fa-fw"></i>Supplier</a>
            </li>
            <li>
                <a href="{{ url('admin/image') }}"><i class="fa fa-wrench fa-fw"></i>Images</a>
            </li>
            <li>
                <a href="{{ url('admin/warrantydetail') }}"><i class="fa fa-wrench fa-fw"></i>WarrantyDetail</a>
            </li>
            <li>
                <a href="{{ url('admin/warranty') }}"><i class="fa fa-wrench fa-fw"></i>Warranty</a>
            </li>
            <li>
                <a href="{{ url('admin/comment') }}"><i class="fa fa-wrench fa-fw"></i>Comment</a>
            </li>
            <li>
                <a href="{{ url('admin/group') }}"><i class="fa fa-table fa-fw"></i>Group</a>
            </li>
            <li>
                <a href="{{ url('admin/contact') }}"><i class="fa fa-table fa-fw"></i>Contact</a>
            </li>

        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>