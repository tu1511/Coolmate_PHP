@extends('admin.main')

@section('content')
<form action="/admin/product/add" enctype="multipart/form-data" method="post"> 
  <div class="admin-content-main-content-product-add">
      <div class="admin-content-main-content-left">
        <div class="admin-content-main-content-two-input">
          <input type="text" value="{{old('name')}}" name="name" placeholder="Thêm sản phẩm" />
          <input type="text" value="{{old('material')}}" name="material" placeholder="Chất liệu" />
        </div>
        <div class="admin-content-main-content-two-input">
          <input type="text" value="{{old('price_nomal')}}" name="price_nomal" placeholder="Giá bán" />
          <input type="text" value="{{old('price_sale')}} "name="price_sale" placeholder="Giá giảm" />
        </div>
        <textarea class="editor_des" value="{{old('description')}}" name="description" placeholder="Đặc điểm nổi bật" id=""></textarea>
        <textarea class="editor_content" value="{{old('content')}}" name="content" placeholder="Mô tả sản phẩm" id=""></textarea><br />
        <button type="submit" class="main-btn">Thêm Sản Phẩm</button>
      </div>
      <div class="admin-content-main-content-right">
        <div class="admin-content-main-content-right-image">
          <label for="file">Ảnh Đại Diện</label>
          <input id="file" type="file">
          <input type="hidden" name="image" id="input-file-img-hiden">
          <div class="image-show" id="input-file-img">
  
          </div>
        </div>
        <div class="admin-content-main-content-right-images">
          <label for="files">Ảnh Sản Phẩm</label>
          <input id="files" type="file" multiple>
          <div class="images-show" id="input-file-imgs">
  
          </div>
        </div>
      </div>
    </div>
    @csrf
</form>
@endsection

@section('footer')
    <script src="{{asset('backend/asset/ckeditor5_col/script.js')}}"></script>
    <script src="{{asset('backend/asset/ckeditor5_col/ckeditor.js')}}"></script>
    <script src="{{asset('backend/asset/js/product_ajax.js')}}"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '.editor_des' ), {
                // Editor configuration.
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( handleSampleError );

        ClassicEditor
            .create( document.querySelector( '.editor_content' ), {
                // Editor configuration.
            } )
            .then( editor => {
                window.editor = editor;
            } )
            .catch( handleSampleError );
    </script>
@endsection