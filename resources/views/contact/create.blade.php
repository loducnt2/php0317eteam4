@extends('layouts.app')

@section('title') Contact @endsection

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{ url('home') }}" style="color: red;">Home</a></li>
                    <li class="active" style="color: #17bf08;">Contact</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->
    <!--contact-start-->
    <div class="contact">
        <div class="container">
            <div class="contact-top heading">
                    <h2 style="color: #17bf08;">CONTACT</h2>
            </div>


            <div class="contact-text">
                <div class="col-md-3 contact-left">
                    <div class="address">
                        <h5>Address</h5>
                        <p>The company name,
                            <span>Lorem ipsum dolor,</span>
                            Glasglow Dr 40 Fe 72.</p>
                    </div>
                    <div class="address">
                        <h5>Address1</h5>
                        <p>Tel:1115550001,
                            <span>Fax:190-4509-494</span>
                            Email: <a href="mailto:example@email.com">contact@example.com</a></p>
                    </div>
                </div>
                <div class="col-md-9 contact-right">
                    {!! Form::open(['type' => 'POST', 'url' => 'contact', 'role' => 'form']) !!}

                        {!! Form::text('name', null, ['placeholder' => 'Name', 'name' => 'name']) !!}
                        {!!  $errors->first('name', '<span id="name-error" style="color: red;" >:message</span>') !!}

                        {!! Form::text('phone', null,  ['placeholder' => 'Phone', 'name' => 'phone']) !!}
                        {!!  $errors->first('phone', '<span id="phone-error" style="color: red;" >:message</span>') !!}

                    {!! Form::text('email', null, ['placeholder' => 'Email', 'name' => 'email']) !!}
                        {!!  $errors->first('email', '<span id="email-error" style="color: red;" >:message</span>') !!}

                    {!! Form::textarea('message', null, ['placeholder' => 'Message', 'name' => 'message']) !!}
                        {!!  $errors->first('message', '<span id="message-error" style="color: red;" >:message</span>') !!}

                    <div class="submit-btn">
                                <input type="submit" value="GỬI" name="btnSubmit">
                            </div>
                    {!! Form::close() !!}
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--contact-end-->
    <!--map-start-->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.248000703498!2d151.265683!3d-33.7832959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12abc7edcbeb07%3A0x5017d681632bfc0!2sManly+Vale+NSW+2093%2C+Australia!5e0!3m2!1sen!2sin!4v1433329298259" style="border:0"></iframe>
    </div>

@endsection