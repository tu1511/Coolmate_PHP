{{-- extends lấy giao diện của thằng nó nối đến --}}
@extends('admin.main') 

{{-- section thêm thành phần vào vị trí đặt yield --}}
@section('content')
<div class="admin-content-main-content-order-list">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Ảnh</th>
          <th>Tên</th>
          <th>Giá</th>
          <th>Số lượng</th>
          <th>Thành tiền</th>
          <th>Tùy biến</th>
        </tr>
      </thead>
      <tbody>
        @php
            $total = 0;
        @endphp
        @foreach ($products as $product)         
            @php
                $price = $order_detail[$product -> id] * $product -> price_sale;
                $total += $price;
            @endphp  
            <tr>
            <td>{{$product -> id}}</td>
            <td>
                <img
                style="width: 70px"
                src="{{asset($product -> image)}}"
                alt=""
                />
            </td>
            <td>{{$product -> name}}</td>
            <td>{{number_format($product -> price_sale)}}<sup>đ</sup></td>
            <td>{{$order_detail[$product -> id]}}</td>
            <td>{{number_format($price)}}<sup>đ</sup></td>
            <td><a class="delete-class" href="">Xóa</a></td>
            </tr>
        @endforeach
        <tr>
            <td colspan="5" style="font-weight: 700">Tổng cộng</td>
            <td style="font-weight: 700">{{number_format($total)}}<sup>đ</sup></td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection