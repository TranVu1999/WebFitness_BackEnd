var pt = new Pt('1', '', '', '','','','','', [], [], []);
var current_skill_id = -1;
var amount_skill = 0;

//Add new input skill 
$(document).on("blur", 'li.ms-skill:last-child input.input-skill', function() {
    var skill_tilte = $(this).val();
    if(skill_tilte != ''){
        amount_skill++;
        
        $('ul.ms-skill-list').append('<li class="ms-skill">' +
                                    '<input type="text" class="input-skill">'+
                                    '<span class="text-danger remove-skill" data-skill-id="' + amount_skill + '"><i class="far fa-times-circle"></i></span>' +
                                '</li>');
        $(this).parent().children('span.remove-skill').css('display', 'block');
        
        amount_skill--;
        
        var pt_skill = new PtSkill(amount_skill, skill_tilte, 10);
        pt.pt_skill.push(pt_skill);
        
//        Add input value skill
        $('#skill-box').append('<div class="process-skill" data-skill-id="' + amount_skill + '"><span class="progress-label">' + skill_tilte + '</span>'+
                                    '<span class="progress-status">10%</span>'+
                                    '<div class="progress progress-tiny">'+
                                        '<div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>'+
                                    '</div></div>');
        amount_skill++;
    }  
})

//Remove input skill 
$(document).on("click", 'span.remove-skill', function() {
    var amount_input_skill = $('li.ms-skill').length;
    
    if(amount_input_skill > 1){
        $(this).parent().remove();
        var skill_id = $(this).attr('data-skill-id');
//            alert(skill_id);
        $('div[data-skill-id="' + skill_id + '"]').remove();
        
        for(var i = 0; i < pt.pt_skill.length; i++){
            if(pt.pt_skill[i].pt_skill_id == skill_id){
                pt.pt_skill.splice(i, 1); 
                break;
            }
        }
    }
//    console.log(pt);
})

//Choose process skill
$(document).on("click", 'div.process-skill', function() {
   current_skill_id = $(this).attr('data-skill-id');
//   alert(current_skill_id);
   
})

//Add val skill
$('button.add-val-skill').click(function(){
//    $('span.irs-single').text()
    var skill_val = $('span.irs-single').text();
    $('div.process-skill[data-skill-id="' + current_skill_id + '"] span.progress-status').text(skill_val + '%');
    $('div.process-skill[data-skill-id="' + current_skill_id + '"] div.progress-bar').css('width', skill_val + '%');
    
    for(var i = 0; i < pt.pt_skill.length; i++){
        if(pt.pt_skill[i].pt_skill_id == current_skill_id){
            pt.pt_skill[i].pt_skill_val = skill_val;
            break;
        }
    }
})

//Choose value skill
$(".my-range").ionRangeSlider({
    skin: 'modern'
});


var current_timeline = -1;
//Add new pt-timeline
$('form#add-timeline').submit(function(){
    var timeline_title = $('input#pt-timeline-title').val();
    var timeline_time= $('input#pt-timeline-time').val();
    var timeline_desc = $('textarea#pt-timeline-desc').val();
    
    var order_timeline = $('ul#pt-time-line li').length;
    
    $('ul#pt-time-line').append('<li data-order = "' + order_timeline + '">' +
                                    '<div class="ms-btn-icon btn-pill icon btn-success">' +
                                        '<i class="far fa-times-circle text-danger remove-icon"></i>' +
                                        '<i class="flaticon-tick-inside-circle timeline-icon"></i>' +
                                    '</div>' +
                                    '<h6 class="timeline-title">' + timeline_title + '</h6>' +
                                    '<span> <i class="material-icons">event</i> <span class="timeline-time">' + timeline_time + '</span></span>' +
                                    '<p class="fs-14 timeline-desc">' + timeline_desc + '</p>' +
                                '</li>');
    
//    Clear input
    $('input#pt-timeline-title').val('');
    $('input#pt-timeline-time').val('');
    $('textarea#pt-timeline-desc').val('');
    return false;
});

//Choose timeline
$(document).on("click", 'ul#pt-time-line li h6', function() {
    current_timeline = $(this).parent().attr('data-order');
 
//    Assigning value to form
    var timeline_title = $(this).text();
    var timeline_time= $(this).parent().children('span').children('span.timeline-time').text();
    var timeline_desc = $(this).parent().children('p.timeline-desc').text();
    
//    alert(timeline_title);
    $('input#pt-timeline-title').val(timeline_title);
    $('input#pt-timeline-time').val(timeline_time);
    $('textarea#pt-timeline-desc').val(timeline_desc);
    
    $('button#save-time-line').css('display', 'inline-block');
    $('button#abort-time-line').css('display', 'inline-block');
    $('button[type="submit"]').css('display', 'none');
//    alert('choose timeline');
})

//Save update timeline
$('button#save-time-line').click(function(){
    //    Assigning value to form
    var timeline_title = $('input#pt-timeline-title').val();
    var timeline_time= $('input#pt-timeline-time').val();
    var timeline_desc = $('textarea#pt-timeline-desc').val();
    
    //    Update timeline
    $('ul#pt-time-line li[data-order="' + current_timeline + '"] h6.timeline-title').text(timeline_title);
    $('ul#pt-time-line li[data-order="' + current_timeline + '"] span.timeline-time').text(timeline_time);
    $('ul#pt-time-line li[data-order="' + current_timeline + '"] p.timeline-desc').text(timeline_desc);
    current_timeline = -1;
})

//Abort update timeline
$('button#abort-time-line').click(function(){
    current_timeline = -1;
    //    Clear input
    $('input#pt-timeline-title').val('');
    $('input#pt-timeline-time').val('');
    $('textarea#pt-timeline-desc').val('');
    
    $('button#save-time-line').css('display', 'none');
    $('button#abort-time-line').css('display', 'none');
    $('button[type="submit"]').css('display', 'inline-block');
})

//Remove timeline
$(document).on("click", 'ul#pt-time-line li div.ms-btn-icon i', function() {
    current_timeline = $(this).parent().parent().attr('data-order');
    
    $('input#pt-timeline-title').val('');
    $('input#pt-timeline-time').val('');
    $('textarea#pt-timeline-desc').val('');
    $('ul#pt-time-line li[data-order="' + current_timeline + '"]').remove();
});


//Upload Avatar Image
$('input#upload-avatar').change(function(event){
    var name_img = event.target.files[0].name;
    var path_img = 'public/img/pt/' + name_img;
    $('img#pt-avatar').attr('src', path_img);
})

//Add pt's name
$('input#pt-name').blur(function(){
    $('input#pt-full-name').val($(this).val());
    $('#notify-pt-name').html('');
})

$('input#pt-sex').blur(function(){
    $('#notify-pt-sex').html('');
})

$('input#pt-birthday').blur(function(){
    $('#notify-pt-birthday').html('');
})

$('input#pt-experience').blur(function(){
    $('#notify-pt-experience').html('');
})

$('input#pt-phone').blur(function(){
    $('#notify-pt-phone').html('');
})

//Add PT
$('button#add-pt').click(function(){
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
    
    pt.pt_name = $('input#pt-name').val();
    pt.pt_avatar = $('img#pt-avatar').attr('src');
    pt.pt_birthday = $('input#pt-birthday').val();
    pt.pt_experience = $('input#pt-experience').val();
    pt.pt_sex = $('input#pt-sex').val();
    pt.pt_about = $('textarea#pt-about').val();
    pt.pt_alias = change_alias(pt.pt_name).split(' ').join('-');
    
    var pt_phone = $('input#pt-phone').val();
    var pt_email = $('input#pt-email').val();
    var pt_fb_link = $('input#pt-fb-link').val();
       
//    Validation form
    if(pt.pt_name === ''){
        is_add = false;
        $('#notify-pt-name').html('<div class="alert alert-danger alert-outline" role="alert">'+
                                            "<strong>Error!</strong> You have to enter personal trainer's name!"+
                                        '</div>');
    }
    if(pt.pt_birthday === ''){
        is_add = false;
        $('#notify-pt-birthday').html('<div class="alert alert-danger alert-outline" role="alert">'+
                                            "<strong>Error!</strong> You have to enter personal trainer's birthday!"+
                                        '</div>');
    }
    if(pt.pt_sex === ''){
        is_add = false;
        $('#notify-pt-sex').html('<div class="alert alert-danger alert-outline" role="alert">'+
                                            "<strong>Error!</strong> You have to enter personal trainer's sex!"+
                                        '</div>');
    }
    if(pt.pt_experience === ''){
        is_add = false;
        $('#notify-pt-experience').html('<div class="alert alert-danger alert-outline" role="alert">'+
                                            "<strong>Error!</strong> You have to enter personal trainer's experience!"+
                                        '</div>');
    }
    if(pt_phone === ''){
        is_add = false;
        $('#notify-pt-phone').html('<div class="alert alert-danger alert-outline" role="alert">'+
                                            "<strong>Error!</strong> You have to enter personal trainer's phone!"+
                                        '</div>');
    }else{
        var pt_contact = new PtContact('Phone', pt_phone);
        pt.pt_contact.push(pt_contact);
    }
    
    if(pt_email !== ''){
        var pt_contact = new PtContact('Email', pt_email);
        pt.pt_contact.push(pt_contact);
    }
    
    if(pt_fb_link !== ''){
        var pt_contact = new PtContact('LinkFacebook', pt_fb_link);
        pt.pt_contact.push(pt_contact);
    }
    
    var elm_timeline = $('ul#pt-time-line li');
    var amount_timeline = elm_timeline.length;
    
    for(var i = 0; i < amount_timeline; i++){
        var timeline_title = elm_timeline.eq(i).children('h6.timeline-title').text();
        var timeline_time = elm_timeline.eq(i).children('span').children('span.timeline-time').text();
        var timeline_desc = elm_timeline.eq(i).children('p.timeline-desc').text();
        
        var pt_timeline = new PtTimeline('', timeline_title, timeline_desc, timeline_time);
        
        pt.pt_timeline.push(pt_timeline);
    }
    
    if(is_add){
        var data = {pt: JSON.stringify(pt)};
        $.ajax({
            url: '?mod=pt&controller=add&action=addPt',
            method: "POST",
            data: data, // Dữ liệu được truyền lên server
            dataType: 'text',
            success: function (data) {
                if(data == true){
                    toastr.remove();
                    toastr.options.positionClass = "toast-top-left";
                    toastr.error("This personal trainer is added.", 'Success!');
                }
            },
            // Phương thức này trả về lỗi xảy ra với ajax
            error: function (xhr, ajaxOptions, throwError) {
                // Lỗi 404: đường dẫn ko tìm được
                alert(xhr.Status);
                alert(throwError);
            }
        });  
    }else{
        toastr.remove();
        toastr.options.positionClass = "toast-top-right";
        toastr.error("You must enter full information of personal trainer", 'Error!');
    }
})

