@extends('layouts.app')

@section('title') Quy định đổi trả sản phẩm @endsection

{{--@section('css')
    <link href="{{ asset('css/doitra.css') }}" rel="stylesheet" type="text/css" />
@endsection--}}

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}" style="color: red;">Home</a></li>
                    <li class="active" style="color: #17bf08;">Đổi / trả</li>
                </ol>
            </div>
        </div>
    </div>

    <h2 style="color: #17bf08; text-align: center; margin-bottom: 30px ">QUY ĐỊNH ĐỔI TRẢ</h2>

    <div class="wrapper">
        <div class="left">
            <div class="phan1">
                <p><b class="indam">1. Thời hạn đổi/ trả sản phẩm</b></p> <br>
                <p class="thut">
                    Nhằm đảm bảo quyền lợi người mua, sau khi nhận hàng nếu bạn không hài lòng và muốn đổi/ trả sản phẩm,
                    vui lòng liên hệ với Cud Shop trong vòng 24h kể từ khi nhận hàng.
                    Chúng tôi sẽ tiếp nhận thông tin, giúp bạn phân giải và bảo vệ quyền lợi của bạn theo quy trình xử
                    lý khiếu nại của <a href="#">cudshop.vn</a>
                </p>
                <p class="thut">
                    Sau thời hạn này, nếu không nhận được bất kỳ thông tin nào từ bạn thì hệ thống sẽ tự động Hoàn tất giao dịch.
                    Tất cả các vấn đề khiếu nại liên quan đến đơn hàng sẽ không còn hiệu lực.
                </p>

                <img class="anh1" src="{{ url('images/doitra.PNG') }}" alt="Đổi trả sản phẩm">
                <br>

                <p><b class="indam">2. Điều kiện đổi/ trả sản phẩm</b></p>
                <p class="thut">
                    + Điều kiện chung bắt buộc:
                </p>
                <p class="thut">. Sản phẩm còn trong thời hạn đổi/ trả.</p>
                <p class="thut">.  Sản phẩm còn nguyên bao hộp như ban đầu, còn nguyên tem mác và các phụ kiện đi kèm (nếu có)></p>
                <p class="thut">. Sản phẩm chưa có dấu hiệu đã bị sử dụng hoặc giặt ủi</p>
                <p class="thut">+ Đối với từng trường hợp cụ thể:</p>
                <p class="thut">
                    – Nhận sản phẩm không đúng yêu cầu (không đúng size, màu sắc, chất liệu, kiểu dáng, giao thiếu):
                    trong thời hạn đổi/ trả còn hiệu lực, bạn vui lòng tạo form khiếu nại theo hướng dẫn.
                    Chúng tôi sẽ tiếp nhận thông tin, giúp bạn phân giải và bảo vệ quyền lợi của bạn theo quy trình xử
                    lý khiếu nại của Cudshop.vn
                </p>
                <p class="thut">
                    – Nhận sản phẩm đúng yêu cầu nhưng bạn vẫn muốn đổi vì lý do cá nhân: Cudshop không có cơ sở để can
                    thiệp trong trường hợp này, bạn vui lòng liên hệ trực tiếp với Shop để được hỗ trợ.
                </p>
            </div>

            <div class="cachthuc">
                <p style="padding-top: 18px"><b class="indam" >3. Cách thức đổi/ trả sản phẩm</b></p>
                <p style="margin-top: 10px">
                    Đối với các khu vực nhà vận chuyển hỗ trợ đổi/ trả sản phẩm tại địa chỉ: Bạn đóng gói sản phẩm như nguyên
                    trạng lúc nhận và đợi nhà vận chuyển đến lấy hàng để đi đổi/ trả sản phẩm cho người bán.
                </p>
                <p>
                    Đối với các khu vực nhà vận chuyển không hỗ trợ đổi/ trả sản phẩm tại địa chỉ: Bạn đóng gói sản phẩm như
                    nguyên trạng lúc nhận và gởi qua đường bưu điện đến địa chỉ người bán.
                </p>
                <p>
                    Sau khi nhận được sản phẩm, người bán kiểm tra tình trạng sản phẩm thỏa điều kiện đổi/ trả sản phẩm thì
                    người bán sẽ tiến hành gửi lại sản phẩm đổi cho bạn, hoặc thông báo với Sendo.vn để hoàn tiền cho bạn.
                </p>
                <p>
                    Thời gian vận chuyển đổi/ trả sản phẩm tương đương như thời gian gởi sản phẩm (3-14 ngày tùy khoảng cách
                    giữa địa chỉ người bán và người mua hàng)
                </p>

                <img class="anh2" src="{{ url('images/banner-dt.PNG') }}" alt="Banner đổi trả sản phẩm">

                <p>Địa chỉ đổi trả</p>
                <p class="ct-thut">. Hà Nội </p>
                <p class="ct-thut">. Đà Nẵng </p>
                <p class="ct-thut">. TP HCM </p>
            </div>

            <div class="muc4">
                <p><b>4. Tôi có thể đổi sang sán phẩm khác được không?</b></p>
                <p align="justify">
                    Bạn có thể thỏa thuận với người bán nếu người bán đồng ý cho bạn đổi sang sản phẩm khác. <br>
                    Sendo sẽ chuyển 100% số tiền bạn đã thanh toán lúc mua sản phẩm ban đầu cho người bán.
                    Trong trường hợp phát sinh tiền chênh lệch giữa sản phẩm cũ và mới,
                    bạn vui lòng thanh toán trực tiếp với người bán.
                </p>
            </div>

            <div class="muc5">
                <p><b>5. Cước phí đổi/ trả sản phẩm tính như thế nào?</b></p>

                <p style="margin-top: 15px">
                    Tùy thuộc vào nguyên nhân đổi/ trả hàng, Cudshop sẽ ra phán quyết thu phí của bạn hay người bán: <br><br>

                    – Cudshop sẽ thu phí vận chuyển từ bạn nếu người bán đã giao sản phẩm đúng như yêu cầu của bạn nhưng bạn muốn đổi/ trả.
                    <br><br>
                    – Cudshop sẽ thu phí vận chuyển từ người bán nếu họ giao sản phẩm không đúng như yêu cầu của bạn.
                </p>
            </div>

            <div class="muc6">
                <p><b>6. Khi tôi trả hàng thì khi nào tôi nhận được tiền và hoàn tiền khoản nào?</b></p>
                <p align="justify" style="padding-top: 8px">
                    Sau khi bạn trả hàng và Shop xác nhận đã nhận được hàng còn nguyên vẹn, Sendo.vn sẽ hoàn tiền cho bạn
                    thông qua tài khoản Senpay (áp dụng cho cả 2 hình thức bạn đã thanh toán Senpay hay COD).
                    Bạn sẽ nhận lại 100% số tiền đã thanh toán cho sản phẩm, không bao gồm chi phí vận chuyển và các khoản
                    giảm giá khác (nếu có).
                </p>
            </div>

            <div class="muc7">
                <p><b>7. Tôi muốn hoàn trả tiền mặt có được không?</b></p>
                <p  align="justify" style="padding-top: 8px">
                    Cudshop.vn chỉ hoàn trả qua tài khoản Senpay. Bạn có thể vào tài khoản Senpay để rút tiền về tài khoản
                    ngân hàng của bạn, sau đó rút tiền mặt hoặc để tiền trên Senpay để sử dụng thanh toán các tiện ích
                    khác của Senpay như mua hàng trên Cudshop.vn, thanh toán tiền điện, nước….
                </p>
            </div>

        </div>
        <div class="right"></div>
    </div>



@endsection