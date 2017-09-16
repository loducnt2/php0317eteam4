@extends('layouts.app')

@section('title') Supplier  @endsection

@section('content')
    {{--<table border="1px" style="border-collapse: collapse; margin: auto;" width="30%">
        <caption>Thông tin chung</caption>
        <tr>
            <td>Name</td>
            <td>Address</td>
            <td>Website</td>
            <td>Phone</td>
            <td>Email</td>

        </tr>

            <tr>
                <td>{{ $supplier->name }}</td>
                <td>{{ $supplier->address }}</td>
                <td>{{ $supplier->website }}</td>
                <td>{{ $supplier->phone }}</td>
                <td>{{ $supplier->email }}</td>
            </tr>

    </table>--}}
    <style type="text/css">
        .wrapper{
            width: 60%;
            height: auto;
            border: 1px dotted red;
            margin: auto;
            padding: 10px;
        }
        .wrapper b{
            margin-left: 40px;
            font-size: 23px;
        }
        .wrapper h2{
            text-align: center;
            margin-bottom: 30px;
            color: red;
            font-family: "Book Antiqua";
            text-transform: uppercase;
        }
        .wrapper span{
            font-size: 23px;
        }
    </style>


    <div class="wrapper">
        <h2>Thông tin liên hệ với nhà sản xuất</h2>

        <span>- Sản phẩm được sản xuất tại công ty  : </span>
        <b>{{ $supplier->name  }}</b> <br><br>

        <span>- Địa chỉ : </span>
        <b>{{ $supplier->address  }}</b> <br><br>

        <span>- Website của công ty: </span>
        <b>{{ $supplier->website  }}</b> <br><br>

        <span>- Số điện thoại liên hệ: </span>
        <b>{{ $supplier->phone  }}</b> <br><br>

        <span>- Email : </span>
        <b>{{ $supplier->email  }}</b> <br><br>

    </div>


@endsection