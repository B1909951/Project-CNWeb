@extends('shop.layouts.sub') 
@section('title', 'Sách Hay | Chi tiết sản phẩm')
@section('content')

<div class="col-sm-9 padding-right">
    <h2 class="title text-center">Chi tiết sản phẩm</h2> 

    <div class="product-details">
        <div class="col-sm-5">
            <div class="view-product">
                <img src=" @php if (strlen(strstr($product->image, 'https')) > 0) {echo $product->image;} 
                else {echo './public/images/products/'.$product->image;} @endphp " alt="" />
                
            </div>
        </div>
        <div class="col-sm-7">
            <div class="product-information">
                <!--/product-information-->
                <img src="{{BASE_URL.'public/shop/images/new.jpg'}}" class="newarrival" alt="" />
                <h1>{{$product->name}}</h1>
                <p>ID sản phẩm: {{$product->id}}</p>
                <img src="{{BASE_URL.'public/shop/images/rating.png'}}" alt="" />
                <span>
                    <span>Giá: {{number_format($product->price)}} vnd</span>
                    <span>
                        <form action="{{BASE_URL.'add-cart'}}" method="POST">
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input type="hidden" name="customer_id"  value="{{$_SESSION['customer_id']}}">
                            <label>Số lượng:</label>
                            <input type="text" name="qty" value="1" />
                            <input type="hidden" name="status" value="0">
                            <button type="submit" class="btn btn-fefault cart">
                                <i class="fa fa-shopping-cart"></i>
                                Thêm vào giỏ hàng
                            </button>
                        </form>
                    </span>
                    
                </span>
                <p><b>Tình trạng:</b> Còn hàng</p>
                <p><b>Trạng thái:</b> Mới</p>
                <p><b>Thể loại:</b> {{$category->cate_name}}</p>
                <a href=""><img src="{{BASE_URL.'public/shop/images/share.png'}}" class="share img-responsive" alt="" /></a>
            </div>
            <!--/product-information-->
        </div> 
    </div>
    <!--/product-details-->

    <div class="category-tab shop-details-tab">
        <!--category-tab-->
        <div class="col-sm-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#desc" data-toggle="tab">Mô tả</a></li>
                <li><a href="#detail" data-toggle="tab">Chi tiết</a></li>
                <li ><a href="#reviews" data-toggle="tab">Đánh giá</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="desc">
                <?php echo $product->short_desc ?>
            </div>

            <div class="tab-pane fade" id="detail">
                <?php echo $product->detail ?>
            </div>


            <div class="tab-pane fade " id="reviews">
                <div class="col-sm-12">
                    <ul>
                        <li><a href=""><i class="fa fa-user"></i>Việt Nam</a></li>
                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                        <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2021</a></li>
                    </ul>
                    
                    <p><b>Đánh giá của bạn</b></p>
                    <form action="#">
                        <span>
											<input type="text" placeholder="Tên của bạn"/>
											<input type="email" placeholder="Email của bạn"/>
										</span>
                        <textarea name=""></textarea>
                        <b>Đánh giá: </b> <img src="{{BASE_URL.'public/shop/images/rating.png'}}" alt="" />
                        <button type="button" class="btn btn-default pull-right">
											Gửi
						</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection