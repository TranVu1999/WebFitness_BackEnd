$('#list-chapter ul.table-of-content>li .part-info').click(function(){
    // alert('ok');
    if($(this).parent().children('ul.list-lesson').css('display') == "block"){
        $(this).parent().children('ul.list-lesson').css('display', 'none');
    }else{
        $(this).parent().children('ul.list-lesson').css('display', 'block');
    }    
})

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
        
        var data_order_new_lesson = parseInt($('ul.list-lesson[data-order-chapter="' + order_chapter + '"] li:last-child').attr('data-order-lesson')) + 1;
        var data_order_new_lesson = data_order_new_lesson + 1;

        $('ul.list-lesson[data-order-chapter="' + order_chapter + '"]').append('<li  class="ms-list-item" data-order-lesson="' + data_order_new_lesson + '">' +
                                                                                    '<div class="lesson-item">' +
                                                                                        '<span class="delete-lesson lesson-mark far fa-times-circle text-danger">' +
                                                                                        '</span>' +
                                                                                        '<div class="lesson-info">' +
                                                                                            '<a href="" >Bài <span>' + data_order_new_lesson + '</span>: <span class="lesson-title">' + lesson_title + '</span></a>' +
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


