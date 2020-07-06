var path_img = '';
// Get banner img
$('input#upload-avatar').change(function(event){
    var name_file = event.target.files[0].name;
    path_img = 'public/img/banners/' + name_file;
    $('img#post-ava-upload').attr('src', path_img);
})

//Add banner
$('button#add-banner').click(function(){
    if(path_img === ''){
        $('#notify-upload-banner').html('<div class="alert alert-danger alert-outline" role="alert">'+
                '<strong>Error!</strong> You have to enter link image!'+
              '</div>');
    }else{
        $('#notify-upload-banner').html('');
        
        var data = {path_banner: path_img};
        $.ajax({
            url: '?mod=banner&controller=add&action=addBanner',
            method: "POST",
            data: data, // Dữ liệu được truyền lên server
            dataType: 'text',
            success: function (data) {
               alert(data);
            },
            // Phương thức này trả về lỗi xảy ra với ajax
            error: function (xhr, ajaxOptions, throwError) {
                // Lỗi 404: đường dẫn ko tìm được
                alert(xhr.Status);
                alert(throwError);
            }
        });
        
    }
})

