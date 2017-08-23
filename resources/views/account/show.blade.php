@extends('layouts.app')

@section('title')  Edit Account show  @endsection

@section('content')
    <style>
        #DivForm{
            width:70%;
            height:auto;
            background-color:#ccc;
            margin:auto;
            margin-top:20px;
            margin-bottom:20px;
        }

        #DivBang{
            width:80%;
            height:50%;
            border:1px solid black;
            margin:auto;
            margin-top:20px;
        }

        h2{
            color:green;
            text-align:center;

            padding-bottom: 10px;
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
    </style>

    <div id="DivForm">
            <h2>USER PROFILE</h2>
            <table border="1px" style="width: 100%;height: 130px;">
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Last Name</td>
                    <td>First Name</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>Gender</td>
                </tr>

                        <tr>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->email }}</td>
                            <td>{{ $users->last_name }}</td>
                            <td>{{ $users->first_name }}</td>
                            <td>{{ $users->phone }}</td>
                            <td>{{ $users->address }}</td>
                            <td>{{ $users->gender }}</td>
                        </tr>

            </table>
    </div>
@endsection