@extends('main')

@section('content')
    <form action="/cart/send" method="post">
      <section class="cart-section p-to-top">
          <div class="container">
            <div class="row-flex row-flex-product-detail">
              <p>Giỏ Hàng</p>
            </div>
            <div class="row-grid">
              <div class="cart-section-left">
                {{-- cart --}}
                <h2 class="main-h2">Chi tiết đơn hàng</h2>
                <div class="cart-section-left-detail">
                  <table>
                    <thead>
                      <tr>
                        <th>Ảnh</th>
                        <th>Sản Phẩm</th>
                        <th>Thành Tiền</th>
                        <th>Xóa</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                          $total = 0;
                      @endphp
                      @foreach ($products as $product)            
                        @php
                            $price = $product->price_sale * Session::get('cart')[$product->id];
                            $total += $price;
                        @endphp         
                        <tr>
                          <td>
                            <img  style="width: 70px"  src="{{asset($product -> image)}}" alt="" />
                          </td>
                          <td>
                            <div class="product-detail-right-infor">
                              <h1>{{$product->name}}</h1>
                              <div class="product-item-price">
                                <p>{{number_format($product->price_sale)}}<sup>đ</sup><span>{{number_format($product->price_nomal)}}<sup>đ</sup></span></p>
                              </div>
                            </div>
                            <div class="product-detail-right-quantity-input">
                              <i class="ri-subtract-line"></i>
                              <input class="quantity-input" onKeyDown="return false" type="number" name="product_id[{{$product->id}}]" value="{{Session::get('cart')[$product->id]}}"/>
                              <i class="ri-add-line"></i>
                            </div>
                          </td>
                          <td>
                            <p>{{number_format($price)}}<sup>đ</sup></p>
                          </td>
                          <td>
                            <a href="/cart/delete/{{$product->id}}"><i class="ri-close-line"></i></a>
                          </td>
                        </tr>
                      @endforeach
                        <tr>
                          <td style="font-weight: bold" colspan="2">Tổng tiền</td>
                          <td style="font-weight: bold; text-align: center">{{number_format($total)}}<sup>đ</sup></td>
                          <td></td>
                        </tr>
                    </tbody>
                  </table>
                  <br />
                  <button formaction="/cart/update" class="main-btn">Cập nhật giỏ hàng</button>
                  <a style="color: tomato; font-style: italic" href="/" >>>Tiếp tục mua hàng</a>
                </div>
              </div>
              <div class="cart-section-right">
                {{-- form information --}}
                <h2 class="main-h2">Thông tin Giao hàng</h2>
                <div class="cart-section-right-input-name-phone">
                  <input type="text" placeholder="Tên" name="name" id="" />
                  <input type="text" placeholder="Điện thoại" name="phone" id="" />
                </div>
                <div class="cart-section-right-input-email">
                  <input type="email" placeholder="Email" name="email" id="" />
                </div>
                <div class="cart-section-right-select">
                  <select name="" id="city">
                    <option value="">Tỉnh/Tp</option>
                  </select>
                  <select name="" id="district">
                    <option value="">Quận/Huyện</option>
                  </select>
                  <select name="" id="ward">
                    <option value="">Phường/Xã</option>
                  </select>
                </div>
                <div class="cart-section-right-input-address">
                  <input type="text" placeholder="Địa chỉ" name="address" id="" />
                </div>
                <div class="cart-section-right-input-note">
                  <input type="text" placeholder="Ghi chú thêm" name="note" id="" />
                </div>
                <button class="main-btn">Gửi Đơn Hàng</button>
              </div>
            </div>
          </div>
        </section>
        @csrf
    </form>
@endsection
 {{-- chua code javascript api tinh thanh --}}
@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="{{asset('/frontend/asset/js/apiprovince.js')}}"></script>
@endsection