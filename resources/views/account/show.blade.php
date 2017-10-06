@extends('layouts.app')

@section('title')  Edit Account show  @endsection

@section('content')
    <style>
        #DivForm{
            width:70%;
            height:auto;

            margin:auto;
            margin-top:20px;
            margin-bottom:20px;
        }

        .h2_user{
            color:green;
            text-align:center;
            font-weight: bold;
            padding-bottom: 10px;
            padding-top: 20px;
        }
        input[type=text],input[type=password]{
            float:right;
            margin-right:90px;
        }
        input[type=button],[type=reset] {
            margin-left:85px;
            color:red;
            margin-bottom: 10px;
        }
        .th_user{
            text-align: center;
            color: white;
            background: #ff7612;
        }
        .table_listth{
            text-align: center;
            font-family:"CourierNew",Courier,monospace;
            font-size: 20px;
            border:1px solid #990000;
        }
        .user_td{
            text-align: center;
            font-family:"CourierNew",Courier,monospace;
            font-weight: 600;
            font-size: 17px;
            height: 70px;
            border:1px solid #990000;
        }
    </style>

    <div id="DivForm">
        @if(Session::has('success'))
            <div class="col-lg-12">
                <h1 class="page-header" style="background-color: #09a80f; color: white">
                    {{ Session::get('success') }}
                </h1>
            </div>
        @endif
            <h2 class="h2_user">USER PROFILE</h2>
            <table border="1px" style="width: 100%;height: 130px;">
                <tr class="th_user">
                    <th class="table_listth">Name</th>
                    <th class="table_listth">Email</th>
                    <th class="table_listth">Last Name</th>
                    <th class="table_listth">First Name</th>
                    <th class="table_listth">Phone</th>
                    <th class="table_listth">Address</th>
                    <th class="table_listth">Gender</th>
                </tr>

                <tr>
                    <td class="user_td">{{ $users->name }}</td>
                    <td class="user_td">{{ $users->email }}</td>
                    <td class="user_td">{{ $users->last_name }}</td>
                    <td class="user_td">{{ $users->first_name }}</td>
                    <td class="user_td">{{ $users->phone }}</td>
                    <td class="user_td">{{ $users->address }}</td>
                    <td class="user_td">{{ $users->gender }}</td>
                </tr>

            </table>
    </div>
@endsection