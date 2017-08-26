@extends('layouts.admin')

@section('title') User Information @endsection

@section('content')


                <h2>USER PROFILE</h2>
                <table border="1px" style="width: 60%; height: 200px; margin: auto; background :#ccc; text-align: center;">
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
@endsection