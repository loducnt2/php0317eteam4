@extends('layouts.admin')

@section('title') User Information @endsection

@section('content')


    <h1 style="text-align: center;
               margin-top: 0;
                margin-bottom: 30px;
                padding-top: 70px;
                font-weight: bold;
            ">USER PROFILE</h1>

                <table border="1px" style="width: 60%; height: 165px; margin: auto; background :#ccc; text-align: center;">

                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Gender</th>
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
@endsection