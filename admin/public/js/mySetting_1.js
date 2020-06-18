// ================================= Add Course ================================
$('form#add-chapter').submit(function(){
    var lst_chapter = $('#list-lesson .table-of-content>li');
    var amountChapter = lst_chapter.length + 1;
    var chapter_title = $('form#add-chapter input').val();
    
    var course_title = $('form#course-title input').val();

    if(course_title == ""){
        $('#notify_course_title').append('<div class="alert alert-danger alert-outline" role="alert">'+
                '<strong>Erro!</strong> You have to enter chapter tilte'+
              '</div>');
    }else{
        var isAdd = true;
        for(var i = 0; i < amountChapter; i++){
            if(chapter_title == lst_chapter.eq(0).children('.part-info').children('.part-title').children('.chapter-title').text()){
                isAdd = false;
                break;
            }
        }

        if(isAdd){
            var chapter_str = '<li data-order-chapter="' + amountChapter + '">' +
                                '<div class="part-info">' +
                                    '<div class="part-title">Chapter ' + amountChapter + ': <span class="chapter-title">' + chapter_title + '</span></div>'+
                                    '<span class="part-duration">0 bài</span>'+
                                    '<span class="toggle-lecture"></span>'+
                                '</div>'+
                                '<ul class="list-lecture" data-order-chapter="' + amountChapter + '">'+
                                    '<li>'+
                                        '<form action="#" class="add-lesson" method="post" data-order-chapter="' + amountChapter + '">'+
                                            '<div class="form-row">'+
                                                '<div class="col-12">'+
                                                    '<div class="input-group">'+
                                                        '<input type="text" class="form-control mr-2 lesson-title" required="" placeholder="Add new lesson"data-order-chapter="' + amountChapter + '">'+
                                                        '<button type="submit" class="btn btn-outline-primary btn-add-chapter btn-add-lesson">Add Lesson</button>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</form>'+
                                    '</li>'+
                                '</ul>'+
                            '</li>';
            $('#list-lesson .table-of-content').append(chapter_str);
            $('#notify_chapter').text('');

            var data = {course_title: course_title, chapter_title: chapter_title};
            $.ajax({
                url: '?mod=course&controller=addCourse&action=addChapter',
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
        }else{
            $('#notify_chapter').append('<div class="alert alert-danger alert-outline" role="alert">'+
                    '<strong>Oh snap!</strong> Change a few things up and try submitting again.'+
                  '</div>');
        }
    }
    
    
    $('form#add-chapter input').val('');
    return false;
});

$(document).on("submit", 'form.add-lesson', function() {
    var order_chapter = $(this).attr('data-order-chapter');
    var lst_lesson = $('ul.list-lecture[data-order-chapter= "' + order_chapter +'"] li');
    var amount_lesson = lst_lesson.length;
    $('#list-lesson .table-of-content li[data-order-chapter= "' + order_chapter +'"] span.part-duration').text(amount_lesson + " bài");
    var lesson_title = $('form.add-lesson input[data-order-chapter= "' + order_chapter +'"]').val();
    // alert(lesson_title);

    var lecture_str = '<li data-order-lesson="' + amount_lesson + '">'+
                            '<div class="lecture-item">'+
                                '<span class="far fa-times-circle ms-text-danger delete-lesson" data-order-lesson="' + amount_lesson + '" data-order-chapter= "' + order_chapter +'"></span>'+
                                '<div class="lecture-info">'+
                                    '<a href="course/lam-chu-jquery-sieu-toc/lecture/336" class="lecture-title">Bài <span>' + amount_lesson + '</span>: ' + lesson_title + '</a>'+
                                    '<div class="lecture-duration">'+
                                        '<span class="far fa-play-circle"></span> 8:00'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</li>';

    $('ul.list-lecture[data-order-chapter= "' + order_chapter +'"]').append(lecture_str);
    $('form.add-lesson input').val('');
    
    var data = {order: amount_lesson, lesson_title: lesson_title, order_chapter: order_chapter};
    $.ajax({
        url: '?mod=course&controller=addCourse&action=addLesson',
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
    return false;
});

$(document).on("click", '.part-info', function() {
    $(this).parent().children('ul.list-lecture').slideToggle();
    $(this).toggleClass('active');
});

$(document).on("click", 'span.delete-lesson', function() {
    var pos_chapter = $(this).attr('data-order-chapter');
    var pos_lesson = $(this).attr('data-order-lesson');
    $('ul.list-lecture[data-order-chapter="' + pos_chapter +'"] li[data-order-lesson= "' + pos_lesson +'"]').remove();

    var lst_lesson = $('ul.list-lecture[data-order-chapter="' + pos_chapter +'"] li');
    var amount_lesson = lst_lesson.length;

    for(var i = 0; i < amount_lesson; i++){
        lst_lesson.eq(i).attr('data-order-lesson', i);
        lst_lesson.eq(i).children('.lecture-item').children('.lecture-info').children('a.lecture-title').children('span').text(i);
        // lst_lesson.eq(i).children('.lecture-item').children('.delete-lesson').text(i);
        lst_lesson.eq(i).children('.lecture-item').children('.delete-lesson').attr('data-order-lesson', i);
    }
    amount_lesson--;

    $('#list-lesson .table-of-content li[data-order-chapter= "' + pos_chapter +'"] span.part-duration').text(amount_lesson + " bài");
});

$('input#upload-video').change(function(event){
    var name_video = event.target.files[0].name;
    var chapter_title = $('form#chapter-title input').val();

    if(chapter_title == ""){
        $('#notify_chapter_title').append('<div class="alert alert-danger alert-outline" role="alert">'+
                '<strong>Erro!</strong> You have to enter chapter tilte'+
              '</div>');
    }else{
        var chapter_title_format = change_alias(chapter_title).split(' ').join('_');
        chapter_title_format.split(' ').join('_');
        var path_video = 'public/img/course/' + chapter_title_format + '/videos/' + name_video;

        
        $('#source-video-mp4').attr('src', path_video);
        // $('#test').attr('src', path_video);
        $('#thumb-video').css('display', 'block');
        // alert(chapter_title_format)
        $('#up-video').css('display', 'none');
    }
});

function change_alias(alias) {
    var str = alias;
    str = str.toLowerCase();
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a"); 
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e"); 
    str = str.replace(/ì|í|ị|ỉ|ĩ/g,"i"); 
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); 
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u"); 
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y"); 
    str = str.replace(/đ/g,"d");
    str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'|\"|\&|\#|\[|\]|~|\$|_|`|-|{|}|\||\\/g," ");
    str = str.replace(/ + /g," ");
    str = str.trim(); 
    return str;
}

// ================================= Course Detail ================================
$('#list-lesson ul.table-of-content>li').click(function(){
    $(this).children('ul.list-lecture').slideToggle();
    $(this).children('.part-info').toggleClass('active');
})

// Handle modal course
$('#close-modal-course').click(function(){
    // alert('close');
    $('#box-modal-course').css('display', 'none');
})

$('#open-modal-course').click(function(){
    // alert('close');
    $('#box-modal-course').css('display', 'block');
})

// Handle modal add lesson
$('#open-modal-add-course').click(function(){
    // alert('close');
    $('#modal-add-lesson').css('display', 'block');
})

$('#close-modal-add-course').click(function(){
    // alert('close');
    $('#modal-add-lesson').css('display', 'none');
})

// Handle modal show lesson
$('#open-modal-lesson').click(function(){
    // alert('close');
    $('#modal-lesson').css('display', 'block');
})

$('#close-modal-lesson').click(function(){
    // alert('close');
    $('#modal-lesson').css('display', 'none');
})
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
document.getElementById('upload-avatar').onchange = function (evt) {
    var tgt = evt.target || window.event.srcElement,
        files = tgt.files;

    // FileReader support
    if (FileReader && files && files.length) {
        var fr = new FileReader();
        fr.onload = function () {
            document.getElementById('post-ava-upload').src = fr.result;
        }
        fr.readAsDataURL(files[0]);
    }

    // Not supported
    else {
        // fallback -- perhaps submit the input to an iframe and temporarily store
        // them on the server until the user's session ends.
    }
}

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
            '<img class="d-block w-100" src="public/img/upload.PNG" alt="First slide" data-slide="' + index + '">' +
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