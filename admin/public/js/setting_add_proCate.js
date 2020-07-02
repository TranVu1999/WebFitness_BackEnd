var current_slide_item = 0;
var current_elm_active = 0;
var current_slide_show = 0;
var amount_banner = $('#slide-banner .banner-item').length;
var amount_page_banner = Math.ceil(amount_banner / 3);

//click next button
$('#slide-banner .btn-next').click(function(){
    current_slide_item++;
    if(current_slide_item < amount_page_banner){
        var width_elm = $('#slide-banner .first-item').outerWidth();
        pos_slide = -((width_elm + 2) * 3 * current_slide_item + 25 * current_slide_item);
        $('#slide-banner .first-item').css('margin-left', pos_slide);
    }
    
    
})

//click prev button
$('#slide-banner .btn-prev').click(function(){
    current_slide_item--;
    if(current_slide_item > 0){
        var width_elm = $('#slide-banner .first-item').outerWidth();
        pos_slide = -((width_elm + 2) * 3 * current_slide_item + 25 * current_slide_item);
        $('#slide-banner .first-item').css('margin-left', pos_slide);
    }
})

//Choose slide
$('#slide-banner .banner-item').click(function(){
    $('#slide-banner .banner-item').removeClass('active-item');
    $(this).addClass('active-item');
    var data_id = $(this).attr('data-id');
//    alert(data_id);
    
    var elm_items = $('#slide-banner .banner-item');
    var length = elm_items.length;
    for(var i = 0; i < length; i++){
        if(elm_items.eq(i).hasClass('active-item')){
            current_elm_active = i;
            break;
        }
    }
    
    var src = $(this).children('img').attr('src');
    
    var elm_show_items = $('#slide #slide-item ul li');
    var length = elm_show_items.length;
    for(var i = 0; i < length; i++){
        if(elm_show_items.eq(i).hasClass('active')){
            $('#slide #slide-thumb img').attr('src', src);
            elm_show_items.eq(i).children('img').attr('src', src);
            elm_show_items.eq(i).attr('data-id', data_id);
            break;
        }
    }
    
})

//Show slide
$('#slide #slide-item ul li').click(function(){
    var src = $(this).children('img').attr('src');
    $('#slide #slide-item ul li').removeClass('active');
    $(this).addClass('active');
    current_slide_show = $(this).index();
//    alert(src);
    $('#slide #slide-thumb img').attr('src', src);
})

//=====================================================================================

var pro_cate_title = '';
var pro_cate_desc = '';
var path_img = '';

//Get product cate title
$('input#product-cate-title').blur(function(){
    pro_cate_title = $(this).val();
})

//Get product cate desc
$('textarea#product-cate-desc').blur(function(){
    pro_cate_desc = $(this).val();
})

//Get product cate avatar
$('div#avatar-post').click(function(){
    if(pro_cate_title == ''){
        $('#notify_upload_avatar').html('<div class="alert alert-danger alert-outline" role="alert">'+
                                            '<strong>Error!</strong> You have to enter product cate name!'+
                                        '</div>');
        $(this).disable = true;
              
    }else{
        $('#notify_upload_avatar').html('');
        $(this).disable = false;
    }

})

$('input#upload-avatar').change(function(event){
    if(pro_cate_title == ''){
       $('#notify_upload_avatar').html('<div class="alert alert-danger alert-outline" role="alert">'+
                '<strong>Error!</strong> You have to enter product cate name!'+
              '</div>'); 
    }else{
        $('#notify_upload_avatar').html('');
        
        var name_file = event.target.files[event.target.files.length - 1].name;
        path_img = 'public/img/product_cate/' + name_file;
        
        $('img#post-ava-upload').attr('src', path_img);

    }  
})

//Save Product Cate
$('#save-prod-cate').click(function(){
    var isAdd = true;
    if(pro_cate_title === ''){
        $('#notify_prod_cate_title').html('<div class="alert alert-danger alert-outline" role="alert">'+
                '<strong>Error!</strong> You have to enter product cate name!'+
              '</div>');
        isAdd = false;
    }
    
    if(path_img === ''){
        $('#notify_upload_avatar').html('<div class="alert alert-danger alert-outline" role="alert">'+
                '<strong>Error!</strong> You have to enter product cate name!'+
              '</div>'); 
        isAdd = false;
    }
    
    if(pro_cate_desc === ''){
        $('#notify_prod_cate_desc').html('<div class="alert alert-danger alert-outline" role="alert">'+
                '<strong>Error!</strong> You have to enter product cate description!'+
              '</div>'); 
        isAdd = false;
    }
    
    if(isAdd){
        var prod_cate = new ProductCate('1', pro_cate_title, path_img, pro_cate_desc);
        var lst_banner = [];
        var banner_address = change_alias(pro_cate_title).split(' ').join('_')


        var elm_show_items = $('#slide #slide-item ul li');
        var length = elm_show_items.length;
        for(var i = 0; i < length; i++){
            var banner = new Banner(elm_show_items.eq(i).attr('data-id'), elm_show_items.eq(i).children('img').attr('src'), 'banner_' + banner_address);
            lst_banner.push(banner);
        }

        var data = {prod_cate: JSON.stringify(prod_cate), lst_banner: JSON.stringify(lst_banner)};
        $.ajax({
            url: '?mod=product-category&controller=add&action=addProductCategory',
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

