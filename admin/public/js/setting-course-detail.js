var course_add = new Course($('input#course_id').val() ,'', [], '', '', '');
var course_edit = new Course($('input#course_id').val() ,'', [], '', '', '');
var course_remove = new Course($('input#course_id').val() ,'', [], '', '', '');

var current_lesson_id = -1;
var current_chapter_id = -1;
var path_lesson_video = '';

//Get course origin
var course_origin = new Course($('input#course_id').val() ,'', [], '', '', '');
var data = {};
$.ajax({
    url: '?mod=course&controller=detail&action=getInfoCourse',
    method: "POST",
    data: data, // Dữ liệu được truyền lên server
    dataType: 'json',
    success: function (data) {
        course_origin = data;
    },
    error: function (xhr, ajaxOptions, throwError) {
        alert(xhr.Status);
        alert(throwError);
    }
});


//Add Chapter
$('form#add-chapter').submit(function(){
    var lst_chapter = $('#list-chapter .table-of-content>li');
    
    var amountChapter = lst_chapter.length + 1;
    var chapter_title = $('form#add-chapter input').val();

    var isAdd = true;
    for(var i = 0; i < amountChapter; i++){
        if(chapter_title == lst_chapter.eq(0).children('.part-info').children('.part-title').children('.chapter-title').text()){
            isAdd = false;
            break;
        }
    }

    if(isAdd){
        var chapter_str = '<li class="ms-list-item ui-sortable-handle" data-order-chapter="' + amountChapter + '" data-chapter-id="-' + amountChapter + '">' +
                            '<div class="part-info">' +
                                '<div class="part-title">Chapter ' + amountChapter + ': ' + chapter_title + '</div>' +
                                '<span class="part-duration">0 lessons</span>' +
                                '<span class="toggle-lecture"></span>' +
                            '</div>' +

                            '<ul class="list-lesson ms-list ms-sortable-list ui-sortable" data-order-chapter="' + amountChapter + '">' +
                                '<li class="ui-sortable-handle">' +
                                    '<form action="#" class="add-lesson" method="post" data-order-chapter="' + amountChapter + '">' +
                                        '<div class="form-row">' +
                                            '<div class="col-12">' +
                                                '<div class="input-group">' +
                                                    '<input type="text" class="form-control mr-2 lesson-title" required="" placeholder="Add new lesson" data-order-chapter="' + amountChapter + '">' +
                                                    '<button type="submit" class="btn btn-outline-primary btn-add-chapter btn-add-lesson">Add Lesson</button>' +

                                                '</div>' +
                                                '<div class="notify_lesson" data-order-chapter="' + amountChapter + '"></div>' +
                                            '</div>' +
                                        '</div>' +
                                    '</form>' +
                                '</li>' +
                            '</ul>' +
                        '</li>';
        $('#list-chapter .table-of-content').append(chapter_str);
        $('#notify_chapter').text('');
        
        var chapter = new Chapter(-1, '', '', []);
        chapter.chapter_title = chapter_title;
        chapter.chapter_id = -amountChapter;
        chapter.chapter_order = amountChapter;
        
        course_add.list_chapter.push(chapter);
        
    }else{
        $('#notify_chapter').append('<div class="alert alert-danger alert-outline" role="alert">'+
                '<strong>Error!</strong> This chapter chapter already exists!'+
              '</div>');
    }

    $('form#add-chapter input').val('');
    return false;
});

//Choose chapter
$(document).on("click", '.part-info', function() {
    if($(this).parent().children('ul.list-lesson').css('display') == "block"){
        $(this).parent().children('ul.list-lesson').css('display', 'none');
    }else{
        $(this).parent().children('ul.list-lesson').css('display', 'block');
    } 
});

//Delete lesson
$(document).on("click", 'span.delete-lesson', function() {
//    alert(amount_lesson);
    var pos_chapter = $(this).parent().parent().parent().attr('data-order-chapter');   
    $(this).parent().parent().remove();
    
    
    var ele_lesson = $('ul.table-of-content>li[data-order-chapter="' + pos_chapter + '"] ul.list-lesson li.ms-list-item');
    var amount_lesson = ele_lesson.length;
    
    for(var i = 0; i < amount_lesson; i++){
        ele_lesson.eq(i).attr('data-order-lesson', i);
        ele_lesson.eq(i).children('.lesson-item').children('.lesson-info').children('a.lesson-title').children('span').text(i + 1);
    }
    
//     ele_list_lesson.eq(i).attr('data-order-lesson', i + 1);
});

//Add lesson
$(document).on("submit", 'form.add-lesson', function() {
    var isAdd = true;
    var order_chapter = $(this).attr('data-order-chapter');
    var id_chapter = parseInt($(this).parent().parent().parent().attr('data-chapter-id'));
    alert(id_chapter);
    
    var lesson_title = $('form input[data-order-chapter="' + order_chapter + '"]').val();
    
    var list_lesson = $('ul.list-lesson[data-order-chapter="' + order_chapter + '"] li');
    var amount_lesson = list_lesson.length;

    for(var i = 1; i < amount_lesson; i++){
        if(list_lesson.eq(i).children('div').children('div').children('').children('span.lesson-title').text() == lesson_title){
            isAdd = false;
            break;
        }
    }
    
    if(isAdd){
        if(id_chapter > 0){
            var chapter = new Chapter(-1, '', '', []);
            chapter.chapter_id = id_chapter;
            course_add.list_chapter.push(chapter);
        }
        
        var lesson = new Lesson();
        lesson.lesson_title = lesson_title;
        lesson.lesson_order = data_order_new_lesson;
        lesson.lesson_desc = 'Empty..............';
        lesson.path_video = '';

        $.each(course_add.list_chapter, function( index, chapter ) {
            if(chapter.chapter_id == id_chapter){
                lesson.lesson_id = chapter.list_lesson.length;
                chapter.list_lesson.push(lesson);
                console.log(course_add);
            }
        });
        
        
        $('div.notify_lesson[data-order-chapter="' + order_chapter + '"]').children('div').remove();
        
        var data_order_new_lesson = parseInt($('ul.list-lesson[data-order-chapter="' + order_chapter + '"]>li').length);
        var data_order_new_lesson = data_order_new_lesson;

        $('ul.list-lesson[data-order-chapter="' + order_chapter + '"]').append('<li  class="ms-list-item" data-order-lesson="' + data_order_new_lesson + '" data-id = "' + lesson.lesson_id + '">' +
                                                                                    '<div class="lesson-item">' +
                                                                                        '<span class="delete-lesson lesson-mark far fa-times-circle text-danger">' +
                                                                                        '</span>' +
                                                                                        '<div class="lesson-info">' +
                                                                                            '<a href="" >Lesson <span>' + data_order_new_lesson + '</span>: <span class="lesson-title">' + lesson_title + '</span></a>' +
                                                                                            '<div class="lesson-duration">' +
                                                                                                '<span class="far fa-play-circle"></span> 8:00' +
                                                                                            '</div>' +
                                                                                        '</div>' +
                                                                                    '</div>' +
                                                                                '</li>');
        $('form input[data-order-chapter="' + order_chapter + '"]').val('');
        
    }else{
        $('div.notify_lesson[data-order-chapter="' + order_chapter + '"]').append('<div class="alert alert-danger alert-outline" role="alert">'+
                                                                                        '<strong>Error!</strong> This lesson already exists!'+
                                                                                    '</div>');
    }
    
    
    
    return false;
});

//Choose Lesson
$(document).on("click", 'ul.list-lesson li a', function() {
    var lesson_title = $(this).children('span.lesson-title').text();
    $('ul.list-lesson li').removeClass('is-choose');
    $(this).parent().parent().parent().addClass('is-choose');
    current_lesson_id = $(this).parent().parent().parent().attr('data-id');
    current_chapter_id = parseInt($(this).parent().parent().parent().parent().parent().attr('data-chapter-id'));
    var flag = true;
    
//    alert(lesson_id + ' - ' + chapter_id);
//    console.log(course_origin);
    
    $.each(course_origin.list_chapter, function( index, chapter ) {
        if(chapter.chapter_id == current_chapter_id){
            $.each(chapter.list_lesson, function( index, lesson ) {
                if(lesson.lesson_id == current_lesson_id){
                    $('#thumb-video-lesson video').attr('src', lesson.lesson_video);
                    $('#lesson-desc').html(lesson.lesson_detail);
                    $('h1#lesson-title').text(lesson.lesson_title);
//                    alert(lesson.lesson_title);
                    flag = false;
                }
            });
        }
    });
    
    if(flag){
        $('#up-video').css('display', 'block');
        $('#thumb-video-lesson video').css('display', 'none');
        
        $('div#lesson-desc').css('display', 'none');
        $('#edit-content-lesson').css('display', 'block');
        tinymce.get("desc-detail-lesson").setContent('Empty...........');
        
        $('h1#lesson-title').text(lesson_title);
        
        $('form#edit-lesson-title input').attr('placeholder', lesson_title);
        $('button#add-desc').css('display', 'block');
       
    }else{
        $('#up-video').css('display', 'none');
        $('#thumb-video-lesson video').css('display', 'block');
        
        $('div#lesson-desc').css('display', 'block');
        $('#edit-content-lesson').css('display', 'none');
        
    }
  
    return false;
});


//Add Desc to lesson
$('#add-desc').click(function(){
    if(current_lesson_id != -1 && current_chapter_id != -1){
        alert(current_lesson_id + ' - ' + current_chapter_id);
        $.each(course_add.list_chapter, function( index, chapter ) {
            if(chapter.chapter_id == current_chapter_id){
                $.each(chapter.list_lesson, function( index, lesson ) {
                    if(lesson.lesson_id == current_lesson_id){
                        lesson.lesson_desc = tinymce.get("desc-detail-lesson").getContent();
                        lesson.path_video = path_lesson_video;
                    }
                });
            }
        });
        
        lesson_desc = '';
        path_lesson_video = '';
        
        var chapter = current_chapter_id + 1;
        var lesson = current_lesson_id + 1;
        
//        var path_lesson = 'ul.list-lecture[data-order-chapter="' + chapter + '"] li[data-order-lesson = "' + lesson + '"]';  
//        $(path_lesson).addClass('is-full-info');
        
    }else{
        toastr.options =
        {
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
        }
        toastr.remove();
        toastr.options.positionClass = "toast-top-right";
        toastr.error('You have to choose lesson', 'Error!');
    }    
})

//Upload video to lesson
$('input#upload-video').change(function(event){
    var name_video = event.target.files[0].name;
//    alert(course_origin.course_title);
    
    var course_title_format = change_alias(course_origin.course_title).split(' ').join('_');
    course_title_format.split(' ').join('_');
    var path_video = 'public/img/course/' + course_title_format + '/videos/' + name_video;
    
//    alert(path_vieo);
    path_lesson_video = path_video;
    alert(path_lesson_video);
    
    $('#thumb-video-lesson video source').attr('src', path_video);
//    // $('#test').attr('src', path_video);
    $('#thumb-video-lesson video').css('display', 'block');
//    // alert(chapter_title_format)
    $('#up-video').css('display', 'none');
    
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

//Save course
$('button#save-course').click(function(){
    
    
    
    var data = {course_add: JSON.stringify(course_add)};
    $.ajax({
        url: '?mod=course&controller=detail&action=addLesson',
        method: "POST",
        data: data, // Dữ liệu được truyền lên server
        dataType: 'text',
        success: function (data) {
            alert(data);
        },
        error: function (xhr, ajaxOptions, throwError) {
            alert(xhr.Status);
            alert(throwError);
        }
    });
})

//Open box edit lesson title
$('h1#lesson-title').click(function(){
    $(this).css('display', 'none');
    $('form#edit-lesson-title').css('display', 'block');
    $('form#edit-lesson-title input').focus();
})

//Edit lesson title
$('form#edit-lesson-title').submit(function(){
    $(this).css('display', 'none');
    $('h1#lesson-title').text($('form#edit-lesson-title input').val());
    $('h1#lesson-title').css('display', 'block');
    $('button#add-desc').css('display', 'block');
    return false;
})

//Open box lesson detail
$('div#lesson-desc').click(function(){
    $(this).css('display', 'none');
    $('#edit-content-lesson').css('display', 'block');
    tinymce.get("desc-detail-lesson").setContent($(this).html());
    $('button#add-desc').css('display', 'block');
})

