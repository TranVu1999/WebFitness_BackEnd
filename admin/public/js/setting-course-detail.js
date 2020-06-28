var course_add = new Course($('input#course_id').val() ,'', [], '', '', '');
var course_edit = new Course($('input#course_id').val() ,'', [], '', '', '');
var course_remove = new Course($('input#course_id').val() ,'', [], '', '', '');

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
        var chapter_str = '<li class="ms-list-item ui-sortable-handle" data-order-chapter="' + amountChapter + '">' +
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
        chapter.chapter_id = amountChapter;
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
        $('div.notify_lesson[data-order-chapter="' + order_chapter + '"]').children('div').remove();
        
        var data_order_new_lesson = parseInt($('ul.list-lesson[data-order-chapter="' + order_chapter + '"]>li').length);
        var data_order_new_lesson = data_order_new_lesson;

        $('ul.list-lesson[data-order-chapter="' + order_chapter + '"]').append('<li  class="ms-list-item" data-order-lesson="' + data_order_new_lesson + '">' +
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
        var lesson = new Lesson();
        lesson.lesson_title = lesson_title;
        lesson.lesson_order = data_order_new_lesson;
        lesson.lesson_desc = '';
        lesson.path_video = '';
        
//        for(var i = 0; i < data_order_new_lesson; i++){
//            if(course_add.list_chapter[i].chapter_id == order_chapter){
//                course_add.list_chapter[i].list_lesson.push(chapter);
//                alert(course_add.list_chapter[i].list_lesson.length);
//            }
//        }
        
//        course_add.list_chapter[0].list_lesson.push(lesson);
//        alert(course_add.list_chapter[0].chapter_id);
        
        $.each(course_add.list_chapter, function( index, chapter ) {
            if(chapter.chapter_id == order_chapter){
                chapter.list_lesson.push(lesson);
                alert(chapter.list_lesson.length);
            }
        });
    }else{
        $('div.notify_lesson[data-order-chapter="' + order_chapter + '"]').append('<div class="alert alert-danger alert-outline" role="alert">'+
                                                                                        '<strong>Error!</strong> This lesson already exists!'+
                                                                                    '</div>');
    }
    
    
    
    return false;
});

//Choose Lesson
$(document).on("click", 'ul.list-lesson li a', function() {
   
    $('ul.list-lesson li').removeClass('is-choose');
    $(this).parent().parent().parent().addClass('is-choose');
    var lesson_id = $(this).parent().parent().parent().attr('data-id');
//    alert(lesson_id);
    
    
    var data = {lesson_id: lesson_id};
    $.ajax({
        url: '?mod=course&controller=detail&action=getInfoLesson',
        method: "POST",
        data: data, // Dữ liệu được truyền lên server
        dataType: 'json',
        success: function (data) {
            $('#thumb-video-lesson video').attr('src', data.LessonVideo);
            $('#lesson-desc').html(data.LessonDetail);
        },
        error: function (xhr, ajaxOptions, throwError) {
            alert(xhr.Status);
            alert(throwError);
        }
    });
   
    return false;
});




