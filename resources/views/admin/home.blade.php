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
            {{-- nối giao diện với file php khác chứa thành phần liên quan --}}
            @include('admin.parts.header')
          </div>
          <!-- dashboard -->
          <div class="admin-content-main">
            <div class="admin-content-main-title">
              <h1>Dashboard</h1>
            </div>
            <div class="admin-content-main-content">
                <!-- Code o day -->
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