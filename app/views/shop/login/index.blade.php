@extends('shop.layouts.sub') @section('title', 'Sách Hay | Đăng nhập') @section('content')
<div class="col-sm-9 padding-right" id="show">
    <h2 class="title text-center">Đăng nhập</h2>
    <div class="col-sm-5 col-sm-offset-1" style="margin-left:0px">
        <div class="login-form" >
            <!--login form-->
            <h2>Đăng nhập bằng tài khoản của bạn</h2>
            @if (isset($_SESSION['customer_error']))
				<div class="alert alert-danger"> {{$_SESSION['customer_error']}} </div>
			@endif
            <form action="{{BASE_URL.'customer-login'}}" method="POST">
                <input type="email" name="customer_email" placeholder="Địa chỉ Email" />
                <input type="password" name="customer_password" placeholder="Mật khẩu" />
                <button type="submit" class="btn btn-default" >Đăng nhập</button>
            </form>
        </div>
        <!--/login form-->
    </div>
    <div class="col-sm-1" >
        <h2 class="or">Hoặc</h2>
    </div>
    <div class="col-sm-5">
        <div class="signup-form">
            <!--sign up form-->
            <h2>Đăng ký tài khoản mới!</h2>
            @if (isset($_SESSION['signup-error']))
				<div class="alert alert-danger"> {{$_SESSION['signup-error']}} </div>
			@endif
            <form action="{{BASE_URL.'customer-signup'}}" method="POST">
                <input type="text" name="name" placeholder="Tên người dùng" required/>
                <input type="email" name="email" placeholder="Địa chỉ Email" required/>
                <input type="password" name="password"  placeholder="Mật khẩu" required/>
                <input type="number" name="phone" placeholder="Số điện thoại" required/>
                <input type="text" name="address"  placeholder="Địa chỉ nhà" required/>
                <button type="submit" class="btn btn-default">Đăng ký</button>
            </form>
        </div>
        <!--/sign up form-->
    </div>
</div>
@php
	unset($_SESSION['error_login']);
@endphp
@endsection