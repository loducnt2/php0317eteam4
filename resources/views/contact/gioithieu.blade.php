@extends('layouts.app')

@section('title') Contact @endsection

{{--@section('css')
    <link rel="stylesheet" href="{{ url('1.css') }}">
@endsection--}}

@section('content')

    <style>
        .wrapper {
            width: 85%;
            height: auto;
            margin: auto;
            border: none;
        }
        .wrapper p{
            color: black;
            font-size: 18px;
            text-align: justify;
        }
        .wrapper h2{
            margin-top: -30px;
            margin-bottom: 25px;
            color: #06c;
            font-weight: bold;
            text-align: center;
            font-size: 22px;
            text-transform: uppercase;
            font-family: 'Roboto', Helvetica, Arial,sans-senif;
        }
        .wrapper h3{
            font-weight: bold;
            color: #06c;
            font-size: 21px;
            font-family: 'Roboto', Helvetica, Arial,sans-senif;

        }
        .wrapper h4{
            color: #06c;
            font-weight: bold;
            font-size: 19px;
            margin-left: 20px;
            font-family: 'Roboto', Helvetica, Arial,sans-senif;
            text-transform: uppercase;
        }
        .phan1{
            width: 95%;
            height: 310px;
            margin: auto;
        }
        .phan1 p{
            color: black;
            font-size: 18px;
            text-align: justify;
            font-family: Consolas;
        }

        .phan2{
            width: 95%;
            height: 130px;
            margin: auto;
        }
        .phan2 a{
            color: red;
            font-size: 15px;
        }

        .phan3{
            width: 95%;
            height: 205px;
            margin: auto;
        }



        .phan4{
            width: 95%;
            height: 440px;
            margin: auto;
        }

        .phan4 p{
            color: black;
            font-size: 18px;
            text-align: justify;
            font-family: Consolas;
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

    <div class="contact">
        <div class="wrapper">
            <h2>Cud Shop giới thiệu</h2>

            <div class="phan1">
                <p>
                    Giầy dép là một trong những phụ kiện không thể thiếu góp phần tạo nên phong cách thời trang của mỗi người. Chính vì điều đó Cud Shop mong muốn đem đến những mẫu giầy mới nhất được cập nhật thường xuyên giúp các bạn nữ dễ dàng hơn trong việc lựa chọn và cập nhật những style thịnh hành của thời trang giầy dép trong nước và thế giới.
                </p>
                <p>
                    Cud Shop được biết đến với những sản phẩm giầy dép nam, nữ hợp thời trang, nhập trực tiếp từ những công ty giầy dép uy tín, cao cấp mà không qua trung gian, đảm bảo về chất lượng và giá thành … Cud Shop cung cấp mọi kiểu dáng giầy dép nam, nữ mới nhất: Giầy tây nam, giầy cao cót, giầy thể thao, giầy bốt, sandals, giày vải và rất nhiều loại dép đẹp ….Nếu là một người yêu thời trang, tìm kiếm những phong cách mới, thì bạn không thể bỏ qua những xu hướng nổi bật của thời trang giày dép : combat boot, giày orford, giày mũi nhọn, đính kim loại, phong cách sporty với giày đế bánh mì…Thật dễ dàng, chỉ với một click bạn có thể nhanh chóng sở hữu chúng trong tủ đồ của mình với Cud Shop.
                </p>
            </div>

            <div class="phan2">
                <h3>Liên hệ với chúng tôi:</h3>
                <ul style="margin-left: 20px;">
                    <li  style="color: black; font-size: 18px; font-family: Consolas;">Phone  :  0947 569 488</li>
                    <li style="color: black; font-size: 18px; font-family: Consolas;">Website  :   <a href="#">http://www.cudshop.com</a></li>
                    <li style="color: black; font-size: 18px; font-family: Consolas;">Facebook  :   <a href="#">https://www.facebook.com/bestshop</a></li>
                    <li style="color: black; font-size: 18px; font-family: Consolas;">Facebook chính  : <a href="#">https://www.facebook.com/cudshop</a></li>
                </ul>
            </div>

            <div class="phan3">
                <h3>Cud Shop cam kết :</h3>
                <ul style="margin-left: 20px;">
                    <li style="color: black; font-size: 18px; font-family: Consolas;" >- Hàng thật giống 100% ảnh chụp về kiểu dáng, mẫu mã.</li>
                    <li style="color: black; font-size: 18px; font-family: Consolas;">- Mẫu mới cập nhật liên tục.</li>
                    <li style="color: black; font-size: 18px; font-family: Consolas;">- Sản phẩm chất lượng</li>
                    <li style="color: black; font-size: 18px; font-family: Consolas;">- Giá thành phải chăng</li>
                    <li style="color: black; font-size: 18px; font-family: Consolas;">- Phương thức vận chuyển thuận tiện. ( Ship hàng toàn quốc, nhận chuyển hàng COD )</li>
                    <li style="color: black; font-size: 18px; font-family: Consolas;">- Hàng luôn có sẵn trong kho.</li>
                    <li style="color: black; font-size: 18px; font-family: Consolas;">- Bán hàng nhiệt tình tư vấn</li>
                </ul>
            </div>

            <div class="phan4">
                <h3>Cách thức đặt hàng online:</h3>
                <ul style="margin-left: 20px;">
                    <li style="color: black; font-size: 18px; font-family: Consolas;">Bước 1: Chọn mẫu.</li>
                    <li style="color: black; font-size: 18px; font-family: Consolas;">Bước 2: Liên hệ qua điện thoại hoặc giỏ hàng trên website để xác nhận tình trạng của hàng mẫu: màu sắc, xuất xứ, số lượng, giá cả, tình trạng còn hàng hay hết hàng.</li>
                    <li style="color: black; font-size: 18px; font-family: Consolas;">Bước 3: Đặt hàng qua giỏ hàng hoặc gọi điện trực tiếp cho Cud Shop.</li>
                    <li style="color: black; font-size: 18px; font-family: Consolas;">Bước 4: Nhận điện thoại xác nhận đơn đặt hàng từ ĐHQ Shop.</li>
                    <li style="color: black; font-size: 18px; font-family: Consolas;">Bước 5: Nhận hàng, kiểm tra, thanh toán tiền( Áp dụng cho khách dùng dịch vụ chuyển hàng COD)--> Phí ship 50k</li>

                    <p style="margin-left: 20px;">
                        Khách hàng chuyển khoản trước: --> phí ship 30k.<br>
                        Khách hàng ở Hà Nội --> phí ship 20k.<br>
                        FREE SHIP đơn hàng  lớn hơn 1 triệu và khách hàng thanh toán trước.
                    </p>

                    <li style="color: black; font-size: 18px; font-family: Consolas;">Bước 6: Quý anh chị và các bạn vui lòng thông báo xác nhận đã nhận hàng cho Cud Shop. Xin cảm ơn!</li>

                    <p style="margin-left: 20px;">
                        Số tài khoản:<br>

                        Ngân hàng VIETCOMBANK (chi nhánh Cầu Diễn)<br>

                        Số tài khoản: 0541000205983<br>

                        Chủ tài khoản: Lô Minh Đức<br>

                        Cud  SHOP  rất vui được phục vụ các bạn!
                    </p>
                </ul>
            </div>
        </div>
    </div>

@endsection