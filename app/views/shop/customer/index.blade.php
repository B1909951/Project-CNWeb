@extends('shop.layouts.sub') 
@section('title', 'Sách Hay | Thông tin khách hàng')
@section('content')

<div class="col-sm-9 padding-right">
    <h2 class="title text-center">Thông tin khách hàng</h2> 
    <table border = "0" style="width:100%" >
       
        <tbody>
          <tr>
            <th scope="row">Tên khách hàng:</th>
            <td>{{$customer->name}}</td>
          </tr>
          <tr>
            <th scope="row">Email:</th>
            <td>{{$customer->email}}</td>
            
          </tr>
          <tr>
            <th scope="row">Địa chỉ:</th>
            <td>{{$customer->address}}</td>
            
          </tr>
          <tr>
            <th scope="row">Số điện thoại:</th>
            <td>{{$customer->phone}}</td>
          </tr>
          
        </tbody>
      </table>
    
</div>
@endsection