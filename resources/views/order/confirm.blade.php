@extends('main')

@section('content')
<section class="order-confirm p-to-top">
    <!-- luu y doi cai class duoi -->
    <div class="container">
      <div class="row-flex row-flex-product-detail">
        <p>
          Xác nhận đơn hàng:
          <span style="font-weight: bold">Ngô Sỹ Nguyên#15</span>
        </p>
      </div>
      <div class="row-flex">
        <div class="order-confirm-content">
          <p>
            Đơn hàng của bạn đã được gửi
            <span style="font-weight: bold">Thành Công</span> !<br />
            <span style="font-size: small"
              >Vui lòng check
              <span style="font-weight: bold; font-style: italic">Email </span
              >Đã đăng ký để nhận và xác nhận Đơn hàng</span
            >
          </p>
          <br />
          <button class="main-btn">Tiếp tục mua hàng</button>
        </div>
      </div>
    </div>
  </section>
@endsection