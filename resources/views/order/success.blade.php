@extends('main')

@section('content')
<section class="order-confirm p-to-top">
    <!-- luu y doi cai class duoi -->
    <div class="container">
      <div class="row-flex row-flex-product-detail">
        <p>
          Xác nhận đơn hàng:
          <span style="font-weight: bold">#15-Thành công</span>
        </p>
      </div>
      <div class="row-flex">
        <div class="order-confirm-content">
          <p>
            Đơn hàng của bạn đã được xác nhận
            <span style="font-weight: bold">Thành Công</span> !<br />
            <span style="font-size: small"
              >Chúng tôi sẽ
              <span style="font-weight: bold; font-style: italic"
                >Giao hàng </span
              >trong thời gian tối đa là 3 ngày làm việc</span
            >
          </p>
          <br />
          <button class="main-btn">Tiếp tục mua hàng</button>
        </div>
      </div>
    </div>
  </section>
@endsection