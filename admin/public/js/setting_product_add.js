$('label.checkbox-wrap input').change(function(){
//    $('label.checkbox-wrap i').addClass('hide');
    $('label.checkbox-wrap i').removeClass('show');
    $(this).parent().children('i.my-checkbox-check').addClass('show');
})

