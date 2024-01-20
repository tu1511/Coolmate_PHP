<!DOCTYPE html>
<html lang="en">
  <head>
    @include('parts.head')
  </head>
  <body>
    {{-- header --}}
    @include('parts.header')
    <!-- slider -->
    <section class="slider">
      <div class="slider-items">
        <div class="slider-item">
          <img
            src="{{asset('frontend/asset/images/BANNER_WINTER_CLT_(ccmfnlfnal)s.png')}}"
            alt=""
          />
        </div>
        <div class="slider-item">
          <img
            src="{{asset('frontend/asset/images/Banner_Homepage_option_2_copy.jpg')}}"
            alt=""
          />
        </div>
        <div class="slider-item">
          <img src="{{asset('frontend/asset/images/cmbsBanner-6_copy.jpg')}}" alt="" />
        </div>
      </div>

      <div class="slider-arrow">
        <i class="ri-arrow-right-fill"></i>
        <i class="ri-arrow-left-fill"></i>
      </div>
    </section>
    <!-- hot product -->
    <section class="hot-products">
      <div class="container">
        <div class="row-grid">
          <p class="heading-text">Sản Phẩm Mới</p>
        </div>
        <div class="row-grid row-grid-hot-products">
          <div class="hot-product-item">
            <a href=""><img src="{{asset('frontend/asset/images/image1.jpg')}}" alt="" /></a>
            <p><a href="">Áo Nỉ chui đầu Essentials</a></p>
            <span>Cotton 360GSM</span>
            <div class="product-item-price">
              <p>
                299,000 <sup>đ</sup> <span>399,000 <sup>đ</sup></span>
              </p>
            </div>
          </div>

          <div class="hot-product-item">
            <a href=""><img src="{{asset('frontend/asset/images/image2.jpg')}}" alt="" /></a>
            <p><a href="">Áo Hoodie Essential</a></p>
            <span>Cotton 360GSM</span>
            <div class="product-item-price">
              <p>
                399,000 <sup>đ</sup> <span>499,000 <sup>đ</sup></span>
              </p>
            </div>
          </div>

          <div class="hot-product-item">
            <a href=""><img src="{{asset('frontend/asset/images/image3.jpg')}}" alt="" /></a>
            <p><a href="">Áo Giữ Nhiệt Modal Ultra</a></p>
            <span>Giữ ấm</span>
            <div class="product-item-price">
              <p>
                199,000 <sup>đ</sup> <span>289,000 <sup>đ</sup></span>
              </p>
            </div>
          </div>

          <div class="hot-product-item">
            <a href=""><img src="{{asset('frontend/asset/images/image4.jpg')}}" alt="" /></a>
            <p><a href="">Áo Thun Nam Thể Thao Coolmate</a></p>
            <span>Cotton 360GSM</span>
            <div class="product-item-price">
              <p>
                99,000 <sup>đ</sup> <span>139,000 <sup>đ</sup></span>
              </p>
            </div>
          </div>

          <div class="hot-product-item">
            <a href=""><img src="{{asset('frontend/asset/images/image5.jpg')}}" alt="" /></a>
            <p><a href="">Áo Sơ mi dài tay Café-DriS</a></p>
            <span>Khử mùi</span>
            <div class="product-item-price">
              <p>
                399,000 <sup>đ</sup> <span>499,000 <sup>đ</sup></span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
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
