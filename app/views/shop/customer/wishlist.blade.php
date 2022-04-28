@extends('shop.layouts.sub') 
@section('title', 'Sách Hay | Danh sách yêu thích')
@section('content')

<div class="col-sm-9 padding-right">
    <h2 class="title text-center">Danh sách yêu thích</h2> 
    @if (isset($_SESSION['update_wishlist']))
        <div class="alert alert-info"> {{$_SESSION['update_wishlist']}} </div>
    @endif
    <?php
      if (empty($wishlist[0])) {
    ?>
      <h4 style="text-align: center">Không có sản phẩm nào</h4>
    <?php
      }else{
    ?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Tên</th>
          <th scope="col">Hình ảnh</th>
          <th scope="col">Giá</th>
          <th scope="col">Xem chi tiết</th>
          <th scope="col">Xóa</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($wishlist as $wish)
        <tr>
          <th scope="row">{{$wish->name}}</th>
          <td><img src=" @php if (strlen(strstr($wish->image, 'https')) > 0) {echo $wish->image;} 
            else {echo './public/images/products/'.$wish->image;} @endphp" alt="" width=200px height=auto/></td>

          <td>{{number_format($wish->price)}} vnd</td>

          <td><a href="{{BASE_URL.'product-details&id='.$wish->product_id}}" class="btn btn-default"><i class="fa fa-eye"></i>Xem chi tiết</a></td>

          <td><a onclick="xoa()" href="{{BASE_URL.'delete-wishlist&id='.$wish->id}}" class="btn btn-danger"><i class="fa fa-times"></i></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
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