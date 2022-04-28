@extends('admin.layouts.main')
@section('title', 'Danh sách tài khoản')

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
                <li class="active">Danh sách tài khoản</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách tài khoản</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="fixed-table-toolbar">
                                <div class="bars pull-left">
                                    <div id="toolbar" class="btn-group">
                                        <a href=" {{BASE_URL.'add-user'}} " class="btn btn-success">
                                            <i class="glyphicon glyphicon-plus"></i> Thêm tài khoản
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="fixed-table-container">
                                <div class="fixed-table-header">
                                    <table></table>
                                </div>
                                <div class="fixed-table-body">
                                    <div class="fixed-table-loading" style="top: 37px;">Loading, please wait…</div>
                                    <table data-toolbar="#toolbar" data-toggle="table" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="">
                                                    <div class="th-inner sortable">ID</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner sortable">Họ &amp; Tên</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner ">Ảnh đại diện</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner sortable">Email</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner ">Hành động</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr data-index="0">
                                                    <td style=""> {{$user->id}} </td>
                                                    <td style="">{{$user->name}}</td>
                                                    <td style="">
                                                        <img width="200" src="{{BASE_URL.'public/images/users/'.$user->avatar}}" width="150">
                                                    </td>
                                                    <td style="">{{$user->email}}</td>
                                                    <td class="form-group" style="">
                                                        <a href=" {{BASE_URL.'edit-user&id='.$user->id}} " class="btn btn-primary">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <a onclick="return del( '{{$user->name}}' )" href="{{BASE_URL.'del-user&id='.$user->id}}" class="btn btn-danger">
                                                            <i class="fas fa-times"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="fixed-table-pagination"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
