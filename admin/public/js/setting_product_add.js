var product = new Product('', '', '', '', true, '', '', [], 0, 0);
var current_color = '';
var current_size = '';
var curent_slide = 0;

//Select color
$('label.checkbox-wrap input').change(function(){
//    $('label.checkbox-wrap i').addClass('hide');
    $('label.checkbox-wrap i').removeClass('show');
    $(this).parent().children('i.my-checkbox-check').addClass('show');
    
    current_color = $(this).parent().children('i.my-checkbox-check').attr('data-color-id');
    current_size = $('select#size').val();
    
    var is_exist = false;
    var amount_prod_attr = product.product_attr.length;
    for(var i = 0; i < amount_prod_attr; i++){
        if(product.product_attr[i].product_color == current_color && product.product_attr[i].product_size == current_size){
            is_exist = true;
            $('input#product-amount').val(product.product_attr[i].product_amount);
            for(var j = 0; j < 4; j++){
                var path_thumb = 'img[data-thumb-slide="' + j + '"]';
                var path_slide = 'img[data-slide="' + j + '"]';
                $(path_thumb).attr('src', product.product_attr[i].lst_product_img[j]);
                $(path_slide).attr('src', product.product_attr[i].lst_product_img[j]);
                
            }
            
            break;
        }
    }
    
    if(!is_exist){
        $('input#product-amount').val(0);
        var prod_attr = new ProductAttr(current_color, current_size, 0, []);
        product.product_attr.push(prod_attr);
        for(var j = 0; j < 4; j++){
            var path_thumb = 'img[data-thumb-slide="' + j + '"]';
            var path_slide = 'img[data-slide="' + j + '"]';
            $(path_thumb).attr('src', 'public/img/upload.PNG');
            $(path_slide).attr('src', 'public/img/upload.PNG');
        }
        
    }   
    $('div#amount-box').css('display', 'block');
})

//Select size
$('select#size').change(function(){
    var elm_color = $('label.checkbox-wrap i');
    var amount_color = elm_color.length;
    for(var i = 0; i < amount_color; i++){
        if(elm_color.eq(i).hasClass('show')){
            current_color = elm_color.eq(i).attr('data-color-id');
            break;
        }
    }
//    alert(current_color);
    current_size = $(this).val();
    
    var is_exist = false;
    var amount_prod_attr = product.product_attr.length;
    for(var i = 0; i < amount_prod_attr; i++){
        if(product.product_attr[i].product_color == current_color && product.product_attr[i].product_size == current_size){
            is_exist = true;
            $('input#product-amount').val(product.product_attr[i].product_amount);
            for(var j = 0; j < 4; j++){
                var path_thumb = 'img[data-thumb-slide="' + j + '"]';
                var path_slide = 'img[data-slide="' + j + '"]';
                $(path_thumb).attr('src', product.product_attr[i].lst_product_img[j]);
                $(path_slide).attr('src', product.product_attr[i].lst_product_img[j]);
                
            }
            
            break;
        }
    }
    
    if(!is_exist){
        $('input#product-amount').val(0);
        var prod_attr = new ProductAttr(current_color, current_size, 0, []);
        product.product_attr.push(prod_attr);
        for(var j = 0; j < 4; j++){
            var path_thumb = 'img[data-thumb-slide="' + j + '"]';
            var path_slide = 'img[data-slide="' + j + '"]';
            $(path_thumb).attr('src', 'public/img/upload.PNG');
            $(path_slide).attr('src', 'public/img/upload.PNG');
        }
        
    }  
})

//Upload product slide
$('input.input-slide').change(function(event){
    curent_slide = $(this).attr('data-thumb-slide');
    var name_img = event.target.files[0].name;
    var product_title = $('input#product-tilte').val();
    
    if(product_title === ""){
        $('#notify-upload-slide').html('<div class="alert alert-danger alert-outline" role="alert">'+
                                            '<strong>Error!</strong> You have to enter product name!'+
                                        '</div>');
    }else{
        $('#notify-upload-slide').html('');
        
        var course_title_format = change_alias(product_title).split(' ').join('_');
        course_title_format.split(' ').join('_');
        
        var path_img = 'public/img/products/' + course_title_format + '/' + name_img;
        var path_thumb = 'img[data-thumb-slide="' + curent_slide + '"]';
        var path_slide = 'img[data-slide="' + curent_slide + '"]';
        $(path_thumb).attr('src', path_img);
        $(path_slide).attr('src', path_img);
        
        var amount_prod_attr = product.product_attr.length;
        for(var i = 0; i < amount_prod_attr; i++){
            if(product.product_attr[i].product_color === current_color && product.product_attr[i].product_aize === current_size){
                for(var j = 0; j < 4; j++){
                    if(curent_slide == j){
                        product.product_attr[i].lst_product_img[j] = path_img;
                        break;
                    }
                }
            }else{
                product.product_attr[i].lst_product_img.push(path_img);
            }
        }
        
//        console.log(product);
        
    }
    
//    alert(index);
})

//Upload product avatar
$('input#upload-avatar').change(function(event){
//    console.log(event);
    var name_img = event.target.files[0].name;
    var product_title = $('input#product-tilte').val();

    if(product_title === ""){
        $('#notify-upload-avatar').html('<div class="alert alert-danger alert-outline" role="alert">'+
                                            '<strong>Error!</strong> You have to enter product name!'+
                                        '</div>');
    }else{
        $('#notify-upload-avatar').html('');
        var course_title_format = change_alias(product_title).split(' ').join('_');
        course_title_format.split(' ').join('_');
        var path_img = 'public/img/products/' + course_title_format + '/' + name_img;
        product.product_avatar = path_img;
        $('img#prod-ava-upload').attr('src', path_img);
        
    }
//    alert('change');
})

//Add amount product
$('input#product-amount').blur(function(){
    var product_amount = $(this).val();
    
    if(Number.isNaN($(this).val()) || String(parseInt($(this).val())).length < $(this).val().length){
        $('#product-amount').html('<div class="alert alert-danger alert-outline" role="alert">'+
                                            '<strong>Error!</strong> You have to enter nubmer!'+
                                        '</div>');
    }else{
        $('#notify-prod-price').html('');
        var amount_prod_attr = product.product_attr.length;
//        alert(amount_prod_attr);
        for(var i = 0; i < amount_prod_attr; i++){
            if(product.product_attr[i].product_color === current_color && product.product_attr[i].product_size === current_size){
                product.product_attr[i].product_amount = product_amount;
                break;
            }
        }
        
    }
    
//    console.log(product);
})

//Save product
$('button#save-prodduct').click(function(){
    var is_add = true;
    toastr.options ={
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-left",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "300",
        "timeOut": "3000",
        "extendedTimeOut": "3000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
       
    product.product_title = $('input#product-tilte').val();
    product.product_cate = $('select#product-cate').val();
    product.product_desc = $('#product-desc').val();
    product.product_detail = tinymce.get("detail-post").getContent();
    product.product_alias = change_alias(product.product_title).split(' ').join('-');
    product.product_price = $('#product-price').val();
    product.product_promo = $('#product-promo').val();
    product.product_status = !($('input#check-status-box+span').hasClass('active-background'));
    
//    alert($('#product-price').val().length);
   
    if(Number.isNaN($('#product-price').val()) || String(parseInt($('#product-price').val())).length < $('#product-price').val().length){
        is_add = false;
        $('#notify-prod-price').html('<div class="alert alert-danger alert-outline" role="alert">'+
                                            '<strong>Error!</strong> You have to enter nubmer!'+
                                        '</div>');
//        alert('is not number');
    }else{
        $('#notify-prod-price').html('');
    }
    
    if(Number.isNaN($('#product-promo').val()) || String(parseInt($('#product-promo').val())).length < $('#product-promo').val().length){
        is_add = false;
        $('#notify-prod-promo').html('<div class="alert alert-danger alert-outline" role="alert">'+
                                            '<strong>Error!</strong> You have to enter nubmer!'+
                                        '</div>');
    }else{
        $('#notify-prod-promo').html('');
    }
    
    if(product.product_title === ''){
        is_add = false;
        toastr.remove();
        toastr.options.positionClass = "toast-top-right";
        toastr.error('You must fill out the information', 'Error!');
        
        $('#notify-prod-title').html('<div class="alert alert-danger alert-outline" role="alert">'+
                                            '<strong>Error!</strong> You have to enter product name!'+
                                        '</div>');
    }else{
        $('#notify-prod-title').html('');
    }
    
    if(product.product_desc === ''){
        is_add = false;
        toastr.remove();
        toastr.options.positionClass = "toast-top-right";
        toastr.error('You must fill out the information', 'Error!');
        
        $('#notify-prod-desc').html('<div class="alert alert-danger alert-outline" role="alert">'+
                                            '<strong>Error!</strong> You have to enter product description!'+
                                        '</div>');
    }else{
         $('#notify-prod-desc').html('');
    }
    
    
    if(is_add){
        var data = {product: JSON.stringify(product)};
        $.ajax({
            url: '?mod=product&controller=add&action=addProduct',
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

