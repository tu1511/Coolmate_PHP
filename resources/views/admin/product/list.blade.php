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
      @foreach ($products as $product)
           <tr>
            <td>{{$product -> id}}</td>
            <td>
              <img
                style="width: 70px"
                src="{{asset($product -> image)}}"
                alt=""
              />
            </td>
            <td>{{$product -> name}}</td>
            <td>{{number_format($product -> price_nomal)}}</td>
            <td>{{number_format($product -> price_sale)}}</td>
            <td>{{$product -> created_at}}</td>
            <td>
              <a class="edit-class" href="">Sửa</a>
              |
              <a onclick="removeRow(product_id= {{$product -> id}},url='/admin/product/delete')" class="delete-class" href="#">Xóa</a>
            </td>
        </tr>
      @endforeach
     
    </tbody>
  </table>
</div>
@endsection

@section('footer')
    {{-- delete product --}}
    <script>
      function removeRow(product_id,url){
          if(confirm('Bạn có chắc chắn muốn xóa Sản phẩm này không?')){
              $.ajax({
                url: url,
                data: {product_id},
                method: 'GET',
                dataType:'JSON',
                success: function (res){
                  if (res.success == true) {
                    location.reload();
                  }
                }
              }
            )
         }
      }
    </script>
@endsection