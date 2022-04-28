@extends('admin.layouts.main')
@section('title', 'Thêm sách')

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
                <li><a href="">Quản lý sách</a></li>
                <li class="active">Cập nhật sách</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cập nhật sách</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-10">
                            <form id="edit-prd" action=" {{BASE_URL.'update-product'}} " method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value=" {{$product->id}} ">
                                <div class="form-group">
                                    <label >Tên sách: </label>
                                    <input id="name" class="form-control" type="text" name="name" value="{{$product->name}}">
                                    <span class="form-message"></span>
                                </div>
    
                                <div class="form-group">
                                    <label >Giá bán: </label>
                                    <input id="price" class="form-control" type="number" name="price" value="{{$product->price}}">
                                    <span class="form-message"></span>
                                </div>
    
                                <div class="form-group">
                                    <label>Thể loại</label>
                                    <select id="cate_id" name="cate_id" class="form-control">
                                        <?php
                                            foreach ($categories as $key => $category) { ?>
                                                <option value=" {{$category->id}} " @if ($category->id == $product->cate_id)
                                                    selected
                                                @endif> {{$category->cate_name}} </option>
                                            <?php } ?>
                                    </select>
    
                                </div>
    
                                <div class="form-group">
                                    <label >Mô tả ngắn: </label>
                                    <textarea style="width: 100%;" name="short_desc" cols="148" rows="4">{{$product->short_desc}}</textarea>
                                    <script>CKEDITOR.replace('short_desc');</script>
                                </div>
    
                                <div class="form-group">
                                    <label >Chi tiết: </label>
                                    <textarea style="width: 100%;" name="detail" cols="148" rows="6">{{$product->detail}}</textarea>
                                    <script>CKEDITOR.replace('detail');</script>
                                </div>
                                <div class="mb-4">
                                    <label>Xếp hạng sao: </label> <br>
                                    <div style="display: inline-block; margin-right: 12px;">
                                        <input class="" type="radio" name="star" value="1" 
                                        @if ($product->star==1)
                                            checked
                                        @endif>
                                        <label class="" for="inlineRadio1">1</label>
                                    </div>
                                    <div style="display: inline-block; margin-right: 12px;">
                                        <input class="" type="radio" name="star" value="2"
                                        @if ($product->star==2)
                                            checked
                                        @endif>
                                        <label class="" for="inlineRadio2">2</label>
                                    </div>
                                    <div style="display: inline-block; margin-right: 12px;">
                                        <input class="" type="radio" name="star" value="3"
                                        @if ($product->star==3)
                                            checked
                                        @endif>
                                        <label class="" for="inlineRadio2">3</label>
                                    </div>
                                    <div style="display: inline-block; margin-right: 12px;">
                                        <input class="" type="radio" name="star" value="4"
                                        @if ($product->star==4)
                                            checked
                                        @endif>
                                        <label class="" for="inlineRadio2">4</label>
                                    </div>
                                    <div style="display: inline-block; margin-right: 12px;">
                                        <input class="" type="radio" name="star" value="5"
                                        @if ($product->star==5)
                                            checked
                                        @endif>
                                        <label class="" for="inlineRadio2">5</label>
                                    </div>
    
                                </div>
    
                                <div class="form-group">
                                    <label>Ảnh: </label> <br>
                                    <input type="file" name="image" accept="image/*" onchange="loadFile(event)"><br>
                                    <div class="mt-2">
                                        <img id ="output" src=" @php if (strlen(strstr($product->image, 'https')) > 0) {echo $product->image;} 
                                    else {echo './public/images/products/'.$product->image;} @endphp " width="300">
                                    </div>
                                </div>
                                
                                <button name="btn" class="btn btn-success">Cập nhật</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
