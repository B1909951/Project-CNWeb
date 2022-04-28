@extends('shop.layouts.main') 
@section('title', 'Sách Hay | Home') 

@section('content')
<div class="col-sm-9 padding-right" id="show">
    <div class="features_items">
        <!--features_items-->
        <h2 class="title text-center">Danh sách sản phẩm</h2>
        <?php
            if (empty($products[0])) {
        ?>
        <h4 style="text-align: center">Không có sản phẩm nào</h4>
         <?php
            }else{
        ?>
        @foreach ($products as $product)
        <a  href="{{BASE_URL.'product-details&id='.$product->id}}">
            <div class="col-sm-4 product">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src=" @php if (strlen(strstr($product->image, 'https')) > 0) {echo $product->image;} 
                            else {echo './public/images/products/'.$product->image;} @endphp " alt="" />
                            <h2>{{$product->name}}</h2>
                            <p>{{number_format($product->price)}} vnd</p>
                            <form action="{{BASE_URL.'add-cart'}}" method="POST">
                                <input type="hidden" name="product_id" value="{{$product->id}}">
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
                            <li><a href="{{BASE_URL.'add-wishlist&id='.$product->id}}"><i class="fa fa-plus-square"></i>Thêm vào yêu thích</a></li>
                            {{-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
        <?php
        }
        ?>

    </div>
</div>
@endsection