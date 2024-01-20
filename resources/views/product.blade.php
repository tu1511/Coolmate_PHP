@extends('main')

@section('content')
<section class="product-detail p-to-top">
    <div class="container">
      <div class="row-flex row-flex-product-detail">
        <p>Sản Phẩm</p>
        <i class="ri-arrow-right-line"></i>
        <p>{{$product -> name}}</p>
      </div>
      <div class="row-grid">
        <div class="product-detail-left">
          <img class="main-image" src="{{asset($product->image)}}" alt="" />
          <div class="product-images-items">
            @php
                $product_images = explode('*', $product->images)
            @endphp
            @foreach ($product_images as $product_image)
               <img src="{{asset($product_image)}}" alt="" />
            @endforeach
          </div>
        </div>
        <div class="product-detail-right">
          <div class="product-detail-right-infor">
            <h1>Áo Nỉ chui đầu Essentials</h1>
            <span>Cotton 360GSM</span>
            <div class="product-item-price">
              <p>
                299,000 <sup>đ</sup> <span>399,000 <sup>đ</sup></span>
              </p>
            </div>
          </div>
          <div class="product-detail-right-des">
            <h2>Đặc điểm nổi bật</h2>
            <ul>
              <li>Chất liệu: 95% Cotton Compact + 5% Spandex</li>
              <li>
                Bề mặt vải Cotton mềm mịn, cảm giác mát lần đầu chạm tay
              </li>
              <li>Thấm hút mồ hôi tốt</li>
              <li>Độ xù lông thấp</li>
              <li>Vải có độ bền cao, co giãn 4 chiều và hạn chế bai nhão</li>
              <li>Tự hào sản xuất tại Việt Nam</li>
            </ul>
          </div>
          <div class="product-detail-right-quantity">
            <h2 class="main-h2">Số lượng</h2>
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
          </div>
          <div class="product-detail-right-addcart">
            <button class="main-btn">Thêm Vào Giỏ Hàng</button>
          </div>
        </div>
      </div>
      <div class="row-flex">
        <div class="product-detail-content">
          <h2 class="main-h2">Chi tiết sản phẩm</h2>
          <p>
            Áo nỉ chui đầu Essentials là thiết kế dễ phối đồ được nhiều bạn
            nam yêu thích lựa chọn trong mùa thu đông. Sản phẩm của Coolmate
            sử dụng chất liệu vải nỉ chân cua định lượng 360gsm cao cấp dày
            dặn, giữ nhiệt tốt, không nhăn, bai nhão hay xù lông trong quá
            trình mặc. Áo nỉ chui đầu Essentials nằm trong bộ sưu tập đồ thu
            đông nam của Coolmate được làm từ chất liệu dày dặn, giữ nhiệt tốt
            và có độ bền cao. Đặc biệt với dáng áo regular ôm nhẹ thoải mái,
            bạn nam có thể linh hoạt phối cùng nhiều kiểu trang phục theo
            phong cách khác nhau.
          </p>
          <img src="{{asset('frontend/asset/images/image-content1.5.jpg')}}" alt="" />
        </div>
      </div>
    </div>
  </section>
@endsection