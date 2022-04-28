@extends('admin.layouts.main')
@section('title', 'Thêm danh mục')

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
                <li><a href="">Quản lý thể loại</a></li>
                <li class="active">Thêm thể loại</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm thể loại</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                            @if (isset($_SESSION['error_category_name']))
                                <div class="alert alert-danger"> {{$_SESSION['error_category_name']}} </div>
                            @endif
                            <form id="add-cate" role="form" method="post" action=" {{ BASE_URL . 'save-add-cate' }} ">

                                <div class="form-group">
                                    <label>Tên thể loại:</label>
                                    <input id="cate_name" type="text" name="cate_name" class="form-control"
                                        placeholder="Tên thể loại...">
                                    <span class="form-message"></span>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả:</label>
                                    <textarea name="desc" class="form-control" id="" cols="30" rows="5"></textarea>
                                    <script>CKEDITOR.replace('desc');</script>
                                </div>
                                <div class="form-group">
                                    <label>Show Menu:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="show_menu" value="1">
                                        <label class="form-check-label mr-4 inline-block">Có</label>
                                        <br>
                                        <input id="my-input" class="form-check-input" type="radio" name="show_menu" value="">
                                        <label class="form-check-label">Không</label>
                                    </div>
                                    <span class="form-message"></span>
                                </div>
                                <div class="pb-2">
                                    <button type="submit" name="sbm" class="btn btn-success">Thêm mới</button>
                                    <button type="reset" class="btn btn-primary">Làm mới</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@if (isset($_SESSION['error_category_name']))
    @php
        unset($_SESSION['error_category_name']);
    @endphp
@endif
