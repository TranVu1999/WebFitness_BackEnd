// ================================= Add Course ================================
class Lesson{   
    constructor(lesson_title, order, desc, path_video) {
       this.lesson_title = lesson_title;
       this.order = order;
       this.desc = desc;
       this.path_video = path_video;
    }
}

class Chapter{
    constructor(chapter_title, list_lesson) {
       this.chapter_title = chapter_title;
       this.list_lesson = list_lesson;
    }
}
class Course{
    constructor(course_title, list_chapter, course_desc, course_detail, course_avatar) {
       this.course_title = course_title;
       this.list_chapter = list_chapter;
       this.course_avatar = course_avatar;
       this.course_desc = course_desc;
       this.course_detail = course_detail;
    }
}

var course = new Course('', [], '', '', '');
var curent_lesson = -1;
var curent_chapter = -1;
var path_lesson_video = '';
var lesson_desc = '';

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
            var chapter = new Chapter('', []);
            chapter.chapter_title = chapter_title;
            
            course.course_title = course_title;
            course.list_chapter.push(chapter);
            
//            var test = course.list_chapter.length;
//            alert(test);
           
        }else{
            $('#notify_chapter').append('<div class="alert alert-danger alert-outline" role="alert">'+
                    '<strong>Error!</strong> This chapter chapter already exists!'+
                  '</div>');
        }
    }
    
    
    $('form#add-chapter input').val('');
    return false;
});

//Add lesson 
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
                                    '<a href="" class="lecture-title">Bài <span>' + amount_lesson + '</span>: ' + lesson_title + '</a>'+
                                    '<div class="lecture-duration">'+
                                        '<span class="far fa-play-circle"></span> 8:00'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</li>';

    $('ul.list-lecture[data-order-chapter= "' + order_chapter +'"]').append(lecture_str);
    $('form.add-lesson input').val('');
    
    var lesson = new Lesson('', 0, '', '');
    lesson.lesson_title = lesson_title;
    lesson.order = amount_lesson - 1;
    
    course.list_chapter[order_chapter - 1].list_lesson.push(lesson);
    var length_lesson = course.list_chapter[order_chapter - 1].list_lesson.length;
    var length_chapter = course.list_chapter.length;
//    alert("Lesson: " + length_lesson + " - Chapter: " + length_chapter);
    return false;
});

//Choose Lesson
$(document).on("click", 'ul.list-lecture li a.lecture-title', function() {
//    alert('ok');
    var pos_lesson = parseInt($(this).children('span').text()) - 1;
    
    $('ul.list-lecture li').removeClass('is-choose');
    $(this).parent().parent().parent().addClass('is-choose');
    
    var pos_chapter = parseInt($(this).parent().parent().parent().parent().attr('data-order-chapter')) - 1;
    curent_lesson = pos_lesson;
    curent_chapter = pos_chapter;
    
    if(course.list_chapter[curent_chapter].list_lesson[curent_lesson].path_video == ''){
        $('#source-video-mp4').attr('src', '');
        // $('#test').attr('src', path_video);
        $('#thumb-video').css('display', 'none');
        // alert(chapter_title_format)
        $('#up-video').css('display', 'block');
        
        tinymce.get("desc-detail-lesson").setContent("");
    }else{
        $('#source-video-mp4').attr('src', course.list_chapter[curent_chapter].list_lesson[curent_lesson].path_video);
        // $('#test').attr('src', path_video);
        $('#thumb-video').css('display', 'block');
        // alert(chapter_title_format)
        $('#up-video').css('display', 'none');
        tinymce.get("desc-detail-lesson").setContent(course.list_chapter[curent_chapter].list_lesson[curent_lesson].desc);
    }
    
    return false;
});


//Add Desc to lesson
$('#add-desc').click(function(){
    if(curent_lesson != -1 && curent_chapter != -1){
        lesson_desc = tinymce.get("desc-detail-lesson").getContent(); 
        course.list_chapter[curent_chapter].list_lesson[curent_lesson].desc = lesson_desc;
        course.list_chapter[curent_chapter].list_lesson[curent_lesson].path_video = path_lesson_video;
        lesson_desc = '';
        path_lesson_video = '';
        
        var chapter = curent_chapter + 1;
        var lesson = curent_lesson + 1;
        var path_lesson = 'ul.list-lecture[data-order-chapter="' + chapter + '"] li[data-order-lesson = "' + lesson + '"]';
        $(path_lesson).addClass('is-full-info');

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


$(document).on("click", '.part-info', function() {
    $(this).parent().children('ul.list-lecture').slideToggle();
    $(this).toggleClass('active');
});

$('form#course-title input').change(function(){
    $('#notify_course_title').children().remove();
})

$(document).on("click", 'span.delete-lesson', function() {
    var pos_chapter = $(this).attr('data-order-chapter');
    var pos_lesson = $(this).attr('data-order-lesson');
    $('ul.list-lecture[data-order-chapter="' + pos_chapter +'"] li[data-order-lesson= "' + pos_lesson +'"]').remove();
    
    course.list_chapter[pos_chapter - 1].list_lesson.splice(pos_lesson - 1, 1);
    
    var lst_lesson = $('ul.list-lecture[data-order-chapter="' + pos_chapter +'"] li');
    var amount_lesson = lst_lesson.length - 1;

    for(var i = 0; i < amount_lesson; i++){
        lst_lesson.eq(i).attr('data-order-lesson', i);
        lst_lesson.eq(i).children('.lecture-item').children('.lecture-info').children('a.lecture-title').children('span').text(i);
        // lst_lesson.eq(i).children('.lecture-item').children('.delete-lesson').text(i);
        lst_lesson.eq(i).children('.lecture-item').children('.delete-lesson').attr('data-order-lesson', i);
        course.list_chapter[pos_chapter - 1].list_lesson[i].order = i;
    }
    
    amount_lesson--;
    $('#list-lesson .table-of-content li[data-order-chapter= "' + pos_chapter +'"] span.part-duration').text(amount_lesson + " bài");
});


//Upload video to lesson
$('input#upload-video').change(function(event){
    var name_video = event.target.files[0].name;
    var course_title = $('input#course-title').val();

    if(course_title == ""){
        $('#notify_course_title').append('<div class="alert alert-danger alert-outline" role="alert">'+
                '<strong>Error!</strong> You have to enter course tilte'+
              '</div>');
    }else{
        var course_title_format = change_alias(course_title).split(' ').join('_');
        course_title_format.split(' ').join('_');
        var path_video = 'public/img/course/' + course_title_format + '/videos/' + name_video;
//        alert(path_video);
        
        path_lesson_video = path_video;
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

//Show decs course
$('button.btn-course').click(function(){
    $('#modal-course').css('display', 'block');
})

//Close modal course
$('.btn-close-modal').click(function(){
    $('#modal-course').css('display', 'none');
})

//Change Course Avatar
$('input#upload-avatar').change(function(event){
    var name_avatar = event.target.files[0].name;
    var course_title = $('input#course-title').val();
    if(course_title == ""){
        $('div#notify-course').append('<div class="alert alert-danger alert-outline" role="alert">'+
                                        '<strong>Erro!</strong> You have to enter title of course'+
                                      '</div>');
    }else{
        var course_avatar_format = change_alias(course_title).split(' ').join('_');
        course_avatar_format.split(' ').join('_');
        var path_avatar = 'public/img/course/' + course_avatar_format + '/' + name_avatar;
        
        course.course_avatar = path_avatar;
        $('#course-ava-upload').attr('src', path_avatar);
        
    }
})

//Save Course
$('button#save-course').click(function(){
    course.course_desc = $('textarea#course_desc').val();
//    alert(course.course_desc);
    course.course_detail = tinymce.get("course-detail").getContent();
    course.course_title = $('input#course-title').val();
    var is_allow_add = true;
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
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
    
    if(course.course_avatar == ''){
        is_allow_add = false;
        $('div#notify-course').append('<div class="alert alert-danger alert-outline" role="alert">'+
                                        '<strong>Erro!</strong> You have to enter avatar of course'+
                                      '</div>');
    }else if(course.course_desc == ''){
        is_allow_add = false;
        $('div#notify-course').append('<div class="alert alert-danger alert-outline" role="alert">'+
                                        '<strong>Erro!</strong> You have to enter description of course'+
                                      '</div>');
    }else if(course.course_detail == ''){
        is_allow_add = false;
        $('div#notify-course').append('<div class="alert alert-danger alert-outline" role="alert">'+
                                        '<strong>Erro!</strong> You have to enter detail of course'+
                                      '</div>');
    }else{
        var amount_chapter = course.list_chapter.length;
        for(var i = 0; i < amount_chapter; i++){
            var amount_lesson = course.list_chapter[i].list_lesson.length;
            for(var j = 0; j < amount_lesson; j++){
                if(course.list_chapter[i].list_lesson[j].desc == '' || course.list_chapter[i].list_lesson[j].path_video == ''){
                    is_allow_add = false;
                    break;
                }
            }
            if(!is_allow_add){
                break;
            }
        }
    }
    
    if(is_allow_add){
        $('#modal-course').css('display', 'none');
        var data = {course: JSON.stringify(course)};
        $.ajax({
            url: '?mod=course&controller=addCourse&action=addCourse',
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
//        alert('submited');
    }else{
        toastr.remove();
        toastr.options.positionClass = "toast-top-right";
        toastr.error('You must enter the full information of the lesson', 'Error!');
    }
    
    return false;
})
 

