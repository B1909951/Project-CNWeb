@extends('admin.layouts.main')
@section('title', 'Danh sách sách')

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
                <li class="active">Danh sách sách</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách sách</h1>
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="fixed-table-toolbar">
                                <div class="bars pull-left" style="display: flex;">
                                    <div class="btn-group" style="margin-right: 74px">
                                        <a href=" {{BASE_URL.'add-product'}} " class="btn btn-success">
                                            <i class="glyphicon glyphicon-plus"></i> Thêm sách
                                        </a>
                                    </div>
                                    <form method="post" action="" class="form-inline">
                                        <input class="form-control" type="search" placeholder="Nhập tên sách" name="keyword">
                                        <button name="btn" class="btn btn-warning" type="submit">Tìm</button>
                                    </form> 
                                </div>
                            </div>
                            <div style="clear: both; margin: 10px 0;" class="text-success">
                                @if (isset($_POST['keyword']))
                                    <p style="font-size: 16px">Tìm thấy {{count($products)}} sách</p>
                                @endif
                            </div>
                            
                            <div class="fixed-table-container">
                                
                                <div class="fixed-table-header">
                                    <table></table>
                                </div>
                                <div class="fixed-table-body">
                                    <div class="fixed-table-loading" style="top: 37px;">Loading, please wait…</div>
                                    <table data-toolbar="#toolbar"  class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th style="">
                                                    <div class="th-inner sortable">ID</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner sortable">Tên sách</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner sortable">Giá</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner ">Ảnh sách</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                
                                                <th style="">
                                                    <div class="th-inner ">Thể loại</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                <th style="">
                                                    <div class="th-inner ">Xếp hạng sao</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                                
                                                <th style="">
                                                    <div class="th-inner ">Hành động</div>
                                                    <div class="fht-cell"></div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr data-index="0">
                                                    <td style=""> {{$product->id}}</td>
                                                    <td style="">{{$product->name}}</td>
                                                    <td style="">{{number_format($product->price)}} vnd</td>
                                                    <td>
                                                        <img src=" @php if (strlen(strstr($product->image, 'https')) > 0) {echo $product->image;} 
                                                        else {echo './public/images/products/'.$product->image;} @endphp " width="160">
                                                    </td>
                                                    
                                                    <td style="">{{$product->category->cate_name}}</td>
                                                    <td style="">
                                                        {{$product->star}}
                                                    </td>
                                                    
                                                    <td class="form-group" style="">
                                                        <a href=" {{BASE_URL.'edit-product&id='.$product->id}} " class="btn btn-primary">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <a onclick="return del( '{{$product->name}}' )" href="{{BASE_URL.'del-product&id='.$product->id}}" class="btn btn-danger">
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
            </div>
        </div>
        <!--/.row-->
    </div>
@endsection
