@extends('admin.main')

@section('content')
<div class="admin-content-main-content-order-list">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Địa chỉ</th>
          <th>Ghi chú</th>
          <th>Chi tiết</th>
          <th>Ngày</th>
          <th>Trạng thái</th>
          <th>Tùy biến</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Nguyễn Minh Tứ</td>
          <td>0337739999</td>
          <td>minhtu15112k3@gmail.com</td>
          <td>Ninh Kiều, Cần Thơ</td>
          <td>Giao lẹ dùm cái</td>
          <td>
            <a class="edit-class" href="/admin/order_detail">Xem</a>
          </td>
          <td>18/01/2024</td>
          <td>
            <a href="" class="confirm-order">Đã xác nhận</a>
          </td>
          <td><a class="delete-class" href="">Xóa</a></td>
        </tr>
        <tr>
          <td>2</td>
          <td>Nguyễn Heo Heo</td>
          <td>0337734567</td>
          <td>minhtu15112k3@gmail.com</td>
          <td>Ninh Kiều, Cần Thơ</td>
          <td>Giao lẹ ddi cd</td>
          <td>
            <a class="edit-class" href="/admin/order_detail">Xem</a>
          </td>
          <td>18/01/2024</td>
          <td>
            <a href="" class="nonconfirm-order">Chưa xác nhận</a>
          </td>
          <td><a class="delete-class" href="">Xóa</a></td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection