@extends('layouts.app')

@section('title') Contact @endsection

{{--@section('css')
    <link rel="stylesheet" href="{{ url('1.css') }}">
@endsection--}}

@section('content')

    <style>


        .wrapper {
            width: 85%;
            height: 1176px;
            margin: auto;
            background-color: rgba(46, 37, 36, 0.57);
            border: 1px solid white;

        }

        .phan1{
            width: 95%;
            height: 212px;
            margin: auto;
        }

        .phan2{
            width: 95%;
            height: 160px;
            margin: auto;
        }
        .phan2 a{
            color: pink;
            font-size: 15px;
        }

        .phan3{
            width: 95%;
            height: 225px;
            margin: auto;
        }

        .phan3 ul li {
            list-style: none;
        }

        .phan4{
            width: 95%;
            height: 440px;
            margin: auto;
        }
    </style>

    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}" style="color: red;">Home</a></li>
                    <li class="active" style="color: #17bf08;">Giới thiệu</li>
                </ol>
            </div>
        </div>
    </div>

    <h2 style="color: #17bf08; text-align: center; ">GIỚI THIỆU</h2>

    <div class="contact">
        <div class="wrapper">
            <h3 style="line-height: 30px; color: white; border-bottom: 1px solid pink;">ĐHQ SHOP giới thiệu</h3>
            <div class="phan1">
                <p style="color: white; font-size: 18px;">
                    Giầy dép là một trong những phụ kiện không thể thiếu góp phần tạo nên phong cách thời trang của mỗi người. Chính vì điều đó ĐHQ Shop mong muốn đem đến những mẫu giầy mới nhất được cập nhật thường xuyên giúp các bạn nữ dễ dàng hơn trong việc lựa chọn và cập nhật những style thịnh hành của thời trang giầy dép trong nước và thế giới.
                </p>
                <p style="color: white; font-size: 18px; ">ĐHQ Shop được biết đến với những sản phẩm giầy dép nam, nữ hợp thời trang, nhập trực tiếp từ những công ty giầy dép uy tín, cao cấp mà không qua trung gian, đảm bảo về chất lượng và giá thành … ĐHQ Shop cung cấp mọi kiểu dáng giầy dép nam, nữ mới nhất: Giầy tây nam, giầy cao cót, giầy thể thao, giầy bốt, sandals, giày vải và rất nhiều loại dép đẹp ….Nếu là một người yêu thời trang, tìm kiếm những phong cách mới, thì bạn không thể bỏ qua những xu hướng nổi bật của thời trang giày dép : combat boot, giày orford, giày mũi nhọn, đính kim loại, phong cách sporty với giày đế bánh mì…Thật dễ dàng, chỉ với một click bạn có thể nhanh chóng sở hữu chúng trong tủ đồ của mình với ĐHQ Shop.
                </p>
            </div>

            <div class="phan2">
                <h1 style="color: white;">Liên hệ với chúng tôi:</h1>
                <ul>
                    <li style="color: white;">Phone  :  0947 569 488</li>
                    <li style="color: white;">Website  :   <a href="#">http://www.dhqshop.com</a></li>
                    <li style="color: white;">Facebook  :   <a href="#">https://www.facebook.com/bestshop</a></li>
                    <li style="color: white;">Facebook chính  : <a href="#">https://www.facebook.com/dqhshop</a></li>
                </ul>
            </div>

            <div class="phan3">
                <h1 style="color: white;">ĐHQ Shop cam kết :</h1>
                <ul>
                    <li style="color: white; font-size: 17px;">- Hàng thật giống 100% ảnh chụp về kiểu dáng, mẫu mã.</li>
                    <li style="color: white; font-size: 17px;">- Mẫu mới cập nhật liên tục.</li>
                    <li style="color: white; font-size: 17px;">- Sản phẩm chất lượng</li>
                    <li style="color: white; font-size: 17px;">- Giá thành phải chăng</li>
                    <li style="color: white; font-size: 17px;">- Phương thức vận chuyển thuận tiện. ( Ship hàng toàn quốc, nhận chuyển hàng COD )</li>
                    <li style="color: white; font-size: 17px;">- Hàng luôn có sẵn trong kho.</li>
                    <li style="color: white; font-size: 17px;">- Bán hàng nhiệt tình tư vấn</li>
                </ul>
            </div>

            <div class="phan4">
                <h1 style="color: white;">Cách thức đặt hàng online:</h1>
                <ul>
                    <li style="color: white; font-size: 17px;">Bước 1: Chọn mẫu.</li>
                    <li style="color: white; font-size: 17px;">Bước 2: Liên hệ qua điện thoại hoặc giỏ hàng trên website để xác nhận tình trạng của hàng mẫu: màu sắc, xuất xứ, số lượng, giá cả, tình trạng còn hàng hay hết hàng.</li>
                    <li style="color: white; font-size: 17px;">Bước 3: Đặt hàng qua giỏ hàng hoặc gọi điện trực tiếp cho ĐHQ Shop.</li>
                    <li style="color: white;">Bước 4: Nhận điện thoại xác nhận đơn đặt hàng từ ĐHQ Shop.</li>
                    <li style="color: white;">Bước 5: Nhận hàng, kiểm tra, thanh toán tiền( Áp dụng cho khách dùng dịch vụ chuyển hàng COD)--> Phí ship 50k</li>

                    <p style="color: white; font-size: 17px;">
                        Khách hàng chuyển khoản trước: --> phí ship 30k.<br>
                        Khách hàng ở Hà Nội --> phí ship 20k.<br>
                        FREE SHIP đơn hàng  lớn hơn 1 triệu và khách hàng thanh toán trước.
                    </p>

                    <li style="color: white; font-size: 17px;">Bước 6: Quý anh chị và các bạn vui lòng thông báo xác nhận đã nhận hàng cho ĐHQ Shop. Xin cảm ơn!</li>

                    <p style="color: white; font-size: 17px;">
                        Số tài khoản:<br>

                        Ngân hàng VIETCOMBANK (chi nhánh Cầu Diễn)<br>

                        Số tài khoản: 0541000205983<br>

                        Chủ tài khoản: Lô Minh Đức<br>

                        ĐHQ  SHOP  rất vui được phục vụ các bạn!
                    </p>
                </ul>
            </div>
        </div>
    </div>

@endsection