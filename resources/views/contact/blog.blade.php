@extends('layouts.app')

@section('title') Blog @endsection




@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}" style="color: red;">Home</a></li>
                    <li class="active" style="color: #17bf08;">Blog</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->
    <!--typo-starts-->

    <div class="men">
        <div class="container">
            <div class="blog-top">
                <div class="col-md-6 grid_3">
                    <h3><a href="blog_single.html">Lorem Ipsum is simply</a></h3>
                    <a href="blog_single.html"><img src="images/slider1.jpg" class="img-responsive" alt=""/></a>
                    <div class="blog-poast-admin">
                        <a href="#"><img src="{{ url('images/b_small.jpg') }}" class="img-responsive" title="admin" alt=""/></a>
                    </div>
                    <div class="blog-poast-info">
                        <ul>
                            <li><i class="admin"> </i><a class="admin" href="#"><span> </span> Admin </a></li>
                            <li><i class="date"> </i><span> </span>12-04-2015</li>
                            <li><i class="comment"> </i><a class="p-blog" href="#"><span> </span>No Comments</a></li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="button"><a href="#">Read More</a></div>
                </div>
                <div class="col-md-6 grid_3">
                    <h3><a href="blog_single.html">Lorem Ipsum is simply</a></h3>
                    <a href="blog_single.html"><img src="images/3.jpg" class="img-responsive" alt=""/></a>
                    <div class="blog-poast-admin">
                        <a href="#"><img src="{{ url('images/b_small.jpg') }}" class="img-responsive" title="admin" alt=""/></a>
                    </div>
                    <div class="blog-poast-info">
                        <ul>
                            <li><i class="admin"> </i><a class="admin" href="#"><span> </span> Admin </a></li>
                            <li><i class="date"> </i><span> </span>12-04-2015</li>
                            <li><i class="comment"> </i><a class="p-blog" href="#"><span> </span>No Comments</a></li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="button"><a href="#">Read More</a></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="blog-top">
                <div class="col-md-6 grid_3">
                    <h3><a href="blog_single.html">Lorem Ipsum is simply</a></h3>
                    <a href="blog_single.html"><img src="images/2.jpg" class="img-responsive" alt=""/></a>
                    <div class="blog-poast-admin">
                        <a href="#"><img src="{{ url('images/b_small.jpg') }}" class="img-responsive" title="admin" alt=""/></a>
                    </div>
                    <div class="blog-poast-info">
                        <ul>
                            <li><i class="admin"> </i><a class="admin" href="#"><span> </span> Admin </a></li>
                            <li><i class="date"> </i><span> </span>12-04-2015</li>
                            <li><i class="comment"> </i><a class="p-blog" href="#"><span> </span>No Comments</a></li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="button"><a href="#">Read More</a></div>
                </div>
                <div class="col-md-6 grid_3">
                    <h3><a href="blog_single.html">Lorem Ipsum is simply</a></h3>
                    <a href="blog_single.html"><img src="images/slider2.jpg" class="img-responsive" alt=""/></a>
                    <div class="blog-poast-admin">
                        <a href="#"><img src="{{ url('images/b_small.jpg') }}" class="img-responsive" title="admin" alt=""/></a>
                    </div>
                    <div class="blog-poast-info">
                        <ul>
                            <li><i class="admin"> </i><a class="admin" href="#"><span> </span> Admin </a></li>
                            <li><i class="date"> </i><span> </span>12-04-2015</li>
                            <li><i class="comment"> </i><a class="p-blog" href="#"><span> </span>No Comments</a></li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="button"><a href="#">Read More</a></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="blog-bottom">
                <div class="col-md-6 grid_3">
                    <h3><a href="blog_single.html">Lorem Ipsum is simply</a></h3>
                    <a href="blog_single.html"><img src="images/slider3.jpg" class="img-responsive" alt=""/></a>
                    <div class="blog-poast-admin">
                        <a href="#"><img src="{{ url('images/b_small.jpg') }}" class="img-responsive" title="admin" alt=""/></a>
                    </div>
                    <div class="blog-poast-info">
                        <ul>
                            <li><i class="admin"> </i><a class="admin" href="#"><span> </span> Admin </a></li>
                            <li><i class="date"> </i><span> </span>12-04-2015</li>
                            <li><i class="comment"> </i><a class="p-blog" href="#"><span> </span>No Comments</a></li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="button"><a href="#">Read More</a></div>
                </div>
                <div class="col-md-6 grid_3">
                    <h3><a href="blog_single.html">Lorem Ipsum is simply</a></h3>
                    <a href="blog_single.html"><img src="images/slider1.jpg" class="img-responsive" alt=""/></a>
                    <div class="blog-poast-admin">
                        <a href="#"><img src="{{ url('images/b_small.jpg') }}" class="img-responsive" title="admin" alt=""/></a>
                    </div>
                    <div class="blog-poast-info">
                        <ul>
                            <li><i class="admin"> </i><a class="admin" href="#"><span> </span> Admin </a></li>
                            <li><i class="date"> </i><span> </span>12-04-2015</li>
                            <li><i class="comment"> </i><a class="p-blog" href="#"><span> </span>No Comments</a></li>
                        </ul>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="button"><a href="#">Read More</a></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="pages" id="pages">
        <div class="container">
            <div class="typo-top heading">
                <h2 style="color: #17bf08;">TYPOGRAPHY</h2>
            </div>

                <div class="distracted">
                    <h3 class="ghj">Wells</h3>
                    <div class="well">
                        CUD SHOP - Chuyên sỉ và lẻ giày dép Nam/Nữ trên toàn quốc
                    </div>
                    <div class="well">
                        CUD SHOP luôn bán hàng theo tiêu chí “RẺ - ĐẸP – BỀN”, mong muốn đem đến chất lượng cũng như giá cả tốt nhất và phù hợp cho mọi người.
                    </div>
                    <div class="well">
                        Sự hài lòng của các bạn chính là mục tiêu phấn đấu của chúng tôi !
                    </div>
                </div>
                <div class="appearance">
                    <h3 class="ghj">Badges</h3>
                    <div class="col-md-6">
                        <p>Add modifier classes to change the appearance of a badge.</p>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Classes</th>
                                <th>Badges</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>No modifiers</td>
                                <td><span class="badge">42</span></td>
                            </tr>
                            <tr>
                                <td><code>.badge-primary</code></td>
                                <td><span class="badge badge-primary">1</span></td>
                            </tr>
                            <tr>
                                <td><code>.badge-success</code></td>
                                <td><span class="badge badge-success">22</span></td>
                            </tr>
                            <tr>
                                <td><code>.badge-info</code></td>
                                <td><span class="badge badge-info">30</span></td>
                            </tr>
                            <tr>
                                <td><code>.badge-warning</code></td>
                                <td><span class="badge badge-warning">412</span></td>
                            </tr>
                            <tr>
                                <td><code>.badge-danger</code></td>
                                <td><span class="badge badge-danger">999</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <p>Easily highlight new or unread items with the <code>.badge</code> class</p>
                        <div class="list-group list-group-alternate">
                            <a href="#" class="list-group-item"><span class="badge">201</span> <i class="ti ti-email"></i> Inbox </a>
                            <a href="#" class="list-group-item"><span class="badge badge-primary">5021</span> <i class="ti ti-eye"></i> Profile visits </a>
                            <a href="#" class="list-group-item"><span class="badge">14</span> <i class="ti ti-headphone-alt"></i> Call </a>
                            <a href="#" class="list-group-item"><span class="badge">20</span> <i class="ti ti-comments"></i> Messages </a>
                            <a href="#" class="list-group-item"><span class="badge badge-warning">14</span> <i class="ti ti-bookmark"></i> Bookmarks </a>
                            <a href="#" class="list-group-item"><span class="badge badge-danger">30</span> <i class="ti ti-bell"></i> Notifications </a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!--typo-ends-->
@endsection