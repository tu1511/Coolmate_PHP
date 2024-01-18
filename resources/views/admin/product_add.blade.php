@extends('admin.main')

@section('content')
<div class="admin-content-main-content-product-add">
    <div class="admin-content-main-content-left">
      <div class="admin-content-main-content-two-input">
        <input type="text" placeholder="Thêm sản phẩm" />
        <input type="text" placeholder="Chất liệu" />
      </div>
      <div class="admin-content-main-content-two-input">
        <input type="text" placeholder="Giá bán" />
        <input type="text" placeholder="Giá giảm" />
      </div>
      <textarea class="editor_des" name="" placeholder="Đặc điểm nổi bật" id="">
</textarea
      >
      <textarea class="editor_content" name="Mô tả sản phẩm" placeholder="" id="">
</textarea
      ><br />
      <button class="main-btn">Thêm Sản Phẩm</button>
    </div>
    <div class="admin-content-main-content-right">
      <div class="admin-content-main-content-right-image">
        <label for="file">Ảnh Đại Diện</label>
        <input id="file" type="file" />
        <div class="image-show"></div>
      </div>
      <div class="admin-content-main-content-right-images">
        <label for="files">Ảnh Sản Phẩm</label>
        <input id="files" type="file" />
        <div class="images-show"></div>
      </div>
    </div>
  </div>
@endsection

@section('footer')
    <script src="{{asset('backend/asset/ckeditor5_col/script.js')}}"></script>
    <script src="{{asset('backend/asset/ckeditor5_col/ckeditor.js')}}"></script>

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