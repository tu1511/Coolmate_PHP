@extends('admin.main')

@section('content')
<div class="admin-content-main-content-product-list">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Ảnh</th>
        <th>Tên Sản Phẩm</th>
        <th>Giá Bán</th>
        <th>Giá Giảm</th>
        <th>Ngày Đăng</th>
        <th>Tùy Chỉnh</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>
          <img
            style="width: 70px"
            src="{{asset('backend/asset/images/image1.jpg')}}"
            alt=""
          />
        </td>
        <td>Áo Nỉ chui đầu Essentials</td>
        <td>399,000</td>
        <td>299,000</td>
        <td>202-10-27</td>
        <td>
          <a class="edit-class" href="">Sửa</a>
          |<a class="delete-class" href="">Xóa</a>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>
          <img
            style="width: 70px"
            src="{{asset('backend/asset/images/image2.jpg')}}"
            alt=""
          />
        </td>
        <td>Áo Hoodie Essential</td>
        <td>499,000</td>
        <td>399,000</td>
        <td>202-10-27</td>
        <td>
          <a class="edit-class" href="">Sửa</a>
          |<a class="delete-class" href="">Xóa</a>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>
          <img
            style="width: 70px"
            src="{{asset('backend/asset/images/image3.jpg')}}"
            alt=""
          />
        </td>
        <td>Áo Giữ Nhiệt Modal Ultra</td>
        <td>289,000</td>
        <td>199,000</td>
        <td>202-10-27</td>
        <td>
          <a class="edit-class" href="">Sửa</a>
          |<a class="delete-class" href="">Xóa</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection