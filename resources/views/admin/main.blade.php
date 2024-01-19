<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.parts.head')
  </head>
  <body>
    <section class="admin">
      <div class="row-grid">
        <div class="admin-sidebar">
          @include('admin.parts.sidebar')
        </div>
        <!-- admin-content -->
        <div class="admin-content">
          <div class="admin-content-top">
            @include('admin.parts.header')
          </div>
          <!-- dashboard -->
          <div class="admin-content-main">
            <div class="admin-content-main-title">
              {{-- isset dùng để điều kiện thẻ h1 tên khác nhau ở cái file khác --}}
              <h1>{{isset($title)? $title: 'Dashboard'}}</h1> 
            </div>
            <div class="admin-content-main-content">
                <!-- Code o day -->
                @yield('content')
                {{-- yield cho phép chèn dữ liệu vào trong 1 thành phần --}}
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
       @include('admin.parts.footer')
    </footer>
  </body>
</html>