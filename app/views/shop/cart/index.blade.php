@extends('shop.layouts.sub') 
@section('title', 'Sách Hay | Giỏ hàng') 
@section('content')
<div class="col-sm-9 padding-right" id="show">
    <h2 class="title text-center">Thông tin Giỏ hàng</h2>
    @if (isset($_SESSION['update_cart']))
        <div class="alert alert-info"> {{$_SESSION['update_cart']}} </div>
    @endif
    <section id="cart_items">
        <div class="container-fluid">
            <?php
                if (empty($products[0])) {
            ?>
                <h4 style="text-align: center">Không có sản phẩm nào</h4>
            <?php
                }else{
            ?>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu">
                            <td class="id">ID</td>
                            <td class="name">Tên</td>
                            <td class="image">Hình ảnh</td>
                            <td class="price">Giá</td>
                            <td class="quantity">Số lượng</td>
                            <td class="total">Tổng</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0 ?>
                        @foreach ($products as $product)
                        <tr>
                            <td class="cart_id">
                                <p>{{$product->product_id}}</p>
                            </td>
                            <td class="cart_name">
                                <p>{{$product->name}}</p>
                            </td>
                            <td class="cart_product">
                                <a href="{{BASE_URL.'product-details&id='.$product->id}}"><img src=" @php if (strlen(strstr($product->image, 'https')) > 0) {echo $product->image;} 
                                    else {echo './public/images/products/'.$product->image;} @endphp" alt="" width=150px height=auto/></a>
                            </td>
                            <td class="cart_price">
                                <p>{{number_format($product->price)}} vnd</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    

                                    <form action="{{BASE_URL.'update-qty&id='.$product->id}}" method="POST">
                                        
                                        <input class="qty" type="text" name="qty" value="{{$product->qty}}" autocomplete="off" size="2">
                                        
                                        <button type="submit" class="btn btn-info" ><i class="fa fa-retweet"></i></button>
                                        
                                    </form>
                                    
                                </div>
                            </td>
                            <td class="cart_total">
                                <?php   
                                    $sub_total = $product->price * $product->qty;
                                    $total = $total + $sub_total;
                                ?>
                                <p class="cart_total_price">{{number_format($sub_total)}} vnd</p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete"  onclick="xoa()" href="{{BASE_URL.'delete-cart&id='.$product->id}}"><i class="fa fa-times"></i></a>
                            </td>
                        @endforeach
                        </tr>      
                    </tbody>
                </table>
                
            </div>
            
        </div>
    </section>
    <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="col-sm-9">
                <div class="total_area">
                    <?php
                    echo '
                    <ul>
                        <li>Tổng tiền giỏ hàng <span>'. number_format($total) .' vnd</span></li>
                        <li>Tiền ship<span>Free</span></li>
                        <li>Tổng cộng<span> '. number_format($total) .' vnd</span></li>
                    </ul>
                    '?>
                    <div style="text-align: center"><a class="btn btn-default check_out" href="{{BASE_URL.'order&id='.$_SESSION['customer_id']}}">Đặt hàng</a></div>
                    
                </div>
            </div>
        </div>
    </section>
    <?php
        }
    ?>
</div>
<script>
    function xoa() {
        if (confirm("Xác nhận xóa?")) {
            
        } else {
            event.preventDefault()
        }  
    }
    </script>
@endsection