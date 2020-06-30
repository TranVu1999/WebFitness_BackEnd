var pro_cate_title = '';
var pro_cate_desc = '';

//Get product cate title
$('input#product-cate-title').blur(function(){
    pro_cate_title = $(this).val();
})

//Get product cate desc
$('textarea#product-cate-desc').blur(function(){
    pro_cate_desc = $(this).val();
})

//Get product cate avatar
$('input#upload-avatar').change(function(event){
    if(pro_cate_title == ''){
       $('#notify_upload_avatar').html('<div class="alert alert-danger alert-outline" role="alert">'+
                '<strong>Error!</strong> You have to enter product cate name!'+
              '</div>'); 
    }else{
        $('#notify_upload_avatar').html('');
        
        var name_file = event.target.files[0].name;
        var path_img = 'public/img/product_cate/' + name_file;
        alert(path_img);
        $('img#post-ava-upload').attr('src', path_img);
//        alert(name_file);
    }
    
    
})

