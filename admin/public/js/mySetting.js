// ================================= Invoice Detail ================================
$('.invoice-status span.invoice-status-value').click(function(){
    var str_situation = $(this).text();
    if(str_situation == 'Pending'){
        $(this).text('Transporting');
        $(this).removeClass('badge-danger');
        $(this).addClass('badge-warning');
    }else if (str_situation == 'Transporting'){
        $(this).text('Paid');
        $(this).removeClass('badge-warning');
        $(this).addClass('badge-secondary');
    }else{
        $(this).text('Pending');
        $(this).removeClass('badge-secondary');
        $(this).addClass('badge-danger');
    }

    $('.invoice-buttons .btn-save-invoice').css('display', 'inline-block');

    // alert(str_situation);
})

// ================================= Add Banner ================================
$('input.form-check-input.chk-pos-banner').change(function(){
    var chk_pos_banner = $(this).attr('id');
    var str_chk_pos_banner = 'label[for="' + chk_pos_banner + '"]';
    $(str_chk_pos_banner).toggleClass('active');
})
// ================================= Edit Post =================================
$('button.edit-data').click(function(){
    var old_data = $('.old-data');
    for(var i = 0; i < old_data.length; i++){
        old_data.eq(i).remove();
    }
    $('.box-edit-control').css('display', 'inline-block');

});

$('a.edit-control').click(function(event){
    event.preventDefault();
    var data_focus = $(this).attr('data-focus');
    var str_focus = '[data-focus="' + data_focus + '"]';
    $(str_focus).focus();
    $(this).children('i').removeClass('ms-text-primary');
    $(this).children('i').addClass('ms-text-danger');

    $('button.btn-save').css('display', 'inline-block');
    $('button.edit-data').css('display', 'none');
    // alert(data_focus);
});

var inner_detail_post = $('[data-label="edit-post-detail"]').html();

/*Tinymce editor*/
if ($('[data-focus="edit-post-detail"]').length) {
    tinymce.init({
        selector: '[data-focus="edit-post-detail"]',
        height: 500,
        theme: 'modern',
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
        ],
        toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
        image_advtab: true,
        templates: [{
                title: 'Test template 1',
                content: 'Test 1'
            },
            {
                title: 'Test template 2',
                content: 'Test 2'
            }
        ],
        content_css: [],
        setup: function (editor) {
            editor.on('init', function () {
                this.setContent(inner_detail_post);
            });
        }
    });
}

// ================================= Setting remove-quick-bar=================================
 $('#remove-quickbar').change(function(){
    if(!$(this).is(':checked')){
        $('#remove-quickbar+span').addClass('active-background');
    }else{
        $('#remove-quickbar+span').removeClass('active-background');
    }
})

// ================================= Setting check-status-box=================================
 $('#check-status-box').change(function(){
    if(!$(this).is(':checked')){
        $('#check-status-box+span').addClass('active-background');
        $('#check-status-text').html('<span class="ms-text-danger">Enable</span>');
    }else{
        $('#check-status-box+span').removeClass('active-background');
        $('#check-status-text').html('<span class="ms-text-primary">Active</span>');
    }
    // alert('check');
}) 


// Get avatar
//document.getElementById('upload-avatar').onchange = function (evt) {
//    var tgt = evt.target || window.event.srcElement,
//        files = tgt.files;
//
//    // FileReader support
//    if (FileReader && files && files.length) {
//        var fr = new FileReader();
//        fr.onload = function () {
//            document.getElementById('post-ava-upload').src = fr.result;
//        }
//        fr.readAsDataURL(files[0]);
//    }
//
//    // Not supported
//    else {
//        // fallback -- perhaps submit the input to an iframe and temporarily store
//        // them on the server until the user's session ends.
//    }
//}

// Get slide image
$('input.input-slide').change(function(e){
    var index = $(this).attr('data-thumb-slide');
    // alert();
    readURL(this, index);
})

function readURL(input, index) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            var path = 'img[data-thumb-slide="' + index + '"]';
            $(path).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

// == Get Content textarea
$('#view').click(function(){
    // var content = tinymce.get("detail-post").getContent();
    // $('#content').html(content);
    // alert('content');
})

// ================================= Add - Remove slide image =================================
$('.btn-remove-img').click(function(event){
    event.preventDefault(); 
    // remove inner-img carousel-item and slide-img
    var length_silde = $('.slide-img li').length;
    var index_active  = parseInt($('.slide-img>li.active').attr('data-slide-to'));
    var inner_item = '.inner-img div[data-thumb-slide="' + index_active + '"]';
    var slide_item = '.slide-img li[data-slide-to="' + index_active + '"]';
    if(length_silde > 2){
        $(inner_item).remove();
        $(slide_item).remove();

        if(index_active < length_silde - 1){
            index_active++;
        }else if(index_active == length_silde - 1){
            index_active--;
        }

        var active_inner_item = '.inner-img div[data-thumb-slide="' + index_active + '"]';
        var active_slide_item = '.slide-img li[data-slide-to="' + index_active + '"]';

        $(active_slide_item).addClass('active');
        $(active_inner_item).addClass('active');
    }else{
        alert('You Can Not Remove This Element');
    }
    // alert('remove');
});

$('.btn-add-img').click(function(event){
    event.preventDefault();
    var index = $('.slide-img li').length;
    $('.inner-img').append(
        '<div class="carousel-item" data-thumb-slide="' + index + '">' +
            '<div class="thumb-avatar">' +
                '<img src="" alt="" data-thumb-slide="' + index + '">' +
                '<i class="fa fa-upload"></i>' +
                '<input type="file" class="input-slide" data-thumb-slide="' + index + '">' +
            '</div>' +
        '</div> ');

    $('.slide-img').append(
        '<li data-target="#imagesSlider" data-slide-to="' + index + '">' +
            '<img class="d-block w-100" src="assets/img/upload.PNG" alt="First slide" data-slide="' + index + '">' +
        '</li>');            

    // alert(index);
});

$('.carousel-control-prev').click(function(){
    var length_silde = $('.slide-img li').length;
    var index_active  = parseInt($('.slide-img>li.active').attr('data-slide-to')) - 1;
    var current_width_item = parseInt($('.slide-img li').width());
    var first_ele_ml = parseInt($('.slide-img li:nth-of-type(1)').css('margin-left'));

    if(length_silde > 4){
        
        if(index_active > 4){
            var pos = first_ele_ml + current_width_item + 15;
            $('.slide-img li:nth-of-type(1)').css('margin-left', pos);
        }else if(index_active >= 0 && index_active <= 4){
            $('.slide-img li:nth-of-type(1)').css('margin-left', '10px');
        }else if(index_active < 0){
            var pos = (length_silde - 4) * current_width_item + (length_silde - 4) * 5;
            $('.slide-img li:nth-of-type(1)').css('margin-left', -pos);
        }
    }
})

$('.carousel-control-next').click(function(){
    var length_silde = $('.slide-img li').length;
    var index_active  = parseInt($('.slide-img>li.active').attr('data-slide-to')) + 1;
    var current_width_item = parseInt($('.slide-img li').width());
    var first_ele_ml = parseInt($('.slide-img li:nth-of-type(1)').css('margin-left'));

    if(length_silde > 4){
        
        if(index_active < length_silde && index_active >= 4){
            var pos = first_ele_ml - current_width_item - 14 ;
            $('.slide-img li:nth-of-type(1)').css('margin-left', pos);
        }
        else if(index_active == length_silde){
            $('.slide-img li:nth-of-type(1)').css('margin-left', '10px');
        }
    }
});