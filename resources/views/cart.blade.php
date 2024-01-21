@extends('main')

@section('content')
  <section class="cart-section p-to-top">
      <div class="container">
        <div class="row-flex row-flex-product-detail">
          <p>Giỏ Hàng</p>
        </div>
        <div class="row-grid">
          <div class="cart-section-left">
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
                  <tr>
                    <td>
                      <img
                        style="width: 70px"
                        src="{{asset('frontend/asset/images/image1.jpg')}}"
                        alt=""
                      />
                    </td>
                    <td>
                      <div class="product-detail-right-infor">
                        <h1>Áo Nỉ chui đầu Essentials</h1>
                        <div class="product-item-price">
                          <p>
                            299,000 <sup>đ</sup>
                            <span>399,000 <sup>đ</sup></span>
                          </p>
                        </div>
                      </div>
                      <div class="product-detail-right-quantity-input">
                        <i class="ri-subtract-line"></i>
                        <input
                          class="quantity-input"
                          onKeyDown="return false"
                          type="number"
                          value="1"
                        />
                        <i class="ri-add-line"></i>
                      </div>
                    </td>
                    <td>
                      <p>299,000 <sup>đ</sup></p>
                    </td>
                    <td>Xóa</td>
                  </tr>
                  <tr>
                    <td>
                      <img
                        style="width: 70px"
                        src="{{asset('frontend/asset/images/image2.jpg')}}"
                        alt=""
                      />
                    </td>
                    <td>
                      <div class="product-detail-right-infor">
                        <h1>Áo Hoodie Essential</h1>
                        <div class="product-item-price">
                          <p>
                            399,000 <sup>đ</sup>
                            <span>499,000 <sup>đ</sup></span>
                          </p>
                        </div>
                      </div>
                      <div class="product-detail-right-quantity-input">
                        <i class="ri-subtract-line"></i>
                        <input
                          class="quantity-input"
                          onKeyDown="return false"
                          type="number"
                          value="1"
                        />
                        <i class="ri-add-line"></i>
                      </div>
                    </td>
                    <td>
                      <p>399,000 <sup>đ</sup></p>
                    </td>
                    <td>Xóa</td>
                  </tr>
                </tbody>
              </table>
              <br />
              <button class="main-btn">Cập nhật giỏ hàng</button>
              <a style="color: tomato; font-style: italic" href=""
                >>>Tiếp tục mua hàng</a
              >
            </div>
          </div>
          <div class="cart-section-right">
            <h2 class="main-h2">Thông tin Giao hàng</h2>
            <div class="cart-section-right-input-name-phone">
              <input type="text" placeholder="Tên" name="" id="" />
              <input type="text" placeholder="Điện thoại" name="" id="" />
            </div>
            <div class="cart-section-right-input-email">
              <input type="email" placeholder="Email" name="" id="" />
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
              <input type="text" placeholder="Địa chỉ" name="" id="" />
            </div>
            <div class="cart-section-right-input-note">
              <input type="text" placeholder="Ghi chú thêm" name="" id="" />
            </div>
            <button class="main-btn">Gửi Đơn Hàng</button>
          </div>
        </div>
      </div>
    </section>
@endsection
 {{-- chua code javascript api tinh thanh --}}
@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="{{asset('/frontend/asset/js/apiprovince.js')}}"></script>
@endsection