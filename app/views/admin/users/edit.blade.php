@extends('admin.layouts.main')
@section('title', 'Thêm tài khoản')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="#">
                        <svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg>
                    </a>
                </li>
                <li><a href="">Quản lý tài khoản</a></li>
                <li class="active">Cập nhật tài khoản</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cập nhật tài khoản</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            @if (isset($_SESSION['error_email']))
                                <div class="alert alert-danger"> {{$_SESSION['error_email']}} </div>
                            @endif

                            <form id="edit-user" action=" {{BASE_URL.'update-user'}} " role="form" method="post" enctype="multipart/form-data">
                                @if (isset($_SESSION['error']))
                                    <div class="alert alert-danger"> {{$_SESSION['error']}} </div>
                                @endif
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <div class="form-group">
                                    <label>Họ &amp; Tên</label>
                                    <input id="name" name="name" required="" class="form-control" placeholder="" value="{{$user->name}}">
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input id="email" name="email" type="text" class="form-control" value="{{$user->email}}">
                                    <span class="form-message"></span>
                                </div>
                                
                                <div class="form-group">
                                    <label>Ảnh đại diện</label> <br>
                                    <input id="avatar" name="avatar" type="file" accept="image/*" onchange="loadFile(event)">
                                    <span class="form-message"></span> <br>
                                    <img id="output" src=" {{BASE_URL.'public/images/users/'.$user->avatar}} " width="200">
                                </div>

                                <span class="show_change_pass">Bạn muốn đổi mật khẩu?</span> <br>
                                <div class="change_pass">
                                    <div class="form-group">
                                        <label>Mật khẩu mới</label>
                                        <input id="password" name="password" type="password" class="form-control">
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Nhập lại mật khẩu mới</label>
                                        <input id="re_password" name="re_password" type="password" class="form-control">
                                        <span class="form-message"></span><br>
                                        <span class="hide_change_pass">Ẩn đổi mật khẩu?</span> 
                                    </div>
                                    
                                </div>
                                
                                <div style="margin-top: 20px" class="submit">
                                    <button name="sbm" type="submit" class="btn btn-success">Cập nhật</button>
                                    <button type="reset" class="btn btn-default">Làm mới</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@php
    if(isset($_SESSION['error_email'])){
        unset($_SESSION['error_email']);
    }

@endphp
