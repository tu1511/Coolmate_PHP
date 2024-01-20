$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// product_add
$('#file').on('change',()=>{
    var formData = new FormData();
    var file = $('#file')[0].files[0]
    formData.append('file',file)
    $.ajax({
        url : '/upload',
        processData: false,//illega invocation
        dataType: 'json',
        data: formData,
        method: 'POST',
        contentType: false,// khong hien o preview
        success: function(result){
            if(result.success == true)
            {
                html = '';
                html+= '<img src="'+result.path+'" alt="">';
                $('#input-file-img').html(html)
                $('#input-file-img-hiden').val(result.path)
            }
        }
    })
})

// them nhieu anh dai dien
$('#files').on('change',()=>{
    var formData = new FormData()
    var files = $('#files')[0].files
    for (let index = 0; index < files.length; index++) {
        formData.append('files[]',files[index])
    }
    $.ajax({
        url:'/uploads',
        method: 'POST',
        dataType: 'JSON',
        data: formData,
        contentType: false,
        processData: false,
        success:function(result){
            if(result.success = true)
            {                
                html =''
                for (let index = 0; index < result.paths.length; index++) {
                    html+=  '<img src="'+result.paths[index]+'" alt=""><input type="hidden" value="'+result.paths[index]+'" class="product-images" name="images[]">'

                    $('#input-file-imgs').html(html)
                }
            }
        }
    })
})

