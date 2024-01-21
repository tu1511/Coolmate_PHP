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
            <h1>{{$product -> name}}</h1>
            <span>{{$product -> material}}</span>
            <div class="product-item-price">
              <p>
                {{number_format($product -> price_nomal)}} <sup>đ</sup> <span>{{number_format($product -> price_sale)}}<sup>đ</sup></span>
              </p>
            </div>
          </div>
          <div class="row-flex">
            <h2 class="main-h2">Đặc điểm nổi bật</h2>
          </div>
          <div class="product-detail-right-des">
            {!!$product -> description!!}
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
        <h2 class="main-h2">Chi tiết sản phẩm</h2>
      </div>
      <div class="row-flex">
        <div class="product-detail-content">
          {!!$product -> content!!}
        </div>
      </div>
    </div>
  </section>
@endsection