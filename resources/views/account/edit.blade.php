@extends('layouts.app')

@section('title')  Edit Account  @endsection

@section('content')
{{--    <style>
        #DivForm{
            width:50%;
            height:auto;
            /*background-color:#ccc;*/
            border: 1px solid #ccc;
            margin:auto;
            padding-left:70px;
            margin-top:20px;
            margin-bottom:50px;
        }



        .h2_account{
            color:green;
            margin-left: 130px;
            font-weight: bold;
            padding-bottom: 10px;
            font-family: "CourierNew",Courier,monospace;
        }
        input[type=text],input[type=password]{
            float: right;
            margin-right: 220px;
            width: 230px;
            height: 29px;
            border-radius: 5px;
            border: 1px solid #bdc7d8;
            padding-left: 8px;
            font-size: 16px;
            font-weight: 500;
        }
        input[type=button],[type=reset] {
            margin-left: 45px;
            width: 110px;
            height: 30px;
            color: red;
            margin-bottom: 20px;
            font-weight: bold;
            font-size: 18px;
        }
        label{
            color: black;
            font-size: 18px;
        }
    </style>


    <div id="DivForm">

        <form id="Form" action="#" method="post">
            <h2 class="h2_account">MY ACCOUNT</h2>

            <label for="txtFirstName">First Name : </label>
            <input type="text" id="txtFirstName" name="" value="{{ $accounts->name }}"><br><br>

            <label for="txtLastName">Last Name: </label>
            <input type="text" id="txtLastName" name="" value="{{ $accounts->last_name }}"><br><br>

            <label for="txtUserName">First Name : </label>
            <input type="text" id="txtUserName" name="" value="{{ $accounts->first_name }}"><br><br>

            <label for="txtEmail">Email : </label>
            <input type="text" id="txtEmail" name="" value="{{ $accounts->email }}"><br><br>

            <label for="phone">Phone : </label>
            <input type="text" id="txtSoDt" name="" value="{{ $accounts->phone }}"><br><br>

            <label for="txtDiaChi">Address : </label>
            <input type="text" id="txtDiaChi" name="" value="{{ $accounts->address }}"><br><br>

            <label for="txtEmail">Gender : </label>
            <input type="text" id="txtGender" name="" value="{{ $accounts->gender }}"><br><br>

            <input type="button" id="btnRegister" value="Register"  />
            <input type="reset" id="Cancel"  value="Cancel"/>

        </form>
    </div>--}}
<div id="DivForm">
<div class="row">
    <div class="col-lg-9">
        <!-- Form Elements -->
        <div class="panel panel-default" style="    margin-left: 355px;">
            <div class="panel-heading">
                <p style="color: red;">Edit " {{ $accounts->name }} " User</p>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-9">
                        {{--{!! Form::open(['method' => 'PATCH', 'url' => 'admin/user/' . $cate->id, 'role' => 'form']) !!}--}}
                        {!! Form::model($accounts, ['method' => 'PATCH', 'url' => 'account/' . $accounts->id, 'role' => 'form']) !!}

                        <div class="form-group">
                            <label>Name</label>
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>Last Name</label>
                            {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label>First Name</label>
                            {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            {!! Form::text('address', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            {!! Form::text('gender', null, ['class' => 'form-control']) !!}
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-success">Reset</button>

                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>
</div>
</div>
@endsection