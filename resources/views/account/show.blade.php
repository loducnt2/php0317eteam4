@extends('layouts.app')

@section('title')  Edit Account show  @endsection

@section('content')
    <style>
        #DivForm{
            width:50%;
            height:auto;
            background-color:#ccc;
            margin:auto;
            padding-left:70px;
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


    <a href="#"><h3 style="text-align: center; color: red;">Log out</h3></a>

    <div id="DivForm">
        <form id="Form" action="#" method="post">
            <h2>MY ACCOUNT</h2>

            <label for="txtFirstName">First Name : </label>
            <input type="text" id="txtFirstName" name=""><br><br>
            <p id="FirstNameError" style="color:red; margin-left: 50px; "></p>

            <label for="txtLastName">Last Name: </label>
            <input type="text" id="txtLastName" name=""><br><br>
            <p id="LastNameError" style="color:red"></p>

            <label for="txtEmail">Email : </label>
            <input type="text" id="txtEmail" name=""><br><br>
            <p id="emailError" style="color:red"></p>

            <label for="phone">Phone : </label>
            <input type="text" id="txtSoDt" name=""><br><br>
            <p id="soDtError" style="color:red"></p>

            <label for="txtDiaChi">Address : </label>
            <input type="text" id="txtDiaChi" name=""><br><br>
            <p id="diaChiError" style="color:red"></p>

            <label for="txtEmail">Gender : </label>
            <input type="text" id="txtGender" name=""><br><br>
            <p id="emailError" style="color:red"></p>

            <label for="txtUserName">User Name : </label>
            <input type="text" id="txtUserName" name=""><br><br>
            <p id="userNameError" style="color:red"></p>

            <label for="txtPassWord">PassWord : </label>
            <input type="password" id="txtPassWord" name=""><br><br>
            <p id="passWordError" style="color:red"></p>

            <input type="button" id="btnRegister" value="Register"  />
            <input type="reset" id="Cancel"  value="Cancel"/>

        </form>
    </div>
@endsection