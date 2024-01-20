<!DOCTYPE html>
<html lang="en">
  <head>
    @include('parts.head')
  </head>
  <body>
    {{-- header --}}
    @include('parts.header')
    
    {{--  content --}}
    @yield('content')
   
    <!-- hot product -->
    @include('parts.hot_product')
    <!-- popular product -->
    {{-- <section class="hot-products">
      <div class="container">
        <div class="row-grid">
          <p class="heading-text">Sản Phẩm Nổi Bật</p>
        </div>
        <div class="row-grid row-grid-hot-products">
          <div class="hot-product-item">
            <a href=""><img src="/frontend/images/product1.jpg" alt="" /></a>
            <p><a href="">Quần Jogger Nam UT đa năng</a></p>
            <span>Co giãn</span>
            <div class="product-item-price">
              <p>
                429,000 <sup>đ</sup> <span>499,000 <sup>đ</sup></span>
              </p>
            </div>
          </div>

          <div class="hot-product-item">
            <a href=""><img src="/frontend/images/product2.jpg" alt="" /></a>
            <p><a href="">Quần Jogger Nam Excool</a></p>
            <span>Co giãn</span>
            <div class="product-item-price">
              <p>
                279,000 <sup>đ</sup> <span>399,000 <sup>đ</sup></span>
              </p>
            </div>
          </div>

          <div class="hot-product-item">
            <a href=""><img src="/frontend/images/product3.jpg" alt="" /></a>
            <p><a href="">Quần Nỉ Jogger Essentials</a></p>
            <span>Cotton 360GSM</span>
            <div class="product-item-price">
              <p>
                329,000 <sup>đ</sup> <span>399,000 <sup>đ</sup></span>
              </p>
            </div>
          </div>

          <div class="hot-product-item">
            <a href=""><img src="/frontend/images/product4.jpg" alt="" /></a>
            <p><a href="">Quần Dài Nam Thể Thao Pro Active </a></p>
            <span>Cotton 360GSM</span>
            <div class="product-item-price">
              <p>
                329,000 <sup>đ</sup> <span>399,000 <sup>đ</sup></span>
              </p>
            </div>
          </div>

          <div class="hot-product-item">
            <a href=""><img src="/frontend/images/product5.jpg" alt="" /></a>
            <p><a href="">Quần Jeans Nam Basics dáng Straight</a></p>
            <span>Co giãn</span>
            <div class="product-item-price">
              <p>
                459,000 <sup>đ</sup> <span>499,000 <sup>đ</sup></span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- footer -->
    @include('parts.footer')
  </body>
</html>
