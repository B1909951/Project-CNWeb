@extends('shop.layouts.main') 
@section('title', 'Sách Hay | Sản phẩm') 

@section('content')
<div class="col-sm-9 padding-right" id="show">
    <div class="features_items">
        <!--features_items-->
        <h2 class="title text-center">Danh sách sản phẩm của {{$category->cate_name}}</h2>
        <?php
            if (empty($cate_products[0])) {
        ?>
        <h4 style="text-align: center">Không có sản phẩm nào</h4>
         <?php
            }else{
        ?>
        @foreach ($cate_products as $cate_product)
        <div class="col-sm-4">
            <a href="{{BASE_URL.'product-details&id='.$cate_product->id}}">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            
                            <img src=" @php if (strlen(strstr($cate_product->image, 'https')) > 0) {echo $cate_product->image;} 
                            else {echo './public/images/products/'.$cate_product->image;} @endphp " alt="" />
                            <h2>{{$cate_product->name}}</h2>
                            <p>{{number_format($cate_product->price)}} vnd</p>
                            <form action="{{BASE_URL.'add-cart'}}" method="POST">
                                <input type="hidden" name="product_id" value="{{$cate_product->id}}">
                                <input type="hidden" name="customer_id"  value="{{$_SESSION['customer_id']}}">
                                <input type="hidden" name="qty" value="1" />
                                <input type="hidden" name="status" value="0">
                                <button type="submit" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Thêm vào giỏ hàng
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="{{BASE_URL.'add-wishlist&id='.$cate_product->id}}"><i class="fa fa-plus-square"></i>Thêm vào yêu thích</a></li>
                            {{-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> --}}
                        </ul>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        <?php 
        }
        ?>
    </div>
</div>
@endsection